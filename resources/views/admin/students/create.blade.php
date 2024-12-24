<!-- @dump($errors->all()); -->
@extends('admin.layout.master')
@section('breadcrumb')
<style>
  .left-sidebar {
    display: none !important;
  }
  .navbar-brand {
    display: none !important;

  }
  #navbarSupportedContent {
    display: none !important;
  }
  .footer {
    display: none !important;

  }
  .topbar {
    display: none !important;

  }
  .page-wrapper{
    margin: 0px !important;
    
  }
  #mohamed-menna{
    padding: 0 !important;
  }
  .form-control {
    width: 400px !important;
  }
</style>
<!-- <div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Teachers</h4>
      <div class="ms-auto text-start">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              <a href="#">Add Teacher</a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div> -->
@endsection
@section('content')
<div style="width: 100%; height:50vh;">
  <div>
    <h1></h1>
  </div>
  <img class="w-100 h-100 "   src="https://chi.edu.eg/wp-content/uploads/2019/06/564357_394105083974789_928497810_n.jpg" alt="">
</div>
<div class="card">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error )
      <li>{{ $error }}</li>
      @endforeach 
    </ul>
  </div>
  @endif
  @if (Session::has('msg'))
  <div class="alert alert-succes">
    {{Session::get('msg')}}
  </div>
  @endif
</div>
<form class="form-horizontal" style="width: 100%; display: flex; justify-content: center;" action="{{route('admin.students.store')}}" enctype="multipart/form-data" method="post" novalidate>
  @csrf
  <div class="card-body" style="width: 700px; display: flex; flex-direction: column; align-items: center; background: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
    <div class="form-group " style="    width: 100%;
    margin-bottom: 15px;
    display: flex
;
    align-items: center;
    justify-content: center;">
      <label for="code" class=" text-start control-label " style="font-weight: bold; width: 75px; width: 75px;">Code:</label>
      <div class="">
        <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Enter your code" name="code" style="border-radius: 5px; padding: 10px;" />
        @error('code')
        <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="form-group " style="    width: 100%;
    margin-bottom: 15px;
    display: flex
;
    align-items: center;
    justify-content: center;">
      <label for="name" class=" text-start control-label " style="font-weight: bold; width: 75px;">Name:</label>
      <div class="">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your Name" name="name" style="border-radius: 5px; padding: 10px;" />
        @error('name')
        <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="form-group " style="    width: 100%;
    margin-bottom: 15px;
    display: flex
;
    align-items: center;
    justify-content: center;">
      <label for="email" class=" text-start control-label " style="font-weight: bold; width: 75px;">Email:</label>
      <div class="">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" name="email" style="border-radius: 5px; padding: 10px;" />
        @error('email')
        <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="form-group " style="    
    margin-bottom: 15px;
    display: flex
;
    align-items: center;
    justify-content: center;">
      <label for="password" class=" text-start control-label " style="font-weight: bold; width: 75px;">Password:</label>
      <div class="">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" name="password" style="border-radius: 5px; padding: 10px;" />
        @error('password')
        <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="form-group " style="    width: 100%;
    margin-bottom: 15px;
    display: flex
;
    align-items: center;
    justify-content: center;">
      <label for="phone" class=" text-start control-label " style="font-weight: bold; width: 75px;">Bouns
      </label>
      <div class="">
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter your Bouns
" name="phone" style="border-radius: 5px; padding: 10px;" />
        @error('phone')
        <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
        @enderror
      </div>
    </div>
    <!-- <div class="form-group row" style="width: 100%;margin-bottom: 15px;">
      <label for="photo" class="col-sm-3 text-start control-label col-form-label" style="font-weight: bold; width: 75px;">Photo:</label>
      <div class="col-sm-9">
        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" style="border-radius: 5px; padding: 10px;" />
      </div>
    </div> -->
    <div class="form-group " style="    width: 100%;
    margin-bottom: 15px;
    display: flex
;
    align-items: center;
    justify-content: center;">
      <label for="subject" class=" text-start control-label " style="font-weight: bold; width: 75px;"> reason:
        </label>
       <div class="">
                    <select class="form-control" name="subject">
                        <option value="1">reason1</option>
                        <option value="2">reason2</option>
                        <option value="3">reason3</option>
                        <option value="4">reason4</option>
                        <option value="5">reason5</option>
                    </select>
                </div>
    </div>
    <div class="border-top" style="width: 100%; margin-top: 20px;">
      <div class="card-body" style="text-align: center;">
        <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 5px;">Send Bonus</button>
      </div>
    </div>
  </div>
</form>

</div>
</div>
</div>
@endsection