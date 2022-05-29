
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Question </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
</head>
<body class="bg-primary text-white">
     
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <p class="masthead-subheading font-weight-light mb-0"><b>Question <span id="questionid">1</span></b></p>
            <p id="question">From which tag descriptive list starts ?</p>
            <div class="qu-ans-list">
                <div class="form-check">
                  <input class="form-check-input custom-control-input" type="radio" name="flexRadioDefault" id="option_1" value="1">
                  <label class="form-check-label custom-control-label green" for="option_1" id="option_1_lable">
                     &lt;LL&gt; 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input custom-control-input" type="radio" name="flexRadioDefault" id="option_2" value="2">
                  <label class="form-check-label custom-control-label green" for="option_2" id="option_2_lable">
                    &lt;DD&gt; 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input custom-control-input" type="radio" name="flexRadioDefault" id="option_3" value="3">
                  <label class="form-check-label custom-control-label green" for="option_3" id="option_3_lable">
                    &lt;DL&gt; 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input custom-control-input" type="radio" name="flexRadioDefault" id="option_4" value="4">
                  <label class="form-check-label custom-control-label green" for="option_4" id="option_4_lable">
                    &lt;SD&gt; 
                  </label>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-warning next" onclick="saveSkip()">
                    <i class="fas fa-download me-2"></i>
                    Skip
                </a>
                <a class="btn btn-xl btn-outline-light next" onclick="saveSubmit()">
                    <i class="fas fa-download me-2"></i>
                    Next
                </a>
            </div>
        </div>
    </header>
    
    
    <div id="footer" class="copyright py-4 text-center text-white">
        <div class="container"><small>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</small></div>
    </div>
    
    <script src="{{ mix('js/app.js') }}" type="text/js" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        var csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var question = 0;
        window.onload = function() {
            
            getQuestion();
            
        }

        function getQuestion(){
            $.ajax({
                type: 'GET',
                url: '/get-question',
                dataType: 'json',
                success: function(data) {
                    if(data.id){
                        question = data.id;
                        $("#questionid").text(data.id);
                        $("#question").text(data.question);
                        $("#option_1_lable").text(data.option_1);
                        $("#option_2_lable").text(data.option_2);
                        $("#option_3_lable").text(data.option_3);
                        $("#option_4_lable").text(data.option_4);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error");
                }
            });
        }

        function saveSkip(){
            if(question == 0) return;
            $('input[name="flexRadioDefault"]').prop('checked', false);
            $.ajax({
                type: 'POST',
                url: '/submit-skip/'+question,
                data: {_token:csrf},
                dataType: 'json',
                success: function(data) {
                    if(data.id){
                        question = data.id;
                        $("#questionid").text(data.id);
                        $("#question").text(data.question);
                        $("#option_1_lable").text(data.option_1);
                        $("#option_2_lable").text(data.option_2);
                        $("#option_3_lable").text(data.option_3);
                        $("#option_4_lable").text(data.option_4);
                    }else{
                        window.location.href = "/result";
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error");
                }
            });
        }
        function saveSubmit(){
            var selected = $('input[name=flexRadioDefault]:checked').val();
            if(question == 0 || !selected) return;
            
            $('input[name="flexRadioDefault"]').prop('checked', false);
            $.ajax({
                type: 'POST',
                url: '/submit-answer/'+question,
                data: {answer:selected,_token:csrf},
                dataType: 'json',
                success: function(data) {
                    if(data.id){
                        question = data.id;
                        $("#questionid").text(data.id);
                        $("#question").text(data.question);
                        $("#option_1_lable").text(data.option_1);
                        $("#option_2_lable").text(data.option_2);
                        $("#option_3_lable").text(data.option_3);
                        $("#option_4_lable").text(data.option_4);
                    }else{
                        window.location.href = "/result";
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error");
                }
            });
        }
        
    </script>
</body>

</html>

