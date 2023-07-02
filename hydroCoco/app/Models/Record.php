<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pipa;

class Record extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Eager Loading as to alleviate N + 1
    protected $with = ['pipa'];

    public function pipa() {
        return $this->belongsTo(Pipa::class, 'idPipa');
    }
}
