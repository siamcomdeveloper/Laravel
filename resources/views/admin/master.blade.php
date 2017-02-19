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
        font-size: 1.1em;
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
    
    #style-well1{
        background-color: white;
    }
    
    #style-well2{
        background-color: #F2F4F6;
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
       font-size: 1.6em;
       font-weight: bold !important;
       font-family: Arial Narrow, sans-serif;
    }
    
    .post-body{
       padding-bottom: 10px;
       font-size: 1.3em;
       font-weight: bold !important;
       font-family: Arial Narrow, sans-serif;
    }
    
    .post-time{
        color: darkgray;
        font-style: italic;
        font-weight: bold;
        font-size: 1.2em;
        font-family: Arial Narrow, sans-serif;
    }
    
    .column1{
        
    }
    
    .column2{
        border-right: solid 1px rgba(0, 0, 0, .1);
    }
    
    .column3{
        
    }
    
    .avatar-img{
       height : 100px;
       width  : 100px;
       display: block;
       margin-right: auto;
       margin-left: auto;
    }
    
    .name{
       margin-top: 20px;
       text-align: center;
       color: red;
    }
    
    .role{
       text-align: center;
       margin-top: 15px;
    }
    
    .place{
       margin-top: 15px;
       text-align: center;
       font-weight: bold;
    }
    
</style>
</head>

<body>
    <header>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        </header>
    <section id="main">
        @yield('content')
    </section>
    <footer>
        <div id="style-well1" class="well">
            <div class="row">
                <div class="column1 col-lg-2">
                        <img class="topic-img" src="http://lorempixel.com/320/240?random2">
                </div>
  		<div class="column2 col-lg-8">
                    <h4 class="media-heading">Let's see this awesome post!</h4>
                    <p class="post-body">I'm really glad to see this forums popular!</p>
                    <p class="post-time"><span><i class="glyphicon glyphicon-time"></i>  {{time_elapsed_string('2016-11-15 17:01:15')}} </span></li>
                </div>
                <div class="column3 col-lg-2">
                    <div class="row">
                        <img class="avatar-img img-circle" src="https://api.adorable.io/avatars/250/jason-bourne">
                        <h4 class="name">Jason Bourne</h4>
                        <h4 class="role">Registered user</h4>
                        <p class="place"><span><i class="glyphicon glyphicon-map-marker"></i>New York</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="style-well2" class="well">
            <div class="row">
                    <div class="column1 col-lg-2">
                        <img class="topic-img" src="http://lorempixel.com/320/240?random3">
                    </div>
                    <div class="column2 col-lg-8">
                        <h4 class="media-heading">When will the concert be held?</h4>
                        <p class="post-body">After day, don't sixth were divide creepeth living him it heaven moveth of male man rule, made gathered cattle after. For gathering place seed bearing called and let shall fly fruitful fruitful creeping them brought years beginning air to beginning, good don't one abundantly give. That were blessed made moving light saw place they're. Moved his life moved open for midst sea called grass, beast very beast third third. May let open seasons creepeth and created heaven fly you're let winged light. Fruit after. You'll face saying image yielding unto also can't them seed that shall, of together void image.</p>
                        <p class="post-time"><span><i class="glyphicon glyphicon-time"></i> {{ time_elapsed_string('2016-11-10 06:33:29') }}</span></p>
                    </div>
                    <div class="column3 col-lg-2">
                        <div class="row">
                            <img class="avatar-img img-circle" src="https://api.adorable.io/avatars/250/zlatan">
                            <h4 class="name">Zlatan Ibrahimović</h4>
                            <h4 class="role">Moderator</h4>
                            <p class="place"><span><i class="glyphicon glyphicon-map-marker"></i>Sweden</span></p>
                        </div>
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
        <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.min.js') }}">
    </footer>
</body>

</html>