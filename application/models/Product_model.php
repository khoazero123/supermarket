<?php
class Product_model extends CI_Model {
    private $table;
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'product';
        $this->load->model('Category_model');
    }
    /**
     * 
     * @param  string $type  : newest | views | buys | rate | category
     * @param  string $param : col=value         asc | desc | category_id
     * @return [type]        [description]
     */
    public function listProduct($query) {
        if(isset($query['type'])) switch ($type) {
            case 'newest':
                $this->db->order_by("updated_at desc");
                break;
            case 'views':
                $this->db->order_by("views desc");
                break;
            case 'buys':
                $this->db->order_by("buys desc");
                break;
            default:
                $this->db->order_by("name asc");
                break;
        }
        if(isset($query['category'])) {
            $this->db->where("FIND_IN_SET(".$query['category'].",category_id) !=", 0);
        }
        if(isset($query['order_by'])) $this->db->order_by($query['order_by']);
        $query = $this->db->get($this->table);
        $result = $query->result_array();
        return $result;
    }

    public function getProduct($id=null) {
        if(is_array($id))
            $this->db->where($id);
        elseif(is_numeric($id)) 
            $this->db->where('id', $id);
        elseif($id)
            $this->db->where('slug', $id);
        $query = $this->db->get($this->table);
        if($query) {
            $result = $query->row_array();
            $id = $result['id'];
            
            $result['categorys'] = $this->Category_model->getCategorys($result['category_id']);
            $result['images'] = $this->getImages($id);
            for ($i=0;$i<count($result['images']);$i++) {
                $result['images'][$i]['thumbnail'] = $result['images'][$i]['url']; // process resize for thumb form origin image 
            }
            return $result;
        }
        return null;
    }
    public function getImages($id=null,$type=1) {
        if($id) $this->db->where('product_id', $id);
        $this->db->where('type', $type);// 1 image normal, 2 image for slide
        $query = $this->db->get('image');
        $result = $query->result_array();
        return $result;
    }
    public function updateUser($data=array(),$id) {
        $this->db->set($data);
        if(valid_email($user_id))
            $this->db->where('email', $id);
        else
            $this->db->where('id', $id);
        if($this->db->update($this->table)) return true;
        return false; 
    }
    public function updateBatchSlug() {
        $this->db->select("*");
        $query=$this->db->get($this->table);
        $result = $query->result_array();
        foreach ($result as $item) {
            $string = strtolower($item['name']);
            $slug = preg_replace('/[^a-zA-Z0-9]/','-',$string);
            $slug = preg_replace('/-+/','-',$slug);
            $update[] = array('id'=>$item['id'],'slug'=>$slug);
        }
        if($this->db->update_batch($this->table,$update,'id')) return true;
        return false; 
    }
    public function insertTokenReset($data = array()) {
        if($this->db->insert($this->table_reset_password, $data)) return $this->db->insert_id();
        return FALSE;
    }
    public function updateTokenReset($data = array()) {
        if(is_array($id)) $this->db->where($id);
        else if(is_numeric($id))
            $this->db->where('id',$id);
        else
            $this->db->where('token',$id);
        
        if($this->db->update($this->table_reset_password)) return true;
        return FALSE;
    }
    public function getTokenReset($id) {
        if(is_array($id)) $this->db->where($id);
        else if(is_numeric($id))
            $this->db->where('id',$id);
        else
            $this->db->where('token',$id);
        $query = $this->db->get($this->table_reset_password);
        $result = $query->row_array();
        return $result;
    }
    public function insertUser($data = array()) {
        if($this->db->insert($this->table, $data)) return TRUE;
        return FALSE;
    }
    public function deleteUser($id) {
        if(is_array($id)) $this->db->where_in("id",$id);
        else $this->db->where("id",$id);
        if($this->db->delete($this->table)) return true;
        return false;
    }
}

?>