@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">My Adoptions</div>
                <div class="card-body">
                    <table class="table table-striped" border="1">
                        <tr>
                            <td> <b>adoption Name </th>
                            <td> {{$adoption['id']}}</td>
                        </tr>
                        
                        <tr>
                            <th>Your ID </th>
                            <td>{{$adoption['user_id']}}</td>
                        </tr>
                            <th>Animal ID </th>
                            <td> {{$adoption['animal_id']}}</td>
                        </tr>
                        <tr>
                            <th> Reason </th>
                            <td>{{$adoption['reason']}}</td>
                        </tr>
                        <tr>
                            <td colspan='2'><img style="width:100%;height:100%" src="{{ asset('storage/images/'.$animal->image)}}"></td>
                        </tr>
                        <th>Status</th>
                            <td> {{$adoption['status']}}</td>
                        </tr>
                        
                    </table>
                    <table>
                        <tr>
                            <td><a href="{{route('adoptions.index')}}" class="btn btn-primary" role="button">Back to the
                                    list</a></td>
                            <td><a href="{{ route('adoptions.edit', ['adoption' => $adoption['id']]) }}" class="btn btnwarning">Edit</a></td>
                            <td>
                                <form action="{{ route('adoptions.destroy', ['adoption' => $adoption['id']]) }}" method="post"> @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection