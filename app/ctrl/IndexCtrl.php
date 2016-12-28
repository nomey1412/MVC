<?php
namespace app\ctrl;
use Illuminate\Database\Capsule\Manager as DB;
class IndexCtrl extends \core\imooc
{
    public function index()
    {
        $title = "Holle";
        $this->view("index",['title'=>$title]);
    }
    public function indexs()
    {
        $res = DB::table("girl")->get();

//dump($data);die;
        $this->view('index',['title'=>$res]);
    }
}