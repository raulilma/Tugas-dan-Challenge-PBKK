<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;
    protected $table = 'studios';
    protected $guarded = [];
    protected $fillable = 
        [
            'code',
            'name',
            'address',
            'specialty'
        ];
    public function game()
    {
        return $this->hasMany(Game::class);
    }
}
