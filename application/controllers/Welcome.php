<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'text', 'form');
        $this->load->model("Welcome_model");
    }

    public function index() {
        $this->load->view('test');
    }

    public function already_registered_domain() {

//        $ch = curl_init("https://route53.amazonaws.com/date");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HEADER, 1);
//        $aws = curl_exec($ch);
//        echo $aws;



        $baseurl = "https://route53.amazonaws.com/2013-04-01/delegationset";
        $body = '<?xml version="1.0" encoding="UTF-8"?>
    <CreateReusableDelegationSetRequest xmlns="https://route53.amazonaws.com/doc/2013-04-01/">
       <CallerReference>whitelabel DNS</CallerReference>
    </CreateReusableDelegationSetRequest>';

        $ch = curl_init();
        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $baseurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: route53.amazonaws.com', 'X-Amzn-Authorization: AKIAJCE4ZDY4NPCMCZMA'));
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        $rest = curl_exec($ch);

        if ($rest === false) {
// throw new Exception('Curl error: ' . curl_error($crl));
            print_r('Curl error: ' . curl_error($ch));
        }
        curl_close($ch);
        print_r($rest);
        
        
        
        
//        $domain=$this->input->post('old_domain');
//       // include APPPATH.'libraries/r53.php';
//        $this->load->library('custom_lib');
//        $access_key='AKIAJCE4ZDY4NPCMCZMA';
//        $secret_key='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';
//        
//       $r53 = new Route53($access_key, $secret_key);
//        ////
//       $result = $r53->createHostedZone('google.com', 'abclllllldef', 'no cooment here');
//       var_dump($result);
    }

}
