@extends('admin.layout.master')
@section('breadcrumb')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Requests</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="#">edit Requests</a>
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="form-horizontal" action="{{route('admin.students.update',$student->code)}}" method="post" novalidate>
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="name" class="col-sm-3 text-end control-label col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control
          @error('name') is-invalid @enderror" id="name" placeholder="enter your Name" name="name"
                    value="{{$student->name}}" />
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 text-end control-label col-form-label">email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control @error('name') is-invalid @enderror" id="email"
                    placeholder="enter your email" name="email" value="{{$student->email}}" />
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-3 text-end control-label col-form-label">password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="enter your password"
                    name="password" value="{{$student->password}}" />
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-sm-3 text-end control-label col-form-label">Bouns</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="phone" placeholder="enter your phone" name="phone"
                    value="{{$student->phone}}" />
            </div>
        </div>
        <div class="form-group row">
            <form action="" method="post">
                <label for="subject"
                    class="col-sm-3 text-end control-label col-form-label @error('subject') is-invalid @enderror">The
                    reason for the reward:</label>
                <div class="col-sm-9">
                    <select class="form-control" name="subject">
                        <option value="1">reason1</option>
                        <option value="2">reason2</option>
                        <option value="3">reason3</option>
                        <option value="4">reason4</option>
                        <option value="5">reason5</option>
                    </select>
                </div>
        </div>
    </form>
    <div class="form-group row">
        <label for="department_num " class="col-sm-3 text-end control-label col-form-label
          @error('department') is-invalid @enderror">department:</label>
        <div class="col-sm-9">
            <select class="form-control" name="dept_id">
                @foreach ($departments as $department)
                <option value="{{$department->department_num }}">{{$department->department_num }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="border-top">
        <div class="card-body">
            <button type="submit" name="submit" class="btn btn-primary">
                edit Requests

            </button>
        </div>
    </div>
    </form>
</div>
</form>
</div>
</div>
</div>
@endsection