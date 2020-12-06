<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{

  public $timestamps = false;
  protected $fillable = [
    'first_name', 'last_name', 'company_name', 'last_updated_at'
  ];
}
