<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Survey extends Model
{

    public $timestamps = false;
    use HasFactory;
    protected $table = 'data';

    protected $fillable = [
        'rab',
        'survey_name',
        'survey_path'


    ];



}
