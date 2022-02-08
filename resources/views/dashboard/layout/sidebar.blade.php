<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <h6 class="d-block ml-4 mt-2">Dashboard</h6>
              <a class="nav-link {{ Request::is('sisw') ? 'active' :'' }}" href="{{ route('sisw.index') }}">
                <span><i class="bi bi-file-earmark"></i></span>
                Data Siswa <span class="sr-only">(current)</span>
              </a>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('absensi') ? 'active' :'' }}" href="{{ route('absensi.index') }}">
                  <span><i class="bi bi-card-checklist"></i></span>
                  Absensi
                </a>
            </li>
          </ul>
        </div>
      </nav>
      </main>
    </div>
  </div>