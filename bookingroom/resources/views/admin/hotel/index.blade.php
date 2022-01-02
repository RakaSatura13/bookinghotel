@extends('layouts.admin')

@section('admin_content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            {{ __('Employee List') }}
                        </h1>
                        <div class="page-header-subtitle">{{ __('Employee Attendance App') }}</div>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div id="alert" class="alert alert-success alert-block mb-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    {{ $message }}
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div id="alert" class="alert alert-success alert-block mb-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    {{ $message }}
                </div>
            @endif
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                {{ __('Employee List') }}
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="employee_table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('No') }}</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('Alamat') }}</th>
                                <th>{{ __('Rating') }}</th>
                                <th>{{ __('Review') }}</th>
                                <th>{{ __('Tanggal Input Data') }}
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i = 1;
                            @endphp
                            @foreach ($hotel as $h)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $h->nama }}</td>
                                    <td>{{ $h->alamat }}</td>
                                    <td>{{ $h->rating }}</td>
                                    <td>{{ $h->review }}</td>
                                    <td>{{ $h->created_at->format('d F Y H:i:s') }}</td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModalLabel">Reject User Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to reject this user?</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="" class="btn btn-danger" id="stop">Yes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="removeModalLabel">Remove User Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to remove this user?</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="" class="btn btn-danger" id="stop">Yes</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@push('after-script')
    <script>
        var timeout = 3000;
        $('#alert').delay(timeout).fadeOut(300);
        $(document).ready(function() {
            $('#employee_table').DataTable();
        });
    </script>
@endpush