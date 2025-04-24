<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'items';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = ['item_name', 'status'];
}
