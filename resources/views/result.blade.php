
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Result </title>
  
  
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
</head>
<body class="bg-primary text-white">
    

    <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <p class="masthead-subheading font-weight-light mb-0"><b>Result </b></p>

                <table class="table table-borderless result-table">
                  <tbody>
                    <tr>
                      <th class="left-position" scope="row">Correct Ans</th>
                      <td class="right-position">{{$currect_ans}}</td>
                    </tr>
                    <tr>
                      <th class="left-position" scope="row">Wrong Ans</th>
                      <td class="right-position">{{$wrong_ans}}</td>
                    </tr>
                    <tr>
                      <th class="left-position" scope="row">Skip Ans</th>
                      <td class="right-position">{{$skip_ans}}</td>
                    </tr>
                  </tbody>
                </table>

                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light next" href="/dashboard">
                        <i class="fas fa-download me-2"></i>
                        Dashboard
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

