<?php

require_once('controllers/base_controller.php');
require_once('models/work.php');

class WorksController extends BaseController
{
    function __construct()
    {
        $this->folder = 'works';
    }

    public function index()
    {
        $works = Work::all();
        $data = array('works' => $works);
        $this->render('index', $data);
    }

    public function error()
    {
        $this->render('error');
    }
}