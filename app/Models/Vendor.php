<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table='vendor';
    protected $fillable = [
        'nama_mitra',
        'email_mitra',
        'kontak'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
