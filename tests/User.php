<?php

namespace Zing\QueryBuilder\Tests;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
