@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
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
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop