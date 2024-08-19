<?php

namespace App\Models;

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

  public function __construct($country) {
    $this->name = $country['name']['common'] ?? null;
    $this->tld = $country['tld'] ?? null;
    $this->cca2 = $country['cca2'] ?? null;
    $this->ccn3 = $country['ccn3'] ?? null;
    $this->cca3 = $country['cca3'] ?? null;
    $this->cioc = $country['cioc'] ?? null;
    $this->independent = $country['independent'] ?? null;
    $this->status = $country['status'] ?? null;
    $this->unMember = $country['unMember'] ?? null;
    $this->currencies = $country['currencies'] ?? null;
    $this->idd = $country['idd'] ?? null;
    $this->capital = $country['capital'] ?? null;
    $this->altSpellings = $country['altSpellings'] ?? null;
    $this->region = $country['region'] ?? null;
    $this->subregion = $country['subregion'] ?? null;
    $this->languages = $country['languages'] ?? null;
    $this->translations = $country['translations'] ?? null;
    $this->latlng = $country['latlng'] ?? null;
    $this->landlocked = $country['landlocked'] ?? null;
    $this->borders = $country['borders'] ?? null;
    $this->area = $country['area'] ?? null;
    $this->flag = $country['flag'] ?? null;
    $this->maps = $country['maps'] ?? null;
    $this->population = $country['population'] ?? null;
    $this->gini = $country['gini'] ?? null;
    $this->timezones = $country['timezones'] ?? null;
    $this->continents = $country['continents'] ?? null;
  }
}