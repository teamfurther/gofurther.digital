@section('title', 'The Lean Product Process: #4 Achieving Product-Market Fit')
@section('description', 'Finally we arrive at the end of the product development process, where we test how the buyers react to our product and if our business plan is sustainable.')
@section('preview_image', asset('media/blog/cover-the-lean-product-process-4-en.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-the-lean-product-process-4-en.png') }}" srcset="{{ asset('media/blog/featured-the-lean-product-process-4-768w-en.png') }} 768w, {{ asset('media/blog/featured-the-lean-product-process-4-1000w-en.png') }} 1000w" sizes="100vw" alt="The Lean Product Process: #4 Achieving Product-Market Fit" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">The Lean Product Process: #4 Achieving Product-Market Fit</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-05-10 10:00:00">May 10th, 2021</time> &middot; 10 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>In the previous articles of this series, we already took a look at how to <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">validate the core problem</a> of our startup, how to <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">test if our proposed solution actually solves the problem</a> or <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt3']) }}" target="_blank">if our product delivers the solution</a>.</p>
                            <p>With this article, we have arrived at the last stage of the lean product development process: the product-market fit stage. But what does this actually mean? Simply put, when in the product-market fit stage, we are looking to prove that our business model will be sustainable.</p>
                            <p class="has-margin-b30">If we break up this core question, we should be looking to prove the following assumptions:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>users are still willing to pay or exchange value for our product or service</li>
                                <li>we are able to keep our existing users, maybe even sell the additional products or services</li>
                                <li>users like our product so much, they are willing to refer it to others</li>
                            </ul>
                            <p>These assumptions are called growth hypotheses.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-4-en.png') }}" alt="Validation in product development - Product-market fit" />
                            </figure>
                            <p>At the beginning of each stage of the lean product process, my less experienced clients always eagerly ask me if they can start building the polished product already. As we have already <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">proved that others face the same problem as us</a>, which <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">our product does in fact solve</a>, while <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">providing the expected user experience</a>, they are easily forgiven for thinking we need an actual product to investigate if our customer acquisition and retention strategy is sustainable.</p>
                            <p>Those who are more experienced though, already know by now that my answer is going to be the same. No, you still shouldn't invest resources and energy into building a product. Luckily, we do have tools at our disposal, which we can use to test our business model prior to launching ourselves into costly product manufacturing or software development.</p>
                            <p class="has-margin-b60">Naturally, there are some metrics we can only access once we start selling the actual product. Hence, I am going to divide this article into two parts: pre-product and post-product tools and metrics.</p>
                            <h2 class="heading-2 has-margin-b30">Tools to test product-market fit, before building your product</h2>
                            <h3 class="heading-3 has-margin-b30">Landing pages</h3>
                            <p>A landing page is a cost-effective method to gauge interest among our target audience. There are many ways to build a landing page, the easiest is to use a drag and drop website builder such as <a href="https://www.squarespace.com" target="_blank">Squarespace</a>, <a href="https://www.wix.com" target="_blank">Wix</a> or <a href="https://www.strikingly.com" target="_blank">Strikingly</a>. If we wish to have more control and customisation, we could use a Wordpress theme. Anything more than that, would be overkill.</p>
                            <p>We have to make sure to show our value proposition, key advantages and functions of our product. What is even more important is to display the price of our product and a buy button. Yes, a buy button. Even if we don't have a product yet.</p>
                            <p>Of course, there won't be any financial transaction happening. After clicking the buy button, we are going to explain to our users that the product doesn't exist yet, and this is a test. But the fact that they are clicking an actual buy button is the strongest commitment feedback we can get of their intent to purchase.</p>
                            <p>When we do finalize the product later on, we shouldn't of course forget to notify them that the product is now available to buy. To alleviate the disappointment of not being able to get their hands on our product, we could offer an early-bird coupon to users who return and buy later on.</p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-landing-page-mvp-buffer.png') }}" alt="Landing page MVP" />
                                <figcaption><a href="https://buffer.com/resources/idea-to-paying-customers-in-7-weeks-how-we-did-it/" target="_blank">Buffer's landing page prototype</a> is probably the most famous of it's kind. Clicking the "Plans and pricing" button on the left, takes you to the explanation page on the right.</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Coming soon page</h3>
                            <p class="has-margin-b60">If you find the above method too aggressive, we could use a coming soon page instead. In this case, we make it clear to the user from the start, that the product is not available yet. If they're interested in buying they can sign up for a newsletter, through which we will announce developments regarding the product. But one does feel that this isn't as strong a commitment as clicking a buy button.</p>
                            <h3 class="heading-3 has-margin-b30">Pre-purchase</h3>
                            <p>An in-between solution could be to provide a pre-purchase option on the landing page or coming soon page. We make it clear to the user that the product is only going to be available at a later time, but in this case a financial transaction is going to happen. This is a very strong commitment from the user.</p>
                            <p class="has-margin-b60">This could prove to be an interesting option from a cash-flow perspective as well, since we can use this money to finance manufacturing or software development. But this solution is the one which carries the most risk as well. If we fail to prove product-market fit or face obstacles during production, we will be forced to refund our customers.</p>
                            <h3 class="heading-3 has-margin-b30">Product demo video</h3>
                            <p>Another option would be to use a product demo video instead of a landing or coming soon page. Or even better, use them together. Combine the product video with a sign up, pre-purchase or buy button, so we can measure the intent to purchase. This is the method Dropbox used in 2007:</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/iAnJjXriIcw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h3 class="heading-3 has-margin-b30">Crowdfunding campaigns</h3>
                            <p>When talking about crowdfunding campaign services, such as <a href="https://www.kickstarter.com" target="_blank">Kickstarter</a> or <a href="https://www.indiegogo.com" target="_blank">Indiegogo</a>, most don't think of them as a tool for validation. In reality, in addition to being a great way to get funding, they are an excellent way of gauging interest toward our product. If people are willing to back our project with money, that is a great indication they would be interested in buying the product later on.</p>
                            <p class="has-margin-b60">More cunning startups are often not even in need for funding, instead they leverage these platforms to validate their product-market fit.</p>
                            <h2 class="heading-2 has-margin-b30">Metrics to determine product-market fit, after launching a product</h2>
                            <p>If the above tools deliver the expected numbers regarding customer interest, we can finally proceed to the long-awaited phase: starting to build our product. This however, still doesn't prove actual product-market fit. If against all our efforts up till now, our business model proves to be unsuccessful, we still have time to pivot.</p>
                            <p>We have closed the development phase, and entered the growth phase. If we correctly used the tools I showed you above, the intent to buy is likely to transform into actual purchases.</p>
                            <p class="has-margin-b30">With this, we have successfully proven our first assumption (users are still willing to pay or exchange value for our product or service). But what about the other two? Let's which two we're talking about:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>we are able to keep our existing users, maybe even sell the additional products or services</li>
                                <li>users like our product so much, they are willing to refer it to others</li>
                            </ul>
                            <p>What metrics can we use to validate these? I will dedicate a separate article to metrics, but let's take a quick look at the most important ones right now. Before jumping in though, I would like to point out one of the major mistakes startups make: they fail to resist the temptation of metrics magic.</p>
                            <p>Eric Ries, in his book titled The Lean Startup, told two distinct types of metrics apart. Vanity metrics and actionable analytics. Vanity metrics are great to make you feel good, but are awful to base your decisions and strategy on. Inexperienced startups however, do however often commit this mistake.</p>
                            <p>The number of website visitors or social media followers is, for example, such a vanity metric. They look good, but unless they turn into buying customers, they are of no use to us. Ok, this is pretty obvious you might think.</p>
                            <p>Less obvious, but equally vain is the number of users. There's no use having lots of users, unless they are active. If they don't spend money or add value in a different way (for example, most Facebook users do not spend money on the platform, but their real value is in the information they generate for the social media giant).</p>
                            <p>Even less obvious, but monthly revenue is also a vanity metric. Why, you could ask? If we do have revenue, we must have sales. True. But it doesn't say how much it costs us to acquire sales. For example, how much we spend on marketing to bring in a new buying customer. A manufacturer doesn't look at the price they're selling a product either. Instead they focus on their margin on each sale.</p>
                            <p>Actionable analytics on the other hand are the ones which we should use to base our decisions on and use when planning long-term. I like to call these clarity metrics. Let's see a couple of examples.</p>
                            <figure>
                                <img src="{{ asset('media/blog/metrics-vanity-vs-actionable-en.png') }}" alt="Vanity metrics vs actionable analytics" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Customer acquisition cost</h3>
                            <p>Customer acquisition cost or CAC, is the average spend to get a new customer. If for example, we spend 800 EUR on Google Ads, which gets us 100 customers, our CAC is going to be 8 EUR.</p>
                            <p class="has-margin-b60">In order to grow, most startups should focus on decreasing their CAC. If CAC doesn't decrease in time, it's a good sign that our business model will not be sustainable long term. In some cases though, especially when employing a paid growth engine, it can be acceptable for the CAC to remain consistent with the early values, but even then, a downwards trend is desirable.</p>
                            <h3 class="heading-3 has-margin-b30">Conversion rate</h3>
                            <p>As I already mentioned, the number of website visitors or social media followers are vanity metrics. But the rate they become paying customers is going to be one of our most important clarity metrics.</p>
                            <p>Acquiring each visitor or follower (lead) costs us money, be it from a PPC advertising campaign or a PR appearance. The higher our conversion rate, the less we have to spend on marketing to acquire the same amount of users, thus our CAC is going to be lower.</p>
                            <p class="has-margin-b60">To increase conversion rate, we could run A/B tests or multivariate tests. This means that we take our landing pages and our ads and we basically create multiple versions of it. These variations may differ in copy, design or layout. We then show these variations to our users in equal proportions. The ones which perform better and generate superior conversion rates, are the ones we should concentrate on and polish further.</p>
                            <h3 class="heading-3 has-margin-b30">Churn rate</h3>
                            <p>Churn rate is the metric which shows us our ability to hold on to users in the long run. It's important for the same reasons the conversion rate is important. The better we can keep our active users, the less we have to pay to replace them with new users.</p>
                            <p class="has-margin-b60">Moreover, it's always cheaper to upsell products or services to existing customers than it is to cold leads, since we have already established a rapport with them. The churn rate is going to be one of our foremost metrics when employing a sticky engine of growth.</p>
                            <h3 class="heading-3 has-margin-b30">Net promoter score and referral rate</h3>
                            <p>Net promoter score is a widely used marketing metric, which indicates the likelihood of active users recommending our product to other people. It most often takes the form of a survey question.</p>
                            <p class="has-margin-b60">The referral rate or RR, is closely related to NPS. RR is the % of total sales, which come from the referral of active users. The better our NPS, the more likely it is that we are going to have a high RR. RR is going to be our most important metric if using a viral growth engine.</p>
                            <h3 class="heading-3 has-margin-b30">Customer lifetime value</h3>
                            <p>Customer lifetime value, often abbreviated CLV, CLTV or LTV, is the sum, which a single customer spends on average throughout their lifetime. If we have 1000 users, who spent a total of 10 000 EUR, our CLV is going to be 10 EUR.</p>
                            <p class="has-margin-b60">If our CLV > CAC, we have a good indication that our business model is sustainable and we have achieved product-market fit.</p>
                            <h2 class="heading-2 has-margin-b30">Conclusions</h2>
                            <p>It was a long journey, but we have reached the end of our product development process. The article series however, does not end here. In the upcoming articles, I am going to elaborate on a couple of already mentioned notions. We're also going to take a look at scaling our product or service further, and also answer some startup related questions beyond product development. Bear with me!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'The Lean Product Process: #4 Achieving Product-Market Fit'])
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
    "datePublished": "2021-05-10T12:00:00",
    "dateModified": "2021-05-10T12:00:00",
    "description": "Finally we arrive at the end of the product development process, where we test how the buyers react to our product and if our business plan is sustainable.",
    "headline": "The Lean Product Process: #4 Achieving Product-Market Fit",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-the-lean-product-process-4-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Product-market Fit",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "The Lean Product Process: #4 Achieving Product-Market Fit",
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
                "name": "The Lean Product Process: #4 Achieving Product-Market Fit"
            }
        }
    ]
}
</script>
@endpush
