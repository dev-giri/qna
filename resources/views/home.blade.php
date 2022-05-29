
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Start QNA </title>
  
  
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
</head>
<body class="bg-primary text-white">
     
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="d-flex justify-content-center mt-5 mb-3">
          <div class="m-2 p-2 bg-info"><b>PHP</b><p class="mb-0">5 Q/Ans</p></div>
          <div class="m-2 p-2 bg-warning"><b>AJAX</b><p class="mb-0">5 Q/Ans</p></div>
          <div class="m-2 p-2 bg-danger"><b>JQUERY</b><p class="mb-0">5 Q/Ans</p></div>
          <div class="m-2 p-2 bg-success"><b>HTML</b><p class="mb-0">5 Q/Ans</p></div>
        </div>
    </section>

    <header class="masthead bg-primary text-white text-center">
      <form class="invoice-repeater" action="{{ route('join-qna') }}" method="POST" >
                  @csrf
        <div class="container d-flex align-items-center flex-column">
            <input class="form-control form-control-lg" id="qna-name" type="text" name="username" placeholder="Enter your name" required>

            <div class="text-center mt-4">
                <button class="btn btn-xl btn-outline-light next" type="submit">
                    <i class="fas fa-download me-2"></i>
                    Next
                </button>
            </div>
        </div>
      </form>
    </header>

    <div id="footer" class="copyright py-4 text-center text-white">
        <div class="container"><small>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</small></div>
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/js"></script>
</body>

</html>

