<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acesso;

class Predio extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function acessos(){
        return $this->hasMany(Acesso::class);
    }
}
