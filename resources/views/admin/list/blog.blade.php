@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Topic
                </td>
                <td>
                    Content
                </td>
                <td>
                    Action
                </td>
            </tr>
            @foreach($objs as $obj)
            <tr>
                <td>
                    {{ $obj->id }}
                </td>
                <td>
                    {{ $obj->topic }}
                </td>
                <td>
                    {{ $obj->content }}
                </td>
                <td>
                    
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop