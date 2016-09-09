<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PDF</title>
        <link rel="stylesheet" href="{{elixir('/assets/css/bootstrap.min.css')}}">
    </head>
<body>
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
</body>
</html> 


