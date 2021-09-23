<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{
    public function __construct() {}

    public function index()
    {
        return "Hello World";
    }
}
