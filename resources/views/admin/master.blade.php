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
    .pagination > li > a, .pagination > li > span {
        border-radius: 50% !important;
        margin: 0 5px;
        border: 0 !important;
        font-weight: bold !important;
        font-family: cursive, sans-serif !important;
        color: black !important;
    }
    
    .pagination>li.active>a {
        background: red;
        color: white !important;
     }
     
    .pagination {
        margin: 0;
    }
    
    .blog{
        padding: 25px;
    }
    
    .table-striped blog>tbody>tr:nth-child(odd)>td, 
    .table-striped blog>tbody>tr:nth-child(odd)>th {
        background-color: red;
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
    <div class="blog">
        <table class="table table-striped blog">
            <tr>
                <td>
                    Pic1
                </td>
                <td>
                    Content1
                </td>
                <td>
                    User1
                </td>
            </tr>
            <tr>
                <td>
                    Pic2
                </td>
                <td>
                    Content2
                </td>
                <td>
                    User2
                </td>
            </tr>
        </table>
    </div>
        <nav aria-label="Page navigation" class="text-center">
            <ul class="pagination">
               <li><a href="#">Previous</a></li>
               <li class="active"><a href="#">1</a></li>
               <li><a href="#">2</a></li>
               <li><a href="#">3</a></li>
               <li><a href="#">4</a></li>
               <li><a href="#">5</a></li>
               <li><a href="#">Next</a></li>
            </ul>
        </nav>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </footer>
</body>

</html>