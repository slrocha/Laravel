 
    <div class="row">
        <a href="{{ route('htmltopdfview',['download'=>'pdf']) }}">Download PDF</a>
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
    