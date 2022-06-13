<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                @yield('header-tittle')
            </h1>
            <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p>
        </div>

        <div class="row">
            @yield('content1')
        </div>

    </div>
</main>