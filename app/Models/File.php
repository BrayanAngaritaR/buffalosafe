<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	protected $fillable = [
		'name',
		'type',
		'extension',
		'url',
		'user_id'
	];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
