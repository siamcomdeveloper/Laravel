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
        @foreach($posts as $post)
            <div id="style-well{{$post['id']%2}}" class="well">
                <div class="row">
                    <div class="column1 col-lg-2">
                            <img class="topic-img" src="{{ $post['image_url'] }}">
                    </div>
                    <div class="column2 col-lg-8">
                        <h4 class="media-heading">{{ $post['title'] }}</h4>
                        <p class="post-body">{{ $post['body'] }}</p>
                        <p class="post-time"><span><i class="glyphicon glyphicon-time"></i> {{time_elapsed_string($post['created_at'])}}</span></li>
                    </div>
                    <div class="column3 col-lg-2">
                        <table class="table">
                            <tr><img class="avatar-img img-circle" src="{{ $authors[($post['author_id']-1)]['avatar_url'] }}"></tr>
                            <tr><h4 class="name">{{ $authors[($post['author_id']-1)]['name'] }}</h4></tr>
                            <tr><h4 class="role">{{ $authors[($post['author_id']-1)]['role'] }}</h4></tr>
                            <tr><p class="place"><span><i class="glyphicon glyphicon-map-marker"></i>{{ $authors[($post['author_id']-1)]['place'] }}</span></p></tr>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
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