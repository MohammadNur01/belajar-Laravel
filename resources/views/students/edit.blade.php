@extends('layout.main')

@section('title', 'From Ubah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-4">Form Ubah Data Mahasiswa</h1>

      <form method="post" action="/students/{{ $student->id }}">
        @method('patch')
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label" ">Nama</label>
          <input type=" text" class="form-control @error('nama') is-invalid @enderror" id="nama" id="nama" placeholder="Masukkan Nama ..." name="nama" value="{{$student->nama}}">
            @error('nama')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="mb-3">
          <label for="nrp" class="form-label">NRP</label>
          <input type=" text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" id="nrp" placeholder="Masukkan NRP ..." name="nrp" value="{{$student->nrp}}"">
          @error('nrp')<div id=" validationServer03Feedback" class="invalid-feedback">{{$message}}
        </div>@enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="emali" class="form-control" id="email" id="email" placeholder="Masukkan Email ..." name="email" value="{{$student->email}}"">
    </div>
    <div class=" mb-3">
      <label for="jurusan" class="form-label">Jurusan</label>
      <input type=" text" class="form-control" id="jurusan" id="jurusan" placeholder="Masukkan Jurusan ..." name="jurusan" value="{{$student->jurusan}}"">
    </div>
    <button type=" submit" class="btn btn-primary">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>
@endsection