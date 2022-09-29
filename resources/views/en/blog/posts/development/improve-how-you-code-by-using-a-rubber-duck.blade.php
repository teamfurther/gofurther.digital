@section('title', 'Rubber Duck Debugging Method: How Teaching Helps in Learning')
@section('description', 'Did you run into a programming snag you can\'t figure out? Find a rubber duck and start talking to it. Sound silly? Let me explain.')
@section('preview_image', route('generate-cover', ['title' => 'Improve How You Code by Using a Rubber Duck!']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Improve How You Code by Using a Rubber Duck!</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-01-04 12:00:00">Jan 4th, 2021</time> &middot; 3 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Did you ever get stuck while coding and asked for help from a more experienced colleague, but as you explained your code to him, you answered the questions yourself?</p>
                            <p>I have to admit it has already happened to me, and at such times I always felt discomforted that I disturbed my colleague unnecessarily. If I had stepped back a bit and read the code, I would have found the right answers on my own.</p>
                            <p>Sometimes we developers can get very immersed in coding, in which case we get into the "zone" and just write and write… but basically we hardly think about what we're doing. We only start to take a closer look at our lines when we don't understand something, when doesn't work, or when a little elf whispers in our head that "that's just not the way to do it" or "there's definitely a more elegant solution".</p>
                            <p>At such times, we have to lean back, get out of the zone, and find our old childhood friend, the good old rubber duck. A rubber duck?! Yes! It must not be a rubber duck, any object that will be our colleague for a while will do: the office dog or a plush monkey. And just as part of a peer review, we will explain to him or her what we did.</p>
                            <p>That's when those "Aha!" thoughts are born: when we are essentially code reviewing our own code. This method is not a substitute for the actual code review, because this code is like our child and like all good parents, our code will be the most beautiful and the best for us, but it does not hurt for us to look at it for a while before others do.</p>
                            <p class="has-margin-t60"><em>Code review or peer review is a software quality assurance method in which one or more persons review the partial or complete code base of a software. At least one person must be different from the author of the code.</em></p>
                            <p><em>The purpose of the code review is to improve the quality and maintainability of the code, detect software bugs, to transfer knowledge between colleagues, and to strengthen the sense of collective responsibility.</em></p>
                            <figure>
                                <img src="{{ asset('media/blog/improve-how-you-code-by-using-a-rubber-duck-rubber-duckies.jpg') }}" alt="Rubber duck debugging is a method of debugging code" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">So what is this rubber duck debugging method?</h2>
                            <ul class="list has-margin-b30">
                                <li><b>1.</b> Buy, borrow or steal a rubber duck from a colleague</li>
                                <li><b>2.</b> Put your new "colleague" on your desk</li>
                                <li><b>3.</b> If you feel like you've lost yourself in code, call for help and start explaining to him in detail why you did it.</li>
                            </ul>
                            <p class="has-margin-b60">A good piece of advice: if you work in an office with several real colleagues, you better give them a heads up.</p>
                            <h2 class="heading-2 has-margin-b30">But why does it work?</h2>
                            <p>The answer to why is simple. Software development is a summary of very complex processes that are very difficult to follow after a while. When we've been very adventurous and already feel like we don't even understand what we're doing, it helps to start rethinking from the beginning what our goal was and what we've achieved so far.</p>
                            <p>There is no better method than trying to explain how the software currently works and what we want to achieve for a "colleague" who knows nothing about the software.</p>
                            <p>The project has to be explained to him in some detail, and in the process, we essentially explain it to ourselves. And what better way to do that than with a "colleague" who really knows nothing about the code (like a rubber duck)? Notice that as we explain the code line by line, the image in our own heads begins to clear up.</p>
                            <p>If you're blocked and you really don't know how to proceed, call on the good old rubber duck for help, he'll solve the problem. It' worth a shot.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Improve how you code by using a rubber duck'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.csongorur')
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription')
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BlogPosting",
    "author": {
        "@type": "Person",
        "name": "Peter Illes"
    },
    "copyrightHolder": {
        "@type": "Corporation",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "{{ config('site.company.address.country') }}",
            "addressLocality": "{{ config('site.company.address.city') }}",
            "postalCode": "{{ config('site.company.address.postal_code') }}",
            "streetAddress": "{{ config('site.company.address.street_address') }}"
        },
        "alternateName": "{{ config('site.company.name') }}",
        "description": "{{ config('site.description.' . config('app.locale')) }}",
        "email": "{{ config('site.contact.email') }}",
        "founder": "Peter Illés and Norbert Zsombori",
        "foundingDate": "2013",
        "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions",
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "datePublished": "2021-01-04T12:00:00",
    "dateModified": "2021-01-04T12:00:00",
    "description": "Did you run into a programming snag you can't figure out? Just find a rubber duck and start talking to it about your problems. Let me explain.",
    "headline": "Improve how you code by using a rubber duck",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'Improve How You Code by Using a Rubber Duck!']) }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Rubber duck debugging, Debugging method, Debugging, Debugging method names, ",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": " Improve how you code by using a rubber duck",
    "publisher": {
        "@type": "Organization",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions"
    }
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "{{ localizedRoute('home') }}",
                "name": "Homepage"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('blog') }}",
                "name": "Blog"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}",
                "name": "Improve how you code by using a rubber duck"
            }
        }
    ]
}
</script>
@endpush
