<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable=['title', 'description', 'author', 'cover', 'created_at', 'updated_at'];

    public function scopeJumlahBuku($query)
    {
        return $query->count();
    }
}
