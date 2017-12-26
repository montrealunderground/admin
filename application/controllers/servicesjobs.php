<?php

class ServicesJobs extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('jobs_model');
        $this->load->model('services_model');

        if( !$this->session->userdata('is_logged_in') ) {
            redirect('admin/login');
        }
    }

    /**
     * This is the controller method that drives the application.
     * After a user logs in, show_main() is called and the main
     * application screen is set up.
     */
    function index($lang=0) {
        $data['data']['jobs'] = $this->jobs_model->getJobs($lang);
        $data['data']['parkings'] = $this->services_model->getServices($lang, $this->getTypenamefromType($lang, "parking"));
        $data['data']['freewifis'] = $this->services_model->getServices($lang, $this->getTypenamefromType($lang, "freewifi"));
        $data['data']['dailylockers'] = $this->services_model->getServices($lang, $this->getTypenamefromType($lang, "dailylockers"));
        $data['main_content'] = 'admin/servicesjobs/list';
        $data['activatedMenu'] = 'servicesjobs';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function jobdatasubmit($lang=0) {
        $id = $_POST['id'];

        $data['title'] = $_POST['title'];
        $data['company'] = $_POST['company'];
        $data['type'] = $_POST['type'];
        $data['description'] = $_POST['description'];
        $data['contact'] = $_POST['contact'];
        $data['link'] = $_POST['link'];
        if ($id >= 0) {
            $data['id'] = $id;
            $this->jobs_model->updateJob($lang, $data);
        } else {
            $this->jobs_model->addJob($lang, $data);
        }
        if ($lang == 0)
            redirect(base_url().'admin/servicesjobs');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/servicesjobs');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/servicesjobs');
    }

    function deleteJob($lang=0) { 
        $id = $this->uri->segment(4);
        $this->jobs_model->deleteJob($lang, $id);
        if ($lang == 0)
            redirect(base_url().'admin/servicesjobs');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/servicesjobs');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/servicesjobs');
    }

    function updateJob($lang=0) {
        $id = $this->uri->segment(3);
        
        $data['data']['job'] = $this->jobs_model->getJobById($lang, $id);
        if ($lang == 0)
            $data['data']['jobtypes'] = array('Part Time', 'Full Time');
        else
            $data['data']['jobtypes'] = array('À temps Partiel', 'À plein temps');
        if (strcmp($id, 'new') == 0)
            $data['data']['job']['id'] = -1;
        $data['main_content'] = 'admin/servicesjobs/jobedit';
        $data['activatedMenu'] = 'servicesjobs';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function servicedatasubmit($lang=0, $servicetype='parking') {
        $id = $_POST['id'];

        $data['name'] = $_POST['name'];

        $data['type'] = $this->getTypenamefromType(0, $servicetype);
        $data['type_fr'] = $this->getTypenamefromType(1, $servicetype);
        $data['type_cn'] = $this->getTypenamefromType(2, $servicetype);

        $data['contact'] = $_POST['contact'];
        $data['link'] = $_POST['link'];
        if ($id >= 0) {
            $data['id'] = $id;
            $this->services_model->updateService($lang, $data);
        } else {
            $this->services_model->addService($lang, $data);
        }
        if ($lang == 0)
            redirect(base_url().'admin/servicesjobs');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/servicesjobs');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/servicesjobs');
    }

    function getTypenamefromType($lang, $servicetype) {
        $types = array('parking', 'freewifi', 'dailylockers');
        $typename_en = array('Parking', 'Free Wi-Fi', 'Daily Lockers');
        $typename_fr = array('Parking', 'Wi-Fi Gratuit', 'Coffrets Quotidiens');
        $typename_cn = array('停車處', '免费Wi-Fi', '每日储物柜');

        for ($i=0; $i<count($types); $i++) {
            if (strcasecmp($servicetype, $types[$i]) == 0) {
                if ($lang == 0)
                    return $typename_en[$i];
                else if ($lang == 1)
                    return $typename_fr[$i];
                else if ($lang == 2)
                    return $typename_cn[$i];
            }
        }
    }
    function deleteService($lang=0) {
        $id = $this->uri->segment(4);
        $this->services_model->deleteService($lang, $id);
        if ($lang == 0)
            redirect(base_url().'admin/servicesjobs');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/servicesjobs');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/servicesjobs');
    }

    function updateService($lang=0, $servicetype) {
        $id = $this->uri->segment(3);
        
        $service = $this->services_model->getServiceById($lang, $id);
        //    $data['data']['servicetypes'] = array('Parking', 'Free Wi-Fi', 'Daily Lockers');
        
        if (strcmp($id, 'new') == 0) {
            $service['id'] = -1;
            //$service['type'] = $this->getTypenamefromType(0, $servicetype);
        }

        $service['type'] = $servicetype;
        
        $data['data']['service'] = $service;
        $data['main_content'] = 'admin/servicesjobs/serviceedit';
        $data['activatedMenu'] = 'servicesjobs';
        $data['data']['language'] = $lang;
        $data['servicetype'] = $this->getTypenamefromType(0, $servicetype);
        $this->load->view('includes/template', $data);
    }
}
