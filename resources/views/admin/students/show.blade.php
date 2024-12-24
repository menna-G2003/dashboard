@extends('admin.layout.master')
@section('breadcrumb')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">student</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="/admin/students/create">Add New Teacher</a>
                        </li>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="card">
    @if (Session::has('msg'))
    <div class="alert alert-danger">
        {{Session::get('msg')}}
    </div>
     @endif

    <div class="card-body">
     <h5 class="card-title">student</h5>
     <div class="table-responsive">
        <table 
        id="zero_config"
        class="table table-striped table-bordered">
            <tr>
                <th>code</th>
                <td>{{$student->code}}</td>
            </tr>
            <tr>
                <th>name</th>
                <td>{{$student->name}}</td>
            </tr>
            <tr>
                <th>email</th>
                <td>{{$student->email}}</td>
            </tr>
            <tr>
                <th>password</th>
                <td>{{$student->password}}</td>
            </tr>
            <tr>
                <th>subject</th>
                <td>{{$student->subject}}</td>
            </tr>
            <tr>
                <th>phone</th>
                <td>{{$student->phone}}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>{{$student->department->department_name}}</td>
            </tr>
            <tr>
                <th>photo</th>
                <td><img class="rounded" width="70" height="70" src="{{asset('storage/'.$student->photo)}}"></td>
            </tr>
        </tbody>
        </table>
        <hr>
    </div>
</div>
</div>
</div>
</div>
@endsection