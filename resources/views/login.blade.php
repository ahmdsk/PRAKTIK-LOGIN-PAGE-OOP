@extends('layouts')
@section('konten')
    <div class="container" style="margin-top: 25vh">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body px-4">
                        <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="emailForm" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="emailForm" placeholder="Masukan Email">
                        </div>
                        <div class="mb-3">
                            <label for="passwordForm" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="passwordForm" placeholder="Masukan Kata Sandi">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <p class="mt-3">Belum memiliki akun? <a href="{{route('register')}}">Daftar disini</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection