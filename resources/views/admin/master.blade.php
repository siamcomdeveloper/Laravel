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
</style>
</head>

<body>
    <header>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </header>
    <section id="main">
        @yield('content')
    </section>
    <footer>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </footer>
</body>

</html>