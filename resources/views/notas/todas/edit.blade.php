@extends('layouts.app')
 
@section('content')
{!! Form::open(['action' => ['NotasController@update', $nota->id],'method' => 'PATCH'])!!}
{{Form::token()}}
<div class="card text-center mx-auto" style="width:250px;">
  <div class="card-header">
    <input type="text" name="titulo" class="form-control" value="{{$nota->titulo}}">
  </div>
  <div class="card-body">
    <textarea name="texto" class="form-control" id="" rows="6">{{$nota->texto}} </textarea>
  </div>
  <div class="card-footer text-muted small">
  {{$nota->update_at}}
  
		<a href="{{URL::action('NotasController@edit',$nota->id)}}">
		<button type="submit" class="btn btn-info btn-sm float-right"><i class="fas fa-save"></i></button>
		</a>
		
		<a href="{{URL::action('NotasController@index')}}">
		<button type="button" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-window-close"></i></button>
		</a>
  
  </div>
</div>
{!! Form::close() !!}
@endsection