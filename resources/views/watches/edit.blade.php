@extends('layouts.app')
@section('content')
@include('errors.ValidationMessage')
<br>
<a  href="{{  URL::to('watches/') }}" style="font-size: 20px">< Watches</a>
<br><br>
<!-- FORM STARTS HERE -->
<div class="row">
    <div class="col-md-7 col-md-offset-2">
        {!! Form::model($watches, ['method' => 'PATCH', 'action' => ['WatchController@update',$watches->id ]]) !!}

             @include('watches.form', [
                                     $brand_id = $watches->brand_id,
                                     $model_id = $watches->model_id ,
                                     $butonText = 'Update'] )
        {!! Form::close() !!}

    </div>
</div>
<!-- FORM END HERE -->
@endsection