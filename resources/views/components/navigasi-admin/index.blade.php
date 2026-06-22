@vite(['resources/css/components/navigasi-admin.css', 'resources/css/layouts/index.css', 'resources/js/components/navigasi-admin.js'])

<header class="header">
    <div class="container-profil">
        <figure></figure>
        <h3>Admin</h3>
    </div>
    <div class="container-hamburger">
        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="4" y="7" width="24" height="3" rx="1.5" fill="currentColor" />
            <rect x="4" y="14.5" width="24" height="3" rx="1.5" fill="currentColor" />
            <rect x="4" y="22" width="24" height="3" rx="1.5" fill="currentColor" />
        </svg>
    </div>



    <section class="container-sidebar">
        <header>
            <div class="btn-close">
                <svg viewBox="0 0 24 24" fill="none">
                    <line x1="5" y1="5" x2="19" y2="19" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" />
                    <line x1="19" y1="5" x2="5" y2="19" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" />
                </svg>
            </div>
        </header>
        <section class="container-navlink">
            <section class="container-navlink">
                <a href="{{ route('dashboard-index') }}"
                    class="{{ request()->routeIs('dashboard-*') ? 'active' : '' }}">
                    <span class="icon">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                            <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                            <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
                            <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                        </svg>
                    </span>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('user-index') }}" class="{{ request()->routeIs('user-*') ? 'active' : '' }}">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <!-- Kepala pengguna utama -->
                            <circle cx="9" cy="8" r="3"></circle>

                            <!-- Kepala pengguna kedua -->
                            <circle cx="17" cy="10" r="2.5"></circle>

                            <!-- Badan pengguna utama -->
                            <path d="M3 19c0-3.3 2.7-6 6-6s6 2.7 6 6"></path>

                            <!-- Badan pengguna kedua -->
                            <path d="M14 19c0-2.2 1.8-4 4-4s4 1.8 4 4"></path>
                        </svg>
                    </span>
                    <span>Users</span>
                </a>

                <a href="{{ route('facility-index') }}" class="{{ request()->routeIs('facility-*') ? 'active' : '' }}">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="4" y="2" width="16" height="20" rx="2"></rect>
                            <path d="M9 6h.01"></path>
                            <path d="M15 6h.01"></path>
                            <path d="M9 10h.01"></path>
                            <path d="M15 10h.01"></path>
                            <path d="M9 14h.01"></path>
                            <path d="M15 14h.01"></path>
                            <path d="M10 22v-4h4v4"></path>
                        </svg>
                    </span>
                    <span>Facilities</span>
                </a>

                <a href="{{ route('index-category') }}"
                    class="{{ request()->routeIs('index-category') ? 'active' : '' }}">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.59 13.41 11 3H4v7l9.59 9.59a2 2 0 0 0 2.82 0l4.18-4.18a2 2 0 0 0 0-2.82z" />
                            <circle cx="7.5" cy="7.5" r="1.5" />
                        </svg>
                    </span>
                    <span>Category</span>
                </a>
            </section>
        </section>
    </section>
</header>
<div class="bg-blur"></div>
