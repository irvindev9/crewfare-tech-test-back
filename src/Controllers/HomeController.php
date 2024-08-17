<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Country;

class HomeController extends Controller
{
    public function index()
    {
      // var_dump($_REQUEST['name']);
      $country = new Country('deutschland');
      $this->res($country);
    }
}