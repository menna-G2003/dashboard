<?php
namespace App\Http\Controllers;
//admin/test2/{id}/{name?} شغال علي دا 
class TestController{
    public function test1(){
        return view('test1');
    }
    public function test2($id,$name=""){
        return $id." , ".$name;
        // return view('test2');
    }
}


?>
