<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ReverseScope;

class Post extends Model
{
  protected $guarded = [];

  protected static function boot()
  {
    parent::boot();

    static::addGlobalScope(new ReverseScope());
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
