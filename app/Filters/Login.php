<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Login implements FilterInterface {

    protected $session;

    public function __construct() {
        $this->session = \Config\Services::session();
    }

    public function before(RequestInterface $request, $arguments = null) {
        if( $this->session->get('sess_logged_in') )
            return redirect()->to(base_url());
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // 
    }

}