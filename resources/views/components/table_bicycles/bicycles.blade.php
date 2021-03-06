<h1>Bicycles</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Users</th>

    </tr>
    </thead>
    <tbody>
    @foreach($bicycles as $bicycle)
        <tr>
            <td> {{$bicycle->id}}</td>
            <td> {{$bicycle->brand}}</td>
            <td>{{$bicycle->model}}</td>
            <td>{{$bicycle->color}}</td>
            <td>{{$bicycle->price}}</td>
            <td>{{$bicycle->created_at}}</td>
            <td>{{$bicycle->updated_at}}</td>
            <td>{{$bicycle->user->first_name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
