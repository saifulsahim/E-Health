<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rating_model');
    }

    public function set_rating()
    {
        $this->rating_model->save_rating();

        echo 'success';
    }

}