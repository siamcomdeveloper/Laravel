@extends('admin.master')

@section('content')
<div class="container">
    <div class='row'>
        <h3>Form Create Content</h3>
        <form action="{{$url}}" method="POST">
            {{ method_field($method) }}
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <div class="form-group">
              <label for="topic">Topic</label>
              <input type="text" name="topic" class="form-control" placeholder="Topic" value="{{$obj->topic or ''}}">
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" class="form-control" rows="8" cols="40">{{$obj->content or ''}}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>
</div>
@stop