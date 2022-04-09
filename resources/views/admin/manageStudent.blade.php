@extends('admin/master')

@section('content')
        <div class="row">
            <div class="col-10">Manage {{$title}} students</div>
            <div class="col-2">
                <div class="btn-group">
                    <a href="{{route('admin.manage.student.active')}}" class="btn btn-success btn-sm">Active</a>
                    <a href="{{route('admin.manage.student.new')}}"class="btn btn-warning btn-sm">New</a>
                    <a href="{{route('admin.manage.student.passout')}}" class="btn btn-info btn-sm">Passout</a>
                </div>
            </div>
        </div>

        <table class="table table-hovered table-borderd">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>contact</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Joining date</th>
                <th>Address</th>
                <th>Action</th>
            </tr>

            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->contact}}</td>
                    <td>{{$student->father_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->doj}}</td>
                    <td>{{$student->address}},{{$student->city}},{{$student->state}}</td>
                    <td>

                        @if ($student->status != "2")
                        <a href="{{route('admin.passout.student',['id'=>$student->id])}}" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
                        @endif
                        <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn btn-success btn-sm"><i class="bi bi-view-stacked"></i></a>

                        @if ($student->status == "0")
                        <a href="{{route('admin.approve.student',['id'=>$student->id])}}" class="btn btn-info btn-sm"><i class="bi bi-arrow-right-circle-fill"></i></a>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection