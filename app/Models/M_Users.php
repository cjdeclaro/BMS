<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Users extends Model {
    
    protected $db;
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function get_all() {
        $data       = array();
        $qString    = "SELECT * FROM users";
        $query      = $this->db->query($qString);

        foreach($query->getResult('array') as $row) {
            array_push($data, [
                'id'            => $row['id'],
                'username'      => $row['username'],
                'lastname'      => $row['lastname'],
                'firstname'     => $row['firstname'],
                'middlename'    => $row['middlename'],
                'address'       => $row['address'],
                'email'         => $row['email'],
                'phone'         => $row['phone'],
                'role'          => $row['role'],
                'action'        => '<button class="btn btn-success btn-sm text-white" id="edit-user-btn"><i class="fa fa-edit"></i></button>'
            ]);
        }

        return $data;
    }

    public function add_new($data) {
        $qString    = "INSERT INTO users (username, password, lastname, firstname, middlename, email, phone, role) VALUES ".
                      "(:username:, :password:, :lastname:, :firstname:, :middlename:, :email:, :phone:, :role:)";
        $query      = $this->db->query($qString, [
            'username'      => $data['username'],
            'password'      => $data['password'],
            'lastname'      => $data['lastname'],
            'firstname'     => $data['firstname'],
            'middlename'    => $data['middlename'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'role'          => $data['role']
        ]);
    }

    public function edit_user($data) {
        $qString    = "UPDATE users SET username = :username:, lastname = :lastname:, firstname = :firstname:, middlename = :middlename:, ".
                      "email = :email:, phone = :phone:, role = :role: WHERE id = :id:";
        $query      = $this->db->query($qString, [
            'username'      => $data['username'],
            'lastname'      => $data['lastname'],
            'firstname'     => $data['firstname'],
            'middlename'    => $data['middlename'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'role'          => $data['role'],
            'id'            => $data['id']
        ]);
    }

}