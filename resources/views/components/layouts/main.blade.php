@props(['title','pageTitle'])

<x-layouts._base :title="$title">
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>{{ $pageTitle ?? '' }}</h2>
            <div class="right-wrapper text-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    {{-- @yield('breadcrumb') --}}
                </ol>
            </div>
        </header>

        {{ $slot }}
    </section>
</x-layouts._base>