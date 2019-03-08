<div class="modal fade modal-l" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row no-gutters width-100">
                        <div class="col-12 col-sm-4 col-md-6 text-center text-sm-left">
                            <h5 class="modal-title" id="exampleModalLongTitle">Cart List</h5>
                        </div>
                        <div class="col-12 col-sm-8 col-md-6 text-right text-center text-sm-right">
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
                                            <h4>Product Name</h4>
                                        </div>
                                    </th>
                                    <th scope="col" class="pt-0">
                                        <div class="modal-inner">
                                            <h4>Subtotal Price</h4>
                                        </div>
                                    </th>
                                    <th scope="col" class="pt-0">
                                        <div class="modal-inner">
                                            <h4>Total Price(after tax)</h4>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( Cart::content() as $item )
                                <tr>
                                    <th scope="row">
                                        <div class="modal-body-inner">
                                            <img src="{{ Storage::disk('public')->url('product/display/'. $item->model->image) }}" alt="">
                                            <span>LKR {{ $item->model->present_price }}</span>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="modal-body-inner">
                                            {{ $item->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="modal-body-inner2">
                                            <h5 class=" d-flex align-items-center">LKR {{ Cart::subtotal() }}</h5>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="modal-body-inner">
                                            <h5>LKR {{ Cart::total() }}</h5>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                </div>
            </div>
        </div>
    </div>