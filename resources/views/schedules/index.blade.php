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
                            <a href="http://" class="btn btn-info">Add New Schedule</a>
                        </div>

                        <div class="table table-resvonsive pt-2">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Guru</th>
                                            <th>hari, Tanggal</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ahfid Bachtiar</td>
                                            <td>Senin, 12-01-21</td>
                                            <td>XI RPL</td>
                                        </tr>
                                    </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection