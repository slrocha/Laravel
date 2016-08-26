@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Usuários</div>
                <div class="panel-body">
                	<table class="table table-hover table-bordered user">
                		<thead>
                			<th>ID</th>  	
                			<th>Nome</th> 
                			<th>Email</th>           			
                		</thead> 
                		<tbody>
                			@foreach ($users as $user)
                			<tr>
                				<td>{{$user->id}}</td>
                				<td>{{$user->name}}</td>
                				<td>{{$user->email}}</td>
                			</tr>
                			@endforeach
                		</tbody>               		
                	</table>                 		
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
