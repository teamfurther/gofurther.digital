<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    /**
     * The attributes that are mass assignable
     *
     * @var array<string>
     */
    protected $fillable = [
        'department',
        'description',
        'extra',
        'location',
        'order',
        'slug',
        'title',
        'type',
    ];

    /**
     * The "booting" method of the model.
     */
    protected static function boot(): void
    {
        parent::boot();

        /**
         * Only show active jobs
         * Remove from query with withoutGlobalScope('active')
         */
        static::addGlobalScope('active', function (Builder $builder): void {
            $builder->where('status', 1);
        });

        /**
         * Default ordering
         * Remove from query with withoutGlobalScope('order')
         */
        static::addGlobalScope('order', function (Builder $builder): void {
            $builder->orderBy('order', 'ASC')->orderBy('created_at', 'DESC');
        });
    }

}
