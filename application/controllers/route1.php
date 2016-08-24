<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route1 extends CI_Controller {
    function __construct() {
        parent::__construct();

        // Load url helper
        //ceci permet de loader les JS, CSS, IMG dans la view
        $this->load->helper('url');
    }
    
    
    public function index(){
        
        $this->load->view('route1_view');
    }
    
    
}