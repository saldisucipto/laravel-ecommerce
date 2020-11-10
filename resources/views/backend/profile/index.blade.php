@extends('layouts.home.master')

@section('isi')

<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="#" method="POST">
                @csrf
                <img id="profile-picture" class="img-fluid" src="{{asset('images/man.png')}}" alt="Profile">
                {{-- <button>Change Picture</button> --}}
                <div class="card-body">
                    <h4 class="card-title">Info Pribadi</h4>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-left control-label col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="name" placeholder="First Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-left control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-12 text-left control-label col-form-label"><b>Update Your
                                Password</b></label>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-4 text-left control-label col-form-label">Password
                            Sebelumnya</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-4 text-left control-label col-form-label">Password Baru</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-4 text-left control-label col-form-label">Konfirmasi
                            Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Update Your Profile</button>
                    </div>
                </div>
            </form>


        </div>
        <div class="col-md-3"></div>
    </div>
</div>


@endsection
