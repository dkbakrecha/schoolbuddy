<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsContent extends Model {

    public $table = 'cms_content';
    public $fillable = ['title', 'unique_key', 'body'];

}
