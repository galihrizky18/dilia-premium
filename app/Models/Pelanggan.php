<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'id_pelanggan', 'id_user');
    }

    public function testi(){
        return $this->hasMany(Testimonial::class, 'id_user', 'id_pelanggan' );
    }
}
