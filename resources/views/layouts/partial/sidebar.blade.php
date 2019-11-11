<div class="sidebar" data-color="orange" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="{{ route('admin.dashboard') }}" class="simple-text">
            ITVer Eats
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
                <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/perfil*') ? 'active': '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Perfil</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                <a href="{{ route('slider.index') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/category*') ? 'active': '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Categorias</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/product*') ? 'active': '' }}">
                <a href="{{ route('product.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Productos</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/usuario*') ? 'active': '' }}">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Usuarios</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/rol*') ? 'active': '' }}">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Roles</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Mensaje de contacto</p>
                </a>
            </li>

            {{-- Elemento original --}}
            {{-- <li class="active">
                <a href="dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li> --}}

        </ul>
    </div>
</div>
