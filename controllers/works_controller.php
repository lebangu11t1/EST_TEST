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

    public function showCreate()
    {
        $this->render('create');
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            Work::create($_POST);
        }
        header('Location: index.php?controller=works&action=index');
    }

    public function showEdit()
    {
        $work = Work::find($_GET['id']);
        $data = array('work' => $work);
        $this->render('edit', $data);
    }

    public function edit()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            Work::update($id, $_POST);
        }
        header('Location: index.php?controller=works&action=index');
    }
}