<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimVaksin extends Model
{
    use HasFactory;

    protected $table = 'claim_vaksin';

    protected $guarded = [];
}
