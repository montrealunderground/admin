<?php

class UndercoinStore extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('undercoinstore_model');

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
        $this->load->model('globals_model');

        $ucitems = $this->undercoinstore_model->getUCItems($lang);

        $data['main_content'] = 'admin/undercoinstore/list';
        $data['activatedMenu'] = 'undercoinstore';
        $data['data']['socialsharingbonus'] = $this->globals_model->getValueForKey('socialsharingbonus');
        $data['data']['advideobonus'] = $this->globals_model->getValueForKey('advideobonus');
        $data['data']['ucitems'] = $ucitems;
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function globaldatasubmit($lang=0) {
        $this->load->model('globals_model');
        $this->globals_model->setValueForKey('socialsharingbonus', $_POST['socialsharingbonus']);
        $this->globals_model->setValueForKey('advideobonus', $_POST['advideobonus']);

        $this->index($lang);
    }

    function updateucitem($lang=0) {
        $id = $this->uri->segment(3);
        
        $data['data']['ucitem'] = $this->undercoinstore_model->getUCItemById($lang, $id);
        if (strcmp($id, 'new') == 0)
            $data['data']['ucitem']['id'] = -1;
        $data['main_content'] = 'admin/undercoinstore/edit';
        $data['activatedMenu'] = 'undercoinstore';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function ucitemdatasubmit($lang=0) {
        $id = $_POST['id'];
        
        $this->load->library('upload');

        if ($id >= 0 && strlen(str_replace(" ", "", $_POST['imagename'])) != 0)
            $imagename = $_POST['imagename'];
        else
            $imagename = $this->random_string(32);

        $config['upload_path'] = './assets/uploaded/undercoinstore/';
        $config['file_name'] = $imagename;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['max_size']     = '10000';
        $config['max_width'] = '2048';
        $config['max_height'] = '2048';
        
        $this->upload->initialize($config);

        $error = null;
        if ( ! $this->upload->do_upload('ucitemimagefile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data['imagename'] = $this->upload->data()['file_name'];
        }

        $data['name'] = $_POST['name'];
        $data['price'] = $_POST['price'];
        $data['link'] = $_POST['link'];

        if ($id >= 0) {
            $data['id'] = $id;
            $this->undercoinstore_model->updateUCItem($lang, $data);
        } else {
            $this->undercoinstore_model->addUCItem($lang, $data);
        }

        if ($lang == 0)
            redirect(base_url().'admin/undercoinstore');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/undercoinstore');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/undercoinstore');
    }

    function deleteucitem($lang=0) {
        $id = $this->uri->segment(4);
        $filename = $this->undercoinstore_model->deleteUCItem($lang, $id);
        if ($filename != null) {
            unlink('./assets/uploaded/undercoinstore/'.$filename);
        }
        if ($lang == 0)
            redirect(base_url().'admin/undercoinstore');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/undercoinstore');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/undercoinstore');
    }
}