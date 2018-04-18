<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
      'name', 'email', 'mobile', 'note'
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function company()
    {
      return $this->hasOne('App\Company');
    }

    public function social()
    {
      return $this->hasOne('App\Social');
    }
}
