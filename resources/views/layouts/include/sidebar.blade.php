<div class="bg-dark" id="sidebar-wrapper">
        <div
          class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottem"
        >
          Dream-Line
        </div>

        <div class="list-group list-group-flush my-3">
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent secondary-text active"
          >
            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent secondary-text"
          >
            <i class="fas fa-project-diagram me-2"></i>Projects
          </a>
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
