<h1>Users</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Country</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Bicycles</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td> {{$user->id}}</td>
            <td> {{$user->country->name}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->birth_date}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
            @foreach($user->bicycles as $bicycle)
                <p>{{$bicycle->model}}</p>
                @endforeach
                </td>
        </tr>
    @endforeach
    </tbody>
</table>
