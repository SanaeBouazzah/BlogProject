<?php

namespace App\Models;

use App\Models\SettingTranslation;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Setting extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'content', 'address'];
    protected $fillable = [ 'id','logo', 'favicon', 'facebook', 'instagram', 'phone', 'email', 'created_at', 'updated_at', 'deleted_at'];
   public static function checkSettings()
   {
      $settings =Self::all();
      if(count($settings)<1){
        $data = [
          'id' => 1,
        ];
        foreach (config('app.languages') as $key => $value) {
          $data[$key]['title'] = $value;
        }
        Self::create($data);
      }
      return Self::first();
   }
}
