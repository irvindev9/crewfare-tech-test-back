<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Country;
use App\Models\Countries;

class HomeController extends Controller
{
    public function getTopTen()
    {
      $countries = new Countries();

      $this->res($countries->getTopBy('population', 10, 'desc'));
    }

    public function filterByRegion()
    {
      $region = $_REQUEST['region'];

      $limit = $_REQUEST['limit'] ?? 10;

      $countries = new Countries();

      $this->res($countries->getByRegion($region, $limit));
    }

    public function getCountriesNames()
    {
      $countries = new Countries();

      $this->res($countries->getAllCountriesNames());
    }

    public function getCountry()
    {
      $name = ucfirst($_REQUEST['name']);

      $countries = new Countries();

      $this->res($countries->getCountry($name));
    }
}