<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class History extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_history');
    }


    public function index_get()
    {
        $id_history = $this->get('id');
        if ($id_history == null) {
            $data = $this->M_history->get_data();
            $this->response($data, RestController::HTTP_OK);
        } else {
            $data = $this->M_history->get_data($id_history);
            if ($data) {
                $this->response($data, RestController::HTTP_OK);
            } else {
                $this->response(['status' => FALSE, 'message' => 'Not Found'], RestController::HTTP_NOT_FOUND);
            }
        }
    }
}
        
    /* End of file  History.php */
