<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    public $table = 'site_setting';
    public $fillable = ['title', 'unique_key', 'description'];
}
