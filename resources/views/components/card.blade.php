@props(['title'])
<section class="card">
    <header class="card-header">
        <h2 class="card-title">{{ $title }}</h2>
    </header>
    <div class="card-body">
        {{ $slot }}
    </div>
</section>