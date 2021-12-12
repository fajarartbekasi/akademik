@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="container">
        <div class="card border-0">
            <div class="card-body">
                <div class="alert alert-exotic">
                    <h3>Hello {{$user->name}},</h3>
                    <p>Ini adalah Jawal mengajar anda silahkan anda cek apakah sudah sesuai atau belum terimakasih</p>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Jam Mengajar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($schedules as $get)
                        <tr>
                            <td>{{$get->created_at->format('l')}}</td>
                            <td>{{$get->room->name}}</td>
                            <td>{{$get->mapel->name}}</td>
                            <td>{{$get->jam_awal}} - {{$get->jam_akhir}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Maaf Jadwal Untuk Anda Belum tersedia silahkan hubungi
                                bagian admin</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
