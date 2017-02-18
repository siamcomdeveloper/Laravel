@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Topic
                </th>
                <th>
                    Content
                </th>
                <th>
                    Action
                </th>
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