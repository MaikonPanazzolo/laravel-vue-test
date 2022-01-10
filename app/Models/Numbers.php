<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numbers extends Model
{
    use HasFactory;

    protected $table = 'numbers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id',
        'number',
        'status',
    ];

    public function number_preferences()
    {
        return $this->hasMany(NumberPreferences::class, 'number_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }
}
