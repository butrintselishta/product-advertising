<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;


class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getPriceWithEuroAttribute()
    {
        return number_format($this->price,2) . "€";
    }
    public function getNewPriceWithEuroAttribute()
    {
        return number_format($this->new_price,2) . "€";
    }

    public function getPercentageDiscountAttribute(){
        $discount = $this->price - $this->new_price;
        $percentage = ($discount / $this->price) * 100;
        return intval($percentage) . "%";
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(257)
              ->height(175)
              ->sharpen(10);
    }
}
