<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityImage extends Model
{
    protected $fillable = [
        'facility_id',
        'image_path',
        'caption'
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}