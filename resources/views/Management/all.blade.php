@extends('layouts.app')


@section('content')

    <div class="col-md-9">
        <div class="container">
            <div class="card border-0">

                <div class="card-body">
                    <div class="alert d-flex justify-content-between alert-warning alert-dismissible fade show" role="alert">
                        <div>
                            <strong>Hay admin</strong> Silahkan cek kembali data yang tersedia dan update apabila ada kesalahan
                        </div>

                        <svg width="20" height="20" viewBox="0 0 20 20" data-bs-dismiss="alert" aria-label="Close" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM8.70711 7.29289C8.31658 6.90237 7.68342 6.90237 7.29289 7.29289C6.90237 7.68342 6.90237 8.31658 7.29289 8.70711L8.58579 10L7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071C7.68342 13.0976 8.31658 13.0976 8.70711 12.7071L10 11.4142L11.2929 12.7071C11.6834 13.0976 12.3166 13.0976 12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L11.4142 10L12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289C12.3166 6.90237 11.6834 6.90237 11.2929 7.29289L10 8.58579L8.70711 7.29289Z"
                                fill="currentColor" />
                        </svg>
                    </div>

                    <div class="pt-3">
                        <h5>Cari Data</h5>
                        <div class="d-flex justify-content-between">
                            <form action="" method="">
                                <div class="row g-3">
                                    <div class="col-auto pt-3">
                                        <input type="date" name="start" class="form-control" id="">
                                    </div>
                                    <div class="col-auto pt-3">
                                        <input type="date" name="end" class="form-control" id="">
                                    </div>
                                    <div class="col-auto pt-3">
                                        <button class="btn btn-outline-primary">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 9C9 7.89543 9.89543 7 11 7C12.1046 7 13 7.89543 13 9C13 10.1046 12.1046 11 11 11C10.4474 11 9.94881 10.7772 9.58579 10.4142C9.22276 10.0512 9 9.55256 9 9Z"
                                                    fill="currentColor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM11 5C8.79086 5 7 6.79086 7 9C7 9.74138 7.20229 10.4364 7.55397 11.0318L5.29289 13.2929C4.90237 13.6834 4.90237 14.3166 5.29289 14.7071C5.68342 15.0976 6.31658 15.0976 6.70711 14.7071L8.96818 12.446C9.56362 12.7977 10.2586 13 11 13C13.2091 13 15 11.2091 15 9C15 6.79086 13.2091 5 11 5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="pt-3">
                                <a href="{{route('home')}}" class="btn btn-outline-secondary mb-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L2.29289 9.29289C1.90237 9.68342 1.90237 10.3166 2.29289 10.7071C2.68342 11.0976 3.31658 11.0976 3.70711 10.7071L4 10.4142V17C4 17.5523 4.44772 18 5 18H7C7.55228 18 8 17.5523 8 17V15C8 14.4477 8.44772 14 9 14H11C11.5523 14 12 14.4477 12 15V17C12 17.5523 12.4477 18 13 18H15C15.5523 18 16 17.5523 16 17V10.4142L16.2929 10.7071C16.6834 11.0976 17.3166 11.0976 17.7071 10.7071C18.0976 10.3166 18.0976 9.68342 17.7071 9.29289L10.7071 2.29289Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="{{route('user.create')}}" class="btn btn-outline-info mb-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM11 7C11 6.44772 10.5523 6 10 6C9.44772 6 9 6.44772 9 7V9H7C6.44772 9 6 9.44771 6 10C6 10.5523 6.44772 11 7 11H9V13C9 13.5523 9.44772 14 10 14C10.5523 14 11 13.5523 11 13V11H13C13.5523 11 14 10.5523 14 10C14 9.44772 13.5523 9 13 9H11V7Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="pt-3 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>E-Mail</th>
                                        <th>Role</th>
                                        <th>Join</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->roles->implode('name',',')}}</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{$users->links()}}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
