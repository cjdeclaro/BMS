<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController {

    protected $validation;
    protected $request;
    protected $m_users;
    public function __construct() {
        $this->validation   = \Config\Services::validation();
        $this->request      = \Config\Services::request();
        helper(['form', 'url']);

        $this->m_users      = new \App\Models\M_Users();
    }

    public function get_all() {
        return json_encode(['data' => $this->m_users->get_all()]);
    }

    public function add_new() {
        $inputData = [
            'username'      => $this->request->getPost('username'),
            'password'      => $this->request->getPost('password'),
            'lastname'      => $this->request->getPost('lastname'),
            'firstname'     => $this->request->getPost('firstname'),
            'middlename'    => $this->request->getPost('middlename'),
            'email'         => $this->request->getPost('email'),
            'phone'         => $this->request->getPost('phone'),
            'role'          => $this->request->getPost('role')
        ];

        $this->validation->withRequest($this->request)->setRules([
            'username' => [
                'label'     => 'Username',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'password' => [
                'label'     => 'Password',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'lastname' => [
                'label'     => 'Last Name',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'firstname' => [
                'label'     => 'First Name',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'middlename' => [
                'label'     => 'Middle Name',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'email' => [
                'label'     => 'Email',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'phone' => [
                'label'     => 'Phone #',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'role' => [
                'label'     => 'Role',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
        ]);

        if ( $this->validation->withRequest($this->request)->run() ) {
            $this->m_users->add_new($inputData);
            return $this->respondCreated([
                'message' => 'New User Added Successfully!'
            ]);
        } else {
            return $this->fail($this->validation->getErrors(), 404);
        }
    }

    public function edit_user() {
        $inputData = [
            'username'      => $this->request->getPost('username'),
            'lastname'      => $this->request->getPost('lastname'),
            'firstname'     => $this->request->getPost('firstname'),
            'middlename'    => $this->request->getPost('middlename'),
            'email'         => $this->request->getPost('email'),
            'phone'         => $this->request->getPost('phone'),
            'role'          => $this->request->getPost('role'),
            'id'            => $this->request->getPost('id')
        ];

        $this->validation->withRequest($this->request)->setRules([
            'username' => [
                'label'     => 'Username',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'lastname' => [
                'label'     => 'Last Name',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'firstname' => [
                'label'     => 'First Name',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'middlename' => [
                'label'     => 'Middle Name',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'email' => [
                'label'     => 'Email',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'phone' => [
                'label'     => 'Phone #',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'role' => [
                'label'     => 'Role',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ],
            'id' => [
                'label'     => 'ID',
                'rules'     => 'required',
                'error'     => [
                    'required' => '{field} is required.'
                ]
            ]
        ]);

        if ( $this->validation->withRequest($this->request)->run() ) {
            $this->m_users->edit_user($inputData);
            return $this->respondCreated([
                'message' => 'User Updated Successfully!'
            ]);
        } else {
            return $this->fail($this->validation->getErrors(), 404);
        }
    }

} 