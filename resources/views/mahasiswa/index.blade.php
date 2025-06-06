@extends('main')

@section('title','Mahasiswa')
@section('content')


<!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Mahasiswa</h3>
                    <div class="card-tools">
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-collapse"
                        title="Collapse"
                      >
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <a href="{{route('fakultas.create')}}" class="btn btn-primary"></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Prodi</th>
                                <th>JK</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Asal SMA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->npm }}</td>
                                <td>{{ $item->prodi->nama }}</td>
                                <td>{{ $item->jk}}</td>
                                <td>{{ $item->tanggal_lahir}}</td>
                                <td>{{ $item->tempat_lahir}}</td>
                                <td>{{ $item->asal_sma}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                  <!-- /.card-body -->
                  <div class="card-footer">Footer</div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
@endsection