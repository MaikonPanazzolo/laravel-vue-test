<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'name',
        'document',
        'status',
    ];

    public function numbers()
    {
        return $this->hasMany(Numbers::class, 'customer_id');
    }

    public function number_preferences()
    {
        return $this->hasManyThrough(NumberPreferences::class, Numbers::class, 'customer_id', 'number_id');
    }
}
