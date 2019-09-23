<?php

namespace App\Controllers;
use App\Core\App;
class ProductController{
    
    public function Index(){
        $products=array();
        return view('product',['products'=>$products,'status'=>""]);
    }

    public function Search(){
        $products=App::get('database')->SEARCHLIKE('product','pname',$_GET['pname']);
        return view('product',['products'=>$products]);
    }
    public function Insert(){
        $success=App::get('database')->productInsert($_POST['pname'],round($_POST['rp'],1),$_POST['ptype'],$_POST['size'],$_POST['cname'],$_POST['sh_name']);
        header('Location: product');
    }
    public function Update(){
        $success=App::get('database')->productUpdate($_POST['p_id'],$_POST['pname'],round($_POST['rp'],1),$_POST['ptype'],$_POST['size'],$_POST['cname'],$_POST['sh_name']);
        
        header('Location: product');
    }

    public function apiSearch(){
        $products=App::get('database')->SEARCHLIKE('product','pname',$_GET['pname']);
        echo json_encode($products);
    }
    //$this->status("danger","Success","Product Insert sucessfully")
    private function status($class,$title,$msg){

        return '<div class="sufee-alert alert with-close alert-'.$class.' alert-dismissible fade show">
            <span class="badge badge-pill badge-'.$class.'">'.$title.'</span>
            '.$msg.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>';
    }


}