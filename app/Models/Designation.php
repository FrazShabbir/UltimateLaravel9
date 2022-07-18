<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status' ,'code','created_by'];
    public function users(){
        return $this->hasMany('App\Models\User');
    }
    public function creater()
    {
        return $this->belongsTo('App\Models\User','created_by');
    }
    public function updater()
    {
        return $this->belongsTo('App\Models\User','updated_by');
    }
}
