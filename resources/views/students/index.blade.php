@extends('students.master')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Student Bio</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('student.create') }}"> Create New Student</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Image</th>

            <th>First Name</th>

            <th>Last Name</th>

            <th>Email</th>

            <th>Address</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($students as $student)

        <tr>

            <td>{{ ++$i }}</td>

            <td><img src="/image/{{ $student->image }}" width="100px"></td>

            <td>{{ $student->first_name }}</td>

            <td>{{ $student->last_name }}</td>

            <td>{{ $student->email}}</td>

            <td>{{ $student->address}}</td>

            <td>

                <form action="" method="POST">



                    <a class="btn btn-info" href="{{ route('student.show',$student->id)}}">Show</a>



                    <a class="btn btn-primary" href="{{ route('student.edit',$student->id)}}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>







@endsection
