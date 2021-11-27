@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{route('schedules.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="" value="{{$users->name}}" class="form-control">
                                    <input type="hidden" name="user_id" id="" value="{{$users->id}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="room_id" id="" class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        @forelse ($rooms as $room)
                                            <option value="{{$room->id}}">{{$room->name}}</option>
                                        @empty
                                            <option value="">Maap Belum terdapat kelas nih</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="grade_id" id="" class="form-control">
                                        <option value="">Pilih Jurusan</option>
                                        @forelse ($grades as $grade)
                                        <option value="{{$grade->id}}">{{$grade->name}} {{$grade->grade}}</option>
                                        @empty
                                        <option value="">Maap Belum terdapat kelas nih</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="mapel_id" id="" class="form-control">
                                        <option value="">Pilih Mapel</option>
                                        @forelse ($mapels as $mapel)
                                        <option value="{{$mapel->id}}">{{$mapel->name}}</option>
                                        @empty
                                        <option value="">Maap Belum terdapat kelas nih</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="time" name="jam_awal" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="time" name="jam_akhir" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-primary">Simpan Jadwal</button>
                                <a href="{{route('schedules')}}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
