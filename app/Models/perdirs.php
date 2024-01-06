<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perdirs extends Model
{
    use HasFactory;
    protected $fillable = ['no','uraian_perdir','no_perdir','tgl','pdf'];
}
