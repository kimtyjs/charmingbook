<div class="dash">
    @include('partials.dashboard.sidebar')
    <div class="dash-app">
        @include('partials.dashboard.navBar')
        <main class="dash-content">
            <div class="container-fluid">
                {{ $title }}
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
