@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card w-90">
            @foreach($data as $key=>$value)
            <div class="table-renposnsive">
                <table class="table table-striped">
                    <tr class="table-default mb-3">
                        <td>
                                        <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h4 class="card-title">{{ $value->nama }}</h5>
                    </div>
                    <div class="col-1">
                        <a class="btn btn-primary" href="{{ url('tabel/'.$value->id.'/edit')   }}"><i class="bi bi-pencil"></i></a>
                    </div>
                    <div class="col-1">
                        <form action="{{ url('tabel/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <p class="card-text">{{ $value->kelas }}</p>
                            <p class="card-text">{{ $value->matpel }}</p>
                        </div>
                        <div class="col-6">
                            <p class="card-text">{{ $value->kode }}</p>
                        </div>
                    </div>
                </div>
                <p class="card-text">{{ $value->jadwal }}</p>
            </div>
                        </td>

                    </tr>

                </table>

            </div>

            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
            
