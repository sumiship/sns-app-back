<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return $items;
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        Person::create($form);
        return;
    }
}
