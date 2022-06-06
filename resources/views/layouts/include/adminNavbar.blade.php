<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
        <i
            class="fas fa-align-left primary-text fs-4 me-3"
            id="menu-toggle"
        ></i>
        <h2 class="fs-2 m-0">Dashboard</h2>
    </div>

    <button
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item-dropdown">
                <a
                    href="#"
                    class="nav-link dropdown-toggle second-text fw-bold"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item">Profile</a></li>
                    <li><a href="#" class="dropdown-item">Settings</a></li>
                    <li>
                        <a
                            class="dropdown-item"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                        >
                            {{ __("Logout") }}
                        </a>

                        <form
                            id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-none"
                        >
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
