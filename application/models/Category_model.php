<?php
class Category_model extends CI_Model {
    private $table;
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'category';
    }
    public function listCategory() {
        $this->db->select("*");
        $query=$this->db->get($this->table);
        $result = $query->result_array();
        return $result;
    }
    public function listCategoryTree0() {
        $this->db->select("*");
        $query=$this->db->get($this->table);
        //$result = $query->result_array();
        foreach ($query->result_array() as $result) {
            $category['categories'][$result['id']] = $result; 
            $category['parent_cats'][$result['parent']][] = $result['id']; 
        }
        return '<ul class="vmagicmenu-narrow clearfix">'.$this->getCategoriesTree(0, $category).'</ul>';
    }

    function getCategoriesTree($parent, $category,$level=0) {
        $html = '';
        if (isset($category['parent_cats'][$parent])) {
            foreach ($category['parent_cats'][$parent] as $cat_id) {
                $html .= '<li class="level'.$level.''.($level==0 ? ' cat':'').''.(isset($category['parent_cats'][$cat_id]) ? ' hasChild dropdown':'').'">
                            <a'.($level==0 ? ' class="level-top"':'').' href="category/'.$category['categories'][$cat_id]['slug'].'.html">
                                '.($level==0 ? '<img class="img-responsive" alt="'.$category['categories'][$cat_id]['name'].'" src="http://alothemes.com/demo/supermarket/index.php/media/catalog/category//06.png">':'').'
                                <span>'.$category['categories'][$cat_id]['name'].'</span>
                                '.($level==0 ? '<span class="boder-menu"></span>':'').'
                            </a>';
                if (isset($category['parent_cats'][$cat_id])) {
                    $html .= '<ul class="level'.$level.'">'."\n";
                    $html .= $this->getCategories($cat_id, $category,$level+1);
                    $html .= '</ul>'."\n";
                }
                $html .= '</li>'."\n";
            }
        }
        return $html;
    }

    public function getCategory($id) {
        if(is_array($id))
            $this->db->where($id);
        elseif(is_numeric($id)) 
            $this->db->where('id', $id);
        else
            $this->db->where('slug', $id);
        $query = $this->db->get($this->table);
        $result = $query->row_array();
        return $result;
    }
    public function getCategorys($id) {
        if(is_array($id))
            $this->db->where($id);
        elseif(is_numeric($id)) 
            $this->db->where('id', $id);
        else
            $this->db->where('slug', $id);
        $query = $this->db->get($this->table);
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