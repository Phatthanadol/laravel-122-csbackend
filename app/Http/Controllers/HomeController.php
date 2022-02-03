<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showprofile() {
        return "Hello! This is My Profile Page.";
    }
}
