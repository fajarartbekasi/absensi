@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header shadow-sm bg-white">
                    <h4 class="text-secondary">
                        Enter the information to add a new class, enter the data correctly
                    </h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Pilih Nama Kelas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Walikelas</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Pilih Walikelas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" name="name" id="" class="form-control"
                                        placeholder="Nama Pelajaran">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah siswa</label>
                                    <input type="text" name="phone" id="" class="form-control" placeholder="Jumlah Siswa">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Add New Class</button>
                                <a href="{{route('home')}}" class="btn btn-outline-secondary">Back To Home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
