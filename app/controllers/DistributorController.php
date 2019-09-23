<?php
namespace App\Controllers;
use App\Core\App;
class DistributorController{
        
 public function Index(){
        return view('distributor');
    }

 public function Insert(){
        $success=App::get('database')->distributorInsert($_POST['distribution'],$_POST['name'],$_POST['status'],$_POST['job'],$_POST['contact1'],$_POST['contact2'],$_POST['contact3']);
        echo($success);
    }

}
