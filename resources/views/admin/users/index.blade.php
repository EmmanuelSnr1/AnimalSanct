@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user['id']}}</td>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{implode (',',$user->roles()->get()->pluck('name')->toArray())}}</td>

                                <td><a href="{{route('users.show', ['user' => $user['id'] ] )}}"
                                        class="btn btnprimary">Details</a></td>
                                @can('edit-users')
                                <td><a href="{{ route('users.edit', ['user' => $user['id']]) }}"
                                        class="btn btnwarning">Edit</a></td>
                               

                                <td>
                                    <form
                                        action="{{ action([App\Http\Controllers\UsersController::class, 'destroy'], ['user' => $user['id']]) }}"
                                        method="post">
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