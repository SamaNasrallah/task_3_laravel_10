<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{asset('css/styleAd.css')}}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
    <script>
      tinymce.init({
        selector: 'textarea#editor',
      });
    </script>
    <title>Document</title>
    @include('includes.pagStyle')
          
</head>
<body>

    <h1 class="nav nav-tabs" >
        <a href="{{route('course.index')}}" >  Admin  </a> 
    </h1>

    <div class="wrapper">
    <div class="sidebar">
        <ul>
            <li><a href="{{ url('dashboard') }}">Home</a></li>
            <li><a href="{{ route('course.create') }}">Add Course</a></li>
            <li><a href="{{ route('category.create') }}">Add Category</a></li>
            <li><a href="{{ url('/') }}">logout</a></li>
        </ul>
    </div>
</div>


         <!--   الجزء المتغير   -->
    <div class="container">
        @yield('MainContent')   
  </div>     
  
    
</body>
@include('includes.pagjS')
</html>