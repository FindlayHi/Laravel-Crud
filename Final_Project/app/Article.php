<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class article extends Model {

    protected $fillable = [

        'title',
        'description',
        'html',
        'created_on',
        'creation_date',
        'modified_by',
        'updated_at'
    ];

    protected $dates = ['creation_date'];


    public function scopePublished($query) {
        $query->where('creation_date','<=', carbon::now());

    }

    public function scopeUnpublished($query) {
        $query->where('creation_date','>', carbon::now());

    }


    public function setPublishedAtAttribute($date){
        $this->attributes['creation_date'] = Carbon::parse($date);
    }

    public function getPublishedAtAttribute($date)
    {
        return new Carbon($date);
    }
    
}