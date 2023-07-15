<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Models\SettingTranslation;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }
    public function store(Request $request)
    {
      Setting::create($request->all());
      return redirect()->route('dashboard.index');
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
