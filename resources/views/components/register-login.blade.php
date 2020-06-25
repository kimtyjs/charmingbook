
@push('styles')
    <link rel="stylesheet" href="{{asset('css/components/register_login.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/components/util.css')}}" type="text/css">
@endpush

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            {{ $slot }}
        </div>
    </div>
</div>
