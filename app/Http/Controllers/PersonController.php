<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use Faker\Core\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PersonController extends Controller
{
    public function create()
    {
        return view('person.create');
    }

    public function store(PersonRequest $request)
    {
        Log::info('Creating user with name ' .$request->all()['name']);
        dd(\Ramsey\Uuid\Uuid::uuid4()->toString());
        $data = $request->all();
        $data['name'] = 'popa';
        dd($data);

        return view('welcome');
    }
}
