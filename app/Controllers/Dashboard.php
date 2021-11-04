<?php

namespace App\Controllers;

class Dashboard extends BaseController {

    protected $db;
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function index() {

        $date           = date('Y-m-d');
        $blotters       = $this->db->query("SELECT * FROM blotters");
        $blotters_today = $this->db->query("SELECT * FROM blotters WHERE date_saved LIKE '%$date%'");

        $data = [
            'title'             => 'Dashboard',
            'content'           => 'dashboard/index',
            'scripts'           => 'js/index.js',
            'total_blotters'    => $blotters->getNumRows(),
            'blotters_today'    => $blotters_today->getNumRows()
        ];

        return view('main_template', $data);
    }

    public function add_blotter() {
        $data = [
            'title'             => 'Add Blotter',
            'content'           => 'dashboard/add_blotter',
            'scripts'           => 'js/add-blotter.js',
            'summernote'        => base_url('assets/summernote/summernote-bs4.min.css'),
            'summernotejs'      => base_url('assets/summernote/summernote-bs4.min.js'),
            'blotter_no'         => 'B' . date('ymdhis')
        ];

        return view('main_template', $data);
    }

    public function reports() {
        $data = [
            'title'     => 'Reports',
            'content'   => 'dashboard/reports',
            'scripts'   => 'js/reports.js'
        ];

        return view('main_template', $data);
    }

    public function users() {
        $data = [
            'title'     => 'Users',
            'content'   => 'dashboard/users',
            'scripts'    => 'js/users.js'
        ];

        return view('main_template', $data);
    }

}