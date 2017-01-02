<?php

namespace App;

use Illuminate\Contacts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
   use \Illuminate\Auth\Authenticatable; 
}
