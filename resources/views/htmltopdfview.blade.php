 
    <div class="row">
     
        <table>
            <tr>
                <th>Name</th>
                <th>email</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    