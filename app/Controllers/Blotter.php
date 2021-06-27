<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class Blotter extends ResourceController {

    protected $validation;
    protected $request;
    protected $session;
    public function __construct() {
        // Libraries / Helpers
        $this->validation   = \Config\Services::validation();
        $this->request      = \Config\Services::request();
        $this->session      = \Config\Services::session();
        
        helper(['form', 'url']);
    }

    public function add() {
        $reporting_data = $this->request->getPost('reporting');
        $suspect_data   = $this->request->getPost('suspect');
        $victim         = $this->request->getPost('victim');

        // validation rules
        $this->validation->withRequest($this->request)->setRules([

            // Blotter #
            'blotter_no' => [
                'label' => 'Blotter Number',
                'rules' => 'required',
                'error' => [
                    'required' => '{field} is required.'
                ]
            ],

            // Reporting Person Input Data
            'reporting.lastname'   => [
                'label' => 'Last Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.firstname'   => [
                'label' => 'First Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.middlename'   => [
                'label' => 'Middle Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.nickname'   => [
                'label' => 'Nick Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.citizenship'   => [
                'label' => 'Citizenship',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.civil_status'   => [
                'label' => 'Civil Status',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.birthday'   => [
                'label' => 'Birthday',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.phone'   => [
                'label' => 'Phone Number',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.home-no'   => [
                'label' => 'Home Number',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.email'   => [
                'label' => 'Email',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.address-1'   => [
                'label' => 'Address 1',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.address-2'   => [
                'label' => 'Address 2',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.education'   => [
                'label' => 'Education',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.occupation'   => [
                'label' => 'Occupation',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'reporting.id-presented'   => [
                'label' => 'ID Presented',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],

            // Suspect Input Data
            'suspect.lastname'   => [
                'label' => 'Last Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.firstname'   => [
                'label' => 'First Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.middlename'   => [
                'label' => 'Middle Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.gender'   => [
                'label' => 'Gender',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.nickname'   => [
                'label' => 'Nickname',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.citizenship'   => [
                'label' => 'Citizenship',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.civil_status'   => [
                'label' => 'Civil Status',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.qualifier'   => [
                'label' => 'Qualifer',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.address-1'   => [
                'label' => 'Address 1',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.address-2'   => [
                'label' => 'Address 2',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.education'   => [
                'label' => 'Education',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.occupation'   => [
                'label' => 'Occupation',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.id-presented'   => [
                'label' => 'ID Presented',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.height'   => [
                'label' => 'Height',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.weight'   => [
                'label' => 'Weight',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.eyes-color'   => [
                'label' => 'Eyes Color',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.hair-color'   => [
                'label' => 'Hair Color',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.influence-of'   => [
                'label' => 'Influence',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],

            // Victim Input Data
            'victim.lastname'   => [
                'label' => 'Last Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.firstname'   => [
                'label' => 'First Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.middlename'   => [
                'label' => 'Middle Name',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.gender'   => [
                'label' => 'Gender',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.nickname'   => [
                'label' => 'Nickname',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.citizenship'   => [
                'label' => 'Citizenship',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.civil_status'   => [
                'label' => 'Civil Status',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.birthday'   => [
                'label' => 'Birthday',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.phone'   => [
                'label' => 'Phone Number',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.home-no'   => [
                'label' => 'Home Number',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.email'   => [
                'label' => 'Email',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.address-1'   => [
                'label' => 'Address 1',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.address-2'   => [
                'label' => 'Address 2',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.education'   => [
                'label' => 'Education',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.occupation'   => [
                'label' => 'Occupation',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'victim.id-presented'   => [
                'label' => 'ID Presented',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],

            // Narration Input Data
            'incident-type'   => [
                'label' => 'Type of Incident',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'incident-place'   => [
                'label' => 'Place of Incident',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'narration'   => [
                'label' => 'Narration',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ]
        ]);

        if($this->validation->withRequest($this->request)->run()) {

        } else {
            return $this->fail($this->validation->getErrors(), 404);
        }
    }

}