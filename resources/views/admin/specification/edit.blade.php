@extends('layouts.backend.app')
@section('title', 'Specification')
@push('css')

@endpush
@section('content')
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">
                Specification Create <span class="badge"></span>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-body">
                            <form action="{{ route('admin.specification.update', $specification->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="specification_product">Select Product</label>
                                    <select name="product" id="specification_product" class="form-control">
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ $product->id == $specification->product_id ? 'selected' : '' }} >{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Specification Color</label>
                                    <input id="color" name="Color" class="form-control input-lg" placeholder="Specification Color"
                                        type="text" value="{{ $specification->Color }}">
                                </div>
                                <div class="form-group">
                                    <label for="network">Specification Network</label>
                                    <input id="network" name="Network" class="form-control input-lg" placeholder="Specification Network"
                                        type="text" value="{{ $specification->Network }}">
                                </div>
                                <div class="form-group">
                                    <label for="dimensions">Specification Dimensions</label>
                                    <input id="dimensions" name="Dimensions" class="form-control input-lg" placeholder="Specification Dimensions"
                                        type="text" value="{{ $specification->Dimensions }}">
                                </div>
                                <div class="form-group">
                                    <label for="weight">Specification Weight</label>
                                    <input id="weight" name="Weight" class="form-control input-lg" placeholder="Specification Weight"
                                        type="text" value="{{ $specification->Weight }}">
                                </div>
                                <div class="form-group">
                                    <label for="build">Specification Build</label>
                                    <input id="build" name="Build" class="form-control input-lg" placeholder="Specification Build"
                                        type="text" value="{{ $specification->Build }}">
                                </div>
                                <div class="form-group">
                                    <label for="sim">Specification Sim</label>
                                    <input id="sim" name="Sim" class="form-control input-lg" placeholder="Specification Sim"
                                        type="text" value="{{ $specification->Sim }}">
                                </div>
                                <div class="form-group">
                                    <label for="display">Specification Display</label>
                                    <input id="display" name="Display" class="form-control input-lg" placeholder="Specification Display"
                                        type="text" value="{{ $specification->Display }}">
                                </div>
                                <div class="form-group">
                                    <label for="size">Specification Size</label>
                                    <input id="size" name="Size" class="form-control input-lg" placeholder="Specification Size"
                                        type="text" value="{{ $specification->Size }}">
                                </div>
                                <div class="form-group">
                                    <label for="resolution">Specification Resolution</label>
                                    <input id="resolution" name="Resolution" class="form-control input-lg" placeholder="Specification Resolution"
                                        type="text" value="{{ $specification->Resolution }}">
                                </div>
                                <div class="form-group">
                                    <label for="multitouch">Specification Multitouch</label>
                                    <input id="multitouch" name="Multitouch" class="form-control input-lg" placeholder="Specification Multitouch"
                                        type="text" value="{{ $specification->Multitouch }}">
                                </div>
                                <div class="form-group">
                                    <label for="platform">Specification Platform</label>
                                    <input id="platform" name="Platform" class="form-control input-lg" placeholder="Specification Platform"
                                        type="text" value="{{ $specification->Platform }}">
                                </div>
                                <div class="form-group">
                                    <label for="chipset">Specification Chipset</label>
                                    <input id="chipset" name="Chipset" class="form-control input-lg" placeholder="Specification Chipset"
                                        type="text" value="{{ $specification->Chipset }}">
                                </div>
                                <div class="form-group">
                                    <label for="cpu">Specification CPU</label>
                                    <input id="cpu" name="CPU" class="form-control input-lg" placeholder="Specification CPU"
                                        type="text" value="{{ $specification->CPU }}">
                                </div>
                                <div class="form-group">
                                    <label for="gpu">Specification GPU</label>
                                    <input id="gpu" name="GPU" class="form-control input-lg" placeholder="Specification GPU"
                                        type="text" value="{{ $specification->GPU }}">
                                </div>
                                <div class="form-group">
                                    <label for="memory">Specification Memory</label>
                                    <input id="memory" name="Memory" class="form-control input-lg" placeholder="Specification Memory"
                                        type="text" value="{{ $specification->Memory }}">
                                </div>
                                <div class="form-group">
                                    <label for="internal">Specification Internal</label>
                                    <input id="internal" name="Internal" class="form-control input-lg" placeholder="Specification Internal"
                                        type="text" value="{{ $specification->Internal }}">
                                </div>
                                <div class="form-group">
                                    <label for="main_camera">Specification Main_Camera</label>
                                    <input id="main_camera" name="Main_Camera" class="form-control input-lg" placeholder="Specification Main_Camera"
                                        type="text" value="{{ $specification->Main_Camera }}">
                                </div>
                                <a class="btn btn-danger" href="{{ route('admin.specification.index') }}">Back</a>
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
