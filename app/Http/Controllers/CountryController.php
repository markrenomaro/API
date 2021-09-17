<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CountryController extends Controller
{
  public function getCountryByName(Request $request){
      $name = strtolower($request->input("name"));
      $country = "https://restcountries.eu/rest/v2/name/$name";
      $client = new Client();
      $headers = [
          'Content-type' => 'application/x-www-form-urlencoded'
      ];
      $response = $client->request('GET',$country,
      [
          'headers' => $headers
      ]);
      return $response->getBody();
  }
}
