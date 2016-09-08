@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Servidor</div>

                <div class="panel-body">
                    {!! Form::open(array('action'=>'FunciController@saveServidor')) !!}

                    {!! csrf_field() !!}

                    {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}

                    {{ Form::text('nome', null, array('placeholder'=>'Seu nome...', 'class'=>'form-control')) }}

                    {{ Form::label('cpf', 'CPF', array('class'=>'control-label')) }}

                     {{ Form::text('cpf', null, array('placeholder'=>'000.000.000-00', 'class'=>'form-control')) }}

                     {{ Form::label('dt_nascimento', 'Data Nascimento', array('class'=>'control-label')) }}

                     {{ Form::date('dt_nascimento', null, array('placeholder'=>'00/00/0000', 'class'=>'form-control')) }}

                     {{Form:: label('sexo', 'Sexo', array('class'=>'control-label'))}}

                     {{Form:: label('sexo', 'Feminino', array('class'=>'control-label'))}}

                     {{Form:: radio('sexo','Feminino')}}

                     {{Form:: label('sexo', 'Masculino', array('class'=>'control-label'))}}

                     {{Form:: radio('sexo','Masculino')}}

                     {{Form::label('nomePai', 'Nome do Pai', array('class'=>'control-label'))}}

                    {{Form::text('nomePai', null, array('placeholder'=>'Nome do Pai', 'class'=>'form-control')) }}

                    {{Form::label('nomeMae', 'Nome da Mãe', array('class'=>'control-label'))}}

                    {{Form::text('nomeMae', null, array('placeholder'=>'Nome da Mãe', 'class'=>'form-control')) }}

                    {{Form::label('obs', 'Observação', array('class'=>'control-label'))}}

                    {{Form::textarea('obs', null, array('class'=>'form-control'))}}

                    {{ Form::submit('Salvar Alterações', array('class' => 'btn btn-success')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

