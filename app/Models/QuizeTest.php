<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class QuizeTest extends Model
{
    protected $table = 'quize_test';
    protected $fillable = [
        'user_id',
        'quiz_id',
        'question_id',
        'selected_answer',
        'skiped_answer',
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