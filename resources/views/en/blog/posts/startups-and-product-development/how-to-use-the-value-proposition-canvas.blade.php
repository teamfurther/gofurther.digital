@section('title', 'How to use the value proposition canvas?')
@section('description', 'Why is your value proposition an important part of your business plan? How to formulate it?
                         How to visualize it using the value proposition canvas? Read on, to find answer to these questions and more.')
@section('preview_image', asset('media/blog/cover-how-to-use-the-value-proposition-canvas-en.jpg'))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">How to use the value proposition canvas?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-05-18 10:00:00">May 18th, 2022</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">72% of the new products in service innovation fail to deliver on customer expectations. This means that customers don't care about 7 out of 10 new products introduced to the market. It doesn't have to be this way. There is a tool to visualize, design and test how you create value for customers. It's called the <b>Value Proposition Canvas (VPC).</b></p>
                            <h2 class="heading-2 has-margin-b30">The Origins</h2>
                            <p  class="has-margin-b60">The idea of the Value Proposition Canvas came from the Business Model Canvas, which is a visual representation of a business model, highlighting all key strategic factors in 9 sections. Two of those sections are the Value Proposition and the Customer Segment. These sections require more space to expand than the Business Model Canvas allows, so the Value Proposition Canvas was generated as a separate tool.</p>
                            <h2 class="heading-2 has-margin-b30">What is the VPC?</h2>
                            <p class="has-margin-b60">The Value Proposition Canvas focuses on understanding customers' problems and creating products or services that solve them. Telling people you have a great product or service doesn't make them want it. You can create a fantastic product with all the bells and whistles, but if it basically doesn't help customers, or you don't clarify the value clearly, they won't buy it.</p>
                            <h2 class="heading-2 has-margin-b30">Why do we use it?</h2>
                            <p class="has-margin-b30">A value proposition is essential to a business model. It aids the company in product positioning and decision-making. The VPC is more than a visual representation of client desires. With its help, businesses can optimize their strategy to meet the needs of their customers, which in turn leads to building a product that buyers want.</p>
                            <p class="has-margin-b30">It is easy to lose focus on the core values when new ideas flow every minute. As a result, the final product fails to meet consumer requirements. This is not the outcome you wish to achieve. A Value Proposition Canvas acts as a visual guide. It guarantees a targeted approach to developing a high-demand product.</p>
                            <p class="has-margin-b30">Here are four questions that'll help you formulate your value proposition:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>What product or service do you offer?</li>
                                <li>Who is your target customer?</li>
                                <li>What problem does your product solve for your customer?</li>
                                <li>How does your product or service benefit your customer?</li>
                            </ul>
                            <h2 class="heading-2">What is the VPC's structure?</h2>
                            <p>The Value Proposition Canvas comprises two parts: Customer Profile and Value Map. You always start filling out the Customer Profile.</p>
                            <figure>
                                <img src="{{ asset('media/blog/vpc-structure.jpg') }}" alt="Vpc structure" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Customer Profile</h3>
                            <p class="has-margin-b30">The Customer Profile part helps identify problems from a customer perspective. Try to understand the customer's jobs, pain points and gains rather than brainstorming solutions. </p>
                            <p class="has-margin-b30">Before we start filling the canvas, our first step is choosing the target customer. Here, you can use the <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-use-personas-in-product-development']) }}" target="_blank">persona</a> you have created before. If you haven't, it's time to! We use personas as a guide when filling customers' profiles, focusing on the jobs, pains and gains from the persona's point of view.</p>
                            <p>The customer profile is divided into three parts: </p>
                            <figure>
                                <img src="{{ asset('media/blog/customer-profile.jpg') }}" alt="Customer structure" />
                            </figure>
                            <p class="has-margin-b30"><b>1. Jobs-to-be-done</b> that customers are trying to accomplish. You always start filling the customer profile with this because this is where the user's pains and gains stem from.</p>
                            <p>Jobs can be:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Functional — In simple words: practical jobs. For example, a functional job would be driving from point A to B when buying a car.</li>
                                <li>Social — These jobs are motivated by our societal duty, fears, or aspirations. For example, when buying a hybrid car, a social job would be to protect the environment.</li>
                                <li>Emotional — These jobs stem from our tastes, dislikes, and insecurities. It would be the sensation we get while driving a car.</li>
                            </ul>
                            <p class="has-margin-b30">These questions may help you define customer jobs: </p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>What actions are your customers attempting to accomplish?</li>
                                <li>What are your customer's emotional goals?</li>
                                <li>What social goals do your customers have?</li>
                                <li>What job makes them feel satisfied?</li>
                                <li>How do they want to be perceived by others? </li>
                                <li>What do they need to achieve all of the above?</li>
                            </ul>
                            <p class="has-margin-b30"><b>2. Pains</b> that they face when trying to accomplish their Jobs-to-be-done</p>
                            <p class="has-margin-b30">These questions may help you define customer pain points:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>What makes your customers feel bad?</li>
                                <li>What lacks in the current solutions?</li>
                                <li>What are the main challenges and problems customers are currently facing?</li>
                                <li>What tasks require a lot of effort, time or money?</li>
                                <li>What jobs can lead to negative social consequences, like losing reputation, trust or social status?</li>
                                <li>What risks do your customers fear?</li>
                            </ul>
                            <p class="has-margin-b30"><b>3. Gains</b> that they perceive by getting their jobs done and hoping to achieve</p>
                            <p class="has-margin-b30">These questions may help you define customer gains:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>What makes your customers happy?</li>
                                <li>What would simplify the work or life of your customers?</li>
                                <li>What results do your customers expect?</li>
                                <li>What positive social consequences do your customers want to get?</li>
                            </ul>
                            <h3 class="heading-3 has-margin-b30">Value Map</h3>
                            <p class="has-margin-b30">Visualize the value you create. Here, you decide which jobs, pains, and gains you focus on. It describes how you create value for your customers.</p>
                            <p class="has-margin-b30">The value map is also divided into three parts:</p>
                            <figure>
                                <img src="{{ asset('media/blog/value-map.jpg') }}" alt="Value Map" />
                            </figure>
                            <p class="has-margin-b30"><b>1. Products and services</b> that define the most critical components of your offering </p>
                            <p class="has-margin-b30"><b>2. Pain Relievers</b> eliminate, reduce or minimize the pains that customers care about, making their life easier.</p>
                            <p class="has-margin-b30">These questions may help you define your pain relievers:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Does the product or service remove the difficulties or problems your customers face?</li>
                                <li>Does it eliminate barriers that keep your customers from performing a job?</li>
                                <li>Does it fix the faults of existing solutions?</li>
                                <li>Does it improve the emotional state of your customers?</li>
                                <li>Does your product/service resolve the negative social consequences that customers are afraid of?</li>
                                <li>Does it reduce the risks they are facing?</li>
                            </ul>
                            <p class="has-margin-b30"><b>3. Gain Creators</b> produce, increase or maximize outcomes and benefits that your customers desire or would be surprised by</p>
                            <p class="has-margin-b30">These questions may help you define gain creators:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Does your product or service provide savings?</li>
                                <li>Does it ensure the results that the customers expect?</li>
                                <li>Does it simplify the work or life of the customers?</li>
                                <li>Does it accomplish a dream of your customers? </li>
                            </ul>
                            <p class="has-margin-b30">Let's consider an example: a taxi company.</p>
                            <p class="has-margin-b30">A <b>customer profile</b> for a taxi company would look similar to this:</p>
                            <p class="has-margin-b30"><b>Jobs-to-be-done</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Getting from A to B</li>
                                <li>Waiting some unknown amount of time for the taxi</li>
                                <li>Paying for the trip</li>
                                <li>Getting faster to the destination than a pedestrian</li>
                            </ul>
                            <p class="has-margin-b30"><b>Pains</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>No taxi availability</li>
                                <li>Dirty taxi</li>
                                <li>Unpleasant driver</li>
                                <li>Payment issues</li>
                            </ul>
                            <p class="has-margin-b30"><b>Gains</b></p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Feeling of safety</li>
                                <li>Fast arrival</li>
                                <li>Knowing where you are</li>
                                <li>Being able to travel on rainy days</li>
                            </ul>
                            <p class="has-margin-b30">Allow me a quick side note here. When creating value propositions, it's often asked if the pains and the gains are opposite sides of a coin. They're not. For example, a pain point we mentioned was "dirty taxi". We could put down a "clean taxi" as a gain in this case. But actually, that is not a gain. It's an expectation.</p>
                            <h3 class="heading-3 has-margin-b30">Value Map:</h3>
                            <p class="has-margin-b30"><b>Products and services</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Passenger mobile app</li>
                                <li>Customer hotline</li>
                                <li>Airport transfers</li>
                                <li>Credit card payment</li>
                            </ul>
                            <p class="has-margin-b30"><b>Pain Relievers</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>24/7 taxi availability</li>
                                <li>Regular cleaning service</li>
                                <li>Trained drivers</li>
                            </ul>
                            <p class="has-margin-b30">This train of thought might help when writing down pain relievers: if a customer has a pain X, the pain reliever might be Y. </p>
                            <p class="has-margin-b30">So, if a customer has a pain "No taxi availability", the pain reliever might be "24/7 taxi availability".</p>
                            <p class="has-margin-b30"><b>Gain Creators</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Rating system</li>
                                <li>Automatic credit card payments</li>
                                <li>Following your trip in the app</li>
                            </ul>
                            <p class="has-margin-b30">Again, if a customer has a gain X, the gain creator might be Y.</p>
                            <p class="has-margin-b60">So, if a customer has a gain "Tracking the route", the gain creator might be "Following your trip in the app".</p>
                            <p class="has-margin-b30">What comes next in the design process is determining if there is a fit. Here's what you can do. Gather your team for a meeting. Go through each note on your canvas and see if gains and pains match with gain creators and pain relievers. Start with your gain creators. Look at each gain creator you wrote, and then looking at the gains on the right side, ask yourself, "Which gain does this gain creator create?" If you notice a match, put a checkmark on each note. Do the same for pain and pain relievers.</p>
                            <p class="has-margin-b60">The more items on the right that have matches on the left, the higher the probability that your product will strike home.</p>
                            <h2 class="heading-2 has-margin-b30">Testing your value proposition</h2>
                            <p class="has-margin-b30">The final step should be formulating and testing your value proposition. If you have several gain creators and pain relievers, you'll most likely have more than one value proposition, as it's hard to find one phrase that encompasses all.</p>
                            <p class="has-margin-b60">Lastly, test your proposition(s) with customers during an interview. Ask them if they can identify with it. Is it clear what the value you're offering is? Is it meaningful enough for them?</p>
                            <h2 class="heading-2 has-margin-b30">Conclusion</h2>
                            <p class="has-margin-b30">That's about it. Before wrapping up, though, here's a quick step-by-step guide on how to fill the value proposition canvas:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>1. Pick a target customer.</li>
                                <li>2. Identify what jobs they need to perform (jobs-to-be-done).</li>
                                <li>3. Identify pain points they face while performing these jobs.</li>
                                <li>4. Identify the gains they hope to achieve while completing these jobs.</li>
                                <li>5. Pick the top 3-5 most important pains and gains.</li>
                                <li>6. List all the benefits of your product or service.</li>
                                <li>7. Identify potential pain relievers.</li>
                                <li>8. Identify potential gain creators.</li>
                                <li>9. Select the gain creators and pain relievers that make the most significant difference to your customers.</li>
                                <li>10. Find correlation between gain creators and gain, between pain relievers and pains. This will be your value offering.</li>
                                <li>11. Formulate your value proposition(s) as one phrase that clarifies your offered value to your users.</li>
                                <li>12. Test your value proposition(s) with your customers.</li>
                            </ul>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'How to use the value proposition canvas?'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.nocipal')
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
    "datePublished": "2022-03-14T10:00:00",
    "dateModified": "2022-03-14T10:00:00",
    "description": "What is a pivot? How many ways can you pivot? When to pivot? All this and and more!",
    "headline": "To Pivot or Not to Pivot – That Is the Question",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-to-pivot-or-not-to-pivot.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Startup, Pivot",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "To Pivot or Not to Pivot – That Is the Question",
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
                "name": "To Pivot or Not to Pivot – That Is the Question"
            }
        }
    ]
}
</script>
@endpush
