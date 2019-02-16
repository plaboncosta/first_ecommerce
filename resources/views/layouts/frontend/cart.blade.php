@extends('layouts.frontend.app')
@section('title', 'Cart')
@push('css')
<style>
  .width-800::before {
    background: transparent !important;
  }
  .width-800::after {
    background: transparent !important;
  }
  .fa-times{
    cursor: pointer;
  }
  .shopping-content{
    padding-top: 30px !important;
  }
  .check-out-btna a {
    color: #454546;
    line-height: 1;
    font-size: 14px;
    margin-bottom: 15px;
    display: inline !important;
    text-decoration: none !important;
    font-family: 'Sintony', sans-serif;
    font-weight: 400;
  }
  .shopping-item select {
      width: 60px;
      height: 33px;
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      padding-left: 10px;
      color: #000000;
      font-size: 12px;
  }
  .continue-button{
    padding: 15px !important;
  }
</style>
@endpush
@section('content')
<main>
  <!-- Modal -->
  <div class="modal fade modal-l" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="row no-gutters width-100">
            <div class="col-12 col-sm-4 col-md-6 text-center text-sm-left">
              <h5 class="modal-title" id="exampleModalLongTitle">MOU Balance</h5>
            </div>
            <div class="col-12 col-sm-8 col-md-6 text-right text-center text-sm-right">
              <p>Available MOU : 20,000.00 Utilized MOU : 20,000.00 </p>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="table-responsive table-responsive-md table-responsive-lg">
            <table class=" table width-950">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="pt-0">
                    <div class="modal-inner">
                      <h4>Device</h4>
                    </div>
                  </th>
                  <th scope="col" class="pt-0">
                    <div class="modal-inner">
                      <h4>MOU Type</h4>
                    </div>
                  </th>
                  <th scope="col" class="pt-0">
                    <div class="modal-inner">
                      <h4>MOU to be used</h4>
                    </div>
                  </th>
                  <th scope="col" class="pt-0">
                    <div class="modal-inner">
                      <h4>Balance to pay</h4>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <div class="modal-body-inner">
                      <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-1.png" alt="">
                      <span>LKR 78,800.00</span>
                    </div>
                  </th>
                  <td>
                    <div class="modal-body-inner">
                      <form action="#">
                        <input type="text" placeholder="Designation Wise">
                        <i class="fas fa-caret-down"></i>
                      </form>
                      <form action="#">
                        <input type="text" placeholder="Manager">
                        <i class="fas fa-caret-down"></i>
                      </form>
                    </div>
                  </td>
                  <td>
                    <div class="modal-body-inner2">
                      <h5 class=" d-flex align-items-center">LKR 20,000.00</h5>
                    </div>
                  </td>
                  <td>
                    <div class="modal-body-inner">
                      <h5>LKR 20,000.00</h5>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <div class="shopping-list-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="shopping-title text-capitalize">
            <h3>Shopping Cart</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="row ">
            <div class="col-12">
              <div class="shopping-header">
                <div class="responsive">
                  <table class="table width-800 ">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="pt-0">
                          <div class="items">
                            <h2>Items</h2>
                          </div>
                        </th>
                        <th scope="col" class="pt-0">
                          <div class="items">
                            <h2>Unit price</h2>
                          </div>
                        </th>
                        <th scope="col" class="pt-0">
                          <div class="items">
                            <h2>QTY</h2>
                          </div>
                        </th>
                        <th scope="col" class="pt-0">
                          <div class="items">
                            <h2>Product_Subtotal</h2>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <div class="shopping-border">
                      <tbody>
                        @if(Cart::content()->count() > 0)
                        @foreach(Cart::content() as $item)
                        <tr class="">
                          <th scope="row">
                            <div class="shopping-item d-flex align-items-center">
                              <form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"><i class="fas fa-times"></i></button>
                              </form>
                              <a href="{{ route('product.show', $item->model->slug) }}"><img style="height: 100px;" src="{{ Storage::disk('public')->url('product/display/'. $item->model->image) }}" alt="image"></a>
                            </div>
                          </th>
                          <td>
                            <div class="shopping-item shopping-content">
                              <h5><a href="{{ route('product.show', $item->model->slug) }}">{{ $item->name }}</a></h5>
                              <span>LKR {{ $item->model->present_price }}</span>
                            </div>
                          </td>
                          <td>
                            <div class="shopping-item shopping-content">
                              <h6>Quantity:</h6>
                              <select class="quantity" data-id="{{ $item->rowId }}">
                                @for($i=1; $i<5+1; $i++)
                                  <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="shopping-item shopping-content">
                              @php
                            $single_product_subtotal = $item->model->present_price * $item->qty;
                              @endphp
                              <h3>LKR {{ $single_product_subtotal }}</h3>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                        @else
                        <div class="alert alert-danger">
                          You have no item in your cart!
                        </div>
                        @endif
                      </tbody>
                    </div>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="Order-Summary">
            <div class="Order-inner">
              <h4>Order Summary</h4>
              <div class="Order">
                <h6>Subtotal ({{ Cart::count() }} Items)</h6>
                <h5>LKR {{ Cart::subtotal() }}</h5>
              </div>
              <div class="Order-check-out">
                <h5>Tax (VAT + NBT)</h5>
                <h5>LKR {{ Cart::tax()}}</h5>
              </div>
              <div class="final-check-out d-flex justify-content-between">
                <h4>Total</h4>
                <h4>LKR {{ Cart::total() }}</h4>
              </div>
              <div class="check-out-btna text-center">
                <button class=" btn-block mb-20">Proceed to checkout</button>
                <a href="{{ route('shop') }}"><button class=" btn-block red-btn continue-button">Continue Shopping</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@push('js')
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    (function(){
      const classname = document.querySelectorAll('.quantity');

      Array.from(classname).forEach(function(element){
        element.addEventListener('change', function(){
          const id = element.getAttribute('data-id')
          axios.put(`/cart/${id}`, {
            quantity: this.value
          })
          .then(function (response) {
            console.log(response);
            window.location.href = '{{ route('cart.index') }}';
          })
          .catch(function (error) {
            console.log(error);
            window.location.href = '{{ route('cart.index') }}';
          });
        })
      })
    })();
  </script>
@endpush