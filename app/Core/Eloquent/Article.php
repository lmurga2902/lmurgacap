<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use Sluggable;

    public function resources(){
        return $this->hasMany(Resource::class,'article_id','id');
    }
 
    protected $fillable = ['name', 'description', 'category_id'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public static function boot ()
    {
        static::creating(function ($model){
            $model->create_user=1;
            $model->update_user=1;
        });

        static::updating(function($model){
            $model->update_user=1;
        });

        parent::boot();
    }
}
