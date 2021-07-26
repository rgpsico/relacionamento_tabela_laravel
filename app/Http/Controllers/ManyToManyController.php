<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Company;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::where('name','Rio de janeiro')->get()->first();
        echo $city->name;

        $companies = $city->companies;
        foreach($companies as $company)
        {
            echo $company->name;


        }

    }
    public function manyToManyInverse()
    {
        $company = Company::where('name','RG TECH')->get()->first();
        echo "<b>{$company->name} </b><br/>";

        $cities = $company->cities;

        foreach($cities as $city){
            echo "{$city->name} , ";
        }

    }

    public function manyToManyInsert()
    {
        $dataForm = [3,4,5];

        $company = Company::find(1);
        echo "<b>{$company->name} </b><br/>";

        //$company->cities()->attach($dataForm); Sai inserindo os dados 
       // $company->cities()->sync($dataForm); Sicroniza os dados ,

        $company->cities()->detach(3);//remover os dados 
        $cities = $company->cities;
        foreach($cities as $city){
            echo "{$city->name} , ";
        }

    }
}
