<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Quize extends Model
{
    protected $fillable = [
        'title',
        'status',
        'current_question',
        'user_id',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}