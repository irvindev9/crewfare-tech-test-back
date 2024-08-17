<?php

namespace App\Models;

interface CountryInterface {
  public function getCountry($name);
}

class Country {
  public $name;
  public $tld;
  public $cca2;
  public $ccn3;
  public $cca3;
  public $cioc;
  public $independent;
  public $status;
  public $unMember;
  public $currencies;
  public $idd;
  public $capital;
  public $altSpellings;
  public $region;
  public $subregion;
  public $languages;
  public $translations;
  public $latlng;
  public $landlocked;
  public $borders;
  public $area;
  public $flag;
  public $maps;
  public $population;
  public $gini;
  public $timezones;
  public $continents;

  public function __construct($name) {
    $this->getCountry($name);
  }

  public function getCountry($name) {
    $countries = json_decode(file_get_contents('https://restcountries.com/v3.1/name/' . $name), true);
    $country = $countries[0];
    $this->name = $country['name']['common'];
    $this->tld = $country['tld'][0];
    $this->cca2 = $country['cca2'];
    $this->ccn3 = $country['ccn3'];
    $this->cca3 = $country['cca3'];
    $this->cioc = $country['cioc'];
    $this->independent = $country['independent'];
    $this->status = $country['status'];
    $this->unMember = $country['unMember'];
    $this->currencies = $country['currencies'];
    $this->idd = $country['idd'];
    $this->capital = $country['capital'][0];
    $this->altSpellings = $country['altSpellings'];
    $this->region = $country['region'];
    $this->subregion = $country['subregion'];
    $this->languages = $country['languages'];
    $this->translations = $country['translations'];
    $this->latlng = $country['latlng'];
    $this->landlocked = $country['landlocked'];
    $this->borders = $country['borders'];
    $this->area = $country['area'];
    $this->flag = $country['flags']['png'];
    $this->maps = $country['maps'];
    $this->population = $country['population'];
    $this->gini = $country['gini'];
    $this->timezones = $country['timezones'];
    $this->continents = $country['continents'];
  }


}