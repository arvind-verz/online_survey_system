<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{

    use SoftDeletes;
	protected $table = 'pages';
    protected $fillable = [
        'unique_id',
    ];

    protected $dates = ['deleted_at'];
}
