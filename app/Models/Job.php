<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * Only show active jobs
         * Remove from query with withoutGlobalScope('active')
         */
        static::addGlobalScope('active', function(Builder $builder) {
            $builder->where('status', 1);
        });

        /**
         * Default ordering
         * Remove from query with withoutGlobalScope('order')
         */
        static::addGlobalScope('order', function(Builder $builder) {
            $builder->orderBy('order', 'ASC')->orderBy('created_at', 'DESC');
        });
    }


    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'title', 'description', 'department', 'location', 'type', 'extra', 'order',
    ];


}
