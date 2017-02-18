@extends('admin.master')

@section('content')
<div class="container">
    <div class='row'>
        <form>
            <div class="form-group">
              <label for="topic">Topic</label>
              <input type="text" class="form-control" id="Topic" placeholder="Topic">
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <textarea class="form-control" id="Content" placeholder="Content">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>
</div>
@stop