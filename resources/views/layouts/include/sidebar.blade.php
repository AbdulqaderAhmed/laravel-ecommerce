<div class="bg-dark" id="sidebar-wrapper">
        <div
          class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottem"
        >
          E-Shop Admin Panel
        </div>
        <div class="list-group list-group-flush my-3">
          <a
            href="{{ url('/admin') }}"
            class="list-group-item list-group-item-action bg-transparent secondary-text"
            >
            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
          </a>

          <div class="dropdown">
            <a id="catagories-dropdown" 
               class="dropdown-toggle list-group-item list-group-item-action bg-transparent secondary-text"
               data-bs-toggle="dropdown"
               aria-expanded="false">
              <i class="fas fa-project-diagram me-2"></i>Catagories
              </a>

              <ul class="dropdown-menu bg-dark" aria-labelledby="catagories-dropdown">
                <li>
                  <a
                    href="{{ url('/admin/items') }}"
                    class="dropdown-item secondary-text">
                    Show Catagories
                  </a>
                </li>

                <li>
                  <a
                    href="{{ url('/admin/create') }}"
                    class="dropdown-item secondary-text">
                      Create Catagory
                  </a>
                </li>
              </ul>
          </div>

          <div class="dropdown">
            <a id="product-dropdown" 
               class="dropdown-toggle list-group-item list-group-item-action bg-transparent secondary-text"
               data-bs-toggle="dropdown"
               aria-expanded="false">
              <i class="fas fa-project-diagram me-2"></i>Products
              </a>

              <ul class="dropdown-menu bg-dark" aria-labelledby="catagories-dropdown">
                <li>
                  <a
                    href="{{ url('/admin/product') }}"
                    class="dropdown-item secondary-text">
                    Show Products
                  </a>
                </li>

                <li>
                  <a
                    href="{{ url('/admin/product/create') }}"
                    class="dropdown-item secondary-text">
                      Create Products
                  </a>
                </li>
    
              </ul>
          </div>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent secondary-text"
          >
            <i class="fas fa-chart-line me-2"></i>Analytics
          </a>
        <a class="list-group-item list-group-item-action bg-transparent text-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="fas fa-project-diagram me-2"></i>{{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </a>
    </div>
</div>
