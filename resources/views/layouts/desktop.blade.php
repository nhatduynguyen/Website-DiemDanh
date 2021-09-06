<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/images/favicon.ico') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">  <!--lich -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ asset('public/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link href="/{!! url('public/css/bootstrap.min.css') !!}" type="text/css" rel="stylesheet" />
	  <link href="/{!! url('public/css/dataTables.bootstrap.min.css') !!}" type="text/css" rel="stylesheet" />
	  <link href="/{!! url('public/css/bootstrap-custom.css') !!}" type="text/css" rel="stylesheet" />
    
              
    <!-- -------------- -->

    <title>HỆ THỐNG QUẢN LÝ ĐIỂM DANH</title>
  </head>
  <body>

    @yield('content')
   
   @include('client.blocks.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- thoi khoa bieu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--   slidebar -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <link href="/{!! url('public/css/bootstrap.min.css') !!}" type="text/css" rel="stylesheet" />
	<link href="/{!! url('public/css/dataTables.bootstrap.min.css') !!}" type="text/css" rel="stylesheet" />
	<link href="/{!! url('public/css/bootstrap-custom.css') !!}" type="text/css" rel="stylesheet" />

    <!-- RESOURES DATE/CALENDAR-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  
  
   
  
  <!--table /filter table-->
  <script src="http://tablefilter.free.fr/TableFilter/tablefilter_all_min.js"></script>
  <script src="http://tablefilter.free.fr/TableFilter/filtergrid.css"></script>
  


 
  <script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.js"></script>
  
    @yield('js')
  </body>
</html>