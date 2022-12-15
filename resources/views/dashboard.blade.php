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
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('user.png')}}" class="img-fluid rounded-start" alt="Profile Users">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{auth()->user()->nama}}</h5>
              <p class="card-text">{{auth()->user()->email}}</p>
              <p class="card-text"><small class="text-muted">{{auth()->user()->no_telp}}</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection