<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Soeng<b>Souy</b></a> >>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links,forms,and other content for toggling --->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav-ml-auto">
            <div class="navbar-form-wrapper">
                <form class="navbar-form form-inline">
                    <div class="input-group search-box">
                        <input type="text" id="search" class="form-control" placeholder="Search-Here ...">
                        <div class="input-group-append">
                            -<span class="input-group-text">
                                   <i class="material-icons">&#xE8B6;</i>
                              </span>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" class="nav-item nav-link"><i class="fa fa-facebook"></i></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-twitter"></i></a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-google-plus"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</nav>
