<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

    public function about()
    {
        /* Opcija 1 :

         $name = 'Amra <span style="color: red;">Jukic</span>';

        // sam ovim delim predajemo view-u i ovo IME :
        // return view('about')->with('name', $name);

        uz ovo u about.blade ide :
        <h1>About Me  {{ $name }}</h1>
        */


        /* Opcija 2 :

        ako promenljive predajemo kao niz :
         return view('about')->with([

            'first' => 'Amra',
            'last' => 'Jukic',
        ]);
    }

        uz ovo u about.blade ide :
        <h1>About Me  {{ $first }} {{ $last }} </h1>
        */

        /* Opcija 3 :

        ako definisemo niz i promenljive smestamo u taj niz
        $data = [];
        $data['first'] = 'Amra';
        $data['last'] = 'Jukic';
        return view('about', $data);

        uz ovo u about.blade ide :
        <h1>About Me  {{ $first }} {{ $last }} </h1>
    }
        */

        // Opcija 4 :

        $first = 'Amra';
        $last = 'Jukic';
        return view('about', compact('first', 'last'));
    }

    public function contact()
    {
        return view('contact');

    }

}