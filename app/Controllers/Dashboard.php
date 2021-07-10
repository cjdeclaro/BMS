<?php

namespace App\Controllers;

class Dashboard extends BaseController {

    public function index() {
        $data = [
            'title'     => 'Dashboard',
            'content'   => 'dashboard/index',
            'scripts'   => 'js/index.js'
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