<?php

namespace App\Database\Migrations;

class AddMember extends \CodeIgniter\Database\Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'description' => [
                'type'           => 'TEXT',
                'null'           => TRUE,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('members');
    }

    public function down()
    {
        $this->forge->dropTable('members');
    }
}
