@extends('admin.layout.master')
@section('breadcrumb')
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Pending zone</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/students/create">Home</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">
                    <a href="/admin/students/create">Add New Teacher</a></li> -->
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('content')
<div class="card-body">
          @if (Session::has('msg'))
          <div class="alert alert-danger">
            {{Session::get('msg')}}
          </div>
          @endif
                  <h5 class="card-title">Basic Datatable</h5>
                  <div class="table-responsive">
                    <div class="card"></div>
                    <table id="zero_config"class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>code</th>
                          <th>name</th>
                          <th>email</th>
                          <th>password</th>
                          <th>subject</th>
                          <th>phone</th>
                          <th>dept_id</th>
                          <th></th> 
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($students as $student)
                        <tr>
                          <td>{{$student->code}}</td>
                          <td>{{$student->name}}</td>
                          <td>{{$student->email}}</td>
                          <td>{{$student->password}}</td>
                          <td>{{$student->subject}}</td>
                          <td>{{$student->phone}}</td>
                          <td>{{$student->dept_id}}</td>
                          <td>
                            <!-- <form action="{{route('admin.students.restore',$student['code'])}}" class="d-inline" method="post"> -->
                              <!--  csrf >> is important in any URL -->
                              <!-- @csrf
                              <input type="submit" value="restore" class="btn btn-outline-success">
                            </form>  -->
                            <form action="{{route('admin.students.destroyArchive',$student['code'])}}" class="d-inline" method="post">
                              <!--  csrf >> is important in any URL -->
                              @csrf
                              @method('delete')
                              <input type="submit" value="approved" class="btn btn-outline-success">
                            </form>
                            <form action="{{route('admin.students.destroyArchive',$student['code'])}}" class="d-inline" method="post">
                              <!--  csrf >> is important in any URL -->
                              @csrf
                              @method('delete')
                              <input type="submit" value="delete" class="btn btn-outline-danger">
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
@endsection
