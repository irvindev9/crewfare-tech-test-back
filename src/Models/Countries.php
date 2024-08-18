<?php

namespace App\Models;

use App\Models\Country;

interface CountriesInterface {
  public function getAllCountries();
  public function getTopBy($key, $limit = 10, $order = 'desc');
  public function getByRegion($region, $limit = 10);
  public function getAllCountriesNames();
}

class Countries implements CountriesInterface {
  private $countries = [];

  public function __construct() {
    $this->getAllCountries();
  }

  public function getAllCountries() {
    $countries = json_decode(file_get_contents("https://restcountries.com/v3.1/all"), true);
    foreach ($countries as $country) {
      $this->countries[] = new Country($country);
    }
  }

  public function getTopBy($key, $limit = 10, $order = 'desc') {
    $countries = $this->countries;
    usort($countries, function($a, $b) use ($key, $order) {
      if ($a->$key == $b->$key) {
          return 0;
      }

      if ($order == 'asc') {
        return ($a->$key < $b->$key) ? -1 : 1;
      }

      return ($a->$key > $b->$key) ? -1 : 1;
    });
    return array_slice($countries, 0, $limit);
  }

  public function getByRegion($region, $limit = 10) {
    $countries = $this->countries;
    $filtered = array_filter($countries, function($country) use ($region) {
      return $country->region == $region;
    });
    return array_slice($filtered, 0, $limit);
  }

  public function getAllCountriesNames() {
    $countries = $this->countries;
    $names = array_map(function($country) {
      return $country->name;
    }, $countries);
    return $names;
  }

  public function getCountry($name) {
    $countries = $this->countries;
    $country = array_filter($countries, function($country) use ($name) {
      return $country->name == $name;
    });
    return array_shift($country);
  }
}