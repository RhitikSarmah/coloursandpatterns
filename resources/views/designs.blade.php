
<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    @foreach($designs as $design)
    <meta name="keywords" content="{{$design->$designs}}"/>
      @endforeach  
    <title>Colours and Patterns- Designs</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
   

<main role="main" style="background-color: #cccccc;">

  <section class="jumbotron text-center fontclass" style="background-color: #282923; color: white;">
    <div class="container">
      <a href="{{route('index')}}" style="cursor:pointer; color: grey;">Back to Home</a>
      <h1>OUR DESIGNS</h1>
      <p>From graphic designing of a small flyer or invite to the complete creation of a new brand, Colours and Patterns can distill the essence and visualization of your ideas and information...</p>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">
      <div class="row">
        @foreach($designs as $design)
          <div class="col-md-3">
              <div class="card mb-3 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" src="{{$design->designs}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" alt="{{$design->designs}}">
                    <div class="card-body">                     
                    </div>
              </div>
          </div>
          @endforeach            
      </div>
        <div class="row justify-content-center" style="margin-top: 30px;">
            <span>{{$designs->links()}}</span> 
        </div>  
    </div>
  </div>

</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
