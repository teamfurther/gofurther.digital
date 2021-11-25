@section('title', '11 Ways to Build an MVP')
@section('description', 'Join us, to find an answer to what an MVP is, how can you build one and what the most popular types of MVP are. Let\'s kick off with no product prototypes!')
@section('preview_image', asset('media/blog/cover-11-ways-to-build-an-mvp-1-en.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-11-ways-to-build-an-mvp-1-en.png') }}" srcset="{{ asset('media/blog/featured-11-ways-to-build-an-mvp-1-768w-en.png') }} 768w, {{ asset('media/blog/featured-11-ways-to-build-an-mvp-1-1000w-en.png') }} 1000w" sizes="100vw" alt="11 Ways to Build an MVP" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">11 Ways to Build an MVP</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-10-18 10:00:00">October 18th, 2021</time> &middot; 10 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Startups are inherently facing a lot of uncertainty. No wonder 90% of them fail. And out of those ninety percent, 42% fail, because they are providing a solution for which there is no market need. But how can we avoid this?</p>
                            <p>The best way is to try and reduce the level of uncertainty. We should formulate <a href="{{ localizedRoute('blog.show', ['slug' => 'what-are-hypotheses-in-product-development']) }}" target="_blank">what assumptions must be proven to be correct</a> in order for our product to be successful, and then test these assumptions with users. This process is called <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}" target="_blank">validation</a>. And one of the most important tools of validation is the MVP.</p>
                            <p>The MVP, or minimum viable product was first mentioned by Frank Robinson in 2001, then familiarized by Steve Blank and Eric Ries. By definition, an MVP is “a product that has the necessary features to solve a user’s need and nothing more”. But this definition leaves out the very essence of an MVP. But hold on to your horses!</p>
                            <p>Why am I using the term MVP in the first place? I know you’ve been closely following my previous articles, so you must’ve noticed that I started using the term MVP again in this article, although <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt3']) }}" target="_blank">I even wrote about the reasons</a> for which I dislike it. Truth is, I needed a good clickbait title. And let’s be honest, “11 ways to build a prototype” just doesn’t have the same ring to it 😅 .</p>
                            <p>Joking aside, this gives me an opportunity to emphasize what’s wrong with the definition above, and the term MVP in general. Let’s take a look at Henrik Kniberg’s (ex-Spotify) illustration below.</p>
                            <figure>
                                <img src="{{ asset('media/blog/henrik-kniberg-mvp-en.png') }}" alt="Building an experiment in order to validate how we can get from point A to point B" />
                            </figure>
                            <p>The top row shows us how we can build a car in 4 steps, by always adding some functionality to the product. Let’s imagine how testing this with users would look like:</p>
                            <p>– Hi, here’s a rear wheel!<br />– What am I supposed to do with this? I wanted a vehicle to take me from A to B!</p>
                            <p>Well, this didn’t go as expected. But we know we’ll get there, so we move on, adding new features.</p>
                            <p>From here on, we’re going to get closer to the final product with every step. But users will still not understand how this product is going to take them from A to B, meaning they won’t understand our value proposition. This also means they won’t be able to give us any feedback, so we will not decrease the level of uncertainty surrounding our product and ultimately we may end up stuck with a finished product that nobody wants.</p>
                            <p>This is my first issue with MVP as a term. It’s easy to misinterpret the word “minimal”. It’s not enough to build a minimal set of features as an MVP, we need to create a solution which delivers the entire value proposition.</p>
                            <p>In the second row, we can see an entirely different approach. Even in the first step, the skateboard already delivers our value proposition, since it takes us from A to B. This allows us to gather user feedback and validate our assumptions. In the following steps, we’ll be able to tinker with the product based on the feedback we received.</p>
                            <p>It’s important to note that the value proposition not only includes functionality, but also reliability, user experience or even the way people will emotionally connect with our product. All of these aspects have to be considered when building an MVP.</p>
                            <figure>
                                <img src="{{ asset('media/blog/jussi-pasanen-mvp-en.png') }}" alt="An MVP should cover not only functionality, but also reliability, user experience and the way people emotionally connect with the product" />
                            </figure>
                            <p>Eric Ries’s definition of an MVP, which states that “an MVP is that version of a new product which allows a team to collect the maximum amount of validated learning about customers with the least effort” us much closer to being the right one. But I still have a problem with it. The fact that it calls an MVP a product.</p>
                            <p>Instead of creating the MVP with minimal effort, people tend to spend too much time perfecting their MVP. It’s human nature after all: we’re all configured to build, to create. It’s hard to stop. Because of the word “product” in the name and the definition as well, many tend to stop at nothing short of building something finite.</p>
                            <p>This phenomenon is actually further magnified when stakeholders are involved, that have no lean product development experience. In such cases, a lot of features make it into the MVP which have no relationship whatsoever with the value proposition. I simply call these features glitter.</p>
                            <p>Another issue with “product” is that it leads people to think that we have to build a tangible product (and because of this, they skip important validation steps like <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">problem validation</a> or <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">problem-solution fit</a>). In fact, there are lots of MVP types which allow us to test some assumptions regarding our product, but are not tangible, like the concierge experiment, or are built way before the actual product, like the smoke test. These MVPs are called no product MVPs.</p>
                            <p class="has-margin-b60">Because of the above mentioned issues, I use the terms prototype or experiment instead of MVP. Now, let’s explore the 11 ways to build a prototype!</p>
                            <h2 class="heading-2 has-margin-b30">No Product Prototypes</h2>
                            <h3 class="heading-3 has-margin-b30">#1 Smoke Test</h3>
                            <p>A smoke test is a cost-effective tool to gauge buyer intent among users, making it a popular test to run during the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt4']) }}" target="_blank">product-market fit</a> phase.</p>
                            <p>A smoke test is nothing more than a landing page, which showcases our value proposition, the advantages of our product and it’s core features. Most importantly, it displays the price of our product and a buy now button. Yes, a buy now button, even if we don’t have a product yet.</p>
                            <p>Of course, no actual financial transaction is going to occur. After clicking the buy now button, we’ll let the customer know that the product is not available yet. That’s how this experiment got its name. The pretty landing page was just a smoke screen, hiding our real intent: to acquire information about buyer interest. The fact that users commit themselves to buying by pressing the buy now button is the strongest commitment we can get.</p>
                            <p>Another name for the smoke test is the fake door test, since we lead users through… well, a fake door. But if we have already led them through, then we should make sure we don’t let them go either. Ask them to subscribe to a newsletter where they’ll be informed of future developments of the product. To ease their disappointment, we could even offer them some early-bird discounts if they come back and make the purchase when we’re ready.</p>
                            <p>There are many tools to build a landing page. The easiest way is to use a page builder tool like <a href="https://www.squarespace.com" target="_blank">Squarespace</a>, <a href="https://www.wix.com" target="_blank">Wix</a> or <a href="https://www.strikingly.com" target="_blank">Strikingly</a>. If you require more customisation, we could tailor a Wordpress theme to our needs.</p>
                            <p>Don’t forget to bring visitors to your landing page. We could use a pay per click campaign for this purpose, but sharing into relevant Reddit subreddits or Facebook groups could be just as effective. Alternatively, we could try getting on the front page of <a href="https://www.producthunt.com" target="_blank">Product Hunt</a>.</p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-landing-page-mvp-buffer.png') }}" alt="Smoke test" />
                                <figcaption><a href="https://buffer.com/resources/idea-to-paying-customers-in-7-weeks-how-we-did-it/" target="_blank">Buffer's smoke test</a> is probably the most famous of its kind. By pressing the "Plans and pricing" we’re taken to a page where we can subscribe to a newsletter, informing us when the product will be ready.</figcaption>
                            </figure>
                            <h5 class="heading-5 has-margin-b30">Pricing Page</h5>
                            <p>The pricing page is a variation of the smoke test. Instead of the buy now button (or on the next screen) we list several price packages. Let’s say $0 / month, $5 / month and $10 / month, for different levels of functionality. This allows us to validate our pricing model.</p>
                            <p><small>ATTENTION! If you wish to validate the price itself, do not use this technique. You will get false positives because of the different levels of functionality. If you’d like to find out how much users are willing to pay for your product, it’s better to use A/B tests.</small></p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-landing-page-mvp-buffer-2.png') }}" alt="Smoke test - Pricing page" />
                                <figcaption>Buffer also felt the smoke test on it’s own didn’t offer them enough information, so they decided to insert another step into the process.</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">#2 Coming Soon Page</h3>
                            <p>If we feel the above method to be too pushy, we could experiment with a coming soon page. A coming soon page doesn’t have a buy now button, instead it makes it clear that the product will be available at a later time and asks users to subscribe to a newsletter if they’re interested.</p>
                            <p class="has-margin-b60">This is a much weaker commitment than clicking a buy now button as in the case of a smoke test. But the coming soon page also has different variations, which can be used to test various assumptions.</p>
                            <h5 class="heading-5 has-margin-b30">Product Demo Video</h5>
                            <p>Instead of a landing page, we could use a product demo video. This method was made famous by Drew Houston, the founder of Dropbox.</p>
                            <p>For those who are not familiar with Dropbox, it is a service which allows you to sync your files between your different devices. If you create a document on your laptop, it will show up on your phone. If you edit it on your phone, you’ll see the change on your laptop.</p>
                            <p>Today, in the age of iCloud and OneDrive, this seems second nature. But it was far from it in 2007 when the idea of Dropbox was born. Legend has it that Drew forgot to bring his USB drive on a long journey, so he couldn’t make any progress on his work. Instead, he spent the time on the bus to develop Dropbox.</p>
                            <p>Building such a software product is a complex task. It’s even harder to describe this product to users. Drew’s first prototype was buggy and couldn’t handle a large number of concurrent users (oh, and it only worked on Windows). So Drew decided to kill two birds with one stone.</p>
                            <p>He created a video which showed his prototype in action, and published it on Hacker News together with a subscription form. He knew he would find the right people on Hacker News, who fit his customer profile, but he didn’t know how interested they’ll be in trying out Dropbox. But the subscription immediately started flowing in, and Drew received enough encouragement to continue developing Dropbox.</p>
                            <p>Why was the Dropbox demo video successful? Because it managed to succinctly explain a hard to grasp concept and gauge interest at the same time. Also, Drew didn’t waste precious time developing a bug-free, reliable product for every platform while being uncertain about its success.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/iAnJjXriIcw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h5 class="heading-5 has-margin-b30">High Bar Test</h5>
                            <p>The high bar test is coming soon page with a twist. With this experiment, we insert an additional step before registration, asking our users to complete a task, such as filling out a form. This allows us to see how committed they are to get their hands on the product, but the data collected through the form also gives us deeper insight into who they are.</p>
                            <p class="has-margin-b60">Be careful with this method though, because the more steps a registration process is, the lower our conversion rate is going to be. Always use some sort of analytics tool to measure at which step the churn happened.</p>
                            <h5 class="heading-5 has-margin-b30">Social Payment Experiment</h5>
                            <p>The purpose of the social payment experiment is to put users who registered on the coming soon page onto a waiting list, then give them the opportunity to climb the list if they share the page with their friends.</p>
                            <p>This share can be through an email invitation, social media share or simply by sharing a referral link. Every user that signs up using their referral code, moves them up the list by 1 spot.</p>
                            <p class="has-margin-b60">This is a great way to gauge user interest, especially if we use a viral engine of growth because it has the added benefit that it shows how viral our product is. Oh, and we’ll also get some free marketing exposure.</p>
                            <h5 class="heading-5 has-margin-b30">Broken Promise Test</h5>
                            <p>A broken promise test is really a draconian version of the social payment experiment. In case of a broken promise test, we won’t use our marketing channels to draw traffic to the landing page, but invite a limited number of users (fitting our customer profile) ourselves.</p>
                            <p>On the page, we make it clear that they are now part of a secret, closed group of users. People, though, like to tell their friends about products they like. Especially if it’s something exclusive!</p>
                            <p class="has-margin-b60">Soon they won’t resist the urge to share our product. We’ll be able to compare the original list of invitees with the list of current users. The difference is going to show us if our product is viral.</p>
                            <h5 class="heading-5 has-margin-b30">Pre-purchase</h5>
                            <p>If we want a stronger commitment from users than what a simple coming soon page gives us, but we don’t feel like employing a smoke test, we could try a pre-purchase experiment. Users are in the clear that the product doesn’t exist yet, but they can pre-purchase it at a knocked down price. This is a very strong commitment from them, because they actually spent their money.</p>
                            <p class="has-margin-b60">This is a good method to finance production or development. But it also carries the most risk. If our product falls through for any reason, we’ll be forced to pay our user back, possibly with interest.</p>
                            <h5 class="heading-5 has-margin-b30">Mock Sale</h5>
                            <p>If we don’t wish to carry this risk, we can tell the user after they click the checkout button, that the transaction will only go through when the product is ready.</p>
                            <p class="has-margin-b60">This method is very close to a smoke test, but it has the disadvantage that since the visitors know the product isn’t ready, we’ll most probably have a lower conversion rate. And unfortunately, there is no analytics tool that will tell us exactly where we lost the visitor. if it was because he didn't like the product or because it wasn’t immediately available.</p>
                            <h3 class="heading-3 has-margin-b30">#3 Crowdfunding</h3>
                            <p>Validation is not what first comes to mind when talking about crowdfunding pages like <a href="https://www.kickstarter.com/" target="_blank">Kickstarter</a> or <a href="https://www.indiegogo.com/" target="_blank">Indiegogo</a>. But if we think about it a bit, we’ll see we can use them exactly like a pre-purchase experiment.</p>
                            <p class="has-margin-b60">Besides getting financing for our project, these pages are great to measure the level of interest in our product. Since users are willing to pay for its development, they’re more likely to actually purchase it when it becomes available.</p>
                            <h2 class="heading-2 has-margin-b30">To Be Continued</h2>
                            <p>Ok, this article is getting a bit longer than I expected. I only (just) covered the no product prototype and I already hit the character limit you guys might still read 😆 .</p>
                            <p>But this also gives me the perfect opportunity to split this article in two parts (Google will love me for this). Stick with me as I’ll show you prototypes that not only present the core product features, but also let users get a feel of the product.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => '11 Ways to Build an MVP'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.peterilles')
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
    "datePublished": "2021-10-18T12:00:00",
    "dateModified": "2021-10-18T12:00:00",
    "description": "Join us, to find an answer to what an MVP is, how can you build one and what the most popular types of MVP are. Let's kick off with no product prototypes!",
    "headline": "11 Ways to Build an MVP",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-11-ways-to-build-an-mvp-1-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, MVP, Minimum Viable Product, Startup",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "11 Ways to Build an MVP",
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
                "name": "11 Ways to Build an MVP"
            }
        }
    ]
}
</script>
@endpush
