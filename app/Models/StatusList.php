<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusList extends Model
{
    protected $table = "status_list";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
