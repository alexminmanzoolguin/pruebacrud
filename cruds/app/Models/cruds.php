<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cruds extends Model
{
    protected $table='cruds';
    protected $fillable=['nombre','cargo'];
    public function User(){
    return $this->belongsTo(User::class);
}
}

