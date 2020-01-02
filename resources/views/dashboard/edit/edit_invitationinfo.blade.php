@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user {{ $template->name}}</div>

                <div class="card-body">
                  <form action="{{ route('admin.templates.update', $template->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="id" value="{{ $template->id }}">
                    <input type="text" name="name" value="{{ $template->name }}">
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