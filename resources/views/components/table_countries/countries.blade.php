<h1>Countries</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Users</th>

    </tr>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td> {{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>
            @foreach($country->users as $user)
                <p>{{$user->first_name}}</p>
                @endforeach
                </td>
        </tr>
    @endforeach
    </tbody>
</table>
