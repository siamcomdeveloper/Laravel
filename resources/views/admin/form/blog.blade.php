@extends('admin.master')

@section('content')
<div class="container">
    <div class='row'>
        <form>
            <div class="form-group">
              <label for="topic">Topic</label>
              <input type="text" class="form-control" placeholder="Topic">
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <textarea class="form-control" rows="8" cols="40"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>
</div>
@stop