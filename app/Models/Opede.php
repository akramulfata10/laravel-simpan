<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opede extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'pic','user_id'];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
