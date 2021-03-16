<!DOCTYPE html>
<html class="fixed">
    <head>
        <meta charset="UTF-8" />
        <title>{{ $title }}</title>

        <x-layouts._head />
    </head>
    <body>
        <section class="body">

            <x-layouts._header />

            <div class="inner-wrapper">
                <x-layouts._menu />
                {{ $slot }}
            </div>
        </section>

        <x-layouts._footer />
    </body>
</html>