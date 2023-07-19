<!-- inherite master template app.blade.php -->
@extends('layouts.app')
<!-- define the content section -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="card">
                <div class="card-header">Create a new Adoption Request</div>
                <!-- display the errors -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul> @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> @endforeach
                    </ul>
                </div><br /> @endif
                <!-- display the success status -->
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br /> @endif
                <!-- define the form -->
                <div class="card-body">
                
                    <form class="form-horizontal" method="POST" action="{{route('adoptions.store') }}" enctype="multipart/form-data">
                        
                    
                        @csrf
                        <div class="col-md-8">
                            <label>User ID</label>
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
                        </div>

                        <div class="col-md-8">
                            <label>Animal ID</label>
                            <input type="text" id="animal_id" name="animal_id" value="" />
                        </div>
                    

                        <div class="col-md-8">
                            <label>Reason</label>
                            <textarea rows="4" cols="50" name="reason"> Reason for the adoption </textarea>
                        </div>
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" />
                            <input type="reset" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection