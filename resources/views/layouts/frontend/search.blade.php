@extends('layouts.frontend.app')
@section('title', 'Search')
@push('css')
    <style type="text/css">
        @if($products->count() < 1)
            .black-bg {
                margin-top: 200px;
            }
        @endif
    </style>
@endpush
@section('content')
    @include('layouts.frontend.partial.modal')
    <div class="container">
        @if( $products->count() > 0 )
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{{ $products->count() }} {{ $products->count() == 1 ? 'result' : 'results' }} found for {{ request('name') }}</strong> 
        </div>
        <table class="table table-bordered mt-5 table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Present Price</th>
                    <th scope="col">Previous Price</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td><a class="text-secondary" href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></td>
                        <td><a class="text-secondary" href="{{ route('product.show', $product->slug) }}"><img src="{{ Storage::disk('public')->url('product/display/'. $product->image) }}" class="img-fluid" alt="{{ $product->image }}"></a></td>
                        <td>{{ $product->present_price }}</td>
                        <td>{{ $product->previous_price }}</td>
                        <td>{!! str_limit($product->description, 100) !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-5">
            {{ $products->links() }}
        </div>
        @else
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ $products->count() }} result found for {{ request('name') }}</strong> 
            </div>
        @endif
    </div>
@endsection
@push('js')

@endpush