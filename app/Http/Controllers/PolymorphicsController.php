<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;


class PolymorphicsController extends Controller
{

    public function  polymorphic()
    {
        /*
        $city = City::where('name','Rio de janeiro')->get()->first();
        echo $city->name;

        $comments = $city->comments()->get();
        foreach($comments as $comment)
        {
            echo "<br>{$comment->description}";
        }
        */
        $state = State::where('name','Rio de janeiro')->get()->first();
        echo $state->name;

        $comments = $state->comments()->get();
        foreach($comments as $comment)
        {
            echo "<br>{$comment->description}";
        }

    }

    public function  polymorphicInsert()
    {
        /*
        $city = City::where('name','Rio de janeiro')->get()->first();
        echo $city->name;
  
        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name} ".date('YmdHis'),
        ]);
        var_dump($comment);
      

        $state = State::where('name','Rio de janeiro')->get()->first();
        echo $state->name;
  
        $comment = $state->comments()->create([
            'description' => "New Comment  STATE {$state->name} ".date('YmdHis'),
        ]);

          */

          $country = Country::where('name','Brasil')->get()->first();
          echo $country->name;
    
          $comment = $country->comments()->create([
              'description' => "New Comment  COUNTRY {$country->name} ".date('YmdHis'),
          ]);
  
        var_dump($comment);

    }
 

}
