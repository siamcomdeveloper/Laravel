<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Laravel</title>
<style media="screen">
    main{
        padding: 50px;
    }
    /*header{
        padding : 25px;
        background: red;
        color: #FFF;
        text-align: center;
    }
    footer{
        padding: 25px;
        background: blue;
        color: #FFF;
        text-align: center;
    }*/
    section{
        padding: 25px;
    }
    .fl{
        float: left;
    }
    #edit{
        margin-right: 10px;
    }
    
</style>
</head>

<body>
    <header>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    </header>
    <section id="main">
        @yield('content')
    </section>
    <footer>
        <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.min.js') }}">
  </footer>
</body>

</html>