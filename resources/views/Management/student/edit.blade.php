@extends('layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{route('users.student.update', $user->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="" value="{{$user->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="room_id" class="form-control" id="">
                                        <option value="">Pilih Kelas</option>
                                        @forelse ($rooms as $room)
                                        <option value="{{$room->id}}">{{$room->name}} - {{$room->grade}}</option>
                                        @empty
                                        <option value="">Maaf Saat ini kelas belum tersedia</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nisn" id="" class="form-control" placeholder="Nisn">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" id="" class="form-control" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="tanggal_lahir" id="" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="alamat" id="" class="form-control" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="gender" id="" class="form-control" placeholder="Gender">
                                </div>
                            </div>
                            <div class="col-md-6">
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
