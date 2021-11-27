@extends('layouts.app')


@section('content')

    <div class="container py-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="alert alert-info" >
                            <h6 class="font-weight-bold">Informasi !!!</h6>
                            <p>Silahkan buat jadwal mengajar guru dengan benar disini terimakasih</p>
                        </div>
                        <div class="mt-2">
                            <a href="{{route('schedules.create')}}" class="btn btn-info">Add New Schedule</a>
                            <a href="{{route('home')}}" class="btn btn-secondary">Back</a>
                        </div>

                        <div class="table table-resvonsive pt-2">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Guru</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($schedules as $teacher)
                                            <tr>
                                                <td>{{$teacher->name}}</td>
                                                <td>
                                                    <a href="{{route('schedules.edit', $teacher->id)}}" class="btn btn-outline-info btn-sm">
                                                        Add Schedule
                                                    </a>
                                                    <a href="{{route('schedules.show', $teacher->id)}}" class="btn btn-outline-info btn-sm">
                                                        Show Schedules
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty

                                        @endforelse
                                    </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
