@extends('layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{route('management.guru.update', $teacher->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" id="" value="{{$teacher->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="nuptk" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="agama" id="" class="form-control">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="jabatan" id="" class="form-control"
                                        placeholder="Jabatan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" id="" class="form-control" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="tanggal_lahir" id="" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="alamat" id="" class="form-control" placeholder="alamat">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="telp" id="" class="form-control" placeholder="Telp">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-outline-info">Simpan Profile Siswa</button>
                            <a href="{{route('home')}}" class="btn btn-outline-secondary ml-3">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
