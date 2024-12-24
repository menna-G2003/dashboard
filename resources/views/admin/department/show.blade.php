@extends('admin.layout.master')
@section('breadcrumb')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Departments</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="/admin/department/show">show Department</a>
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
        <tbody>
            <tr>
                <th>num</th>
                <td>{{$department->department_num }}</td>
            </tr>
            <tr>
                <th>name</th>
                <td>{{$department->department_name }}</td>
            </tr>
            <tr>
                <th>students</th>
                <td>
                    <ol>
                    @foreach ($students as $student )
                    <li>{{$student}}</li>
                    </ol>
                @endforeach </td>
            </tr>
            <tr>
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
@endsection