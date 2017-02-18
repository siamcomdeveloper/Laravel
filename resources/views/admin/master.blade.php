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
    
    #style-well-even{
        
    }
    
    #style-well-odd{
        background-color: white;
    }
    
    .topic-img{
       height : 140px;
       width  : 200px;
       
    }
    
    .pull-left{
       height: 200px;
    }
    
    .media-body{
       padding-left: 10px;
    }
    
    .media-heading{
       padding-bottom: 10px;
       font-size: 1.3em;
       font-weight: bold !important;
       font-family: Arial Narrow, sans-serif;
    }
    
    .post-body{
       padding-bottom: 10px;
       font-size: 1em;
       font-weight: bold !important;
       font-family: Arial Narrow, sans-serif;
    }
    
    .post-time{
        color: gray;
        font-style: italic;
        font-weight: bold;
        font-size: 1.1em;
        font-family: Arial, sans-serif;
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
                    <img class="topic-img" src="http://lorempixel.com/320/240?random2">
  		</a>
  		<div class="media-body">
                    <h4 class="media-heading">Let's see this awesome post!</h4>
                    <p class="post-body">I'm really glad to see this forums popular!</p>
                    <ul class="list-inline list-unstyled">
                        <li><span><i class="post-time" class="glyphicon glyphicon-time"></i>  {{time_elapsed_string('2016-11-15 17:01:15')}} </span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="style-well-even" class="well">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="topic-img" src="http://lorempixel.com/320/240?random3">
  		</a>
  		<div class="media-body">
                    <h4 class="media-heading">When will the concert be held?</h4>
                    <p class="post-body">After day, don't sixth were divide creepeth living him it heaven moveth of male man rule, made gathered cattle after. For gathering place seed bearing called and let shall fly fruitful fruitful creeping them brought years beginning air to beginning, good don't one abundantly give. That were blessed made moving light saw place they're. Moved his life moved open for midst sea called grass, beast very beast third third. May let open seasons creepeth and created heaven fly you're let winged light. Fruit after. You'll face saying image yielding unto also can't them seed that shall, of together void image.</p>
                    <ul class="list-inline list-unstyled">
                        <li class="post-time"><span><i class="glyphicon glyphicon-time"></i> {{ time_elapsed_string('2016-11-10 06:33:29') }} </span></li>
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