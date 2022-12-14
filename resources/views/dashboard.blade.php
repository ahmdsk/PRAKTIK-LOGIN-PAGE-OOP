@extends('layouts')

@section('konten')
<main style="display: flex; flex-wrap: nowrap; height: 100vh; height: -webkit-fill-available; max-height: 100vh; overflow-x: auto; overflow-y: hidden">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Dashboard</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Home
            </a>
          </li>
          <li>
            <a href="{{route('logout')}}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Logout
            </a>
          </li>
        </ul>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Data User</h3>
            </div>
            <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Telpon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $no => $u)
                        <tr>
                            <th scope="row">{{$no+1}}</th>
                            <td>{{$u->nama}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->no_telp}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection