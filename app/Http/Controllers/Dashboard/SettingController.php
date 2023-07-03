<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }
    public function store(Request $request)
    {
      echo 'Hey';
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update()
    {
      //
    }
    public function destroy(string $id)
    {
        //
    }
}
