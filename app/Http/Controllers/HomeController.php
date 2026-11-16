<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'juan de la cruz';
        $age = 30;
        $programs = [
            ['id' => 1, 'code' => 'BSCS', 'name' => 'BS Computer Science', 'college' => 'College of Computing Studies', 'slot' => '50', 'is_active' => 1],
            ['id' => 2, 'code' => 'BSIT', 'name' => 'BS Information Technology', 'college' => 'College of Computing Studies', 'slot' => '30', 'is_active' => 1],
            ['id' => 3, 'code' => 'BSIS', 'name' => 'BS Information Systems', 'college' => 'College of Computing Studies', 'slot' => '40', 'is_active' => 0],
            ['id' => 4, 'code' => 'BSCpE', 'name' => 'BS Computer Engineering', 'college' => 'College of Engineering', 'slot' => '40', 'is_active' => 1],
            ['id' => 5, 'code' => 'BSEE', 'name' => 'BS Electrical Engineering', 'college' => 'College of Engineering', 'slot' => '35', 'is_active' => 1],
            ['id' => 6, 'code' => 'BSCE', 'name' => 'BS Civil Engineering', 'college' => 'College of Engineering', 'slot' => '45', 'is_active' => 1],
            ['id' => 7, 'code' => 'BSBA', 'name' => 'BS Business Administration', 'college' => 'College of Business', 'slot' => '60', 'is_active' => 1],
            ['id' => 8, 'code' => 'BSA',  	'name'=>		"BS Accountancy",		"college"=>	"College of Business",	"slot"=>	"50",	"is_active"=>	1],
            ['id'=>	9,	"code"=>	"BSN",	"name"=>	"BS Nursing",	"college"=>	"College of Nursing",	"slot"=>	"70",	"is_active"=>	1],
            ['id'=>10, "code"=> "BSED", "name"=> "BS Education", "college"=> "College of Education", "slot"=> "55", "is_active"=> 0],   
        ];
        return view('welcome', compact('name', 'age', 'programs'));
    }
    
    public function apply()
    {
        return view('apply');
    }
    public function sampleform()
    {
        return view('form.form');
    }
        public function submit(Request $request)
    {
        $uri     = $request->path();
        $url     = $request->url();
        $fullUrl = $request->fullUrl();
        $method  = $request->method();
        $ip      = $request->ip();
        // $name = $request->input('name', 'Guest');
        // $age  = $request->input('age', 'Unknown');
        $name    = $request->query('name', '');

        // return "Path: $uri, <br>URL: $url, <br>Full URL: $fullUrl, <br>Method: $method, <br>IP Address: $ip, <br>Name: $name";

        return redirect()->route('home')->with('success', 'Form submitted successfully!');
    }

    public function showProgram($id)
    {
        return 'Program ID: ' . $id;
    }

    public function showProgramCollege($id, $collegeid)
    {
        return 'Program ID: ' . $id . ' College ID: ' . $collegeid;
    }

    public function adminUser($page = 1)
    {
        return 'Page: ' . $page;
    }
}
