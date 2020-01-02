@extends('layouts.template-dashboard')

@section('navbar-side')
@include('layouts.navbar-side-dashboard')
@endsection

@section('navbar-top')
@include('layouts.navbar-top-dashboard')
@endsection

@section('content')
<div class="container-fluid  dashboard-content">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="card">
        <h5 class="card-header">Update</h5>
        <div class="card-body">
          <form action="{{ route('admin.home.update', $home->id) }}" id="basicform" data-parsley-validate="" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="inputUserName">Nama Pria</label>
              <input id="inputUserName" type="text" name="men_nick_name" data-parsley-trigger="change" required="" placeholder="Masukan nama pria" autocomplete="off" class="form-control" value="{{ $home->men_nick_name }}">
            </div>
            <div class="form-group">
              <label for="inputUserName">Nama Wanita</label>
              <input id="inputUserName" type="text" name="woman_nick_name" data-parsley-trigger="change" required="" placeholder="Masukan nama wanita" autocomplete="off" class="form-control" value="{{ $home->woman_nick_name }}">
            </div>
            <div class="form-group">
              <label for="inputUserName">Title</label>
              <input id="inputUserName" type="text" name="title" data-parsley-trigger="change" required="" placeholder="Masukan title" autocomplete="off" class="form-control" value="{{ $home->title }}">
            </div>
            
            <div class="row">
              
              <div class="col-sm-12 pl-0">
                <p class="text-right">
                  <button type="submit" class="btn btn-space btn-primary">Update</button>
                  <button class="btn btn-space btn-secondary">Cancel</button>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content2')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit user {{ $home->name}}</div>

        <div class="card-body">
          <form action="{{ route('admin.home.update', $home->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="id" value="{{ $home->id }}">
            <input type="text" name="name" value="{{ $home->name }}">
            <button type="submit" class="btn btn-primary">
              Update
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection