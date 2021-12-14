<?php

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('liberAcademy');
});


//Route of created of client
Route::post('/cliente/st', function (Request $request) {
    Cadastro::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'phone' => $request->phone,
        'cidade' => $request->city,
    ]);
    return "Cadastrado com Sucesso!";
});

Route::get('/cliente/show/{id}', function($id) {
    return Cadastro::find($id);
});

//select all from 
Route::get('/cliente/index', function() {
    return Cadastro::all();
});

