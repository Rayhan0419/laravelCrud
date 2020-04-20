@extends('layouts.master')

@section('content')
    {{-- Alert --}}
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <div class="row">
        <div class="col-10 font-weight-bold text-center">
            <h2 class="tittleTbl">DATA SISWA SMKN 10 JAKARTA</h2>
        </div>
        <div class="col-2 align-self-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-bg float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data Siswa</button>
        </div>

        <table class="table table-hover table-striped table-dark">
            <thead>
                <tr>
                    <th>NAMA LENGKAP</th>
                    <th>TEMPAT LAHIR</th>
                    <th>NISN</th>
                    <th>JENIS KELAMIN</th>
                    <th>UMUR</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                    <th style="text-align:center;">AKSI</th>
                </tr>
            </thead>

            @foreach ($data_siswa as $siswa)
            <tr>
                <td>{{$siswa->nama_lengkap}}</td>
                <td>{{$siswa->tempat_lahir}}</td>
                <td>{{$siswa->nisn}}</td>
                <td style="text-align:center;">{{$siswa->jenis_kelamin}}</td>
                <td style="text-align:center;">{{$siswa->umur}}</td>
                <td>{{$siswa->agama}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                    <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want Delete This Item')">DELETE</a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>









<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {{-- Popup Forms --}}
                <form action="/siswa/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NISN</label>
                        <input name="nisn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan NISN">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Umur</label>
                        <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Umur">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isiskan Agama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

