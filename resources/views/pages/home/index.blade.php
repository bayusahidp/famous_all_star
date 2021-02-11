@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <h4 class="box-title">Daftar Artikel</h4>
                    <a href="{{ route('article.create') }}" type="button" class="btn btn-primary">Tambah Artikel</a>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table id="tabel_home" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <?php $nomor = 0 ?>
                                @forelse ($article as $item)
                                    <?php $nomor += 1 ?>
                                    <tr>
                                        <td>{{ $nomor }}</td>
                                        <td><img src="{{ asset("thumbnail/$item->thumbnail") }}" alt=""></td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->short_description }}</td>
                                        <td>{{ date('d-M-Y', strtotime($item->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('admin.show', $item->slug) }}" class="btn btn-success btn-sm">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-5">
                                            Data Tidak Tersedia
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script type="text/javascript">
        $('#tabel_home').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "order":[],
            "columnDefs": [
                { 
                    "targets": [1,5], 
                    "orderable": false, 
                },
            ],
        });
    </script>
@endpush