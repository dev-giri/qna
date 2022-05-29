
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard </title>
  
  
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
</head>
<body class="bg-primary text-white">
    

    <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <p class="masthead-subheading font-weight-light mb-0"><b>Dashboard </b></p><br><br><br>
                <b>ALL PREVIOUS RESULT</b>
                <table class="table table-hover result-table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">ID</th>
                      <th scope="col">Correct Ans</th>
                      <th scope="col">Wrong Ans</th>
                      <th scope="col">Skip Ans</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($takens as $key => $taken)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>00000{{$taken->id}}</td>
                      <td>{{$taken->currect_ans}}</td>
                      <td>{{$taken->wrong_ans}}</td>
                      <td>{{$taken->skip_ans}}</td>
                      <td>{{$taken->created_at}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light next" href="/create-test">
                        <i class="fas fa-download me-2"></i>
                        Start a new test
                    </a>
                </div>
            </div>
        </header>
    
    
    <div id="footer" class="copyright py-4 text-center text-white">
        <div class="container"><small>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</small></div>
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/js"></script>
</body>

</html>

