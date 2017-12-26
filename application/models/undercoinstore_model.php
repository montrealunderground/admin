<?php
class UnderCoinStore_model extends CI_Model
{
    /**
     * Responsable for auto load the database
     * @return void
     */
    public $table_name = 'undercoinstore';
    public $selects = [
                        'id, name, price, link, imagename'
                      , 'id, name_fr, price, link, imagename'
                      , 'id, name_cn, price, link, imagename'
                      , 'id, name, name_fr, name_cn, price, link, imagename'
                      ];
    public $lang_f = ['name'];

    public function __construct()
    {
        $this->load->database();
    }

    public function getUCItems($lang) {
      $this->db->select($this->selects[$lang]);
      $this->db->from($this->table_name);

      $this->db->group_by('id');
      $this->db->order_by('id', "Asc");

      $query = $this->db->get();
      $ucitems = $query->result_array();

      for ($i=0; $i < count($ucitems); $i++) {
        $suffix = "";
        if ($lang == 1) {
            $suffix = "_fr";
        } else if ($lang == 2) {
            $suffix = "_cn";
        }
        if ($lang > 0) {
            for ($j=0; $j < count($this->lang_f); $j++) {
                $ucitems[$i][$this->lang_f[$j]] = $ucitems[$i][$this->lang_f[$j].$suffix];
            }
        }
      }

      return $ucitems;
    }

    public function getUCItemById($lang, $ucid) {
      if (strcmp($ucid, "new") != 0) {
        $this->db->select($this->selects[$lang]);
        $this->db->where('id', $ucid);  
        $this->db->from($this->table_name);

        $this->db->group_by('id');
        $this->db->order_by('id', "Asc");

        $query = $this->db->get();
        $res = $query->result_array();
        if (count($res) > 0){
          $ucitem = $res[0];
          $suffix = "";
          if ($lang == 1) {
              $suffix = "_fr";
          } else if ($lang == 2) {
              $suffix = "_cn";
          }
          if ($lang > 0) {
              for ($j=0; $j < count($this->lang_f); $j++) {
                  $ucitem[$this->lang_f[$j]] = $ucitem[$this->lang_f[$j].$suffix];
              }
          }
          return $ucitem;
        } else {
          return "";
        }
      } else {
        return "";
      }
      return $ucitems;
    }

    public function updateUCItem($lang, $data) {
        $olddata = $this->getUCItemById(3, $data['id']);
        if ($lang == 0) {
            for ($j=0; $j < count($this->lang_f); $j++) {
                $data[$this->lang_f[$j]."_fr"] = $olddata[$this->lang_f[$j]."_fr"];
                $data[$this->lang_f[$j]."_cn"] = $olddata[$this->lang_f[$j]."_cn"];
            }
        } else if ($lang == 1) {
            for ($j=0; $j < count($this->lang_f); $j++) {
                $data[$this->lang_f[$j]."_fr"] = $data[$this->lang_f[$j]];
                $data[$this->lang_f[$j]] = $olddata[$this->lang_f[$j]];                
                $data[$this->lang_f[$j]."_cn"] = $olddata[$this->lang_f[$j]."_cn"];
            }
        } else if ($lang == 2) {
            for ($j=0; $j < count($this->lang_f); $j++) {
                $data[$this->lang_f[$j]."_cn"] = $data[$this->lang_f[$j]];
                $data[$this->lang_f[$j]] = $olddata[$this->lang_f[$j]];
                $data[$this->lang_f[$j]."_fr"] = $olddata[$this->lang_f[$j]."_fr"];
            }
        }

        $this->db->where('id', $data['id']);
        $this->db->update($this->table_name, $data);
    }

    public function addUCItem($lang, $data) {
        if ($lang == 0) {
            for ($j=0; $j < count($this->lang_f); $j++) {
                $data[$this->lang_f[$j]."_fr"] = "";
                $data[$this->lang_f[$j]."_cn"] = "";
            }
        } else if ($lang == 1) {
            for ($j=0; $j < count($this->lang_f); $j++) {
                $data[$this->lang_f[$j]] = "";
                $data[$this->lang_f[$j]."_fr"] = $data[$this->lang_f[$j]];
                $data[$this->lang_f[$j]."_cn"] = "";
            }
        } else if ($lang == 2) {
            for ($j=0; $j < count($this->lang_f); $j++) {
                $data[$this->lang_f[$j]] = "";
                $data[$this->lang_f[$j]."_fr"] = "";
                $data[$this->lang_f[$j]."_cn"] = $data[$this->lang_f[$j]];
            }
        }
        return $this->db->insert( $this->table_name, $data );
    }

    public function deleteUCItem($lang, $id) {
        $this->db->select('imagename');
        $this->db->where('id', $id);
        $query = $this->db->get($this->table_name);
        $res = $query->result_array();
        if (count($res) > 0)
            $filename = $res[0]['imagename'];
        else
            $filename = null;

        $this->db->where('id', $id);
        $this->db->delete($this->table_name);
        return $filename;
    }
}
?>