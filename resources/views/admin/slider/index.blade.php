@extends('layouts.backend.app')
@section('title', 'Slider')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<style>
    .badge {
        background: #00A0F0;
    }

    .panel .panel-heading {
        padding-top: 15px;
        padding-bottom: 10px;
    }

</style>
@endpush
@section('content')
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">
                Sliders <span class="badge">{{ $sliders->count() }}</span>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            {{-- <h3 class="panel-title">Slider Table</h3> --}}
                            <a href="{{ route('admin.slider.create') }}" class="btn btn-info">Add New</a>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $key => $slider)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->image }}</td>
                                        <td>{{ $slider->created_at }}</td>
                                        <td>{{ $slider->updated_at }}</td>
                                        <td>
                                        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
@push('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush
