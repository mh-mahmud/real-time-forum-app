<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName() {
        // return 'slug';
        return 'id';
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute() {
        return asset("api/queestion/$this->slug");
    }
}
