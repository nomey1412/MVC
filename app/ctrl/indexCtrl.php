<?php
namespace app\ctrl;
use Illuminate\Database\Capsule\Manager as DB;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data = "Holle view";
        $title = "Holle";
        $this->assign("title",$title);
        $this->assign("data",$data);//传值
        $this->display("index.html");//调用模板
    }
    public function indexs()
    {
        $res = DB::table("girl")->get();
        p($res);
    }
}