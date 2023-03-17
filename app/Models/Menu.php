<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    private function getParent()
    {
        return Menu::where('parent_id', 0)->get();
    }
    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active'
    ];
}