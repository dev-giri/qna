<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Question extends Model
{
    protected $fillable = [
        'quiz_id',
        'question',
        'correct_answer',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function quiz()
    {
        return $this->belongsTo('App\Models\Quize', 'quiz_id');
    }
}