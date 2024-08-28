<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    {{--  Poppins & DM Sans  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{--  Fav Icon  --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    {{--  POSTHOG  --}}
    @env('production')
        <script>
            !function (t, e) {
                var o, n, p, r;
                e.__SV || (window.posthog = e, e._i = [], e.init = function (i, s, a) {
                    function g(t, e) {
                        var o = e.split(".");
                        2 == o.length && (t = t[o[0]], e = o[1]), t[e] = function () {
                            t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                        }
                    }

                    (p = t.createElement("script")).type = "text/javascript", p.async = !0, p.src = s.api_host + "/static/array.js", (r = t.getElementsByTagName("script")[0]).parentNode.insertBefore(p, r);
                    var u = e;
                    for (void 0 !== a ? u = e[a] = [] : a = "posthog", u.people = u.people || [], u.toString = function (t) {
                        var e = "posthog";
                        return "posthog" !== a && (e += "." + a), t || (e += " (stub)"), e
                    }, u.people.toString = function () {
                        return u.toString(1) + ".people (stub)"
                    }, o = "capture identify alias people.set people.set_once set_config register register_once unregister opt_out_capturing has_opted_out_capturing opt_in_capturing reset isFeatureEnabled onFeatureFlags getFeatureFlag getFeatureFlagPayload reloadFeatureFlags group updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures getActiveMatchingSurveys getSurveys getNextSurveyStep onSessionId".split(" "), n = 0; n < o.length; n++) g(u, o[n]);
                    e._i.push([i, s, a])
                }, e.__SV = 1)
            }(document, window.posthog || []);
            posthog.init('phc_VNuNW6VnHMpcpM7VK5Xl3F80SIjmBnxTgd3JjSs4wFa', {api_host: 'https://us.i.posthog.com', person_profiles: 'always'})
        </script>
    @endenv


    <title>{{ $settings->website_name . ' | ' . $title}}</title>
</head>

<body class="relative font-body bg-primary-500">

@if($navigationType === 'floating')
    <x-layout.header-floating :logo="$settings->logo_header" :cta-text="$settings->nav_cta_text" :cta-link="$settings->nav_cta_link" :nav-links="$settings->navbar_links"/>
@elseif($navigationType === 'default')
    <x-layout.header :logo="$settings->logo_header" :cta-text="$settings->nav_cta_text" :cta-link="$settings->nav_cta_link" :nav-links="$settings->navbar_links"/>
    <x-section-bradcrumbs :title="$title"/>
@endif

<main class="bg-white">
    {{ $slot }}
</main>

<x-layout.footer
    :about-us="$settings->about_us"
    :logo="$settings->logo_footer"
    :instagram-link="$settings->instagram_link"
    :facebook-link="$settings->facebook_link"
    :youtube-link="$settings->youtube_link"
    :logo="$settings->logo_footer"
    :instagram-posts="$settings->instagram_posts"
    :phone="$settings->phone" />

@vite('resources/js/app.js')

</body>
</html>
