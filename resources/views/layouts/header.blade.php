<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo"><b>ANISC</b> - SIDIK</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a href="/profile">Selamat datang, {{Auth::user()->name}}!</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>
