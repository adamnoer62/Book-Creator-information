@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Users 
                        <a href="{{ route('User.create') }}" class="btn btn-sm btn-info" style="float: right">
                            add Data
                        </a>
                        <a href="{{ route('admin.home') }}" class="btn btn-sm btn-info" style="float: right">
                            Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>Action</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($User as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                    
                                        <td>
                                            <form action="{{ route('User.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('User.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('User.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('are you sure?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection