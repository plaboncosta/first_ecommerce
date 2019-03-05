@extends('layouts.backend.app')
@section('title', 'Product')
@push('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
            <h4 class="text-danger"><strong>Don't forget add specification of this product!</strong></h4>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-body">
                            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="name">Product Name</label>
                                            <input id="name" name="name" class="form-control input-lg" placeholder="Product Name"
                                            type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category Name</label>
                                            <select name="category" id="category" class="form-control input-lg">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Select Product Image</label>
                                            <span class="btn btn-default btn-file">
                                                Browse <input id="image" type="file" name="image">
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="stock">Has this product in stock?</label><br>
                                            <input name="stock" id="stock" type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Product Description</label>
                                            <textarea name="description" id="description" cols="30" rows="15"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="multiple_image">Select Product Multiple Image</label>
                                            <span class="btn btn-default btn-file">
                                                Browse <input id="multiple_image" type="file" name="multiple_image[]" multiple="true">
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="featured_image">Select Product Featured Image</label>
                                            <span class="btn btn-default btn-file">
                                                Browse <input id="featured_image" type="file" name="featured_image[]" multiple="true">
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="present_price">Present Price</label>
                                            <input id="present_price" name="present_price" class="form-control input-lg" placeholder="Present Price"
                                            type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="previous_price">Previous Price</label>
                                            <input id="previous_price" name="previous_price" class="form-control input-lg" placeholder="Previous Price"
                                            type="text">
                                        </div>
                                        <a class="btn btn-danger" href="{{ route('admin.product.index') }}">Back</a>
                                        <button class="btn btn-info" type="submit">Save</button>
                                    </div>
                                </div>
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
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=n0hdh2brxco06928opalzi310t778gsinccjcqowsbz7rft2"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush