@extends('layouts')
@section('konten')
    <div class="container" style="margin-top: 15vh">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Daftar</h4>
                    </div>
                    <div class="card-body px-4">
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="namaForm" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}" id="namaForm" placeholder="Masukan Nama">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                                @enderror                          
                            </div>
                            <div class="mb-3">
                                <label for="noTelpForm" class="form-label">No. Telpon</label>
                                <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{old('no_telp')}}" id="noTelpForm" placeholder="Masukan No. Telpon">
                                @error('no_telp')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <label for="emailForm" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="emailForm" placeholder="Masukan Email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <label for="passwordForm" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" id="passwordForm" placeholder="Masukan Kata Sandi">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>  
                                @enderror 
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <p class="mt-3">Sudah memiliki akun? <a href="{{url('/')}}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection