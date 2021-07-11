<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Blotter extends Model {


    protected $db;

    public function construct() {
        $this->db   = \Config\Database::connect();
    }

    public function add_blotter($data) {
        $query  = "INSERT INTO blotters (user_id, blotter_entry_no) "
                . "VALUES (:user_id:, :blotter_entry_no:)";
        return $this->db->query($query, [
            'user_id'           => $data['user_id'],
            'blotter_entry_no'  => $data['blotter_entry_no']
        ]);
    }

    public function add_reporting_person($data) {
        $query  = "INSERT INTO reporting_persons ("
                . "blotter_entry_no, lastname, firstname, middlename, gender, nickname, citizenship, civil_status, birthday, qualifier, phone, "
                . "home_no, email, address1, address2, education, occupation, id_presented) "
                . "VALUES ("
                . ":blotter_entry_no:, :lastname:, :firstname:, :middlename:, :gender:, :nickname:, :citizenship:, :civil_status:, :birthday:, :qualifier:, :phone:, "
                . ":home_no:, :email:, :address1:, :address2:, :education:, :occupation:, :id_presented:)";
        return $this->db->query($query, [
            'blotter_entry_no'  => $data['blotter_entry_no'],
            'lastname'          => $data['lastname'],
            'firstname'         => $data['firstname'],
            'middlename'        => $data['middlename'],
            'gender'            => $data['gender'],
            'nickname'          => $data['nickname'],
            'citizenship'       => $data['citizenship'],
            'civil_status'      => $data['civil_status'],
            'birthday'          => $data['birthday'],
            'qualifier'         => $data['qualifier'],
            'phone'             => $data['phone'],
            'home_no'           => $data['home-no'],
            'email'             => $data['email'],
            'address1'          => $data['address-1'],
            'address2'          => $data['address-2'],
            'education'         => $data['education'],
            'occupation'        => $data['occupation'],
            'id_presented'      => $data['id-presented']
        ]);        
    }


    public function add_suspect($data) {
        $query  = "INSERT INTO suspects ("
                . "blotter_entry_no, lastname, firstname, middlename, gender, nickname, citizenship, birthday, qualifier, phone, home_no, email, "
                . "address1, address2, education, occupation, id_presented, height, weight, eyes_color, hair_color, influence_of"
                . ") VALUES ("
                . ":blotter_entry_no:, :lastname:, :firstname:, :middlename:, :gender:, :nickname:, :citizenship:, :birthday:, :qualifier:, :phone:, :home_no:, :email:, "
                . ":address1:, :address2:, :education:, :occupation:, :id_presented:, :height:, :weight:, :eyes_color:, :hair_color:, :influence_of:"
                . ")";
        return $this->db->query($query, [
            'blotter_entry_no'  => $data['blotter_entry_no'],
            'lastname'          => $data['lastname'],
            'firstname'         => $data['firstname'],
            'middlename'        => $data['middlename'],
            'gender'            => $data['gender'],
            'nickname'          => $data['nickname'],
            'citizenship'       => $data['citizenship'],
            'birthday'          => $data['birthday'],
            'qualifier'         => $data['qualifier'],
            'phone'             => $data['phone'],
            'home_no'           => $data['home-no'],
            'email'             => $data['email'],
            'address1'          => $data['address-1'],
            'address2'          => $data['address-2'],
            'education'         => $data['education'],
            'occupation'        => $data['occupation'],
            'id_presented'      => $data['id-presented'],
            'height'            => $data['height'],
            'weight'            => $data['weight'],
            'eyes_color'        => $data['eyes-color'],
            'hair_color'        => $data['hair-color'],
            'influence_of'      => $data['influence-of']
        ]);
    }

    public function add_suspect_return_id($data) {
        $query  = "INSERT INTO suspects ("
                . "blotter_entry_no, lastname, firstname, middlename, gender, nickname, citizenship, birthday, qualifier, phone, home_no, email, "
                . "address1, address2, education, occupation, id_presented, height, weight, eyes_color, hair_color, influence_of"
                . ") VALUES ("
                . ":blotter_entry_no:, :lastname:, :firstname:, :middlename:, :gender:, :nickname:, :citizenship:, :birthday:, :qualifier:, :phone:, :home_no:, :email:, "
                . ":address1:, :address2:, :education:, :occupation:, :id_presented:, :height:, :weight:, :eyes_color:, :hair_color:, :influence_of:"
                . ")";
        $this->db->query($query, [
            'blotter_entry_no'  => $data['blotter_entry_no'],
            'lastname'          => $data['lastname'],
            'firstname'         => $data['firstname'],
            'middlename'        => $data['middlename'],
            'gender'            => $data['gender'],
            'nickname'          => $data['nickname'],
            'citizenship'       => $data['citizenship'],
            'birthday'          => $data['birthday'],
            'qualifier'         => $data['qualifier'],
            'phone'             => $data['phone'],
            'home_no'           => $data['home-no'],
            'email'             => $data['email'],
            'address1'          => $data['address-1'],
            'address2'          => $data['address-2'],
            'education'         => $data['education'],
            'occupation'        => $data['occupation'],
            'id_presented'      => $data['id-presented'],
            'height'            => $data['height'],
            'weight'            => $data['weight'],
            'eyes_color'        => $data['eyes-color'],
            'hair_color'        => $data['hair-color'],
            'influence_of'      => $data['influence-of']
        ]);
        return $this->db->insertID();
    }

    public function add_victim($data) {
        $qString = "INSERT INTO victims (blotter_entry_no, lastname, firstname, middlename, gender, nickname, citizenship, civil_status, birthday, phone, home_no, email, address1, address2, education, occupation, id_presented) ".
                   "VALUES (:blotter_entry_no:, :lastname:, :firstname:, :middlename:, :gender:, :nickname:, :citizenship:, :civil_status:, :birthday:, :phone:, :home_no:, :email:, :address1:, :address2:, :education:, :occupation:, :id_presented:)";
        return $this->db->query($qString, [
            'blotter_entry_no'      => $data['blotter_entry_no'],
            'lastname'              => $data['lastname'],
            'firstname'             => $data['firstname'],
            'middlename'            => $data['middlename'],
            'gender'                => $data['gender'],
            'nickname'              => $data['nickname'],
            'citizenship'           => $data['citizenship'],
            'civil_status'          => $data['civil_status'],
            'birthday'              => $data['birthday'],
            'phone'                 => $data['phone'],
            'home_no'                => $data['home-no'],
            'email'                 => $data['email'],
            'address1'              => $data['address-1'],
            'address2'              => $data['address-2'],
            'education'             => $data['education'],
            'occupation'            => $data['occupation'],
            'id_presented'          => $data['id-presented'],
        ]);
    }

    public function add_police_personnel($data) {
        $query  = "INSERT INTO police_personnels (suspect_id, rank, unit_assignment) VALUES (:suspect_id:, :rank:, :unit_assignment:)";
        return $this->db->query($query, [
            'suspect_id'        => $data['suspect_id'],
            'rank'              => $data['rank'],
            'unit_assignment'   => $data['unit_assignment']
        ]);
    }

    public function add_criminal_records($data) {
        $query  = "INSERT INTO criminal_records (suspect_id, status) VALUES (:suspect_id:, :status:)";
        return $this->db->query($query, [
            'suspect_id'    => $data['suspect_id'],
            'status'        => $data['status']
        ]);
    }

    public function add_narration($data) {
        $query  = "INSERT INTO narrations (blotter_entry_no, incident_type, incident_place, narration, incident_date, incident_time) VALUES (:blotter_entry_no:, :incident_type:, :incident_place:, :narration:, :incident_date:, :incident_time:)";
        return $this->db->query($query, [
            'blotter_entry_no'  => $data['blotter_entry_no'],
            'incident_type'     => $data['incident_type'],
            'incident_place'    => $data['incident_place'],
            'narration'         => $data['narration'],
            'incident_date'     => $data['date-of-incident'],
            'incident_time'     => $data['time-of-incident']
        ]);
    }

    public function get_all() {
        $data           = array();
        $suspect_name   = '';
        $victim_name    = '';
        $reporting_name = '';

        $blotter = $this->db->query("SELECT * FROM blotters ORDER BY id DESC");
        foreach( $blotter->getResult('array') as $blttr_row ) {
            $blotter_entry_no   = $blttr_row['blotter_entry_no'];

            $reporting_data     = array();
            $reporting_person   = $this->db->query("SELECT * FROM reporting_persons WHERE blotter_entry_no = :blotter_entry_no:", [
                'blotter_entry_no' => $blotter_entry_no
            ]);
            foreach($reporting_person->getResult('array') as $rprtng_row) {
                $reporting_name = $rprtng_row['firstname'] . ' ' . $rprtng_row['lastname'];

                array_push($reporting_data, [
                    'id'              => $rprtng_row['id'],
                    'lastname'        => $rprtng_row['lastname'],
                    'firstname'       => $rprtng_row['firstname'],
                    'middlename'      => $rprtng_row['middlename'],
                    'gender'          => $rprtng_row['gender'],
                    'nickname'        => $rprtng_row['nickname'],
                    'citizenship'     => $rprtng_row['citizenship'],
                    'civil_status'    => $rprtng_row['civil_status'],
                    'birthday'        => $rprtng_row['birthday'],
                    'qualifier'       => $rprtng_row['qualifier'],
                    'phone'           => $rprtng_row['phone'],
                    'home_no'         => $rprtng_row['home_no'],
                    'email'           => $rprtng_row['email'],
                    'address1'        => $rprtng_row['address1'],
                    'address2'        => $rprtng_row['address2'],
                    'education'       => $rprtng_row['education'],
                    'occupation'      => $rprtng_row['occupation'],
                    'id_presented'    => $rprtng_row['id_presented'],
                ]);
            }

            $suspect_data   = array();
            $suspect        = $this->db->query("SELECT * FROM suspects WHERE blotter_entry_no = :blotter_entry_no:", [
                'blotter_entry_no' => $blotter_entry_no
            ]);
            foreach( $suspect->getResult('array') as $sspct_row ) {
                $suspect_name = $sspct_row['firstname'] . ' ' . $sspct_row['lastname'];

                array_push($suspect_data, [
                    'id'                => $sspct_row['id'],
                    'lastname'          => $sspct_row['lastname'],
                    'firstname'         => $sspct_row['firstname'],
                    'middlename'        => $sspct_row['middlename'],
                    'gender'            => $sspct_row['gender'],
                    'nickname'          => $sspct_row['nickname'],
                    'citizenship'       => $sspct_row['citizenship'],
                    'birthday'          => $sspct_row['birthday'],
                    'qualifier'         => $sspct_row['qualifier'],
                    'phone'             => $sspct_row['phone'],
                    'email'             => $sspct_row['email'],
                    'civil_status'      => $sspct_row['civil_status'],
                    'address1'          => $sspct_row['address1'],
                    'address2'          => $sspct_row['address2'],
                    'education'         => $sspct_row['education'],
                    'occupation'        => $sspct_row['occupation'],
                    'id_presented'      => $sspct_row['id_presented'],
                    'height'            => $sspct_row['height'],
                    'weight'            => $sspct_row['weight'],
                    'eyes_color'        => $sspct_row['eyes_color'],
                    'hair_color'        => $sspct_row['hair_color'],
                    'influence_of'      => $sspct_row['influence_of'],
                ]);
            }

            $victim_data    = array();
            $victim         = $this->db->query("SELECT * FROM victims WHERE blotter_entry_no = :blotter_entry_no:", [
                'blotter_entry_no' => $blotter_entry_no
            ]);
            foreach( $victim->getResult('array') as $vctm_row ) {
                $victim_name = $vctm_row['firstname'] . ' ' . $vctm_row['lastname'];

                array_push($victim_data, [
                    'id'                 => $vctm_row['id'],
                    'lastname'           => $vctm_row['lastname'],
                    'firstname'          => $vctm_row['firstname'],
                    'middlename'         => $vctm_row['middlename'],
                    'gender'             => $vctm_row['gender'],
                    'nickname'           => $vctm_row['nickname'],
                    'citizenship'        => $vctm_row['citizenship'],
                    'civil_status'       => $vctm_row['civil_status'],
                    'birthday'           => $vctm_row['birthday'],
                    'phone'              => $vctm_row['phone'],
                    'home_no'            => $vctm_row['home_no'],
                    'email'              => $vctm_row['email'],
                    'address1'           => $vctm_row['address1'],
                    'address2'           => $vctm_row['address2'],
                    'education'          => $vctm_row['education'],
                    'occupation'         => $vctm_row['occupation'],
                    'id_presented'       => $vctm_row['id_presented'],
                ]);
            }

            $narration_data     = array();
            $narration          = $this->db->query("SELECT * FROM narrations WHERE blotter_entry_no = :blotter_entry_no:", [
                'blotter_entry_no' => $blotter_entry_no
            ]);
            foreach( $narration->getResult('array') as $nrrtn_row ) {
                array_push($narration_data, [
                    'id'                => $nrrtn_row['id'],
                    'incident_type'     => $nrrtn_row['incident_type'],
                    'incident_place'    => $nrrtn_row['incident_place'],
                    'narration'         => $nrrtn_row['narration'],
                    'incident_date'     => $nrrtn_row['incident_date'],
                    'incident_time'     => $nrrtn_row['incident_time']
                ]);
            }

            $uid                    = $blttr_row['user_id'];
            $person_recorded_data   = array();
            $person_recorded        = $this->db->query("SELECT * FROM users WHERE id = :id:", [
                'id' => $uid
            ]);
            $person_recorded_name   = '';
            foreach ( $person_recorded->getResult('array') as $prsn_rcrdd_row ) {
                $person_recorded_name = $prsn_rcrdd_row['firstname'] . ' ' . $prsn_rcrdd_row['lastname'];
            }

            array_push($data, [
                'blotter_id'            => $blttr_row['id'],
                'blotter_entry_no'      => $blttr_row['blotter_entry_no'],
                'blotter_date'          => $blttr_row['date_saved'],
                'reporting_person'      => $reporting_data,
                'suspect'               => $suspect_data,
                'victim'                => $victim_data,
                'narration'             => $narration_data,
                'reporting_name'        => $reporting_name,
                'suspect_name'          => $suspect_name,
                'victim_name'           => $victim_name,
                'date'                  => $blttr_row['date_saved'],
                'person_recorded_name'  => $person_recorded_name,
                'action'                => '<button type="button" class="btn btn-light btn-sm" id="show-more-btn">More <i class="fa fa-search"></i></button>'
            ]);
        }

        return $data;
    }


}