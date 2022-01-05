<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pemain()
    {
        return $this->hasMany(Pemain::class);
    }
}
