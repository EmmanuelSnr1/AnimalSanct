@extends('layouts.app')
@section('content')<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">Edit and update the animal</div>
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
                    <form class="form-horizontal" method="POST" action="{{ route('animals.update', ['animal' =>$animal['id']]) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="col-md-8">
                            <label>Animal Name</label>
                            <input type="text" name="name" value="{{$animal->name}}" />
                        </div>
                        
                        <div class="col-md-8">
                            <label>Animal Date of birth</label>
                            <input type="text" name="dateofbirth" value="{{$animal->dateofbirth}}" />
                        </div>
                        <div class="col-md-8">
                            <label>Availability</label>
                            <select name="availability" value="{{$animal->availability}}">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>Description</label>
                            <textarea rows="4" cols="50" name="description"> {{$animal->description}}
                            </textarea>
                        </div>
                        <div class="col-md-8">
                            <label>Image</label>
                            <input type="file" name="image" />
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