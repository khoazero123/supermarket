<?php
class Category_model extends CI_Model {
    private $table;
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'category';
    }
    public function listCategory() {
        //$this->db->select("*");
        $this->db->order_by("name asc");
        $query = $this->db->get($this->table);
        $result = $query->result_array(); 
        return $result;
    }

    public function getCategory($id) {
        if(is_array($id))
            $this->db->where($id);
        elseif(is_numeric($id)) 
            $this->db->where('id', $id);
        elseif (strpos($id, ',') !== false) {
            $id = explode(',',$id);
            $this->db->where_in('id', $id);
        } else
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
        else {
            $id = explode(',',$id);
            $this->db->where_in('id', $id);
        }
        $query = $this->db->get($this->table);
        $result = $query->result_array();
        return $result;
    }
    public function updateCategory($data=array(),$id) {
        $this->db->set($data);
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
        return false;
    }
    public function updateTokenReset($data = array()) {
        if(is_array($id)) $this->db->where($id);
        else if(is_numeric($id))
            $this->db->where('id',$id);
        else
            $this->db->where('token',$id);
        
        if($this->db->update($this->table_reset_password)) return true;
        return false;
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
    public function insertCategory($data = array()) {
        if($this->db->insert($this->table, $data)) return true;
        return false;
    }
    public function deleteUser($id) {
        if(is_array($id)) $this->db->where_in("id",$id);
        else $this->db->where("id",$id);
        if($this->db->delete($this->table)) return true;
        return false;
    }
}

?>