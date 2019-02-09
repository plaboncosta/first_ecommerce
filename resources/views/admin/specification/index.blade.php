@extends('layouts.backend.app')
@section('title', 'Specification')
@push('css')
<style>
    .badge {
        background: #00A0F0;
    }

    .panel .panel-heading {
        padding-top: 15px;
        padding-bottom: 10px;
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
                Product Specifications <span class="badge">{{ $specifications->count() }}</span>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <a href="{{ route('admin.specification.create') }}" class="btn btn-info">Add New</a>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered" id="myTable">
                                <thead>



                                    <tr>
                                        <th>Id</th>
                                        <th>Product</th>
                                        <th>Color</th>
                                        <th>Network</th>
                                        <th>Dimensions</th>
                                        <th>Weight</th>
                                        <th>Build</th>
                                        <th>Sim</th>
                                        <th>Display</th>
                                        <th>Size</th>
                                        <th>Resolution</th>
                                        <th>Multitouch</th>
                                        <th>Platform</th>
                                        <th>Chipset</th>
                                        <th>CPU</th>
                                        <th>GPU</th>
                                        <th>Memory</th>
                                        <th>Internal</th>
                                        <th>Main Camera</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specifications as $key => $specification)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $specification->product->name }}</td>
                                        <td>{{ $specification->Color }}</td>
                                        <td>{{ $specification->Network }}</td>
                                        <td>{{ $specification->Dimensions }}</td>
                                        <td>{{ $specification->Weight }}</td>
                                        <td>{{ $specification->Build }}</td>
                                        <td>{{ $specification->Sim }}</td>
                                        <td>{{ $specification->Display }}</td>
                                        <td>{{ $specification->Size }}</td>
                                        <td>{{ $specification->Resolution }}</td>
                                        <td>{{ $specification->Multitouch }}</td>
                                        <td>{{ $specification->Platform }}</td>
                                        <td>{{ $specification->Chipset }}</td>
                                        <td>{{ $specification->CPU }}</td>
                                        <td>{{ $specification->GPU }}</td>
                                        <td>{{ $specification->Memory }}</td>
                                        <td>{{ $specification->Internal }}</td>
                                        <td>{{ $specification->Main_Camera }}</td>
                                        <td>
                                            <a href="{{ route('admin.specification.edit', $specification->id) }}"><i class="fa fa-edit fa-lg"></i></a>
                                            <button class="delete-button" type="button" onclick="onDelete({{ $specification->id }})"><i class="fa fa-trash fa-lg"></i></button>
                                            <form id="delete-form-{{ $specification->id }}" action="{{ route('admin.specification.delete', $specification->id) }}"
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
