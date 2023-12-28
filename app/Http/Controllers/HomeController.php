<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()

    {

        $viewData = [];

        $viewData["title"] = __('Home Page - Online Store');

        return view('home.index')->with("viewData", $viewData);
    }



    public function about()

    {

        $viewData = [];

        $viewData["title"] = "About us - Online Store";

        $viewData["subtitle"] = __('About us');

        $viewData["description"] = __('This is an about page');

        $viewData["author"] = "Developed by: FirstName LastName";

        return view('home.about')->with("viewData", $viewData);


    }
}
