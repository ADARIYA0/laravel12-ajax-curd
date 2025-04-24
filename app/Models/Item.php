<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'items';

    protected $primaryKey = 'id';

    protected $keyType = 'inr';

    protected $fillable = ['item_name', 'status'];
}
