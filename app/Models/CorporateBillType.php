<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateBillType extends Model
{
    protected $table = "corporate_bill_type";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
