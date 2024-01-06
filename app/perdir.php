<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perdir extends Model{
    protected $table = "perdirs";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'no', 'uraian_perdir', 'no_perdir', 'tgl', 'pdf'];
}
