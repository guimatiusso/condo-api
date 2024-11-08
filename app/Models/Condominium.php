<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Condominium extends Model
{
    protected $table = 'condominium';

    protected $fillable = [
        'name', 'adress', 'cnpj', 'phone', 'email', 'unity_quantity'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function admins(): HasMany
    {
        return $this->users()->where('profile', 'admin');
    }
}
