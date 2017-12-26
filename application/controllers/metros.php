<?php

class Metros extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('metros_model');

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
        $data['data']['metros'] = $this->metros_model->getMetros($lang);
        $data['main_content'] = 'admin/metros/list';
        $data['activatedMenu'] = 'metros';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function updateMetro($lang=0) {
        $id = $this->uri->segment(3);
        
        $data['data']['metro'] = $this->metros_model->getMetroById($lang, $id);
        if (strcmp($id, 'new') == 0)
            $data['data']['metro']['id'] = -1;
        $data['main_content'] = 'admin/metros/edit';
        $data['activatedMenu'] = 'metros';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function metrodatasubmit($lang=0) {
        $id = $_POST['id'];
        
        $data['name'] = $_POST['name'];

        if ($id >= 0) {
            $data['id'] = $id;
            $this->metros_model->updateMetro($lang, $data);
        } else {
            $this->metros_model->addMetro($lang, $data);
        }
        if ($lang == 0)
            redirect(base_url().'admin/metros');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/metros');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/metros');
    }

    function deleteMetro($lang=0) {
        $id = $this->uri->segment(4);
        $filename = $this->metros_model->deleteMetro($lang, $id);
        if ($lang == 0)
            redirect(base_url().'admin/metros');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/metros');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/metros');
    }
}
