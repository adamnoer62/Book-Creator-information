@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">add Books</div>
                    <div class="card-body">
                        <form action="{{ route('buku.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="nama"
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
                                
                                <select id="jenis_buku" name="jenis_buku" class="form-control">
                                    <option value="Horor">Horor</option>
                                    <option value="Advanture">Advanture</option>
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Romance">Romance</option>
                                  </select>
                                    
                                    @error('jenis_buku') is-invalid @enderror

                                @error('jenis_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Book Author</label>
                                
                                <select id="penulis_buku" name="penulis_buku" class="form-control">
                                    <option value="Lazuardi">Lazuardi</option>
                                    <option value="Adam">Adam nur</option>
                                    <option value="Iqbal Hambali">Iqbal Hambali</option>
                                    <option value="audi">Audi</option>
                                  </select>
                                    
                                    @error('penulis_buku') is-invalid @enderror

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