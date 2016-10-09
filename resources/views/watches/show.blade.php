@extends('layouts.app')
@section('content')
<div class="row" style="height:130px">
    <div class="col-md-12" style="padding-top: 35px">
        <strong>
            <a  href="{{  URL::to('watches/') }}" style="font-size: 20px">< Watches</a>
        </strong>
    </div>
</div>
<div class="row">
  <div class="col-md-6 col-sm-6">
    <img src="http://dummyimage.com/600x400/919191/858585" alt="image" class="img-thumbnail">
  </div>
  <div class="col-md-6 col-sm-6">
   <div class="col-md-10 col-md-offset-2">
        <p style="font-size: 25px"><b>ID: </b>{{ $watches->id }}</p>
        <p style="font-size: 25px"><b>Brand: </b>{{ $watches->brand->brand }}</p>
        <p style="font-size: 25px"><b>Model: </b>{{ $watches->model->model }}</p>
        <p style="font-size: 25px"><b>Movement: </b>{{ $watches->movement }}</p>
        <p style="font-size: 25px"><b>Gender: </b>{{ $watches->gender }}</p>
    </div>
   </div>
</div>




@endsection