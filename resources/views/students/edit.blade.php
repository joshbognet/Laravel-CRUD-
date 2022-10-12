@extends('students.master')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Student</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>

        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>First Name:</strong>

                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $student->first_name }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong> Last Name:</strong>

                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $student->last_name }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong> Email:</strong>

                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $student->email }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong> Address:</strong>

                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">
                <img src="/image/{{ $student->image }}" width="300px">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection
