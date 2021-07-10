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

    public function add_suspect_return_id() {
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
            'home_no'           => $data['home_no'],
            'email'             => $data['email'],
            'address1'          => $data['address1'],
            'address2'          => $data['address2'],
            'education'         => $data['education'],
            'occupation'        => $data['occupation'],
            'id_presented'      => $data['id_presented'],
            'height'            => $data['height'],
            'weight'            => $data['weight'],
            'eyes_color'        => $data['eyes_color'],
            'hair_color'        => $data['hair_color'],
            'influence_of'      => $data['influence_of']
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
        $query  = "INSERT INTO narrations (blotter_entry_no, incident_type, incident_place, narration) VALUES (:blotter_entry_no:, :incident_type:, :incident_place:, :narration:)";
        return $this->db->query($query, [
            'blotter_entry_no'  => $data['blotter_entry_no'],
            'incident_type'     => $data['incident_type'],
            'incident_place'    => $data['incident_place'],
            'narration'         => $data['narration']
        ]);
    }

    public function get_all() {
        $data           = array();
        $suspect_name   = '';
        $victim_name    = '';
        $reporting_name = '';

        $blotter = $this->db->query("SELECT * FROM blotters");
        foreach( $blotter->getResult('array') as $blttr_row ) {
            $blotter_entry_no   = $blttr_row['blotter_entry_no'];

            $reporting_data     = array();
            $reporting_person   = $this->db->query("SELECT * FROM reporting_persons WHERE blotter_entry_no = :blotter_entry_no:", [
                'blotter_entry_no' => $blotter_entry_no
            ]);
            foreach($reporting_person->getResult('array') as $rprtng_row) {
                $reporting_name = $rprtng_row['firstname'] . ' ' . $rprtng_row['lastname'];

                array_push($reporting_data, [
                    'reporting_id'              => $rprtng_row['id'],
                    'reporting_lastname'        => $rprtng_row['lastname'],
                    'reporting_firstname'       => $rprtng_row['firstname'],
                    'reporting_middlename'      => $rprtng_row['middlename'],
                    'reporting_gender'          => $rprtng_row['gender'],
                    'reporting_nickname'        => $rprtng_row['nickname'],
                    'reporting_citizenship'     => $rprtng_row['citizenship'],
                    'reporting_civil_status'    => $rprtng_row['civil_status'],
                    'reporting_birthday'        => $rprtng_row['birthday'],
                    'reporting_qualifier'       => $rprtng_row['qualifier'],
                    'reporting_phone'           => $rprtng_row['phone'],
                    'reporting_home_no'         => $rprtng_row['home_no'],
                    'reporting_email'           => $rprtng_row['email'],
                    'reporting_address1'        => $rprtng_row['address1'],
                    'reporting_address2'        => $rprtng_row['address2'],
                    'reporting_education'       => $rprtng_row['education'],
                    'reporting_id_presented'    => $rprtng_row['id_presented'],
                ]);
            }

            $suspect_data   = array();
            $suspect        = $this->db->query("SELECT * FROM suspects WHERE blotter_entry_no = :blotter_entry_no:", [
                'blotter_entry_no' => $blotter_entry_no
            ]);
            foreach( $suspect->getResult('array') as $sspct_row ) {
                $suspect_name = $sspct_row['firstname'] . ' ' . $sspct_row['lastname'];

                array_push($suspect_data, [
                    'suspect_id'                => $sspct_row['id'],
                    'suspect_lastname'          => $sspct_row['lastname'],
                    'suspect_firstname'         => $sspct_row['firstname'],
                    'suspect_middlename'        => $sspct_row['middlename'],
                    'suspect_gender'            => $sspct_row['gender'],
                    'suspect_nickname'          => $sspct_row['nickname'],
                    'suspect_citizenship'       => $sspct_row['citizenship'],
                    'suspect_birthday'          => $sspct_row['birthday'],
                    'suspect_qualifier'         => $sspct_row['qualifier'],
                    'suspect_phone'             => $sspct_row['phone'],
                    'suspect_email'             => $sspct_row['email'],
                    'suspect_address1'          => $sspct_row['address1'],
                    'suspect_address2'          => $sspct_row['address2'],
                    'suspect_education'         => $sspct_row['education'],
                    'suspect_occupation'        => $sspct_row['occupation'],
                    'suspect_id_presented'      => $sspct_row['id_presented'],
                    'suspect_id_height'         => $sspct_row['height'],
                    'suspect_eyes_color'        => $sspct_row['eyes_color'],
                    'suspect_influence_of'      => $sspct_row['influence_of'],
                ]);
            }

            $victim_data    = array();
            $victim         = $this->db->query("SELECT * FROM victims WHERE blotter_entry_no = :blotter_entry_no:", [
                'blotter_entry_no' => $blotter_entry_no
            ]);
            foreach( $victim->getResult('array') as $vctm_row ) {
                $victim_name = $vctm_row['firstname'] . ' ' . $vctm_row['lastname'];

                array_push($victim_data, [
                    'victim_id'                 => $vctm_row['id'],
                    'victim_lastname'           => $vctm_row['lastname'],
                    'victim_firstname'          => $vctm_row['firstname'],
                    'victim_middlename'         => $vctm_row['middlename'],
                    'victim_gender'             => $vctm_row['gender'],
                    'victim_nickname'           => $vctm_row['nickname'],
                    'victim_citizenship'        => $vctm_row['citizenship'],
                    'victim_phone'              => $vctm_row['phone'],
                    'victim_home_no'            => $vctm_row['home_no'],
                    'victim_email'              => $vctm_row['email'],
                    'victim_address1'           => $vctm_row['address1'],
                    'victim_address2'           => $vctm_row['address2'],
                    'victim_education'          => $vctm_row['education'],
                    'victim_occupation'         => $vctm_row['occupation'],
                    'victim_id_presented'       => $vctm_row['id_presented'],
                ]);
            }

            array_push($data, [
                'blotter_id'            => $blttr_row['id'],
                'blotter_entry_no'      => $blttr_row['blotter_entry_no'],
                'blotter_date'          => $blttr_row['date_saved'],
                'reporting_person'      => $reporting_person,
                'suspect'               => $suspect_data,
                'victim'                => $victim_data,
                'reporting_name'        => $reporting_name,
                'suspect_name'          => $suspect_name,
                'victim_name'           => $victim_name,
                'action'                => ''
            ]);
        }

        return $data;
    }


}