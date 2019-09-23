<?php

namespace App\Controllers;
use App\Core\App;
class InvoiceController{
    
    public function Index(){
        return view('invoice');
    }

    public function Generate(){
        $items = json_decode($_POST['data'],true);
        $counter=1;
        $total = 0.0;
        $no=strval(56565);
        $count = count($items);
        $date = date("d-m-Y");
        $timestamp = time(); 
        $items_con="";
        // invoice
        $invoice = file_get_contents("public/assets/templates/invoice/index.html");
        $invoice = str_replace("INVOICENUMBER",$no, $invoice);
        $invoice = str_replace("TITLE",$no, $invoice);
        $invoice = str_replace("DATE",$date, $invoice);
        // end of invoice
        foreach ($items as $item) {
            if($count  == $counter){
                $items_con = $items_con.'<tr class="item last"><td>'.strval($counter++).'</td><td>'.substr($item['type'],0,3).'  '.$item['name'].'</td><td>'.strval($item['up']).'</td><td>'.strval($item['qty']).'</td><td>'.strval($item['up']*$item['qty']).'</td></tr>';
            }else{
                $items_con = $items_con.'<tr class="item"><td>'.strval($counter++).'</td><td>'.substr($item['type'],0,3).'  '.$item['name'].'</td><td>'.strval($item['up']).'</td><td>'.strval($item['qty']).'</td><td>'.strval($item['up']*$item['qty']).'</td></tr>';
            
            }
        }
        
        $invoice = str_replace("TOTAL",strval(round(InvoiceController::invoiceTotal($items),0)), $invoice);
        $invoice = str_replace("ITEMS",$items_con,$invoice);
        $myfile = fopen($no."-".$date.".html", "w") or die("Unable to open file!");
        fwrite($myfile,$invoice);
        fclose($myfile);       
    }

    public function Test(){
                    
        return view('demandbook');
    }
    private static function invoiceTotal($items){
        $total = 0.0;
        foreach($items as $item){
            $total = $total + $item['up']*$item['qty'];
        }
        return $total;
    }
}