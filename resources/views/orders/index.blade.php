@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Order Products</h4>
                            <a href="#" style="float: right" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addProduct">
                                <i class="fa fa-plus"></i>Add New Products</a>
                        </div>
                        <form action="{{ route('orders.store') }}" method="post">
                            @csrf


                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Discount (%)</th>
                                    <th>Total</th>
                                    <th><a href="#" class="btn btn-sm btn-success add_more"><i class="fa fa-plus-circle"></i> </a></th>

                                </tr>
                                </thead>
                                <tbody class="addMoreProduct">
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <select name="product_id" id="product_id" class="form-control product_id">
                                                <option value="">Select Item</option>
                                                @foreach($products as $product)
                                                    <option data-price="{{$product->price}}"
                                                            value="{{ $product -> id }}">
                                                        {{$product-> product_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="quantity[]" id="quantity"
                                                   class="form-control quantity">
                                        </td>
                                        <td>
                                            <input type="number" name="price[]" id="price"
                                                   class="form-control price">
                                        </td>
                                        <td>
                                            <input type="number" name="discount[]" id="discount"
                                                   class="form-control discount">
                                        </td>
                                        <td>
                                            <input type="number" name="total_amount[]" id="total"
                                                   class="form-control total_amount">
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-danger delete"><i class="fa fa-times"></i></a></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4> Total <b class="total">0.00</b> </h4></div>
                        <div class="card-body">
                            <div class="btn-group">
                                <button type="button" onclick="PrintReceiptContent('print')"
                                        class="btn btn-dark mb-2">
                                    <i class="fa fa-print"></i> Print
                                </button>
                                <button type="button" onclick="PrintReceiptContent('print')"
                                        class="btn btn-primary mb-2">
                                    <i class="fa fa-print"></i> History
                                </button>
                                <button type="button" onclick="PrintReceiptContent('print')"
                                        class="btn btn-danger mb-2">
                                    <i class="fa fa-print"></i> Report
                                </button>

                            </div>

                            <div class="panel">
                                <div class="row">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>
                                                <label for="">Customer Name</label>
                                                    <input type="text" name="customer_name" id="" class="form-control">
                                            </td>
                                            <td>
                                                <label for="">Customer Phone</label>
                                                    <input type="number" name="customer_phone" id="" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                    <td> Payment Method <br>
                                        <span class="radio-item">
                                            <input type="radio" name="payment_method" id="payment_method"  value="cash" checked="checked" class="true">
                                            <label for="payment_method"><i class="fa fa-money-bill text-success"></i>Cash</label>
                                        </span>
                                    </td><br>
                                    <td>
                                        Payment
                                        <input type="number" name="paid_amount" id="paid_amount" class="form-control">
                                    </td>
                                    <td>
                                        Returning Change
                                        <input type="number" readonly name="balance" id="balance" class="form-control">
                                    </td>
                                    <td>
                                        <button class="btn-primary btn-md btn-block mt-3">
                                            Save
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn-danger btn-md btn-block mt-2">
                                            Calculator
                                        </button>
                                    </td>
                                    <div class="text-center">
                                        <a href="" class="text-danger"><i class="fa fa-sign-out-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- Modal of Adding Product -->
    <div class="modal right fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Add Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Brand</label>
                            <input type="text" name="brand" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alert Stock</label>
                            <input type="number" name="alert_stock" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="2" class="form-control"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary btn-block">Save Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal of Printing Receipt -->
    <div class="modal">
        <div id="print">
            @include('reports.receipt')
        </div>

   </div>




    <style>
        .modal.right .modal-dialog{
            /*position: absolute; */
            top: 0;
            right: 0;
            margin-right: 19vh;
        }

        .modal.fade:not(.in).right .modal-dialog{
            -webkit-transform: translate3d(25%, 0, 0);
            transform: translate3d(25%, 0, 0);
        }

        {{--
        .radio-item input[type="radio"]{
            visibility: hidden;
            width: 20px;
            height: 20px;
            margin: 0 5px 0 5px;
            padding: 0;
            cursor: pointer;
        }

        /* before style */
        .radio-item input[type="radio"]{
            position: relative;
            margin: 4px -25px -4px 0;
            display: inline-block;
            visibility: visible;
            width: 20px;
            height: 20px;
            border-radius: 10px;
            border: 2px inset rgb(150, 150, 150, 0.75);
            background: radial-gradient(ellipse at top left, rgb(255, 255, 255) 0%, rgb(250, 250, 250) 5%, rgb(230, 230, 230)95%, rgb(225, 225, 225)100%);
            content: '';
            cursor: pointer;
        }
        --}}
    </style>
@endsection

@section('script')

<script>

    $('.add_more').on('click', function () {
        var product = $('.product_id').html();
        var numberofrow = ($('.addMoreProduct tr').length -0) + 1;
        var tr = '<tr><td class="no">' + numberofrow + '</td>' +
            '<td><select class="form-control product_id" name="product_id[]">' + product +
            '</select></td>' +
            '<td> <input type="number" name="quantity[]" class="form-control quantity"></td>'+
            '<td> <input type="number" name="price[]" class="form-control price"></td>'+
            '<td> <input type="number" name="discount[]" class="form-control discount"></td>'+
            '<td> <input type="number" name="total_amount[]" class="form-control total_amount"></td>'+
            '<td> <a class="btn btn-dark btn-sm delete rounded-circle"><i class="fa fa-times-circle"</a></td>';
        $('.addMoreProduct').append(tr);
    });

    //Delete a row
    $('.addMoreProduct').delegate('.delete', 'click', function () {
        $(this).parent().parent().remove();
    })


    function TotalAmount() {
        var total = 0;
        $('.total_amount').each(function(i,e){
            var amount = $(this).val() -0;
            total += amount;
        });
        $('.total').html(total);
    }

    $('.addMoreProduct').delegate('.product_id', 'change', function () {
        var tr = $(this).parent().parent();
        var price = tr.find('.product_id option:selected').attr('data-price');
        tr.find('.price').val(price);
        var qty =tr.find('.quantity').val() -0;
        var disc =tr.find('.discount').val() -0;
        var price =tr.find('.price').val() -0;
        var total_amount = (qty * price) - ((qty * price * disc) / 100 );
        tr.find('.total_amount').val(total_amount);
        TotalAmount();
    });

    $('.addMoreProduct').delegate('.quantity, .discount', 'keyup', function () {
        var tr = $(this).parent().parent();
        var qty =tr.find('.quantity').val() -0;
        var disc =tr.find('.discount').val() -0;
        var price =tr.find('.price').val() -0;
        var total_amount = (qty * price) -((qty * price * disc) / 100 );
        tr.find('.total_amount').val(total_amount);
        TotalAmount();
    });

    $('#paid_amount').keyup(function () {
        var total = $('.total').html();
        var paid_amount =$(this).val();
        var tot = paid_amount - total;
        $('#balance').val(tot).toFixed(2);
    })

    //Print Section

    function PrintReceiptContent(el) {
        var data =  '<input type="button" id="printPageButton class="printPageButton" style="display: block; width: 100%; border:none; background-color:#008B8B; color: #fff; padding: 14px 28px; font-size:16px; cursor:pointer; text-align:center" value="Print Receipt" onClick ="window.print()">';
            data += document.getElementById(el).innerHTML;
            myReceipt = window.open("", "myWin", "left=150, top=130, width=400, height=400");
                myReceipt.screenX = 0;
                myReceipt.screenY = 0;
                myReceipt.document.write(data);
                myReceipt.document.title = "Print Receipt";
            myReceipt.focus();
            setTimeout(() => {
                myReceipt.close();

            }, 8000);


    }

</script>
@endsection
