<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pipa extends Model
{
    use HasFactory;
    protected $guarded = 'id';

    public function user() {
        return $this->belongsTo(User::class, 'idOperator');
    }

    public function record() {
        return $this->hasMany(Record::class);
    }

    // public function record() {
    //     return this->belongsTo(Record::class);
    // }
}
