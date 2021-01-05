@extends('layouts.app')

@section('content')
        @role('admin')
            <main role="main" class="mb-3">
                <div class="jumbotron" >
                    <div class="container">
                        <h1 class="text-wrap font-weight-bold">Laravel Akademik</h1>
                        <p class="text-muted">
                            Start youre journey, from here.
                        </p>
                        <p><a class="btn btn-outline-primary btn-lg" href="#" role="button">Lessons &raquo;</a></p>
                    </div>
                </div>
            </main>

            <div class="container -mt">
                <div class="row">
                    <div class="col-md-4 pt-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex ailgn-items-center justify-content-between lable-menu">
                                    <h6>Users Management</h6>
                                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 6C13 7.65685 11.6569 9 10 9C8.34315 9 7 7.65685 7 6C7 4.34315 8.34315 3 10 3C11.6569 3 13 4.34315 13 6Z" />
                                        <path d="M18 8C18 9.10457 17.1046 10 16 10C14.8954 10 14 9.10457 14 8C14 6.89543 14.8954 6 16 6C17.1046 6 18 6.89543 18 8Z" />
                                        <path d="M14 15C14 12.7909 12.2091 11 10 11C7.79086 11 6 12.7909 6 15V18H14V15Z" />
                                        <path d="M6 8C6 9.10457 5.10457 10 4 10C2.89543 10 2 9.10457 2 8C2 6.89543 2.89543 6 4 6C5.10457 6 6 6.89543 6 8Z" />
                                        <path d="M16 18V15C16 13.9459 15.7282 12.9552 15.2507 12.0943C15.4902 12.0327 15.7413 12 16 12C17.6569 12 19 13.3431 19 15V18H16Z" />
                                        <path d="M4.74926 12.0943C4.27185 12.9552 4 13.9459 4 15V18H1V15C1 13.3431 2.34315 12 4 12C4.25871 12 4.50977 12.0327 4.74926 12.0943Z" />
                                    </svg>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>500</h2>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM13.7071 9.29289L10.7071 6.29289C10.3166 5.90237 9.68342 5.90237 9.29289 6.29289L6.29289 9.29289C5.90237 9.68342 5.90237 10.3166 6.29289 10.7071C6.68342 11.0976 7.31658 11.0976 7.70711 10.7071L9 9.41421L9 13C9 13.5523 9.44771 14 10 14C10.5523 14 11 13.5523 11 13V9.41421L12.2929 10.7071C12.6834 11.0976 13.3166 11.0976 13.7071 10.7071C14.0976 10.3166 14.0976 9.68342 13.7071 9.29289Z" fill="#4A5568"/>
                                                </svg>

                                            </span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="{{route('management.siswa')}}">Siswa</a></li>
                                            <li><a class="dropdown-item" href="{{route('management.guru')}}">Guru</a></li>
                                            <li><a class="dropdown-item" href="{{route('management.walas')}}">Walas</a></li>
                                            <li><a class="dropdown-item" href="{{route('management.user')}}">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex ailgn-items-center justify-content-between lable-menu">
                                    <h6>Mapel Management</h6>
                                        <svg width="20" height="20" viewBox="0 0 20 20"  xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 4.80423C7.9428 4.28906 6.75516 4 5.5 4C4.24484 4 3.0572 4.28906 2 4.80423V14.8042C3.0572 14.2891 4.24484 14 5.5 14C7.1686 14 8.71789 14.5108 10 15.3847C11.2821 14.5108 12.8314 14 14.5 14C15.7552 14 16.9428 14.2891 18 14.8042V4.80423C16.9428 4.28906 15.7552 4 14.5 4C13.2448 4 12.0572 4.28906 11 4.80423V12C11 12.5523 10.5523 13 10 13C9.44772 13 9 12.5523 9 12V4.80423Z"/>
                                        </svg>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>500</h2>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM13.7071 9.29289L10.7071 6.29289C10.3166 5.90237 9.68342 5.90237 9.29289 6.29289L6.29289 9.29289C5.90237 9.68342 5.90237 10.3166 6.29289 10.7071C6.68342 11.0976 7.31658 11.0976 7.70711 10.7071L9 9.41421L9 13C9 13.5523 9.44771 14 10 14C10.5523 14 11 13.5523 11 13V9.41421L12.2929 10.7071C12.6834 11.0976 13.3166 11.0976 13.7071 10.7071C14.0976 10.3166 14.0976 9.68342 13.7071 9.29289Z" fill="#4A5568"/>
                                                </svg>

                                            </span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="{{route('mapel')}}">Data Pelajaran</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex ailgn-items-center justify-content-between lable-menu">
                                    <h6>Room Management</h6>
                                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L2.29289 9.29289C1.90237 9.68342 1.90237 10.3166 2.29289 10.7071C2.68342 11.0976 3.31658 11.0976 3.70711 10.7071L4 10.4142V17C4 17.5523 4.44772 18 5 18H7C7.55228 18 8 17.5523 8 17V15C8 14.4477 8.44772 14 9 14H11C11.5523 14 12 14.4477 12 15V17C12 17.5523 12.4477 18 13 18H15C15.5523 18 16 17.5523 16 17V10.4142L16.2929 10.7071C16.6834 11.0976 17.3166 11.0976 17.7071 10.7071C18.0976 10.3166 18.0976 9.68342 17.7071 9.29289L10.7071 2.29289Z" />
                                    </svg>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>500</h2>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM13.7071 9.29289L10.7071 6.29289C10.3166 5.90237 9.68342 5.90237 9.29289 6.29289L6.29289 9.29289C5.90237 9.68342 5.90237 10.3166 6.29289 10.7071C6.68342 11.0976 7.31658 11.0976 7.70711 10.7071L9 9.41421L9 13C9 13.5523 9.44771 14 10 14C10.5523 14 11 13.5523 11 13V9.41421L12.2929 10.7071C12.6834 11.0976 13.3166 11.0976 13.7071 10.7071C14.0976 10.3166 14.0976 9.68342 13.7071 9.29289Z" fill="#4A5568"/>
                                                </svg>

                                            </span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="{{route('rooms')}}">Room</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endrole
@endsection
