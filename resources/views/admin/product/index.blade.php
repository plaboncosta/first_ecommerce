@extends('layouts.backend.app')
@section('title', 'Product')
@push('css')
<style>
    .badge {
        background: #00A0F0;
    }

    .panel .panel-heading {
        padding-top: 15px;
        padding-bottom: 10px;
    }

    .product-image {
        widows: 130px;
        height: 90px;
    }

    .fa-trash {
        color: darkorange;
    }
    .delete-button{
        background-color: #fff;
        border-width: 0px;
        border-style: none;
        border-color: #fff;
        border-image: initial;
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
                Products <span class="badge">{{ $products->count() }}</span>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <a href="{{ route('admin.product.create') }}" class="btn btn-info">Add New</a>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Cat..</th>
                                        <th>Image</th>
                                        <th>Mul Image</th>
                                        <th>Present Price</th>
                                        <th>Previous Price</th>
                                        <th>Fea Image</th>
                                        <th>Des</th>
                                        <th>Stock</th>
                                        <th>Com</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            <img class="img-responsive product-image" src="{{ Storage::disk('public')->url('product/display/'. $product->image) }}" alt="{{ $product->name }}">
                                        </td>
                                        <td>
                                            @foreach(json_decode($product->multiple_image) as $checking_image)
                                                <img class="img-responsive product-image" src="{{ Storage::disk('public')->url('product/checking/'. $checking_image) }}" alt="{{ $product->name }}">
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>{{ $product->present_price }}</td>
                                        <td>{{ $product->previous_price }}</td>
                                        <td>
                                            @foreach(json_decode($product->featured_image) as $featured_image)
                                                <img class="img-responsive product-image" src="{{ Storage::disk('public')->url('product/featured/'. $featured_image) }}" alt="{{ $product->name }}">
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>{!! str_limit($product->description, 20) !!}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->compare }}</td>
                                        <td>
                                            <a href="{{ route('admin.product.edit', $product->id) }}"><i class="fa fa-edit fa-lg"></i></a>
                                            <button class="delete-button" type="button" onclick="onDelete({{ $product->id }})"><i class="fa fa-trash fa-lg"></i></button>
                                            <form id="delete-form-{{ $product->id }}" action="{{ route('admin.product.delete', $product->id) }}"
                                                style="display:none ;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
<script>
    function onDelete(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You want to delete this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-' + id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }

</script>
@endpush
