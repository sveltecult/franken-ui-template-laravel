<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width" />
    <title>Franken UI</title>
    <link rel="preload" href="{{ asset('fonts/geist-font/fonts/GeistVariableVF.woff2') }}" as="font"
        type="font/woff2" crossorigin />
    <link rel="preload" href="{{ asset('fonts/geist-font/fonts/GeistMonoVariableVF.woff2') }}" as="font"
        type="font/woff2" crossorigin />
    <link rel="stylesheet" href="{{ asset('fonts/geist-font/style.css') }}" />
    <script>
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>

    @vite('resources/css/app.css')
    @vite('resources/js/uikit.js')
</head>

<body class="bg-background font-geist-sans text-foreground antialiased">
    <!-- START CODING HERE -->
    <div class="flex flex-col items-center justify-center gap-6">
        <h1 class="text-4xl">Franken UI</h1>
        <button class="uk-icon-button" id="theme-toggle">
            <svg id="theme-toggle-light-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-sun dark:hidden">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2"></path>
                <path d="M12 20v2"></path>
                <path d="m4.93 4.93 1.41 1.41"></path>
                <path d="m17.66 17.66 1.41 1.41"></path>
                <path d="M2 12h2"></path>
                <path d="M20 12h2"></path>
                <path d="m6.34 17.66-1.41 1.41"></path>
                <path d="m19.07 4.93-1.41 1.41"></path>
            </svg>
            <svg id="theme-toggle-dark-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-moon hidden dark:block">
                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
            </svg>
        </button>
    </div>
    <!-- END -->

    <script>
        var themeToggleBtn = document.getElementById("theme-toggle");

        themeToggleBtn?.addEventListener("click", function() {
            // if set via local storage previously
            if (localStorage.getItem("color-theme")) {
                if (localStorage.getItem("color-theme") === "light") {
                    document.documentElement.classList.add("dark");
                    localStorage.setItem("color-theme", "dark");
                } else {
                    document.documentElement.classList.remove("dark");
                    localStorage.setItem("color-theme", "light");
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains("dark")) {
                    document.documentElement.classList.remove("dark");
                    localStorage.setItem("color-theme", "light");
                } else {
                    document.documentElement.classList.add("dark");
                    localStorage.setItem("color-theme", "dark");
                }
            }
        });
    </script>
</body>

</html>
