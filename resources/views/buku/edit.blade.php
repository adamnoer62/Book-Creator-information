@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">edit buku</div>
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="nama" value="{{ $buku->nama }}"
                                    class="form-control
                                    @error('nama') is-invalid @enderror">

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Genre Book</label>
                                <input type="text" name="jenis_buku" value="{{ $buku->jenis_buku }}"
                                    class="form-control
                                    @error('jenis_buku') is-invalid @enderror">

                                @error('jenis_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Book Author</label>
                                <input type="text" name="penulis_buku" value="{{ $buku->penulis_buku }}"
                                    class="form-control
                                    @error('penulis_buku') is-invalid @enderror">

                                @error('penulis_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection