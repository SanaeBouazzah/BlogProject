<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'content', 'address'];
    protected $fillable = [ 'logo', 'favicon', 'facebook', 'instagram', 'phone', 'email', 'created_at', 'updated_at', 'deleted_at'];


   public static function checkSettings()
   {
      $settings =Self::all();
      if(is_null($settings)){
        $data = [
          'id' => 1,

        ];
        foreach (config('app.languages') as $key => $value) {
          $data[$key]['title'] = $value;
        }
        dd($data);
      }
      return Self::first();
   }
}
