<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use Dompdf\Dompdf;

class Blotter extends ResourceController {

    protected $validation;
    protected $request;
    protected $session;
    protected $m_blotter;
    protected $pdf;
    public function __construct() {
        // Libraries / Helpers
        $this->validation   = \Config\Services::validation();
        $this->request      = \Config\Services::request();
        $this->session      = \Config\Services::session();
        $this->pdf          = new Dompdf();
        
        helper(['form', 'url']);

        // Model(s)
        $this->m_blotter    = new \App\Models\M_Blotter();
    }

    public function add() {
        $reporting_data     = $this->request->getPost('reporting');
        $suspect_data       = $this->request->getPost('suspect');
        $victim_data        = $this->request->getPost('victim');
        $blotter_entry_no   = $this->request->getPost('blotter_entry_no');
        $narration_data     = [
            'blotter_entry_no'  => $blotter_entry_no,
            'incident_type'     => $this->request->getPost('incident-type'),
            'incident_place'    => $this->request->getPost('incident-place'),
            'narration'         => $this->request->getPost('narration'),
            'date-of-incident'  => $this->request->getPost('date-of-incident'),
            'time-of-incident'  => $this->request->getPost('time-of-incident'),
        ];
        $blotter_data       = [
            'blotter_entry_no'  => $blotter_entry_no,
            'user_id'           => $this->session->get('sess_uid')
        ];
        $if_police_personnel        = $this->request->getPost('if-police-personnel');
        $if_w_previous_crim_record  = $this->request->getPost('if-w-previous-crim-record');
        

        // validation rules
        $this->validation->withRequest($this->request)->setRules([

            // Blotter #
            'blotter_entry_no' => [
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
            'reporting.gender'   => [
                'label' => 'Gender',
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
                'rules' => 'required|valid_email',
                'error' => [
                    'required'      => '{field} is required.',
                    'valid_email'   => '{field} is an invalid email.'
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
            'suspect.birthday'   => [
                'label' => 'Birthday',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.phone'   => [
                'label' => 'Phone Number',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.home-no'   => [
                'label' => 'Home Number',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'suspect.email'   => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'error' => [
                    'required'      => '{field} is required.',
                    'valid_email'   => '{field} is an invalid email.'
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
                'rules' => 'required|valid_email',
                'error' => [
                    'required'      => '{field} is required.',
                    'valid_email'   => '{filed} is an invalid email.'
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
            ],
            'date-of-incident'   => [
                'label' => 'Date of Incident',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ],
            'time-of-incident'   => [
                'label' => 'Time of Incident',
                'rules' => 'required',
                'error' => [
                    'required'      => '{field} is required.'
                ]
            ]
        ]);

        if($this->validation->withRequest($this->request)->run()) {

            $this->m_blotter->add_blotter($blotter_data);
            $this->m_blotter->add_reporting_person($reporting_data);
            $this->m_blotter->add_victim($victim_data);
            
            if( $if_police_personnel !== null || $if_w_previous_crim_record !== null ) {
                $suspect_id                         = $this->m_blotter->add_suspect_return_id($suspect_data);
                $if_police_personnel_DATA           = [
                    'suspect_id'        => $suspect_id,
                    'rank'              => $this->request->getPost('rank'),
                    'unit_assignment'   => $this->request->getPost('unit-assignment')
                ];
                $if_w_previous_crim_record_DATA     = [
                    'suspect_id'        => $suspect_id,
                    'status'            => $this->request->getPost('prev-case-status')
                ];

                if( $if_police_personnel !== null ) {
                    $this->m_blotter->add_police_personnel($if_police_personnel_DATA);
                }

                if( $if_w_previous_crim_record !== null ) {
                    $this->m_blotter->add_criminal_records($if_w_previous_crim_record_DATA);
                }

            } else {
                $this->m_blotter->add_suspect($suspect_data);
            }

            $this->m_blotter->add_narration($narration_data);

            return $this->respondCreated([
                'message'    => 'Blotter Added Successfully!'
            ]);
        } else {
            return $this->fail($this->validation->getErrors(), 404);
        }
    }

    public function get_all() {
        return json_encode([
            'data'  => $this->m_blotter->get_all()
        ]);
    }

    public function print_receipt() {
        $data = [
            'blotter_no'        => $this->request->getPost('blotter_no'),
            'incident_type'     => $this->request->getPost('incident_type'),
            'incident_place'    => $this->request->getPost('incident_place'),
            'incident_date'     => $this->request->getPost('incident_date'),
            'incident_time'     => $this->request->getPost('incident_time'),
            'reporting_name'    => $this->request->getPost('reporting_name'),
            'reporting_address' => $this->request->getPost('reporting_address'),
            'person_recorded'   => $this->request->getPost('person_recorded')
        ];

        $this->pdf->loadHtml(view('pdf/blotter_receipt', $data));
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream();
    }

}