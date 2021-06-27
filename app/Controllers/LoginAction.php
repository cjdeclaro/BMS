<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class LoginAction extends ResourceController {

    protected $validation;
    protected $request;

    public function __construct() {
        // Libraries / Helpers
        $this->validation   = \Config\Services::validation();
        $this->request      = \Config\Services::request();

        helper('form', 'url');
    }

    public function login() {
        $inputData = array(
            'username'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('password')
        );

        $this->validation->witRequest($this->request)->setRules([
            'username'  => [
                'label'     => 'Username',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'This {field} is required.'
                ]
            ],
            'password'  => [
                'label'     => 'Password',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'This {field} is required.'
                ]
            ]
        ]);

        if( $this->validation->withRequest($this->request)->run() ) {

        } else {
            
        }
    }

}