@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Book Creator information
                        <a href="{{ route('buku.create') }}" class="btn btn-sm btn-info" style="float: right">
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
                                    <th>Name</th>
                                    <th>Genre Book</th>
                                    <th>Book Author</th>
                                    <th>Action</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($buku as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jenis_buku }}</td>
                                        <td>{{ $data->penulis_buku }}</td>
                                        <td>
                                            <form action="{{ route('buku.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('buku.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('buku.show', $data->id) }}"
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