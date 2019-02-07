@extends('layouts.backend.app')
@section('title', 'Slider')
@push('css')
<style>
    .badge {
        background: #00A0F0;
    }

    .panel .panel-heading {
        padding-top: 15px;
        padding-bottom: 10px;
    }

    .slider-image {
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
                            <table class="table table-bordered" id="myTable">
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
                                        <td>
                                            <img src="{{ Storage::disk('public')->url('slider/') . $slider->image }}"
                                                alt="{{ $slider->title }}" class="img-responsive img-thumbnail slider-image">
                                        </td>
                                        <td>{{ $slider->created_at }}</td>
                                        <td>{{ $slider->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.slider.edit', $slider->id) }}"><i class="fa fa-edit fa-lg"></i></a>
                                            <button class="delete-button" type="button" onclick="onDelete({{ $slider->id }})"><i class="fa fa-trash fa-lg"></i></button>
                                            <form id="delete-form-{{ $slider->id }}" action="{{ route('admin.slider.delete', $slider->id) }}"
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
