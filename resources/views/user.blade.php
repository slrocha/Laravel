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
                                <li id="export-to-pdf"><a href="{{URL::to('getExportPdf')}}">Exportar para PDF</a></li>
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
                                <th>Editar</th>
                                <th>Excluir</th>                      
                            </thead> 
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="{{URL::to('user/edit',array($user->id))}}" class="btn btn-success"> Editar</a></td>
                                    <td><a href="{{URL::to('delete')}}" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir">Excluir</a></td>
                                </tr>
                                @endforeach
                            </tbody>  
                       </table>
                    </div>              
                          <!-- Modal -->
                    <div class="modal fade" id="modalExcluir" role="dialog">
                        <div class="modal-dialog modal-sm">                    
                              <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 lass="modal-title">Deseja Excluir o Servidor?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Sim</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                </div>
                            </div>
                        </div>
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



