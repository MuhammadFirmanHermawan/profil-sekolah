<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><span><img src="../img/logosmkn.png" alt="" width="20%"></span> SMKN 1 MAJALAYA</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" style="color: white" href="#">Selamat Datang, {{ auth()->user()->name }}</a>
      </li>
    </ul>
    <ul class="navbar-nav px-3">
      <li class="nav-item ">
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-light btn-sm ml-5"> <span>Logout</span> <span <i class="bi bi-arrow-bar-right"></i></span> </button>
        </form>
    </li>
    </ul>
  </nav>