@extends('layouts.app')

@section('content')
@include('errors.ValidationMessage')
<br><br><br>
{!! Form::open(['url' => 'watches', 'method' => 'post']) !!}
      @include('watches.form', [
                                 $brand_id = null,
                                 $model_id = null ,
                                 $butonText = 'Add'] )

{!! Form::close() !!}
<!-- FORM END HERE -->
@endsection