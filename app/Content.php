<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Lumen\Auth\Authorizable;

class Content extends Model
{
  protected $primaryKey = 'id_content';
  protected $table = 'content';
  protected $fillable = [
      'title', 'text',
  ];
  public $timestamps = false;

}
