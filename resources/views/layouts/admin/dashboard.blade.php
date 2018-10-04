<!doctype html>
<html class="no-js" lang="en">
@include('layouts.admin.head')
<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            @include('layouts.admin.header')
            @include('layouts.admin.sidebar')
            <article class="content dashboard-page">
                <section class="section">
                    @yield('template')
                </section>
            </article>
            @include('layouts.admin.footer')
            @include('layouts.admin.modal')
        </div>
    </div>
    @include('layouts.admin.reference')
    @include('layouts.admin.scripts')
</body>
</html>