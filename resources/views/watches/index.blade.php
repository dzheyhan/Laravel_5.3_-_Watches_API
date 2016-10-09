@extends('layouts.app')

@section('content')
<h1 style="padding:35px 0px 10px 0px">All Watches</h1>
    <strong> <h4> <a href="{{ URL::to('watches/create') }}">Add Watch</a> </h4> </strong>
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>#</th>
                <th>Brands</th>
                <th>Model</th>
                <th>Movement</th>
                <th>Gender</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($watches as $watch)
                <th><a href="{{  URL::to('watches/'.$watch->id) }}">{{ $watch->id }}</a> </th>
                <td>{{ $watch->brand->brand }}</td>
                <td>{{ $watch->model->model }}</td>
                <td>{{ $watch->movement }}</td>
                <td>{{ $watch->gender }}</td>
                <td style="width: 78px">
                    <a class="btn btn-small btn-success" href="{{  URL::to('watches/'.$watch->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-small btn-warning" href="{{  URL::to('watches/'.$watch->id.'/edit') }}">Edit</a>
                </td>
                <td style="width: 80px">
                    {{ Form::open(array('url' => 'watches/' . $watch->id , 'class' => 'pull-right')) }}
                           {{ Form::hidden('_method', 'DELETE') }}
                           {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection