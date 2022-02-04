@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Show User</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $User->name }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" name="email" class="form-control" value="{{ $User->email }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ route('User.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection