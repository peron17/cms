@props(['title'])
<section class="card">
    @if ( $title )
    <header class="card-header">
        <h2 class="card-title">{{ $title }}</h2>
    </header>
    @endif

    <div class="card-body p-3">
        {{ $slot }}
    </div>
</section>