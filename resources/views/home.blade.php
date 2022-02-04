@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are normal user.
                    <div class="col-md-12 mb-4">
                        <a href="{{ route('password.edit') }}" class="btn btn-success btn-sm px-4 float-end">Reset Password</a>
                    </div>
                </div>
                    <div class="col-md-11 mb-3">
                        <a href="{{ route('booksuser.index') }}" class="btn btn-success btn-sm px-4 float-end">Books</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection