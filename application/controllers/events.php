<?php

class Events extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('events_model');

        if( !$this->session->userdata('is_logged_in') ) {
            redirect('admin/login');
        }
    }

    /**
     * This is the controller method that drives the application.
     * After a user logs in, show_main() is called and the main
     * application screen is set up.
     */

    function makedatestring($d) {
        return $d['month']."/".$d['day']."/".$d['year']." ".$d['hour'].":".$d['minute'];
    }

    function index($lang=0) {
        $events = $this->events_model->getEvents($lang, true);
        
        for ($i = 0; $i < count($events); $i++) {
            $start_date = $events[$i]['start_date'];
            $d1 = date_parse($start_date);
            $date1 = mktime($d1['hour'], $d1['minute'], $d1['second'], $d1['month'], $d1['day'], $d1['year']);

            $end_date = $events[$i]['end_date'];
            $d2 = date_parse($end_date);
            $date2 = mktime($d2['hour'], $d2['minute'], $d2['second'], $d2['month'], $d2['day'], $d2['year']);

            $events[$i]['expiredate'] = $this->makedatestring($d1) + " - " + $this->makedatestring($d2);
            
            if (time()>=$date1 && time()<=$date2) {
                $events[$i]['expired'] = false;
            } else {
                $events[$i]['expired'] = true;
            }
        }

        $data['data']['events'] = $events;
        $data['main_content'] = 'admin/events/list';
        $data['activatedMenu'] = 'events';
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function updateEvent($lang=0) {
        $id = $this->uri->segment(3);
        $event = $this->events_model->getEventById($lang, $id);
        
        if (strcmp($id, 'new') == 0) {
            $data['data']['event']['id'] = -1;
        } else {
            $start_date = $event['start_date'];
            $d1 = date_parse($start_date);
            $date1 = mktime($d1['hour'], $d1['minute'], $d1['second'], $d1['month'], $d1['day'], $d1['year']);

            $end_date = $event['end_date'];
            $d2 = date_parse($end_date);
            $date2 = mktime($d2['hour'], $d2['minute'], $d2['second'], $d2['month'], $d2['day'], $d2['year']);

            $event['expiredate'] = $this->makedatestring($d1)." - ".$this->makedatestring($d2);

            if (time()>=$date1 && time()<=$date2) {
                $event['expired'] = false;
            } else {
                $event['expired'] = true;
            }
        }

        $data['data']['event'] = $event;
        $data['main_content'] = 'admin/events/edit';
        $data['activatedMenu'] = 'events';
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

    function parseexpiredaterange($daterangestr) {
        $dates = explode("-", $daterangestr);
        $d1 = date_parse($dates[0]);
        $d2 = date_parse($dates[1]);
        //print_r($d1);
        $dates = array();
        $dates[0] = date("Y-m-d H:m:s", mktime($d1['hour'], $d1['minute'], $d1['second'], $d1['month'], $d1['day'], $d1['year']));
        $dates[1] = date("Y-m-d H:m:s", mktime($d2['hour'], $d2['minute'], $d2['second'], $d2['month'], $d2['day'], $d2['year']));
        return $dates;
    }

    function eventdatasubmit($lang=0) {
        $dates = $this->parseexpiredaterange($_POST['expiredate']);
        $id = $_POST['id'];
        
        $this->load->library('upload');

        if ($id >= 0 && strlen(str_replace(" ", "", $_POST['imagename'])) != 0)
            $imagename = $_POST['imagename'];
        else
            $imagename = $this->random_string(34);

        $config['upload_path'] = './assets/uploaded/events/';
        $config['file_name'] = $imagename;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['max_size']     = '10000';
        $config['max_width'] = '2048';
        $config['max_height'] = '2048';
        
        $this->upload->initialize($config);

        $error = null;
        if ( ! $this->upload->do_upload('eventimagefile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data['imagename'] = $this->upload->data()['file_name'];
        }

        $data['title'] = $_POST['title'];
        $data['subtitle'] = $_POST['subtitle'];
        $data['type'] = $_POST['type'];
        $data['description'] = $_POST['description'];
        $data['start_date'] = $dates[0];
        $data['end_date'] = $dates[1];
        $data['contact'] = $_POST['contact'];
        $data['link'] = $_POST['link'];

        if ($id >= 0) {
            $data['id'] = $id;
            $this->events_model->updateEvent($lang, $data);
        } else {
            $this->events_model->addEvent($lang, $data);
        }

        //if ($error == null) {
            if ($lang == 0)
                redirect(base_url().'admin/events');
            else if ($lang == 1)
                redirect(base_url().'admin_fr/events');
            else if ($lang == 2)
                redirect(base_url().'admin_cn/events');
        /*} else {
            print_r($error);
        }*/
    }

    function deleteEvent($lang=0) {
        $id = $this->uri->segment(4);
        $filename = $this->events_model->deleteEvent($lang, $id);
        if ($filename != null) {
            unlink('./assets/uploaded/events/'.$filename);
        }
        if ($lang == 0)
            redirect(base_url().'admin/events');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/events');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/events');
    }
}
