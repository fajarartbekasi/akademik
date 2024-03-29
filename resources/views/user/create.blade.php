@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="container">
        <div class="card border-0">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="alert alert-info" style="margin-top: -40px;">
                        Silahkan masukan informasi dibawah ini dengan benar dan lengkap.
                    </div>
                </div>
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" name="email" class="form-control" id="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="level">Akses</label>
                                <select name="roles" id="level" class="form-control">
                                    <option value="">Pilih akses</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">
                                        {{$role->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info">
                                Add new members
                            </button>
                            <a href="{{route('home')}}" class="btn btn-secondary">Home</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
