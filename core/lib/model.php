<?php
namespace core\lib;
use Illuminate\Database\Capsule\Manager as Capsule;
class model extends \medoo
{
    public function __construct()
    {
//        $option = conf::all("database");
//        parent::__construct($option);
        $database = conf::all('database');
        $capsule = new Capsule();
        $capsule->addConnection($database);
        $capsule->setAsGlobal(); //important
        $capsule->bootEloquent();
    }
}