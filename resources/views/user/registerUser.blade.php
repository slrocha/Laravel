@extends('layouts.app')

@section('content')

<h1> Ola Mundo </h1>
<div class="container">
	 <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Cadastro de Servidor</div>
                <div class="panel-body">
                	{!! Form::open(array('method' => 'post', action => '#')) !!}
                </div>
            </div>
        </div>     
	</div>	
</div>

@endsection