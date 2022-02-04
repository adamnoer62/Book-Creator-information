@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                    <div class="row mt-4">
                        <div class="col-md-12 mb-4">
                            <a href="{{ route('buku.index') }}" class="btn btn-success btn-sm px-4 float-end">Kelola buku</a>
                        </div>
                        <div class="col-md-12 mb-4">
                            <a href="{{ route('User.index') }}" class="btn btn-success btn-sm px-4 float-end">Kelola user</a>
                        </div>
                        <div class="col-md-12 mb-4">
                            <a href="{{ route('password.edit') }}" class="btn btn-success btn-sm px-4 float-end">Reset Password</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection