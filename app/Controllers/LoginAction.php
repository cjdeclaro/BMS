<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class LoginAction extends ResourceController {

    protected $validation;
    protected $request;
    protected $m_login_action;
    protected $session;

    public function __construct() {
        // Libraries / Helpers
        $this->validation       = \Config\Services::validation();
        $this->request          = \Config\Services::request();
        $this->session          = \Config\Services::session();
        helper(['form', 'url']);

        // Models
        $this->m_login_action   = new \App\Models\M_LoginAction();
    }

    public function login() {
        $inputData = [
            'username'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('password')
        ];

        $this->validation->withRequest($this->request)->setRules([
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
            $login = $this->m_login_action->login($inputData);
            if( count($login) ) {
                $this->save_login_session($login);
                return $this->respondCreated(array(
                    'success'   => 'Successfully Logged In.'
                ));
            } else {
                return $this->fail(array(
                    'error' => 'Email or password is incorrect.'
                ), 404);
            }
        } else {
            return $this->fail($this->validation->getErrors(), 404);
        }
    }

    private function save_login_session($data) {
        $sess_data = array(
            'sess_uid'          => $data['id'],
            'sess_lastname'     => $data['lastname'],
            'sess_firstname'    => $data['firstname'],
            'sess_middle_name'  => $data['middlename'],
            'sess_address'      => $data['address'],
            'sess_email'        => $data['email'],
            'sess_phone'        => $data['phone'],
            'sess_role'         => $data['role'],
            'sess_logged_in'  => TRUE
        );

        return $this->session->set($sess_data);
    }

    public function logout() {
        $this->session->destroy();
        return $this->respondCreated(array('success' => 'You have been logged out.'));
    }

}