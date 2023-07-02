<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pipa;

class Record extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pipa() {
        return $this->belongsTo(Pipa::class, 'idPipa');
    }
}
