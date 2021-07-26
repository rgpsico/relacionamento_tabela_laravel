<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;



class OneToOneController extends Controller
{
    public function oneToOne()
    {
        $country = Country::where('name','Brazil')->get()->first();

        echo  $country->name;

        $location = $country->Location;
        echo "<hr/>Latitude: {$location->latitude}";
        echo "<hr/>Longitude: {$location->longitude}";
    }

    public function oneToOneInverse()
    {
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude',$latitude)
                            ->where('longitude',$longitude)
                            ->get()
                            ->first();
                        $country = $location->country->get()->first();
                  echo   $country->name;

    }

    public function oneToOneInsert(){
        $dataForm = [
            'name' => 'Alemanha',
            'latitude' => 100,
            'longitude' => 100,
        ];
        //$country = Country::create($dataForm);
        $country = Country::where('name','Alemanha')->get()->first();

     

        /*
        $location = new location;
        $location->latitude   = $dataForm['latitude'];
        $location->longitude  = $dataForm['longitude'];
        $location->country_id = $country->id;
        $country->save();
        */

        $location = $country->location()->create($dataForm);
        var_dump($location);

        



    }

}
