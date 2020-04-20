@extends('layouts.master')

@section('content')
    {{-- Judul --}}
    <h1>Edit Data Siswa</h1>

    {{-- Alert --}}
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Nama Lengkap" value="{{$siswa->nama_lengkap}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Tempat Lahir" value="{{$siswa->tempat_lahir}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NISN</label>
                    <input name="nisn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan NISN" value="{{$siswa->nisn}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                      <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                      <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Umur</label>
                    <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Umur" value="{{$siswa->umur}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Agama" value="{{$siswa->agama}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection

