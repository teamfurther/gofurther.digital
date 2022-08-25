@section('title', 'What is Customer Journey Mapping?')
@section('description', 'A well-designed customer journey map keeps the customer at the forefront of the decision-making process and highlights any struggles that customers might experience. Learn how to create one for your business!')
@section('preview_image', route('generate-cover', ['title' => 'What is Customer Journey Mapping?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">What is Customer Journey Mapping?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-08-25 10:00:00">Aug 25th, 2022</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Customer journey maps are a visual representation of the process a customer goes through when buying a product or service. The point is to see the whole picture, as clearly as possible, of what a customer will experience when using your service.</p>
                            <p>Journey maps define a series of touchpoints and feelings that customers have towards your product or service, and help you get better insight into your customers' experiences, from their perspective.</p>
                            <p>This perspective is more important than ever to a business since customers are ever more demanding and aware of their different choices.</p>
                            <p>A well-designed customer journey map keeps the customer at the forefront of the decision-making process and highlights any struggles that customers might experience.</p>
                            <p class="has-margin-b60">Additionally, it demonstrates how to make the entire experience more satisfying by improving the elements that are not functioning properly or are not easy to navigate. Any cracks or holes in the timeline can be untangled by focusing on the customer and their user experience (UX).</p>
                            <h2 class="heading-2 has-margin-b30">Steps to Create a Customer Journey Map</h2>
                            <h3 class="heading-3 has-margin-b30">1. Define your Personas</h3>
                            <p class="has-margin-b60">Before starting to create a customer journey map, it's important to identify a clear customer persona. Personas offer an overview of customer goals, providing a deeper understanding of their needs and interests. If you haven't done so yet, read our previous blog on <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-use-personas-in-product-development']) }}" target="_blank">personas</a> for an in-depth explanation of personas.</p>
                            <h3 class="heading-3 has-margin-b30">2. The Map</h3>
                            <p class="has-margin-b60">A key to business success is understanding the customer journey from the presale stage of awareness to post-sale advocacy. On the X axis we can see this process in 5 stages:</p>
                            <h4 class="heading-4 has-margin-b30">X1. Awareness</h4>
                            <p>The majority of potential customers begin at the awareness stage, when a user has a problem or need and searches for a solution. Customers are mostly looking for informational articles regarding products that might help them with their difficulties.</p>
                            <p class="has-margin-b60">Marketing departments may demonstrate how their products might meet client demands by outlining advantages. Online advertisements and educational promotions like white papers and e-books are typical marketing strategies at this stage.</p>
                            <h4 class="heading-4 has-margin-b30">X2. Consideration</h4>
                            <p>During the consideration phase, customers compare one organisation's offerings to its competitors. Organisations may enhance audience engagement by using blog material, success stories, email nurturing campaigns, and webinar or event registrations.</p>
                            <p>As customer experience teams engage with customers, they can emphasise the features of their products and services so customers can better understand their benefits.</p>
                            <p class="has-margin-b60">Ultimately, if marketing teams can solve a prospect's top problems, they can help customers move to the next stage of the customer journey. Marketing teams in this phase need to change the tone of content and messaging from a high-level and educational level to a more detailed approach.</p>
                            <h4 class="heading-4 has-margin-b30">X3. Decision</h4>
                            <p>The first two phases place a burden on marketing teams as they consistently gather and nurture leads. When a brand-engaged person reaches the decision- or purchase-phase, they are ready to interact with sales or support engineers as a marketing-qualified lead.</p>
                            <p class="has-margin-b60">At this stage, people usually have a short list of companies they would buy from, so a good sales process and successful case studies give your organisation an advantage over the competition. And within the sales process, good relationships and alignment can differentiate brands.</p>
                            <h4 class="heading-4 has-margin-b30">X4. Delivery & Use</h4>
                            <p>The last two phases of the customer journey occur after the sale. Oftentimes, sales representatives make the sales, onboard the customer, and wait for a renewal time or cross-sell opportunity to reconnect with them.</p>
                            <p>During the retention phase, organisations can implement a loyalty program and regularly communicate company or product improvements to customers.</p>
                            <p class="has-margin-b60">Organisations can also offer additional promotions throughout the customer lifecycle. Regular communication can lead to increased customer engagement, furthering education and value for customers.</p>
                            <h4 class="heading-4 has-margin-b30">X5. Advocacy</h4>
                            <p class="has-margin-b60">Customer advocacy comes after great customer experience. Customers who have positive experiences with a company's products or services are more likely to recommend it to others. Satisfied customers increase the number of potential customers who hear about these experiences and may consider this organisation for their own needs.</p>
                            <p>These 5 stages are not set in stone, they can vary on the business and the goods or services it sells. You can adjust them, add or remove stages as you see fit.</p>
                            <p>On the Y axis, you'll have several different components. These are pretty standard, but you can freely adjust them to your liking as well. To help better understand, here's an actual customer journey map for an imaginary digital product agency. You know, because we have a bit of experience in that domain.</p>
                            <figure>
                                <a href="{{ asset('media/blog/customer-journey-map-en.png') }}" target="_blank">
                                    <img src="{{ asset('media/blog/customer-journey-map-en.png') }}" alt="" />
                                </a>
                                <figcaption>Click to enlarge</figcaption>
                            </figure>
                            <h4 class="heading-4 has-margin-b30">Y1. Customer Activities</h4>
                            <p class="has-margin-b60">What actions do your customers take at various points in the customer lifecycle and what are the customer's jobs-to-be-done (functional, emotional or social)? What are the steps a customer needs to take to reach the end of their journey? Look for opportunities to reduce the number of the steps so customers can reach their goal sooner and easier.</p>
                            <h4 class="heading-4 has-margin-b30">Y2. Customer Goals</h4>
                            <p class="has-margin-b60">Determine what the customer wants to achieve in each phase.</p>
                            <h4 class="heading-4 has-margin-b30">Y3. Touchpoints</h4>
                            <p class="has-margin-b60">What channels and touchpoints act as interaction points between the customer and the organisation?</p>
                            <h4 class="heading-4 has-margin-b30">Y4. Experience</h4>
                            <p>What might the customers feel in different stages of using your service? How well do you fulfil their needs and expectations? What is the perceived level of customer experience?</p>
                            <p class="has-margin-b60">You can describe and illustrate the experiences and feelings with a curve and illustrations, as you can see on the example.</p>
                            <h4 class="heading-4 has-margin-b30">Y5. Business Goals</h4>
                            <p class="has-margin-b60">Here we establish goals of what the company is trying to achieve and what is considered a success at each point of the journey from a company's point of view.</p>
                            <h4 class="heading-4 has-margin-b30">Y6. KPIs</h4>
                            <p class="has-margin-b60">Measuring your business goal. Which metrics show how well are you doing from a business perspective in each stage and if you are making progress towards your business goals?</p>
                            <h4 class="heading-4 has-margin-b30">Y7. Organisational Activities</h4>
                            <p class="has-margin-b60">What steps and activities your organisation can take to support and improve customer experience in each stage?</p>
                            <h4 class="heading-4 has-margin-b30">Y8. Responsible</h4>
                            <p class="has-margin-b60">What roles or departments are in charge of the customer experience at each stage of the journey?</p>
                            <h4 class="heading-4 has-margin-b30">Y9. Technology Systems</h4>
                            <p class="has-margin-b60">What technology systems are involved that help execute different activities.</p>
                            <h3 class="heading-3 has-margin-b30">3. Analysing the Customer Journey Map</h3>
                            <p>Creating customer journey maps provides a picture of the entire business and highlights all the resources used to create the customer experience. Analysing the map is an essential part of the process. As you evaluate the data, look for touchpoints that may drive customers to leave before purchasing, or areas where they may need additional support. Analysis of the map helps to find the places that do not meet the needs of the customers and to find a solution for them.</p>
                            <p class="has-margin-b60">Go through the map with each persona and examine their journeys through social media, email, online browsing, surveys or interviews to get a better idea of how you can create a smoother, more valuable experience.</p>
                            <h3 class="heading-3 has-margin-b30">4. Take Business Action</h3>
                            <p class="has-margin-b60">A visual representation of the journey highlights the areas for the improvements. Put these improvements into actions and make regular revisions to the map to keep the journey as efficient as possible. Utilise analytics and user feedback to catch any changes.</p>
                            <h2 class="heading-2 has-margin-b30">Conclusion</h2>
                            <p>Customer journeys are ever-changing. Journey maps help businesses stay in touch with their customers and continuously address their needs and pain points. They give a visual representation of various customers which helps them comprehend the nuances of their audience and maintain a client-centred attitude.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'What is Customer Journey Mapping?'])
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
    "datePublished": "2022-08-25T10:00:00",
    "dateModified": "2022-08-25T10:00:00",
    "description": "A well-designed customer journey map keeps the customer at the forefront of the decision-making process and highlights any struggles that customers might experience. Learn how to create one for your business!",
    "headline": "What is Customer Journey Mapping?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-to-pivot-or-not-to-pivot.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Startup, Customer Journey, Customer Journey Map",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "What is Customer Journey Mapping?",
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
                "name": "What is Customer Journey Mapping?"
            }
        }
    ]
}
</script>
@endpush
