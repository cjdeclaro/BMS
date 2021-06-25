<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Blotter extends Model {


    protected $db;

    public function construct() {
        $this->db   = \Config\Database::connect();
    }

    public function add_blotter($data) {
        $query  = "INSERT INTO blotters (user_id, blotter_entry_no, status) "
                . "VALUES (:user_id:, :blotter_entry_no:, :status:)";
        return $this->db->query($query, [
            'user_id'           => $data['user_id'],
            'blotter_entry_no'  => $data['blotter_entry_no'],
            'status'            => $data['status']
        ]);
    }

    public function add_reporting_person($data) {
        $query  = "INSERT INTO reporting_persons ("
                . "blotter_entry_no, lastname, firstname, middlename, gender, nickname, citizenship, civil_status, birthday, qualifier, phone, "
                . "home_no, email, address1, address2, education, occupation, id_presented) "
                . "VALUES ("
                . ":blotter_entry_no:, :lastname:, :firstname:, :middlename:, :gender:, :nickname:, :citizenship:, :civil_status:, :birthday:, :qualifier:, :phone:"
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
            'home_no'           => $data['home_no'],
            'email'             => $data['email'],
            'address1'          => $data['address1'],
            'address2'          => $data['address2'],
            'education'         => $data['education'],
            'occupation'        => $data['occupation'],
            'id_presented'      => $data['id_presented']
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
        $query  = "INSERT INTO narratives (blotter_entry_no, incident_type, incident_place, narration) VALUES (:blotter_entry_no:, :incident_type:, :incident_place:, :narration:)";
        return $this->db->query($query, [
            'blotter_entry_no'  => $data['blotter_entry_no'],
            'incident_type'     => $data['incident_type'],
            'incident_place'    => $data['incident_place'],
            'narration'         => $data['narration']
        ]);
    }


}