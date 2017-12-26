<?php
class Globals_Model extends CI_Model
{
    public $table_name = 'globals';
    /**
     * Responsable for auto load the database
     * @return void
     */
    public function __construct()
    {
        $this->load->database();
    }

    public function getValueForKey($keyname) {
        $this->db->select('*');
        $this->db->where('keyname', $keyname);  
        $this->db->from($this->table_name);
        $res = $this->db->get()->result_array();
        if(count($res) == 0) {
          return null;
        } else {
          return $res[0]['value'];
        }
    }

    public function setValueForKey($keyname, $value) {
      $this->db->select('id');
      $this->db->where('keyname', $keyname);  
      $this->db->from($this->table_name);
      $res = $this->db->get()->result_array();
      if (count($res) == 0) {
        return;
      }
      $id = $res[0]['id'];
      $data['id'] = $id;
      $data['keyname'] = $keyname;
      $data['value'] = $value;
      $this->db->where('id', $id);
      $this->db->update($this->table_name, $data);
    }
}
    