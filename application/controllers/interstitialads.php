<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class InterstitialAds extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('interstitialads_model');

        if( !$this->session->userdata('is_logged_in') ) {
            redirect('admin/login');
        }
    }

    function index($lang=0)
    {
        $data['data']['interstitialads'] = $this->interstitialads_model->getInterstitialAds($lang);
        $data['main_content'] = 'admin/interstitialads/list';
        $data['activatedMenu'] = 'interstitialads';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function newscreen($lang=0) {
        $data['screenname'] = $_POST['screenname'];
        if(strcasecmp($_POST['value'.$i], "on") == 0)
    		$data['value'] = true;
    	else
    		$data['value'] = false;
        $this->interstitialads_model->addInterstitialAds($lang, $data);
        if ($lang == 0)
            redirect(base_url().'admin/interstitialads');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/interstitialads');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/interstitialads');
    }

    function screendatasubmit($lang=0) {
        $count = $_POST['count'];

        if ($count <= 0)
            return;

        for ($i=0; $i<$count; $i++) {
        	$id = $_POST['id'.$i];

            $data['screenname'] = $_POST['screenname'.$i];
            if(strcasecmp($_POST['value'.$i], "on") == 0) {
        		$data['value'] = true;
            }
        	else {
        		$data['value'] = false;
        	}
            if ($id >= 0) {
                $data['id'] = $id;
                $this->interstitialads_model->updateInterstitialAds($lang, $data);
            } else {
                $this->interstitialads_model->addInterstitialAds($lang, $data);
            }
        }
        if ($lang == 0)
            redirect(base_url().'admin/interstitialads');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/interstitialads');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/interstitialads');
    }

    function deletescreen($lang=0) {
        $id = $this->uri->segment(4);
        $this->interstitialads_model->deleteInterstitialAds($lang, $id);
        if ($lang == 0)
            redirect(base_url().'admin/interstitialads');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/interstitialads');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/interstitialads');
    }
}