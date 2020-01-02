@extends('layouts.template-dashboard')

@section('navbar-side')
@include('layouts.navbar-side-dashboard')
@endsection

@section('navbar-top')
@include('layouts.navbar-top-dashboard')
@endsection

@section('content')
<div class="container-fluid  dashboard-content">
  <!-- ============================================================== -->
  <!-- pageheader -->
  <!-- ============================================================== -->
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="page-header">
        <h2 class="pageheader-title">Data Tables</h2>
        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
        <div class="page-breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- end pageheader -->
  <!-- ============================================================== -->
  <div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card">
        <h5 class="card-header">Basic Table</h5>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered first">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($template as $t)
                <tr>
                  <th scope="row">{{ $t->id }}</th>
                  <td scope="col">{{ $t->name }}</td>
                  <td>
                    <a href="{{ route('admin.templates.edit', $t->id) }}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                    <form action="{{ route('admin.templates.destroy', $t) }}" method="POST" class="float-left ml-3">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
  </div>
</div>
@endsection

@section('content2')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">users</div>
        <div class="card-body">
          <table class="table">
           <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($template as $t)
            <tr>
              <th scope="row">{{ $t->id }}</th>
              <td scope="col">{{ $t->name }}</td>
              <td>
                <a href="{{ route('admin.templates.edit', $t->id) }}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                <form action="{{ route('admin.templates.destroy', $t) }}" method="POST" class="float-left">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-warning">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection