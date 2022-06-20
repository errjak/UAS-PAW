@extends('layout')

@section('content')
<br/>
<div class="container">
    <div class="row ">
        <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class = "container">
                    <form id="contact-form" method="POST" action="{{ url('tabel/'.$model->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Nama<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" value="{{ $model->nama }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Kelas<select name="kelas" class="form-select" aria-label="Default select example" value="{{ $model->kelas }}">
                                            <option selected>Pilih Kelas</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Ruang<select name="kode" class="form-select" aria-label="Default select example" value="{{ $model->kode }}">
                                            <option selected>Pilih Ruang</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Mata Pelajaran<select name="matpel" class="form-select" aria-label="Default select example" value="{{ $model->matpel }}">
                                            <option selected>Pilih Mata Pelajaran</option>
                                            <option value="Biologi">Biologi</option>
                                            <option value="Fisika">Fisika</option>
                                            <option value="Kimia">Kimia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Jadwal<input type="date" name="jadwal" class="form-control" placeholder="Pilih Jadwal Anda" value="{{ $model->jadwal }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
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
<br/>
@endsection