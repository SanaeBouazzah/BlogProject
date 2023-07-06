<?php

namespace App\Models;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SettingTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['setting_id', 'locale', 'title', 'content', 'address'];

}
