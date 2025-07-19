@extends('layout.main')

@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
@endsection

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Bus</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item active">Bus</li>
      </ol>
    </div>
  </div>
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-end">
        <a href="/bus/create" class="btn btn-sm btn-primary">
            Tambah Bus
        </a>
    </div>
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover display nowrap" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Bus</th>
          <th>Kategori</th>
          <th>Lokasi Awal</th>
          <th>Lokasi Akhir</th>
          <th>Harga</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bus as $b)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->name }}</td>
            <td>{{ $b->category_id}}</td>
            <td></td>
            <td></td>
            <td>{{ $b->price }}</td>
            <td>
                <div class="d-flex">
                    <a href="/bus/edit/{{ $b->id }}" class="btn btn-sm btn-warning mr-2">
                        Edit
                    </a>
                    <form action="/bus/{{ $b->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Hapus
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
      </tbody>

    </table>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script>
  $(function () {
    $('#example2').DataTable({
      responsive: true,
      paging: true,
      lengthChange: false,
      searching: false,
      ordering: true,
      info: true,
      autoWidth: false,
    });
  });
</script>
@endsection
