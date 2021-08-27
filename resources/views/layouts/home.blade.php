<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'lenovo-services') }}</title>
</head>

<body>
    <section class="s-wrapper">
        @yield('content')
    </section>


    <script>
        const accordionBtns = document.querySelectorAll(".accordion");


        accordionBtns.forEach((accordion) => {
            accordion.onclick = function () {
                this.classList.toggle("is-open");

                let content = this.nextElementSibling;

                if (content.style.maxHeight) {
                    // Accordion is active
                    content.style.maxHeight = null;
                } else {
                    // Accordion is in-active
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            }
        })
    </script>
</body>

</html>
