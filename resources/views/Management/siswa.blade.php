@extends('layouts.app')


@section('content')

    <div class="container py-4">
        <div class="card border-0">

            <div class="card-body">
                <div class="alert d-flex justify-content-between alert-warning alert-dismissible fade show" role="alert">
                    <div>
                        <strong>Hay admin</strong> Silahkan cek kembali data yang tersedia dan update apabila ada kesalahan
                    </div>

                    <svg width="20" height="20" viewBox="0 0 20 20" data-bs-dismiss="alert" aria-label="Close" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM8.70711 7.29289C8.31658 6.90237 7.68342 6.90237 7.29289 7.29289C6.90237 7.68342 6.90237 8.31658 7.29289 8.70711L8.58579 10L7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071C7.68342 13.0976 8.31658 13.0976 8.70711 12.7071L10 11.4142L11.2929 12.7071C11.6834 13.0976 12.3166 13.0976 12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L11.4142 10L12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289C12.3166 6.90237 11.6834 6.90237 11.2929 7.29289L10 8.58579L8.70711 7.29289Z" fill="currentColor"/>
                    </svg>
                </div>

                 <div class="pt-3">
                    <h5>Cari Data</h5>
                    <div class="d-flex justify-content-between">
                        <form action="" method="">
                            <div class="row g-3">
                                <div class="col-auto py-2 px-2">
                                    <input type="date" name="start" class="form-control" id="">
                                </div>
                                <div class="col-auto py-2 px-2">
                                    <input type="date" name="end" class="form-control" id="">
                                </div>
                                <div class="col-auto py-2 px-2">
                                    <button class="btn btn-outline-primary">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 9C9 7.89543 9.89543 7 11 7C12.1046 7 13 7.89543 13 9C13 10.1046 12.1046 11 11 11C10.4474 11 9.94881 10.7772 9.58579 10.4142C9.22276 10.0512 9 9.55256 9 9Z" fill="currentColor"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM11 5C8.79086 5 7 6.79086 7 9C7 9.74138 7.20229 10.4364 7.55397 11.0318L5.29289 13.2929C4.90237 13.6834 4.90237 14.3166 5.29289 14.7071C5.68342 15.0976 6.31658 15.0976 6.70711 14.7071L8.96818 12.446C9.56362 12.7977 10.2586 13 11 13C13.2091 13 15 11.2091 15 9C15 6.79086 13.2091 5 11 5Z" fill="currentColor"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="py-2 px-2">
                            <a href="{{route('home')}}" class="btn btn-outline-secondary">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L2.29289 9.29289C1.90237 9.68342 1.90237 10.3166 2.29289 10.7071C2.68342 11.0976 3.31658 11.0976 3.70711 10.7071L4 10.4142V17C4 17.5523 4.44772 18 5 18H7C7.55228 18 8 17.5523 8 17V15C8 14.4477 8.44772 14 9 14H11C11.5523 14 12 14.4477 12 15V17C12 17.5523 12.4477 18 13 18H15C15.5523 18 16 17.5523 16 17V10.4142L16.2929 10.7071C16.6834 11.0976 17.3166 11.0976 17.7071 10.7071C18.0976 10.3166 18.0976 9.68342 17.7071 9.29289L10.7071 2.29289Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3 table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>E-Mail</th>
                                    <th>Role</th>
                                    <th>Join</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswas as $siswa)
                                    <tr>
                                        <td>{{$siswa->name}}</td>
                                        <td>{{$siswa->email}}</td>
                                        <td>
                                            <span class="badge bg-info text-white">
                                                {{$siswa->roles->first()->name}}
                                            </span>
                                        </td>
                                        <td>{{$siswa->created_at}}</td>
                                        <td>
                                            <form action="">
                                                <a href="{{route('users.student', $siswa->id)}}" class="btn btn-outline-warning btn-sm">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.5858 3.58579C14.3668 2.80474 15.6332 2.80474 16.4142 3.58579C17.1953 4.36683 17.1953 5.63316 16.4142 6.41421L15.6213 7.20711L12.7929 4.37868L13.5858 3.58579Z" fill="currentColor"/>
                                                        <path d="M11.3787 5.79289L3 14.1716V17H5.82842L14.2071 8.62132L11.3787 5.79289Z" fill="currentColor"/>
                                                    </svg>

                                                </a>
                                                <a href="http://" class="btn btn-outline-info btn-sm">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4ZM2 8C2 4.68629 4.68629 2 8 2C11.3137 2 14 4.68629 14 8C14 9.29583 13.5892 10.4957 12.8907 11.4765L17.7071 16.2929C18.0976 16.6834 18.0976 17.3166 17.7071 17.7071C17.3166 18.0976 16.6834 18.0976 16.2929 17.7071L11.4765 12.8907C10.4957 13.5892 9.29583 14 8 14C4.68629 14 2 11.3137 2 8Z" fill="currentColor"/>
                                                    </svg>
                                                </a>
                                                <button class="btn btn-outline-danger btn-sm">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2C8.62123 2 8.27497 2.214 8.10557 2.55279L7.38197 4H4C3.44772 4 3 4.44772 3 5C3 5.55228 3.44772 6 4 6L4 16C4 17.1046 4.89543 18 6 18H14C15.1046 18 16 17.1046 16 16V6C16.5523 6 17 5.55228 17 5C17 4.44772 16.5523 4 16 4H12.618L11.8944 2.55279C11.725 2.214 11.3788 2 11 2H9ZM7 8C7 7.44772 7.44772 7 8 7C8.55228 7 9 7.44772 9 8V14C9 14.5523 8.55228 15 8 15C7.44772 15 7 14.5523 7 14V8ZM12 7C11.4477 7 11 7.44772 11 8V14C11 14.5523 11.4477 15 12 15C12.5523 15 13 14.5523 13 14V8C13 7.44772 12.5523 7 12 7Z" fill="currentColor"/>
                                                    </svg>

                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$siswas->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection