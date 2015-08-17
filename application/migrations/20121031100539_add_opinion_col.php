<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_opinion_col extends CI_Migration {

    public function up() {
        $fields = array(
            'opinion' => array(
                'type' => 'int',
                'constraint' => 11,
                'default'=>0,
                'null' => TRUE
            )
        );
        $this->dbforge->add_column('responses', $fields, 'email');
    }

    public function down() {
        
    }

}
