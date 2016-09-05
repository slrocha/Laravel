@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Servidor</div>

                <div class="panel-body">
                    {!! Form::open(array('url' => '#')) !!}

                    {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}

                    {{ Form::text('nome', null, array('placeholder'=>'Seu nome...', 'class'=>'form-control')) }}

                    {{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}

                     {{ Form::text('email', null, array('placeholder'=>'Seu e-mail...', 'class'=>'form-control')) }}

                    {{ Form::submit('Enviar Mensagem', array('class' => 'btn btn-default')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

