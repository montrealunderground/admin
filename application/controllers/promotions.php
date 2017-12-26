<?php

class Promotions extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('promotions_model');

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
        $this->load->model('shoppingmalls_model');
        $this->load->model('stores_model');

        $promotions = $this->promotions_model->getPromotions($lang);
        for ($i=0; $i<count($promotions); $i++) {
            $promotions[$i]['mallname'] = $this->shoppingmalls_model->getShoppingmallById($lang, $promotions[$i]['mallid'])['name'];
            $promotions[$i]['storename'] = $this->stores_model->getStoreById($lang, $promotions[$i]['storeid'])['name'];
        }

        $data['data']['promotions'] = $promotions;
        $data['main_content'] = 'admin/promotions/list';
        $data['activatedMenu'] = 'promotions';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function updatePromotion($lang=0) {
        $id = $this->uri->segment(3);

        $this->load->model('shoppingmalls_model');
        $this->load->model('stores_model');
        
        $promotion = $this->promotions_model->getPromotionById($lang, $id);

        if (isset($promotion['mallid']))
            $promotion['mallname'] = $this->shoppingmalls_model->getShoppingmallById($lang, $promotion['mallid'])['name'];
        if (isset($promotion['storeid']))
            $promotion['storename'] = $this->stores_model->getStoreById($lang, $promotion['storeid'])['name'];

        $data['data']['promotion'] = $promotion;

        $data['data']['malls'] = $this->shoppingmalls_model->getMallnamelist($lang);
        $data['data']['stores'] = $this->stores_model->getStorenamelist($lang);

        if (strcmp($id, 'new') == 0)
            $data['data']['promotion']['id'] = -1;
        $data['main_content'] = 'admin/promotions/edit';
        $data['activatedMenu'] = 'promotions';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

// function random_string($length) {
//     $key = '';
//     $keys = array_merge(range(0, 9), range('a', 'z'));

//     for ($i = 0; $i < $length; $i++) {
//         $key .= $keys[array_rand($keys)];
//     }

//     return $key;
// }

    function promotiondatasubmit($lang=0) {
        $id = $_POST['id'];
        
        $this->load->library('upload');

        if ($id >= 0 && strlen(str_replace(" ", "", $_POST['imagename'])) != 0)
            $imagename = $_POST['imagename'];
        else
            $imagename = $this->random_string(32);

        $config['upload_path'] = './assets/uploaded/promotions/';
        $config['file_name'] = $imagename;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['max_size']     = '10000';
        $config['max_width'] = '2048';
        $config['max_height'] = '2048';
        
        $this->upload->initialize($config);

        $error = null;
        if ( ! $this->upload->do_upload('promotionimagefile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data['imagename'] = $this->upload->data()['file_name'];
        }

        $mallname = $_POST['mallname'];
        $storename = $_POST['storename'];

        $this->load->model('shoppingmalls_model');
        $this->load->model('stores_model');

        $data['mallid'] = $this->shoppingmalls_model->getIdByname($lang, $mallname);
        $data['storeid'] = $this->stores_model->getIdByname($lang, $storename);
        $data['amount'] = $_POST['amount'];
        $data['period'] = $_POST['period'];
        $data['latitude'] = $_POST['latitude'];
        $data['longitude'] = $_POST['longitude'];
        $data['description'] = $_POST['description'];
        $data['contact'] = $_POST['contact'];
        $data['link'] = $_POST['link'];

        if ($id >= 0) {
            $data['id'] = $id;
            $this->promotions_model->updatePromotion($lang, $data);
        } else {
            $this->promotions_model->addPromotion($lang, $data);
        }

        if ($lang == 0)
            redirect(base_url().'admin/promotions');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/promotions');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/promotions');
    }

    function deletePromotion($lang=0) {
        $id = $this->uri->segment(4);
        $filename = $this->promotions_model->deletePromotion($lang, $id);
        if ($filename != null) {
            unlink('./assets/uploaded/promotions/'.$filename);
        }
        if ($lang == 0)
            redirect(base_url().'admin/promotions');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/promotions');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/promotions');
    }
}
