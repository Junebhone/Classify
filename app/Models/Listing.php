<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'featured_image',
        'image_one',
        'image_two',
        'image_three',
        'category_id',
        'sub_category_id',
        'child_category_id',
        'title',
        'slug',
        'description',
        'price',
        'price_negotiable',
        'condition',
        'location',
        'country_id',
        'state_id',
        'city_id',
        'phone_number',
        'is_published'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    public function childcategory()
    {
        return $this->belongsTo(ChildCategory::class, 'child_category_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function scopeMaxPrice(Builder $query, $max_price): Builder
    {
        return $query->where('price', '<', ($max_price));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
