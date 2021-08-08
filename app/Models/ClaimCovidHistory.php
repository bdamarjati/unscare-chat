<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimCovidHistory extends Model
{
    use HasFactory;

    protected $table = 'claim_covid_history';

    protected $guarded = [];
}
