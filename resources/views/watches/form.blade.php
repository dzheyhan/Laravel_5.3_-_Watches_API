<div class="form-group {{ $errors->has('brand_id') ? ' has-error' : '' }}">
       {!! Form::label('brand', 'Brands') !!}
       {!! Form::select('brand_id', $brands, $brand_id , ['class'=>'form-control','id'=>'brand_select','multiple']) !!}
    </div>

    <div class="form-group {{ $errors->has('model_id') ? ' has-error' : '' }} " >
       {!! Form::label('model', 'Model') !!}
       {!! Form::select('model_id', $models, $model_id , ['class'=>'form-control','id'=>'model_select','multiple']) !!}

    </div>

    <div class="form-group {{ $errors->has('movement') ? ' has-error' : '' }}">
       {!! Form::label('movement', 'Movement') !!}
       {!! Form::text('movement', null,  ['class' => 'form-control ']) !!}
    </div>

    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
       {!! Form::label('gender', 'Gender') !!}
       {!! Form::text('gender', null,  ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($butonText,['class'=>'btn btn-primary form-control'])  !!}
    </div>