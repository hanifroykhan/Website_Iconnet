<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPISort extends Model
{
    protected $table = 'ppi_table';
    use HasFactory;
    protected $fillable = ['ppi'];
}
