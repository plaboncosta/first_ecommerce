@extends('layouts.backend.app')
@section('title', 'Product')
@push('css')
<style>
    .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
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
                Product Create <span class="badge"></span>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-body">
                            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Product Title</label>
                                    <input id="title" name="title" class="form-control input-lg" placeholder="Product Title"
                                        type="text">
                                </div>
                                <div class="form-group">
                                    <label for="image">Select Product Image</label>
                                    <span class="btn btn-default btn-file">
                                    Browse <input id="image" type="file" name="image">
                                </span>
                                </div>
                                <a class="btn btn-danger" href="{{ route('admin.product.index') }}">Back</a>
                                <button class="btn btn-info" type="submit">Save</button>
                            </form>
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

@endpush
