@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20 ">
            <div class="card">
                <div class="card-header">Display all Adoptions</div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Adoption ID</th>
                                <th scope="col">User ID</th>
                                <th scope="col">Animal ID</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($adoptions as $adoption)
                            <tr>
                                <td>{{$adoption['id']}}</td>
                                <td>{{$adoption['user_id']}}</td>
                                <td>{{$adoption['animal_id']}}</td>
                                <td>{{$adoption['reason']}}</td>
                                <td>{{$adoption['status']}}</td>

                                <td><a href="{{route('adoptions.index', ['adoption' => $adoption['id'] ] )}}" class="btn btnprimary">Details</a></td>
                                @can('edit-users')
                                <td><a href="{{ route('adoptions.edit', ['adoption' => $adoption['id']]) }}" class="btn btnwarning">Edit</a></td>
                                @endcan
                                <td><a href="{{ route('adoptions.index', ['adoption' => $adoption['id']]) }}" class="btn btnwarning">Other Option</a></td>


                                <td>
                                    @can('delete-users')
                                    <form action="{{ action([App\Http\Controllers\AdoptionsController::class, 'destroy'], ['adoption' => $adoption['id']]) }}" method="post">
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