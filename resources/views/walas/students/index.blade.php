@extends('layouts.app')

@section('content')

<div class="container pt-3 mb-3">
    <div class="row">
        @include('layouts.sidebar')

        <div class="col-md-9">
            <div class="card border-0">
                <div class="card-body">
                    <div>

                        <div></div>
                    </div>

                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $student)
                                    <tr>
                                        <td>{{$student->users->first()->name}}</td>
                                        <td>{{$student->users->first()->email}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>
                                            <form action="">
                                                <a href="http://" class="btn btn-outline-info btn-sm">Edit</a>

                                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                            </form>
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