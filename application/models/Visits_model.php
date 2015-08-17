<?php

class Visits_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "visits";
        $this->primary_key = 'id';
    }

    public function save_ip() {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        if (!empty($ip)) {
            $this->db->where("ip", $ip);
            $result = $this->db->get($this->table_name);
            $result = $result->result_array();
            if (empty($result)) {
                $insert = array(
                    "ip" => $ip,
                );
                $this->db->insert($this->table_name, $insert);
            }
        }
    }

    public function count_visits() {
        $this->db->select('count(id) as count');
        $result = $this->db->get($this->table_name);
        $result = $result->result_array();
        if (!empty($result)) {
            return $result[0]['count'];
        }
        return 0;
    }

    public function change_check($check) {
        $this->db->where('id', 1);
        return  $this->db->update('status', array("check"=>$check));
    }

    public function get_check() {
        $this->db->select('check');
        $this->db->where('id', 1);
        $result = $this->db->get("status");
        $result = $result->result_array();
        if (!empty($result)) {
            return $result[0]['check'];
        }
        return 0;
    }

}
