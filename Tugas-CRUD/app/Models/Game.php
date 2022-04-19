<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'game';
    protected $guarded = [];
    protected $fillable = 
        [
            'studio_id',
            'title',
            'deskripsi',
            'tahun',
            'genre'
        ];
    public function Studio()
    {
        return $this->belongsTo(Studio::class);
    }
}
