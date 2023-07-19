@extends('layouts.app')
@section('content')<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">Edit and update the adoption</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
                @endif
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('adoptions.update', ['adoption' =>$adoption['id']]) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="col-md-8">
                            <label>User ID</label>
                            <input type="hidden" id="user_id" name="user_id" value="{{$adoption->user_id}}" />
                        </div>
                        <div class="col-md-8">
                            <label>adoption ID</label>
                            <input type="text" id="adoption_id" name="adoption_id" value="{{$adoption->animal_id}}" />
                        </div>
                        <div class="col-md-8">
                            <label>Status</label>
                            @foreach($adoptions as $adoption)
                            <select name="status[]" value="{{$adoption->status}}">
                                <option >{{$adoption->status}}</option>
                                
                            </select>
                            @endforeach
                        </div>
                        <div class="col-md-8">
                            <label>Reason</label>
                            <textarea rows="4" cols="50" name="description"> {{$adoption->reason}}
                            </textarea>
                        </div>
                        
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" />
                            <input type="reset" class="btn btn-primary" />
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection