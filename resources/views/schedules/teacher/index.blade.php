@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 shadow-sm">
                <h4 class="text-secondary">
                    Dibawah ini adalah jadwal mengajar yang sudah dibuat untuk para guru
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Jurusan</th>
                                <th>Ruang</th>
                                <th>Mapel</th>
                                <th>Jam</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($schedules as $schedule)
                            <tr>
                                <td>{{$schedule->created_at->format('l')}}</td>
                                <td>{{$schedule->grade->name}} {{$schedule->grade->grade}}</td>
                                <td>{{$schedule->room->name}}</td>
                                <td>{{$schedule->mapel->name}}</td>
                                <td>{{$schedule->jam_awal}} - {{$schedule->jam_akhir}}</td>
                                <td>
                                    <a href="{{route('schedules.show', $schedule->user->id)}}" class="btn btn-outline-info">Detail Schedule</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">Maaf Jadwal untuk anda saat ini belum tersedia</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
