<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- 🔹 YOU CHANGE THIS TITLE ONLY --}}
    <title>{{ $pageTitle ?? 'Coming Soon | Naretu Initiatives' }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/comingsoon.css') }}">
    <link rel="icon" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    
    <style>
     
    </style>
</head>

<body>

    {{-- 🔹 FLOATING BACK BUTTON --}}
    <a href="{{ url('/') }}" class="floating-back-btn" aria-label="Go back to homepage">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        <span>Return Home</span>
    </a>

<div class="header">

    <!-- Circles Animation -->
    <ul class="circles">
        @for($i = 0; $i < 10; $i++)
            <li></li>
        @endfor
    </ul>

    <div class="inner-header flexCol">

        {{-- 🔹 YOU CHANGE THIS HEADING ONLY --}}
        <h1 class="h1">{{ $heading ?? 'We Are Launching Soon!' }}</h1>

        <div id="countdown" class="countdown">
            <div>
                <span id="months" class="number"></span>
                <span>Months</span>
            </div>
            <div>
                <span id="days" class="number"></span>
                <span>Days</span>
            </div>
            <div>
                <span id="hours" class="number"></span>
                <span>Hours</span>
            </div>
            <div>
                <span id="minutes" class="number"></span>
                <span>Minutes</span>
            </div>
            <div>
                <span id="seconds" class="number"></span>
                <span>Seconds</span>
            </div>
        </div>
    </div>

</div>

<div class="content flex">
    <p>
        We are currently working on something amazing.<br>
        Stay tuned.
    </p>
</div>
 <!-- *** SUBSCRIBE START ***  -->

    <div id="subscribe" class="content flex">

        <form method="POST" action="https://previews.customer.envatousercontent.com/files/481109369/subscribe.php ">
            <p><input type="text" name="Email" size="20" value="" placeholder="Subscribe your e-mail Id"><input
                    type="button" value="Submit" name="Submit"></p>
        </form>
    </div>
    <!-- *** SUBSCRIBE END ***  -->
<script>

    // 🔹 YOU CHANGE THIS DATE ONLY
    const launchDate = new Date("{{ $launchDate ?? '2026-06-01 00:00:00' }}").getTime();

    const countdown = setInterval(function () {

        const now = new Date().getTime();
        const distance = launchDate - now;

        const months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
        const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("months").innerHTML = months;
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        if (distance < 0) {
            clearInterval(countdown);
            document.getElementById("countdown").innerHTML = "We Are Live!";
        }

    }, 1000);
</script>
<script src="https://previews.customer.envatousercontent.com/files/481109369/js/index.js "></script>
</body>
</html>