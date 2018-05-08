<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'company_name', 'website', 'address'
  ];

  public $timestamps = false;

  public function client()
  {
    return $this->belongsTo('App\Client');
  }
}
