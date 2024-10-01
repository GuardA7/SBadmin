@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pelatihan</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pelatihan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>LSP</th>
                            <th>Kuota</th>
                            <th>Start Date</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script  src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script  src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('pelatihan.ajax') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'position', name: 'position' },
                { data: 'LSP', name: 'LSP' },
                { data: 'Kuota', name: 'Kuota' },
                { data: 'start_date', name: 'start_date' },
                { data: 'Harga', name: 'Harga' }
            ]
        });
    });

</script>
@endsection
