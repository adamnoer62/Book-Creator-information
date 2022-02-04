@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Books
                        <a href="{{ route('home') }}" class="btn btn-sm btn-info" style="float: right">
                            Back
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
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($buku as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jenis_buku }}</td>
                                        <td>{{ $data->penulis_buku }}</td>
                                        <td>
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