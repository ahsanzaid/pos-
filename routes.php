<?php

//Page
$router->get('pos','PagesController@Index');
//Account
$router->get('pos/account','AccountController@Login');
$router->get('pos/account/register','AccountController@Register');
$router->get('pos/account/forget','AccountController@ForgetPassword');
$router->get('pos/account/logout','AccountController@Logout');
//Product
$router->get('pos/product','ProductController@Index');//
$router->get('pos/productSearch','ProductController@Search');
$router->get('pos/productapiSearch','ProductController@apiSearch');
$router->post('pos/productInsert','ProductController@Insert');
$router->post('pos/productUpdate','ProductController@Update');
$router->post('pos/productDelete','ProductController@Delete');
//Distribution
$router->get('pos/distribution','DistributionController@Index');//distributions/get_all_distributions
$router->get('pos/distributionAll','DistributionController@Getall');//distributionInsert
$router->post('pos/distributionInsert','DistributionController@Insert');//t
//$router->post('pos/distributionInsert','DistributionController@distributionInsert');
//Invoice
$router->get('pos/invoice','InvoiceController@Index');
$router->post('pos/invoiceGenerate','InvoiceController@Generate');
//test
$router->get('pos/test','InvoiceController@Test');


$router->get('pos/distributor','DistributorController@Index');
$router->post('pos/distributorInsert','DistributorController@Insert');












?>

