
<x-layout>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-4">
                <div class="card-header">
                    <h3>All Catagories</h3>
                </div>
                <form action="/create" method="POST" class="p-3 row">
                    @csrf
                    <div class="col-sm-10">
                    <input type="text" name="name" placeholder="Enter new category name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-outline-success col-sm-2 col-form-label">Create</button>
                </form>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $ind = 1 ?>
                            @foreach ($categories as $c)
                            
                            <tr>
                                <td>{{$ind++}}</td>
                                <td>{{$c->name}}</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{$c->id}}">EDIT</a>
                                    <a href="" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$c->id}}">DELETE</a>
                                    <x-model :c="$c" />
                                    <x-model-edit :c="$c" />
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>