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
                        <form action="{{route('rooms.store')}}" method="post" class="row ">
                            @csrf
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control" placeholder="Nama ruangan">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="number" name="capacity" id="" class="form-control" placeholder="Kapasitas">
                                </div>
                            </div>
                            <div class="">
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
                                <a href="{{route('home')}}" class="btn btn-toggle-back">Back</a>
                            </div>
                        </form>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Created at</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rooms as $room)
                                <tr>
                                    <td>{{$room->name }}</td>
                                    <td>{{$room->capacity}}</td>
                                    <td>
                                        <form action="">
                                            <a href="http://" class="btn btn-toggle">Show</a>
                                            <button type="submit" class="btn btn-toggle-back">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
