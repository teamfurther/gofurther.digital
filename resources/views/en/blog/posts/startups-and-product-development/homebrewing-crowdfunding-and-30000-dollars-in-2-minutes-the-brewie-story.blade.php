@section('title', 'EXTRA: Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story')
@section('description', 'In this EXTRA, we talking with the people behind Brewie, one of the first successful crowdfunding campaign run in Hungary.')
@section('preview_image', route('generate-cover', ['title' => 'Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">EXTRA: Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-04-11 10:00:00">Apr 11th, 2022</time> &middot; 13 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>In our previous posts, we often mentioned crowdfunding campaigns as a means to finance and validate a startup project. In our first extra, we'll take a look at reward-based crowdfunding.</p>
                            <p>We've been lucky enough to see behind the curtains of many crowdfunding campaigns, but this doesn't mean we're experts. So, when writing this post, we asked for help from one of our clients, Marcell Pál and Attila Szegedi, who put together Brewie's Indiegogo campaign.</p>
                            <p class="has-margin-b60">Brewie was the world's first fully-automated home brewing machine. The idea came during a night out with friends, drinking beers, when Andrew, one of the co-founders, brought one of his beers to try out. Soon enough, they were already brainstorming on how Andrew's 8 hour-long home brewing process could be automated and made more accessible to beer enthusiasts. Brewie was one of the first companies to run a successful crowdfunding campaign in Hungary.</p>
                            <h2 class="heading-2 has-margin-b30">The First Steps</h2>
                            <p><strong>PETER: </strong> You had an idea. What were the first steps you took?</p>
                            <p><strong>BREWIE: </strong> As we discussed the idea with more and more people, we realised there is an interest. So we created a survey targeted toward hobby brewers, beer enthusiasts and craft beer fans in the US. We received around 200 responses, which is not entirely representative. But 80% of the respondents gave us some kind of an idea in the additional notes section of the questionnaire, which was a good indicator of their commitment.</p>
                            <p>Another exciting aspect was that the percentage of those who said they would buy this product was higher among people who had never brewed beer before. This showed that it is not only a niche that's interested but also average beer consumers.</p>
                            <p class="has-margin-b60">Following this, we created a business plan and applied to <a href="https://venturecup.dk" target="_blank">VentureCup</a>. We finished second out of 350 teams. This achievement gave us the final push that this product is worth our effort. The first question was how we were going to finance it.</p>
                            <p><strong>PETER: </strong> Did you consider other options, such as loans or angel investment? What tipped you towards crowdfunding?</p>
                            <p><strong>BREWIE: </strong> We're in the year 2013. The venture capital wave was hitting Hungary. We decided we didn't want to give up 20-30% of the company for roughly 20-30M Ft., which was what we could get at that time.</p>
                            <p>But we also said that if we're willing to work for free for a year, we have a good shot at raising the necessary money through crowdfunding. We had good reason to believe this, as crowdfunding was extremely popular back then, even more so than now. Newspapers were very eager to write about successful crowdfunding stories.</p>
                            <p>I told the guys that I would do anything to make this campaign successful if they believed this was the right path to take. I said this, having never actually done such a campaign. But I think that everything is learnable, and this seemed learnable.</p>
                            <p class="has-margin-b60">We were 23-24 years old and didn't have much to lose, so we started working 8 hours a day, 5 days a week, for one year, for free.</p>
                            <figure>
                                <img src="{{ asset('media/blog/brewie-machine.jpg') }}" alt="Brewie" />
                            </figure>
                            <p><strong>PETER: </strong> Many people use crowdfunding to <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt4']) }}" target="_blank">validate the product-market fit</a> of their product and gain early adopters. The capital raised is less important to them. Was this also a consideration in the case of Brewie?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> Yes. We considered this a market test as well. The fact you can sell your product for money is powerful feedback. A validation if such a product is needed.</p>
                            <p><strong>PETER: </strong> Were there concerns about launching a crowdfunding campaign?</p>
                            <p><strong>BREWIE: </strong> Everyone's afraid the campaign will go wrong. You'll be the world's fool, and the product will be doomed to failure. But that's not true. If the product is good, but the campaign was unsuccessful, you most probably didn't drive enough people to the campaign. You either targeted the wrong people or didn't reach them. They haven't heard of you, so you don't have to worry about looking foolish.</p>
                            <p class="has-margin-b60">Another danger of crowdfunding is that you make commitments to many people. You're going to have time pressure. Additionally, crowdfunding teams are still in product development and have only a very vague idea of how much manufacturing and shipping will cost. We also underestimated the development time. It was almost double our initial guess.</p>
                            <p><strong>PETER: </strong> Why Indiegogo and not Kickstarter or another platform?</p>
                            <p><strong>BREWIE: </strong> We thought about this a lot, and others do as well. There were a couple of deciding factors. First, how many people can you reach through the platform? Back then, Kickstarter had twice as many as Indiegogo, meaning you could reach more people. That is if you only looked at this data.</p>
                            <p>But one should also consider how long you are visible on the platform. Kickstarter used to manually pick the featured projects visible for one day on the homepage. Indiegogo, on the other hand, did this based on an algorithm, and if your campaign went well, you could be featured on the homepage for its whole duration. You reach half as many people, but you could reach them for 60 days. This was what tipped us towards Indiegogo.</p>
                            <p>Another factor is the success fee these platforms charge you. Back then, Indiegogo was cheaper (edit.: currently, both platforms charge a 5% fee + transactional costs)..</p>
                            <p>Indiegogo also actively supported the campaign. We had advisory support tell us what to look out for. Kickstarter had none of this. Indiegogo also actively looked out for good projects. We were sought out by one of their team members at an event, who connected us to their headquarters, which gave us a lot of valuable tips.</p>
                            <p class="has-margin-b60">Another thing to consider is if similarly themed campaigns are currently running on the platform. Just before we launched, another beer product appeared on Kickstarter, but at least we didn't compete on the same platform.</p>
                            <h2 class="heading-2 has-margin-b30">Pre-campaign — Laying the foundations</h2>
                            <p><strong>PETER: </strong> So you settled on a crowdfunding campaign. What were the first steps you took to prepare yourselves?</p>
                            <p><strong>BREWIE: </strong> First and foremost, we had to decide who would buy our product. We came up with 8 different target groups we thought might buy Brewie. We knew our target market was Western Europe and North America. Firstly, because brewing beer is much more mainstream there. More than 1% of people in the US brew their own beer, which is still an unbelievable figure for me. On the other hand, they also possess a much stronger buying power, which was necessary, as we knew our product would cost at least $1000 - $1200.</p>
                            <p>We consider what channels we can use to reach them. Paid advertising was quickly discarded as an option, as we had exactly $0 as a budget. So we put all our effort into two channels: email marketing and PR.</p>
                            <p>We also used downloadable databases, but we have already started building a list of subscribers from beer brewing themed forums and groups from the get-go.</p>
                            <p>From the PR side, our advantage was that we were sexy. Crowdfunding was extremely popular, but so were beer brewing and craft beers. So we were very in trend, and also the first ones to do this. Journalists loved us and were very eager to write about us.</p>
                            <p>We created 3 lists with journalists: an A, a B and a C list. PR works like a funnel, from big to small, but not the other way around. Meaning, if a small publication publishes a piece of news, the big outlets won't publish it anymore. But it works the other way around. Smaller publications often take over articles from larger ones.</p>
                            <p>Based on this logic, we chose 5 or 6 journalists we knew who wrote articles on this subject and whose readers are in our demographic. It's crucial to consider which newspapers will publish your articles and which journalist. They are very active on Twitter and other channels. They push their content and have an established reading base. If someone writes about Gucci bags, they're probably not the best choice to write about a homebrewing machine.</p>
                            <p>These were the 5-6 journalists who made up list A. They were offered exclusivity for a news story. The second list had around 100 mediums we considered relevant enough. The rest made up list C, a couple of thousand journalists.</p>
                            <p>We had an exact schedule: who would publish the first article, who would publish the second one. We had the whole flow planned.</p>
                            <p>Attending events from the very beginning was also helpful. During the Pioneers Festival in Vienna, there was an internal database where you could direct messages to others. So we wrote to every journalist in attendance. Along with many local guys, we met with someone from the Washington Post, who even published an article about us. It was published roughly one month before our launch and doubled the number of our subscribers, and gave us unquestionable credibility in the eyes of many.</p>
                            <p class="has-margin-b60">We also appeared in Fortune, Engadget, and CNET. We didn't consider Hungarian media. They took over the content from foreign publications.</p>
                            <h2 class="heading-2 has-margin-b30">The Campaign</h2>
                            <p><strong>PETER: </strong> What does the campaign have to include? What makes a campaign page efficient?</p>
                            <p><strong>BREWIE: </strong> A campaign page is a landing page. Both platforms (edit.: Indiegogo and Kickstarter) give you a place where you can send people to and accept their money in return for some packages.</p>
                            <p>You have to think that if you would arrive at this page, what information and in what order would you like to find it.</p>
                            <p>While many concentrated on the team and other things you might find in a pitch deck, the most successful campaign concentrated on the product. This makes sense since this is a pre-sale at the end of the day. People are buying a product. We focused entirely on the product and tried to communicate the USPs (edit.: unique selling proposition).</p>
                            <p>The video is also essential. And expensive. Even back then, it cost around 2 - 3M Ft. ($5000 - $8000), and we did this on zero budget. The head of <a href="http://www.colabs.hu" target="_blank">Colabs</a> heard about us and wanted to see the product. He was accommodating and asked if we needed anything. It turns out his partner was a camera operator. He made the introductions, and she agreed to do the video for free. We paid her from the first sales and gifted them a machine.</p>
                            <p>It would help if you also showed quotes from newspapers to give you credibility and perks, what customers can expect on your landing page.</p>
                            <figure>
                                <img src="{{ asset('media/blog/brewie-campaign-page.png') }}" alt="Brewie's (second) campaign page:" />
                                <figcaption><a href="https://www.Indiegogo.com/projects/brewie-world-s-first-fully-automated-home-brewery#/" target="_blank">Brewie's (second) campaign page:</a></figcaption>
                            </figure>
                            <p><strong>PETER: </strong> Does crowdfunding work for every product?</p>
                            <p><strong>BREWIE: </strong> It works best for B2C hardware products, which have an element of novelty. So maybe less for an nth hair straightening product. It also helps if it's in a trendy, easily accessible category like beer was for us.</p>
                            <p>When we say hardware, we mean anything tangible. A board game can also be a hardware product. B2C means you appeal to end-users, not enterprises.</p>
                            <p class="has-margin-b60">We've seen successful software campaigns, but it's less common..</p>
                            <p><strong>PETER: </strong> Product-focused campaign page, killer video, the right product. What else can make or break a crowdfunding campaign?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> Campaigns that reach at least 30% of their goal in the first two days are generally successful. So we targeted achieving 30% as soon as possible and building on that momentum. We discounted 5 products. The regular price was $1300 - $1400. We offered 5 machines for $1000. We made sure people were aware of this limited offer. This worked out well. We sold these discounted products in a couple of minutes.</p>
                            <p><strong>PETER: </strong> What happens when you have everything ready? You push the green button and pray?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> We had a launch event. I remember a journalist there asked, "Ok guys. You can tell me. How much of your own money did you put up?". Back then, many people invested some of their own money to make it look like they were getting traction. "Not a single dollar. We haven't bought any of these machines". He wouldn't believe us. We were past $5k in 5 minutes and past $19k in the first hour.</p>
                            <figure>
                                <img src="{{ asset('media/blog/brewie-team.jpg') }}" alt="Brewie" />
                            </figure>
                            <p><strong>PETER: </strong> What was your goal? How should one set their goal?</p>
                            <p><strong>BREWIE: </strong> We set a goal of $100k. We wished for $200k but believe $100k is more achievable and enough to make a working product.</p>
                            <p>Your goal should be the minimum amount of money you need to deliver the product. We calculated that if we buy every part from our local hardware store and screw them together ourselves, we can still do it within this budget.</p>
                            <p class="has-margin-b60">You should also make sure you achieve your goal. This is pure psychology. People are more likely to join something successful. If you see a campaign is at $5k out of $100k, you think twice before investing. But if you see it's past $100k and still growing, you will join with much less thought..</p>
                            <p><strong>PETER: </strong> How fast did you achieve your goal? How much did you surpass it?</p>
                            <p><strong>BREWIE: </strong> We had $60k secured after two days. In the end, we reached $220k.</p>
                            <p>Later we did a second round when Indiegogo's InDemand programme launched. This was targeted toward those who already had a successful campaign. This time we didn't do any PR campaigns. We only used our still growing email lists.</p>
                            <p class="has-margin-b60">It went unexpectedly well. Within 2 minutes, we raised $30k. Indiegogo wasn't aware when we launched and didn't know where all this money was coming from. Almost $200k went through the system in under an hour. During this 1 month-long campaign, we raised another half a million, reaching $720k.</p>
                            <p><strong>PETER: </strong> What happens after launching the campaign?</p>
                            <p><strong>BREWIE: </strong> A lot of people believe the campaign ends here. But during the campaign, you have to invest at least the same amount of effort, if not more.</p>
                            <p>When we started, we sent out the emails sent out the PR articles. Then we had press releases in waves, meaning we released something new every week. PR has enormous power. One report in Der Spiegel resulted in $38k in pre-sales.</p>
                            <p>We sent out an email every 3 - 5 days. We communicated success stories and kept on launching discounts. We tried planning deals in a way they kept running out. First, we had a limited offer of 5 products. Then a second tier, which also ran out. The later you joined the party, the more expensive you could purchase.</p>
                            <p class="has-margin-b60">Many envision a campaign as a linear curve, going up. In fact, it's like an ECG. Some days we had huge sales, other days we had none. Most sales were at the start and end of the campaign. Probably because of the promotions. In the beginning, they wanted to buy at a good price, but they wanted to buy at all in the end.</p>
                            <h2 class="heading-2 has-margin-b30">Post-campaign — Customer Management</h2>
                            <p><strong>PETER: </strong> Tell me a bit about what happens after the campaign.</p>
                            <p><strong>BREWIE: </strong> Most projects will probably have a delay in delivery. We invested immensely in informing our customers of these delays. Because of this, and despite a delay of over one year, only a handful of people cancelled. So it's vital to constantly communicate so people don't cancel their orders.</p>
                            <p class="has-margin-b60">We had to communicate through Indiegogo's page and send out status update emails every 2 or 3 weeks. We answered every email and every Facebook request. We were extremely transparent, and users noticed. They appreciated why it's hard to develop a product.</p>
                            <p><strong>PETER: </strong> Last question. What would you change if you'd start a crowdfunding campaign with a new product tomorrow?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> We'd find some budget for pay-per-click advertising. That's one way we could've probably gotten even more subscribers and, thus, more sales.</p>
                            <p><strong>PETER: </strong> Thank you very much, guys. You shared lots of great tips, and I have learned a lot of new things myself! I hope this will be very useful for our readers.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'EXTRA: Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story'])
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
    "datePublished": "2022-04-11T10:00:00",
    "dateModified": "2022-04-11T10:00:00",
    "description": "In this EXTRA, we talking with the people behind Brewie, one of the first successful crowdfunding campaign run in Hungary.",
    "headline": "EXTRA: Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story']) }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Startup, Crowdfunding, Kickstarter, Indiegogo, Brewie",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "EXTRA: Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story",
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
                "name": "EXTRA: Homebrewing, Crowdfunding and $30.000 in 2 Minutes — The Brewie Story"
            }
        }
    ]
}
</script>
@endpush
