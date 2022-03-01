<?php

class Fungsi{

    protected $ci;
    
    public function __construct(){
        $this->ci =& get_instance();
        require_once 'assets/dompdf/autoload.inc.php';
    }


    public function count_suratmasuk(){
        $this->ci->load->model('suratmasuk_model');
        return $this->ci->suratmasuk_model->get()->num_rows();
    }

    public function count_suratkeluar(){
        $this->ci->load->model('suratkeluar_model');
        return $this->ci->suratkeluar_model->get()->num_rows();
    }

    public function count_suratreview(){
        $this->ci->load->model('suratreview_model');
        return $this->ci->suratreview_model->get()->num_rows();
    }

    public function count_suratumum(){
        $this->ci->load->model('suratumum_model');
        return $this->ci->suratumum_model->get()->num_rows();
    }

}

?>