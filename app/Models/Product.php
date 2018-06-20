<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'on_sale',
        'rating',
        'sold_count',
        'review_count',
        'price'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];

    /**
     * 与商品SKU关联
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    /**
     * @return string
     */
    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        // 这里 \Storage::disk('public') 的参数 public 需要和我们在 config/admin.php 里配置一致
        // 模版使用 $product->image_url
        // Laravel 的模型访问器会自动把下划线改为驼峰，所以 image_url 对应的就是 getImageUrlAttribute
        return \Storage::disk('admin')->url($this->attributes['image']);
    }
}
