<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Custom_lib {

    public function __construct()
    {
        require_once(APPPATH.'third_party/r53.php');
    }
}