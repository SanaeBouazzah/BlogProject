<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }
    public function store(Request $request)
    {
      // $data = $request-Validate([
      //   'logo' => 'required',
      //   'favicon' => 'required',
      //   'instagram' => 'required',
      //   'facebook' => 'required',
      //   'phone' => 'required',
      //   'email' => 'required',
      // ]);
      Setting::create($request->all());
      redirect()->route('dashboard.index');
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
