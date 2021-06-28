<?php

namespace App\Models;

use CodeIgniter\Model;

class M_LoginAction extends Model {

    protected $db;
    protected $encrypter;
    public function __construct() {
        // Database Connection
        $this->db           = \Config\Database::connect();

        // Encryptter Configuration
        $config             = new \Config\Encryption();
        $config->key        = 'aBigsecret_ofAtleast32Characters';
        $config->driver     = 'OpenSSL';
        $config->digest     = 'SHA512';
        $this->encrypter    = \Config\Services::encrypter($config);
    }

    public function login($inputData) {
        $data       = array();
        $username   = $inputData['username'];
        $password   = $inputData['password'];

        // $salt3              = '!@GH^%)-:HDF%';
        // $salt2              = $this->encrypter->encrypt($password . $salt3);
        // $salt1              = $this->encrypter->encrypt($salt3 . $salt2);
        // $hashed_password    = $this->encrypter->encrypt($salt2 . $password . $salt2 . $salt3);
        // $password           = $hashed_password;

        $qString    = "SELECT * FROM users WHERE username = :username: AND password = :password: LIMIT 1";
        $query      = $this->db->query($qString, [
            'username'  => $username,
            'password'  => $password
        ]);

        if($query->getNumRows() > 0) {
            $data = $query->getRowArray();
        }

        $query->freeResult();
        return $data;
    }

}