<?php

class Bannerimages extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('bannerimages_model');

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
        $data['data']['bannerimages'] = $this->bannerimages_model->getBannerimages($lang);
        $data['main_content'] = 'admin/bannerimages/list';
        $data['activatedMenu'] = 'bannerimages';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function updateBannerImage($lang=0) {
        $id = $this->uri->segment(3);
        
        $data['data']['bannerimage'] = $this->bannerimages_model->getBannerImageById($lang, $id);
        if (strcmp($id, 'new') == 0)
            $data['data']['bannerimage']['id'] = -1;
        $data['main_content'] = 'admin/bannerimages/edit';
        $data['activatedMenu'] = 'bannerimages';
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
    function bannerimagedatasubmit($lang=0) {
        $id = $_POST['id'];
        
        $this->load->library('upload');

        if ($id >= 0 && strlen(str_replace(" ", "", $_POST['imagename'])) != 0)
            $imagename = $_POST['imagename'];
        else
            $imagename = $this->random_string(34);

        $config['upload_path'] = './assets/uploaded/bannerimages/';
        $config['file_name'] = $imagename;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['max_size']     = '10000';
        $config['max_width'] = '2048';
        $config['max_height'] = '2048';
        
        $this->upload->initialize($config);

        $error = null;
        if ( ! $this->upload->do_upload('bannerimagefile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data['imagename'] = $this->upload->data()['file_name'];
        }

        $data['title'] = $_POST['title'];
        $data['link'] = $_POST['link'];

        if ($id >= 0) {
            $data['id'] = $id;
            $this->bannerimages_model->updatebannerimage($lang, $data);
        } else {
            $this->bannerimages_model->addbannerimage($lang, $data);
        }

        //if ($error == null) {
            if ($lang == 0)
                redirect(base_url().'admin/bannerimages');
            else if ($lang == 1) 
                redirect(base_url().'admin_fr/bannerimages');
            else if ($lang == 2) 
                redirect(base_url().'admin_cn/bannerimages');
        /*} else {
            print_r($error);
        }*/
    }
    
    // function newimage($lang=0) {
    //     $imagename = $this->random_string(35);

    //     $config['upload_path'] = './assets/uploaded/bannerimages/';
    //     $config['file_name'] = $imagename;
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['overwrite'] = true;
    //     $config['max_size']     = '10000';
    //     $config['max_width'] = '2048';
    //     $config['max_height'] = '2048';
        
    //     $this->upload->initialize($config);
    //     $error = null;
    //     if ( ! $this->upload->do_upload('newimagefile')) {
    //         $error = array('error' => $this->upload->display_errors());
    //     } else {
    //         $data['imagename'] = $this->upload->data()['file_name'];
    //         $this->bannerimages_model->addBannerImage($lang, $data);
    //     }
    //     //if ($error == null) {
    //         if ($lang == 0)
    //             redirect(base_url().'admin/bannerimages');
    //         else
    //             redirect(base_url().'admin_fr/bannerimages');
    //     // } else {
    //     //     print_r($error);
    //     // }
    // }

    // function bannerimagedatasubmit($lang=0) {
    //     $count = $_POST['count'];

    //     $this->load->library('upload');
    //     if ($count <= 0)
    //         return;

    //     $errors = array();
    //     for ($i=0; $i<$count; $i++) {
    //         $id = $_POST['id'.$i];
    //         if ($id >= 0 && strlen(str_replace(" ", "", $_POST['imagename'.$id])) != 0)
    //             $imagename = $_POST['imagename'.$id];
    //         else
    //             $imagename = $this->random_string(35);
    //         $config['upload_path'] = './assets/uploaded/bannerimages/';
    //         $config['file_name'] = $imagename;
    //         $config['allowed_types'] = 'gif|jpg|png';
    //         $config['overwrite'] = true;
    //         $config['max_size']     = '10000';
    //         $config['max_width'] = '10240';
    //         $config['max_height'] = '7680';
            
    //         $this->upload->initialize($config);

    //         $error = null;
    //         if ( ! $this->upload->do_upload('bannerimagefile'.$id)) {
    //             $error = array('error' => $this->upload->display_errors());
    //             array_push($errors, $error);
    //         } else {
    //             $data['imagename'] = $this->upload->data()['file_name'];
    //         }

    //         if ($error == null) {
    //             if ($id >= 0) {
    //                 $data['id'] = $id;
    //                 $this->bannerimages_model->updateBannerImage($lang, $data);
    //             } else {
    //                 $this->bannerimages_model->addBannerImage($lang, $data);
    //             }
    //         }
    //     }
    //     //if (count($errors) == 0) {
    //         if ($lang == 0)
    //             redirect(base_url().'admin/bannerimages');
    //         else
    //             redirect(base_url().'admin_fr/bannerimages');
    //     /*} else {
    //         print_r($errors);
    //     }*/
    // }

    function deletebannerimage($lang=0) {
        $id = $this->uri->segment(4);
        $filename = $this->bannerimages_model->deleteBannerImage($lang, $id);
        if ($filename != null) {
            unlink('./assets/uploaded/bannerimages/'.$filename);
        }
        if ($lang == 0)
            redirect(base_url().'admin/bannerimages');
        else if ($lang == 1) 
            redirect(base_url().'admin_fr/bannerimages');
        else if ($lang == 2) 
            redirect(base_url().'admin_cn/bannerimages');
    }
}
