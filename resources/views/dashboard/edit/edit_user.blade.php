@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user {{ $user->name}}</div>

                <div class="card-body">
                  <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" value="{{ $user->name }}">
                    <input type="text" name="email" value="{{ $user->email }}">
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