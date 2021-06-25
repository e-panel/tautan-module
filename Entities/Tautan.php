<?php

namespace Modules\Tautan\Entities;

use Illuminate\Database\Eloquent\Model;

class Tautan extends Model 
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tautan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 
        'banner', 
        'label', 
        'url', 
        'new_tab', 
        'id_operator'
    ];

    /**
     *  Setup model event hooks
     * 
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = uuid();
        });
    }

    /**
     * Scope a query for UUID.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query, $uuid
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUuid($query, $uuid) 
    {
        return $query->whereUuid($uuid);
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operator() 
    {
        return $this->belongsTo('Modules\Pengguna\Entities\Operator', 'id_operator');
    }
}