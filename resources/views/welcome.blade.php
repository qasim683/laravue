<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
            <link rel="stylesheet" type="text/css" href="{{asset('css/ap.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           
        </style>
    </head>
    <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
           <a class="navbar-brand" href="#">Navbar</a>
           <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
               aria-expanded="false" aria-label="Toggle navigation"></button>
           <div class="collapse navbar-collapse" id="collapsibleNavId">
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                 <div class="dropdown-menu" aria-labelledby="dropdownId">
                   <a class="dropdown-item" href="#">Action 1</a>
                   <a class="dropdown-item" href="#">Action 2</a>
                 </div>
               </li>
             </ul>
             <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
             </form>
           </div>
         </nav>
    <script type="text/javascript" src="{{asset('js/ap.js')}}"></script>
    </body>
</html>
