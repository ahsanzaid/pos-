<?php

namespace App\Controllers;
use App\Core\App;
class PagesController
{
    /**
     * Show the Index page.
     */
    public function Index(){
        return view('index');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
