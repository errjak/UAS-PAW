@extends('layout')

@section('content')
<br/>
<br/>
<br/>
<div class="container">
    <div class="row ">
        <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class = "container">
                    <form id="contact-form" method="POST" action="{{ url('tabel') }}">
                    @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Nama<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        NRP<input type="text" name="nrp" class="form-control" placeholder="Masukkan NRP Anda">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Email<input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Alamat<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Submit" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.8 -->
        </div>
    <!-- /.row-->
    </div>
</div>
@endsection
