<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magzine extends MX_Controller {

function __construct() {
        parent::__construct();

        $this->load->library('pagination');
    }

  public function index()
   {   
    
	 }
   public function view_magzine(){


      //$this->site_data['main_page'] = 'front/view_magzine';
      $this->load->view('view_magzine');  
   }
}

?>