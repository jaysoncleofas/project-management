<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
  protected $fillable = [
    'skype', 'linkedin', 'twitter', 'facebook'
  ];

  public function client()
  {
    return $this->belongsTo('App\Client');
  }
}
