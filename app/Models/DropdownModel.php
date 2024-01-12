<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DropdownModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'dropdowns';
    protected $fillable = ['key', 'value'];
    protected $dates = ['deleted_at'];
}
