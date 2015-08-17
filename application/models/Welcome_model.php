<?php

class Welcome_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "test";
        $this->primary_key = 'id';
    }

}
