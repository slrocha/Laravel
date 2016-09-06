@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Usuários</div>
                <div class="panel-body">
                    <div class=btn-group>
                        <div class="dropdown">
                            <button type="button" class="btn btn-info toggle-dropdown" data-toggle="dropdown">Exportar <span class="caret"></span></button>                            
                            <ul class="dropdown-menu" role="menu" id="export-menu">
                                <li id="export-to-excel"><a href="{{URL::to('getExportExcel')}}">Exportar para Excel</a></li>
                                <li class="divider"></li>
                                <li id="export-to-pdf"><a href="{{URL::to('htmltopdfview')}}">Exportar para PDF</a></li>
                                <li class="divider"></li>
                                <li id="export-to-csv"><a href="{{URL::to('getExportCSV')}}">Exportar para CSV</a></li>
                                 <li class="divider"></li>
                                <li id="export-to-doc"><a href="{{URL::to('getExportdoc')}}">Exportar para DOC</a></li>
                            </ul>                            
                        </div>
                        <a href="{{URL::to('registerUser')}}" class="btn btn-success" role="button">Cadastrar Servidor</a>  
                    </div>
                    <div class="table-responsive">                        
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
</div>
@endsection



