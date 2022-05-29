<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Question;
use App\Models\Quize;
use App\Models\QuizeTaken;
use App\Models\QuizeTest;
use App\Models\User;

class QnAController extends Controller
{
    public function index(){
        if (Session::has('user_id')){
            if(Session::has('quize_id')){
                return redirect('question');
            }
            return redirect('dashboard');
        } 
        return view('home');
    }

    public function join(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);
        $user = User::create([
            'name' => $request->username
        ]);
        if(isset($user->id)){
            $quize = Quize::create([
                'title' => substr(md5(microtime()),rand(0,26),10),
                'status' => 'Started',
                'current_question' => 1,
                'user_id' => $user->id,
            ]);
            Session::put('quize_id', $quize->id);
            Session::put('user_id', $user->id);

            return redirect('question');
        }
        return redirect('/');
    }

    public function question(){
        if (!Session::has('user_id')) return redirect('/');
        return view('question');
    }

    public function getGuestion(Request $request){
        if (Session::has('user_id') && Session::has('quize_id')){
            $quize = Quize::find(Session::get('quize_id'));
            if($quize->status == 'Started'){
                return Question::select('id','question','option_1','option_2','option_3','option_4')->find($quize->current_question);
            }
           return response()->json(null);
        }
        return response()->json(null);
    }

    public function submitAanswer(Request $request,$id){
        $request->validate([
            'answer' => 'required',
        ]);
        if (Session::has('user_id') && Session::has('quize_id')){
            $user = User::find(Session::get('user_id'));
            $quize = Quize::find(Session::get('quize_id'));
            if($quize->status == 'Started'){
                $question = Question::find($id);
                $test = QuizeTest::create([
                    'user_id' => $user->id,
                    'quiz_id' => $quize->id,
                    'question_id' => $question->id,
                    'selected_answer' => $request->answer,
                ]);
                $update = [];
                if($quize->current_question == 20){
                    $quize->update(['status'=>'Done']);
                }
                $next = $quize->current_question + 1;
                $newQuestion = Question::select('id','question','option_1','option_2','option_3','option_4')->find($next);
                if(isset($newQuestion->id)){
                    $quize->update(['current_question'=>$next]);
                    return $newQuestion;
                }
                
                return response()->json(null);
                
            }
        }
        
        return response()->json(null);
    }

    public function submitSkip(Request $request,$id){
        if (Session::has('user_id') && Session::has('quize_id')){
            $user = User::find(Session::get('user_id'));
            $quize = Quize::find(Session::get('quize_id'));
            if($quize->status == 'Started'){
                $question = Question::find($id);
                $test = QuizeTest::create([
                    'user_id' => $user->id,
                    'quiz_id' => $quize->id,
                    'question_id' => $question->id,
                    'skiped_answer' => 1,
                ]);
                $update = [];
                if($quize->current_question == 20){
                    $quize->update(['status'=>'Done']);
                }
                $next = $quize->current_question + 1;
                $newQuestion = Question::select('id','question','option_1','option_2','option_3','option_4')->find($next);
                if(isset($newQuestion->id)){
                    $quize->update(['current_question'=>$next]);
                    return $newQuestion;
                }
                
                return response()->json(null);
            }
        }
        
        return response()->json(null);
    }

    public function result(Request $request)
    {
        if (Session::has('user_id') && Session::has('quize_id')){
            $quize = Quize::find(Session::get('quize_id'));
            if($quize->status == 'Done'){
                $currect_ans = 0;
                $wrong_ans = 0;
                $skip_ans = 0;

                $answers = QuizeTest::where('user_id',Session::get('user_id'))->where('quiz_id',Session::get('quize_id'))->get();
                foreach ($answers as $answer) {
                  if($answer->skiped_answer == 1){
                    $skip_ans ++;
                  }else{
                    $question = Question::find($answer->question_id);
                    if($question->correct_answer == $answer->selected_answer){
                        $currect_ans ++;
                    }else{
                        $wrong_ans ++;
                    }
                  }
                }
                QuizeTaken::create([
                    'user_id' => Session::get('user_id'),
                    'quiz_id' => Session::get('quize_id'),
                    'currect_ans' => $currect_ans,
                    'wrong_ans' => $wrong_ans,
                    'skip_ans' => $skip_ans,
                ]);
                session()->forget('quize_id');
                return view('result',[
                    'currect_ans' => $currect_ans,
                    'wrong_ans' => $wrong_ans,
                    'skip_ans' => $skip_ans,
                ]);
            }else{
                return redirect('question');
            }
        }else{
            return redirect('/');
        }
    }

    public function dashboard(){
        if (!Session::has('user_id')) return redirect('/');
        $takens = QuizeTaken::where('user_id',Session::get('user_id'))->get();
        return view('dashboard',['takens'=>$takens]);
    }

    public function createTest(){
        if (!Session::has('user_id')) return redirect('/');
        $quize = Quize::create([
            'title' => substr(md5(microtime()),rand(0,26),10),
            'status' => 'Started',
            'current_question' => 1,
            'user_id' => Session::get('user_id'),
        ]);
        Session::put('quize_id', $quize->id);

        return redirect('question');
    }

    

}
