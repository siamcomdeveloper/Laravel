<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Laravel</title>
<style media="screen">
    main{
        padding: 50px;
    }
    header{
        padding-left: 20px;
        padding-top: 10px;
    }
    footer{
        padding: 50px;
    }
</style>
</head>

<body>
    <header>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/forums.css') }}">
        <p class="forumsHead">MAQE Forums</p>
        <p class="forumsSubtitle">Subtitle</p>
        <p class="forumsPosts">Posts</p>
    </header>
    <section id="main">
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
    </section>
    <footer>
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