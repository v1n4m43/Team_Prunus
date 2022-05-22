<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
        <li class="active">
            <a href="#"><i class="fa-solid fa-house fa-lg"></i> Home</a>
        </li>
        <li>
            <a href="{{ route('users.index') }}"><i class=" fa fa-user fa-lg"></i>Users</a>
        </li>
        <li>
            <a href="{{ route('products.index') }}"><i class="fa fa-box fa-lg"></i>Products</a>
        </li>
        <li>
            <a href="{{ route('orders.index') }}"><i class="fa fa-money-bill fa-lg"></i>Cashier</a>
        </li>
    </ul>
</nav>
<style>
    #sidebar{
        height: 100vh;
    }
    #sidebar ul.lead{
        border-bottom: 2px solid #47748b;
        width: fit-content;
    }

    #sidebar ul li a{
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color: #794829;
        text-decoration: none;
    }

    #sidebar ul li a:hover{

        color: #fff;
        background: #794829;
        text-decoration: none !important;
    }

    #sidebar ul li a i{
        margin-right: 10px;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"]{
        color: #fff;
        background: #794829;
    }


</style>


