<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class QuizeTaken extends Model
{
    protected $fillable = [
        'user_id',
        'quiz_id',
        'currect_ans',
        'wrong_ans',
        'skip_ans',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function quiz()
    {
        return $this->belongsTo('App\Models\Quize', 'quiz_id');
    }
}