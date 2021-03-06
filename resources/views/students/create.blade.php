@extends('layout.main')

@section('title', 'From Tambah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-4">Form Tambah Data Mahasiswa</h1>
      <form method="post" action="/students">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label" ">Nama</label>
          <input type=" text" class="form-control @error('nama') is-invalid @enderror" id="nama" id="nama" placeholder="Masukkan Nama ..." name="nama" value="{{old('nama')}}">
            @error('nama')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="mb-3">
          <label for="nrp" class="form-label">NRP</label>
          <input type=" text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" id="nrp" placeholder="Masukkan NRP ..." name="nrp" value="{{old('nrp')}}">
          @error('nrp')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="emali" class="form-control" id="email" id="email" placeholder="Masukkan Email ..." name="email" value="{{old('email')}}">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type=" text" class="form-control" id="jurusan" id="jurusan" placeholder="Masukkan Jurusan ..." name="jurusan" value="{{old('jurusan')}}">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>
@endsection