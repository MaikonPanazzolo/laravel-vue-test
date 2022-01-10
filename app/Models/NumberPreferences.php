<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberPreferences extends Model
{
    use HasFactory;

    protected $table = 'number_preferences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'number_id',
        'name',
        'value',
    ];

    public function number()
    {
        return $this->belongsTo(Numbers::class, 'number_id');
    }
}
