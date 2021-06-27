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

    public function reporting_person() {
        $data = [
            'title'     => 'Reporting Person',
            'content'   => 'dashboard/reporting_person'
        ];

        return view('main_template', $data);
    }

    public function suspect_data() {
        $data = [
            'title'     => 'Reporting Person',
            'content'   => 'dashboard/suspect_data'
        ];

        return view('main_template', $data);
    }

    public function victim_data() {
        $data = [
            'title'     => 'Reporting Person',
            'content'   => 'dashboard/victim_data'
        ];

        return view('main_template', $data);
    }

    public function narrative_of_incidents() {
        $data = [
            'title'     => 'Reporting Person',
            'content'   => 'dashboard/narrative_of_incidents'
        ];

        return view('main_template', $data);
    }

    public function reports() {
        $data = [
            'title'     => 'Reporting Person',
            'content'   => 'dashboard/reports'
        ];

        return view('main_template', $data);
    }

}