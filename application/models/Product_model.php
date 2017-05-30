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
        if($query->num_rows()>0) {
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
    public function getImages($product_id=null,$type=null) {
        if($product_id) $this->db->where('product_id', $product_id);
        if($type) $this->db->where('type', $type);// 1 image normal, 2 image for slide
        $query = $this->db->get('image');
        $result = $query->result_array();
        return $result;
    }

    public function insertImages($product_id,$images) {
        $insert = array();
        foreach ($images as $img) {
            $insert[] = ['product_id' => $product_id,'url' => $img];
        }
        if($this->db->insert_batch('image', $insert)) return true;
        return $result;
    }
    public function insertProduct($data = array()) {
        if(isset($data['images'])) {
            $images = $data['images'];
            unset($data['images']);
        }
        if($this->db->insert($this->table, $data)) {
            $product_id = $this->db->insert_id();
            if(isset($images)) $this->insertImages($product_id,$images);
            return $product_id;
        }
        return false;
    }

    public function updateImage($data=array(),$id) {
        $this->db->set($data);
        $this->db->where('id', $id);
        if($this->db->update('image')) return true;
        return false;
    }
    public function updateProduct($data=array(),$id) {
        $this->db->set($data);
        $this->db->where('id', $id);
        if($this->db->update($this->table)) return true;
        return false;
    }
    public function deleteImages($id,$product_id=null) {
        if($product_id) $this->db->where("product_id",$product_id);
        elseif(is_array($id)) $this->db->where_in("id",$id);
        else $this->db->where("id",$id);

        if($this->db->delete('image')) return true;
        return false;
    }
}

?>