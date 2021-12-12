@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="container">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-exotic">
                                {{session('status')}}
                            </div>
                        @endif
                        <form action="{{route('mapel.store')}}" method="post" class="row justify-content-center">
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control" placeholder="Nama pelajaran">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-toggle">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.70711 7.29289C9.31658 6.90237 8.68342 6.90237 8.29289 7.29289C7.90237 7.68342 7.90237 8.31658 8.29289 8.70711L11.2929 11.7071C11.6834 12.0976 12.3166 12.0976 12.7071 11.7071L15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289C15.3166 6.90237 14.6834 6.90237 14.2929 7.29289L13 8.58579L13 5H16C17.1046 5 18 5.89543 18 7V12C18 13.1046 17.1046 14 16 14H8C6.89543 14 6 13.1046 6 12V7C6 5.89543 6.89543 5 8 5H11L11 8.58579L9.70711 7.29289Z"
                                            fill="currentColor" />
                                        <path d="M11 3C11 2.44772 11.4477 2 12 2C12.5523 2 13 2.44772 13 3L13 5H11L11 3Z"
                                            fill="currentColor" />
                                        <path
                                            d="M4 9C2.89543 9 2 9.89543 2 11V16C2 17.1046 2.89543 18 4 18H12C13.1046 18 14 17.1046 14 16H4V9Z"
                                            fill="currentColor" />
                                    </svg>

                                </button>
                            </div>
                            <div class="mb-3">
                                <a href="{{route('home')}}" class="btn btn-toggle-back">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L2.29289 9.29289C1.90237 9.68342 1.90237 10.3166 2.29289 10.7071C2.68342 11.0976 3.31658 11.0976 3.70711 10.7071L4 10.4142V17C4 17.5523 4.44772 18 5 18H7C7.55228 18 8 17.5523 8 17V15C8 14.4477 8.44772 14 9 14H11C11.5523 14 12 14.4477 12 15V17C12 17.5523 12.4477 18 13 18H15C15.5523 18 16 17.5523 16 17V10.4142L16.2929 10.7071C16.6834 11.0976 17.3166 11.0976 17.7071 10.7071C18.0976 10.3166 18.0976 9.68342 17.7071 9.29289L10.7071 2.29289Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </form>
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Mapel</th>
                                        <th>Nama Pelajaran</th>
                                        <th>Created at</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mapels as $mapel)
                                    <tr>
                                        <td>{{$mapel->kode_mapel }}</td>
                                        <td>{{$mapel->name }}</td>
                                        <td>{{$mapel->created_at}}</td>
                                        <td>
                                            <form action="">
                                                <button type="submit" class="btn btn-toggle">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$mapels->links('vendor.pagination.simple-bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
