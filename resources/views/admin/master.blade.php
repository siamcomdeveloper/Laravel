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
    
    .well{
       margin: 20px !important;
       box-shadow: 3px 3px 10px darkgray !important;
    }
    
    #style-well-odd{
        //background-color: darkgray;
    }
    
    #style-well-even{
        background-color: white;
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
        <div id="style-well-odd" class="well">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://lorempixel.com/320/240?random2" style="width: 50%; height: 50%">
  		</a>
  		<div class="media-body">
                    <h4 class="media-heading">Receta 1</h4>
                    <p class="text-right">By Francisco</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.</p>
                    <ul class="list-inline list-unstyled">
                        <li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
                        <li>|</li>
                        <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
                        <li>|</li>
                        <li>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="style-well-even" class="well">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://lorempixel.com/320/240?random3" style="width: 50%; height: 50%">
  		</a>
  		<div class="media-body">
                    <h4 class="media-heading">Receta 1</h4>
                    <p class="text-right">By Francisco</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.</p>
                    <ul class="list-inline list-unstyled">
                        <li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
                        <li>|</li>
                        <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
                        <li>|</li>
                        <li>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </li>
                    </ul>
                </div>
            </div>
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