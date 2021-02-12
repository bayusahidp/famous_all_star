@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <h4 class="box-title">Daftar User</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table id="tabel_user" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tgl Register</th>
                                    <th>From</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 0 ?>
                                @forelse ($user as $item)
                                    <?php $nomor += 1 ?>
                                    <tr>
                                        <td>{{ $nomor }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ date('d M Y', strtotime($item->created_at)) }}</td>
                                        <td>
                                            {{ ($item->google_id != null) ? "Google Account" : "Famous Account" }}
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
        $('#tabel_user').DataTable({
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
                    "targets": [-1,4], 
                    "orderable": false, 
                },
            ],
        });
    </script>
@endpush