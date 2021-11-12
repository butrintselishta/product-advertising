<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function parent(){
        return $this->hasOne(Menu::class,'id','parent_id')->orderBy('sort_order');
    }
    public function childrens(){
        return $this->hasMany(Menu::class,'parent_id','id')->orderBy('sort_order');
    }
    public static function tree()
    {
        return static::with(implode('.', array_fill(0, 100, 'childrens')))->where('parent_id', '=', '0')->orderBy('sort_order')->get();
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
