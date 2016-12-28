<?php
namespace app\ctrl;
use Illuminate\Database\Capsule\Manager as DB;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data = "Holle view";
        $title = "Holle";
        $this->view("index",['title'=>$title]);
    }
    public function indexs()
    {
        $res = DB::table("girl")->get();

//dump($data);die;
        $this->view('index',['data'=>$res]);
    }
}