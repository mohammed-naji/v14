<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {

        $name = 'Amal Ezz';
        $stdid = 20192060;

        // $features = [
        //     'feature 1',
        //     'feature 2',
        //     'feature 3',
        //     'feature 4',
        //     'feature 5',
        // ];


        $courses = [
            [
                'id' => 1,
                'name' => 'PHP',
                'price' => 400,
                'hours' => 40,
                'instructor' => 'Ahmed Ali'
            ],
            [
                'id' => 2,
                'name' => 'Laravel',
                'price' => 550,
                'hours' => 60,
                'instructor' => 'Mohammed Naji'
            ],
            [
                'id' => 3,
                'name' => 'Front End',
                'price' => 400,
                'hours' => 40,
                'instructor' => 'Mohammed Naji'
            ],
            [
                'id' => 4,
                'name' => 'UI/UX',
                'price' => 550,
                'hours' => 60,
                'instructor' => 'Asmaa Madi'
            ],
            [
                'id' => 5,
                'name' => 'ASP',
                'price' => 500,
                'hours' => 50,
                'instructor' => 'Waseem Fatayer'
            ]
        ];

        // $courses = Course::All();


        // return view('home')->with('name', $name)->with('stdid', $stdid);
        // return view('home', compact('name', 'stdid'));
        // return view('home', [
        //     'myyyyyyyyname' => $name,
        //     'stdiddddddddd' => $stdid
        // ]);
        // [
        //     'name' => $name,
        //     'stdid' => $stdid
        // ]

        return view('home')->with('courses', $courses);
    }

    public function about()
    {
        return 'about page';
    }

    public function contact()
    {
        return 'contact page';
    }

    public function team()
    {
        return 'team page';
    }

    public function services()
    {
        return 'services page';
    }
}
