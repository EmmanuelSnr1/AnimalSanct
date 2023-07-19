@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20 ">
            <div class="card">
                <div class="card-header">Display all animals</div>
                <div class="card-body">
                <p><h3>Attention!!!
                    <br>
                    Please Remember to note the ID of the animal you want to adopt when making an adoption</h3></p>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Description</th>
                                <th scope="col">Animal picture</th>
                                <th scope="col">Availability</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($animals as $animal)
                            <tr>
                                <td>{{$animal['id']}}</td>
                                <td>{{$animal['name']}}</td>
                                <td>{{$animal['dateofbirth']}}</td>
                                <td>{{$animal['description']}}</td>
                                <td> <img src="storage/images/{{$animal['image']}}" width="100px" height="100px" alt="Image" /> </td>
                                <td>{{$animal['Availability']}}</td>

                                <td><a href="{{route('animals.show', ['animal' => $animal['id'] ] )}}" class="btn btnprimary">Details</a></td>
                                @can('edit-users')
                                <td><a href="{{ route('animals.edit', ['animal' => $animal['id']]) }}" class="btn btnwarning">Edit</a></td>
                                @endcan
                                @can('make-adoption')
                                <td><a href="{{ route('adoptions.create', ['adoption' => $animal['id']]) }}" class="btn btnwarning">Adopt</a></td>
                                @endcan

                                <td>
                                    @can('delete-users')
                                    <form action="{{ action([App\Http\Controllers\AnimalController::class, 'destroy'], ['animal' => $animal['id']]) }}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit"> Delete</button>
                                    </form>
                                </td>
                                @endcan

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