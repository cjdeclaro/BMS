<?php

namespace App\Controllers;

class Dashboard extends BaseController {

    public function index() {
        $data = [
            'title'     => 'Dashboard',
            'content'   => 'dashboard/index',
            'scripts'   => 'js/index.php'
        ];

        return view('main_template', $data);
    }

}