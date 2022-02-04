@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">add buku</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="nama" class="form-control" value="{{ $buku->nama }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Genre Book</label>
                            <input type="text" name="jenis_buku" class="form-control" value="{{ $buku->jenis_buku }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Book Author</label>
                            <input type="text" name="penulis_buku" class="form-control" value="{{ $buku->penulis_buku }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ route('buku.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection