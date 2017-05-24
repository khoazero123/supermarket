<?php
class User_model extends CI_Model {
    private $table;
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'user';
        $this->load->helper('email');
    }
    public function listUser() {
        $this->db->select("*");
        $query=$this->db->get($this->table);
        $result = $query->result_array();
        return $result;

    }
    public function getUser($id,$password=null) {
        if(valid_email($id))
            $this->db->where('email', $id);
        else
            $this->db->where('id', $id);
        if(isset($password)) $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        $result = $query->row_array();
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
    function insertUser($data = array()) {
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