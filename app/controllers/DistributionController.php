<?php

namespace App\Controllers;
use App\Core\App;
class DistributionController{
    
    public function Index(){
        $products=array();
        return view('distribution',['products'=>$products,'status'=>""]);
    }
    //Search Distributions product
    public function Search(){
    $products=App::get('database')->distributionProduct($_GET['distribution']);
        
    }
    public function Insert(){
        if (isset($_POST['name'])){
            $sql = "INSERT INTO distribution (name)VALUES ('".$_POST['name']."')";
            $id=App::get('database')->INSERT_GET_ID($sql);
            echo($id[0]['LAST_INSERT_ID()']);
        }
    }    
    public function Getall(){
        $distributions=App::get('database')->SELECT('distribution');
        foreach ($distributions as $d) {
            echo('<option value="'.$d->id.'">'.$d->name.'</option>');
        }
    }
}


?>