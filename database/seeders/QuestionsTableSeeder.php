<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'quiz_id' => '1',
                'question' => 'PHP stands for -',
                'correct_answer' => '1',
                'option_1' => 'Hypertext Preprocessor',
                'option_2' => 'Pretext Hypertext Preprocessor',
                'option_3' => 'Personal Home Processor',
                'option_4' => 'None of the above',
            ),
            1 => 
            array (
                'quiz_id' => '1',
                'question' => 'Who is known as the father of PHP?',
                'correct_answer' => '3',
                'option_1' => 'Drek Kolkevi',
                'option_2' => 'List Barely',
                'option_3' => 'Rasmus Lerdrof',
                'option_4' => 'None of the above',
            ),
            2 => 
            array (
                'quiz_id' => '1',
                'question' => 'Variable name in PHP starts with -',
                'correct_answer' => '2',
                'option_1' => '! (Exclamation)',
                'option_2' => '$ (Dollar)',
                'option_3' => '& (Ampersand)',
                'option_4' => '# (Hash)',
            ),
            3 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which of the following is the default file extension of PHP?',
                'correct_answer' => '1',
                'option_1' => '.php',
                'option_2' => '.hphp',
                'option_3' => '.xml',
                'option_4' => '.html',
            ),
            4 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which of the following is used to display the output in PHP?',
                'correct_answer' => '4',
                'option_1' => 'echo',
                'option_2' => 'write',
                'option_3' => 'print',
                'option_4' => 'Both (a) and (c)',
            ),

            5 => 
            array (
                'quiz_id' => '1',
                'question' => 'Ajax stands for -',
                'correct_answer' => '1',
                'option_1' => 'Asynchronous JavaScript and XML',
                'option_2' => 'Asynchronous JSON and XML',
                'option_3' => 'Asynchronous Java and XML',
                'option_4' => 'Asynchronous JavaScript and XMLHttpRequest',
            ),
            6 => 
            array (
                'quiz_id' => '1',
                'question' => 'What server support Ajax?',
                'correct_answer' => '3',
                'option_1' => 'WWW',
                'option_2' => 'SMTP',
                'option_3' => 'HTTP',
                'option_4' => 'All of the above',
            ),
            7 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which are the triggers present in update panel?',
                'correct_answer' => '4',
                'option_1' => 'PostTrigger and AsyncPostTrigger',
                'option_2' => 'PostBackTrigger and SyncPostBackTrigger',
                'option_3' => 'SyncPostBackTrigger and AsyncPostBackTrigger',
                'option_4' => 'PostBackTrigger and AsyncPostBackTrigger',
            ),
            8 => 
            array (
                'quiz_id' => '1',
                'question' => 'Ajax technologies include -',
                'correct_answer' => '4',
                'option_1' => 'HTML/XHTML and CSS',
                'option_2' => 'XML or JSON',
                'option_3' => 'XMLHttpRequest',
                'option_4' => 'All of the above',
            ),
            9 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which company made Ajax popular?',
                'correct_answer' => '2',
                'option_1' => 'Oracle',
                'option_2' => 'Google',
                'option_3' => 'Microsoft',
                'option_4' => 'Facebook',
            ),

            10 => 
            array (
                'quiz_id' => '1',
                'question' => 'Who developed jQuery, and in which year it was first released?',
                'correct_answer' => '3',
                'option_1' => 'John Richard in 2001',
                'option_2' => 'Mark Bensman in 2004',
                'option_3' => 'John Resig in 2006',
                'option_4' => 'None of the above',
            ),
            11 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which of the following sign is used as a shortcut for jQuery?',
                'correct_answer' => '3',
                'option_1' => 'the % sign',
                'option_2' => 'the & sign',
                'option_3' => 'the $ sign',
                'option_4' => 'the @ sign',
            ),
            12 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which of the following jQuery method is used to hide the selected elements?',
                'correct_answer' => '2',
                'option_1' => 'The hidden() method',
                'option_2' => 'The hide() method',
                'option_3' => 'The visible(false) method',
                'option_4' => 'The display(none) method',
            ),
            13 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which jQuery method is used to set one or more style properties to the selected element?',
                'correct_answer' => '3',
                'option_1' => 'The html() method',
                'option_2' => 'The style() method',
                'option_3' => 'The css() method',
                'option_4' => 'All of the above',
            ),
            14 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which jQuery method used to perform an asynchronous HTTP request?',
                'correct_answer' => '3',
                'option_1' => 'jQuery ajaxSetup() method',
                'option_2' => 'jQuery ajaxSync() method',
                'option_3' => 'jQuery ajax() method',
                'option_4' => 'None of the above',
            ),

            15 => 
            array (
                'quiz_id' => '1',
                'question' => 'What does the abbreviation HTML stand for -',
                'correct_answer' => '1',
                'option_1' => 'HyperText Markup Language',
                'option_2' => 'HighText Markup Language',
                'option_3' => 'HyperText Markdown Language',
                'option_4' => 'None of the above',
            ),
            16 => 
            array (
                'quiz_id' => '1',
                'question' => 'What are the types of lists available in HTML?',
                'correct_answer' => '1',
                'option_1' => 'Ordered, Unordered Lists',
                'option_2' => 'Bulleted, Numbered Lists',
                'option_3' => 'Named, Unnamed Lists',
                'option_4' => 'None of the above',
            ),
            17 => 
            array (
                'quiz_id' => '1',
                'question' => 'Which of the following is correct about HTML?',
                'correct_answer' => '2',
                'option_1' => 'HTML uses User Defined Tags',
                'option_2' => 'HTML uses tags defined within the language',
                'option_3' => 'Both A and B.',
                'option_4' => 'None of the above',
            ),
            18 => 
            array (
                'quiz_id' => '1',
                'question' => 'What is meant by an empty tag in HTML?',
                'correct_answer' => '2',
                'option_1' => 'There is no such concept of an empty tag in HTML',
                'option_2' => 'An empty tag does not require a closing tag',
                'option_3' => 'An empty tag cannot have any content within it',
                'option_4' => 'None of the above',
            ),
            19 => 
            array (
                'quiz_id' => '1',
                'question' => 'What are the attributes used to change the size of an image?',
                'correct_answer' => '1',
                'option_1' => 'Width and height',
                'option_2' => 'Big and Small',
                'option_3' => 'Top and bottom',
                'option_4' => 'None of the above',
            ),

        ));
        
        
    }
}