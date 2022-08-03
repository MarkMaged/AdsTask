<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Ads extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category',
        'type',
        'tags',
        'advertiser',
        'image',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function tags(){
        return $this->hasMany(tags::class);
    }
}
