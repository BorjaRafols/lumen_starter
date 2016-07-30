<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get($id)
    {
        return "Here's the user ";
    }

    public function all()
    {
        return "list of users";
    }

    //
}
