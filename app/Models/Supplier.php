<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function barang() {

        return $this->hasMany(Barang::class);

    }
}
