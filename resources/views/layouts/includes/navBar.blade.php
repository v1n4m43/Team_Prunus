
<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-outline rounded-pill"><i class="fa fa-list"></i></a>
<a href="" class="btn btn-outline rounded-pill"><i class="fa fa-home"></i>Home</a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-user"></i>Users</a>
<a href="{{route('products.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-box"></i>Products</a>
<a href="{{route('orders.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-laptop"></i>Cashier</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-file"></i>Reports</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-money-bill"></i>Transactions</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-users"></i>Customers</a>



<style>
    .btn-outline{
        border-color: #b85b1f;
        color: #b85b1f;
    }

    .btn-outline:hover{
        background: #b85b1f;
        color: #fff;
    }

    .rounded-pill{
        width: 10%;
        margin: 2px;
    }
    .fa {
        margin: 2px;
    }

</style>
