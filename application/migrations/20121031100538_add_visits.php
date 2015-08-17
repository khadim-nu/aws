<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_visits extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'ip' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE,
            )
        ));
        $this->dbforge->add_field("created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('visits');
    }

    public function down() {
        $this->dbforge->drop_table('visits');
    }

}
