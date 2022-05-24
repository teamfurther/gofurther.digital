@section('title', 'How Long Does It Take to Build a Custom Software?')
@section('description', 'We\'re going to try and answer a question we frequently face: How Long Does It Take to Build a Custom Software?')
@section('preview_image', asset('media/blog/cover-how-long-is-a-development-project-en.png'))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">How Long Does It Take to Build a Custom Software?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-02-17 12:00:00">Feb 17th, 2020</time> &middot; 7 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>In previous articles, we have already answered two questions that our customers often ask us. We've talked about <a href="{{ localizedRoute('blog.show', ['slug' => 'custom-development-vs-out-of-the-box-software']) }}">when to choose a custom solution instead of a boxed software</a>, and in a recent article, we've answered who should be entrusted with this development: <a href="{{ localizedRoute('blog.show', ['slug' => 'freelancer-vs-development-company-vs-build-your-own-team']) }}">a freelancer or a development company, or maybe it's worth building your own development team.</a> </p>
                            <p>In today's article, we are once again answering a question that our clients always ask at the beginning of a project: how long does a development project take? We're going to talk about what happens during such a project, and what pitfalls we can face that delay the development.</p>
                            <p>Answering this question is as difficult as answering the question of how long it takes to build a house. The simple answer is that every development project is just as long as the list of requirements. But to be more specific about it, let's take 2 sample projects.</p>
                            <p>Our first project is the equivalent of a 100 sqm lightweight frame house in the software world: a simple CRM software for a service company. Let's say for an injection molding workshop that makes custom products. It is important for them to keep a record of all customer data in one place, to be able to upload a quote for each, and then issue an invoice at the end of the projects.</p>
                            <p>Our second project on the other hand, is a turnkey mansion of custom software for a cutting plant. They already want to track different projects in the CRM, in addition to individual orders. They also want to track the sales of mass-produced products. Simple invoicing is no longer enough here, they want to see their exact costs and other financial metrics as well. They also need a supply chain and inventory module as well as material requirements planning software to plan production capacity in advance. This is what's called an ERP.</p>
                            <p>For both projects, the stages of software development will be the same, only their duration will be different. It should be mentioned here that there are several ways to develop software, the two best known are the waterfall model and the agile model.</p>
                            <p>In the case of the waterfall model, the stages follow one another, and at the end of the process we obtain a finished product. Just like building a house starts from the ground up and ends with interior smoothing. The agile model has several advantages over the waterfall model, but explaining the exact process is much more complicated, so in the following we will rather illustrate the different stages of software developed in a waterfall model.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-design-and-specification.jpg') }}" alt="Project design is a crucial stage in a project's lifecycle" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Design and specification</h2>
                            <p>In the design and specification phase, we assess requirements and analyse business processes. We usually do this by conducting so-called stakeholder interviews with each type of user. In this case, we map out how they are currently working, what problems they are facing and what is expected of the new software.</p>
                            <p>For the first project, we would conduct interviews on the part of the client with the project owner, a salesperson who is going to use the software, and possibly an accountant for billing purposes. In the case of the second project, the situation is already more complex. As more types of products are sold, more salespeople may need to be interviewed, and it will be necessary to involve the finance team, purchasing department, warehouse, shift managers, and production-line workers.</p>
                            <p>This is followed by planning, when we develop solutions to problems identified with the customer. These are described in the form of user stories.</p>
                            <p>This is the first point where a development project can face delays. Customers usually want to compress all their ideas into a project at once. This can easily become costly and time consuming. To avoid this, we often use the MoSCoW technique at this point. MoSCoW is an acronym consisting of 4 initial letters. And these 4 lists are "Must have", "Should have", "Could have" and "Won't have", i.e. essential functions, important functions, possible functions and functions that are definitely not going to be implemented.</p>
                            <p>We categorise user stories into these 4 categories with the utmost rigor, and as a result, we get a clear picture of where it's worth drawing the line so that the project doesn't run out of time and budget.</p>
                            <p>The filtered user stories are placed in a backlog. This backlog, with various other documentation and possible prototypes, will be our specification.</p>
                            <p class="has-margin-b30">And now to the long-awaited part, the specific numbers. Based on our experience so far, the entire design and specification phase can be implemented in 2-4 weeks for the first project, but in the second project it can be as much as 6-8 weeks, as the number of interviews and user stories can easily triple or even quadruple.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-system-design.jpg') }}" alt="UI design will help improve conversion rate on your website" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">UI and system design</h2>
                            <p>Specification is followed by the UI and system design phases. System engineers plan what technology and infrastructure will be required for the software, how the various software modules will communicate with each other, and how the database will be structured. It's just as boring as it sounds.</p>
                            <p>Meanwhile, the graphic designers are dealing with much more exciting and spectacular things: they create wireframes and design user interfaces that always fill both customers and us with excitement, as these are the first truly tangible results of the work.</p>
                            <p>At this stage, it's worth paying attention to whether everything fits our vision - if changes are needed, they should be done now. This is because at this stage, it is still relatively cheap to make these changes. Later, when the development is already underway, it is much more costly to make changes.</p>
                            <p>It may feel that taking our time with all the changes at this stage is delaying the process, but it's still less time lost then doing these later on.</p>
                            <p class="has-margin-b30">This phase can typically take 2-3 weeks for the first project and 5-6 weeks for the second project.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-development.jpg') }}" alt="Meeting project deadlines are one of the biggest challenges, let's see why" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Development</h2>
                            <p>The next stage of development is when a couple of developers put their heads together and transform caffeine into code. This is again a less exciting stage for customers, as they are already waiting for the end product.</p>
                            <p>Therefore, it is bad news for them that this is the longest phase. For the first project it can be as long as 10-15 weeks, while for the second project it can be 30-45 weeks.</p>
                            <p>Even worse news is that this phase is what occurs the most delays. There are two main reasons for this.</p>
                            <p>The first reason is the various change requests that come from the customer. As already mentioned, the easiest way around this is to handle them in the UI and system design phase. The practical probability of this, however, is close to zero.</p>
                            <p>Because the waterfall model handles change requests very rigidly, an agile development may be a better solution in such cases. And since we're bringing up agility for the second time in this article, we feel compelled to dedicate a separate article to this topic.</p>
                            <p class="has-margin-b30">Another reason for delays in the development phase is when the development team misjudges the amount of work. This can be caused by an insufficiently detailed specification or a lack of experience from the development team. Both cases can be avoided by choosing a development partner who has experience in similar projects and has the appropriate references.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-implementation.jpg') }}" alt="Project implementation is the phase where your visions and plans become reality" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Implementation</h2>
                            <p>The development phase is immediately followed by the implementation phase. This is where we install the software on the client's system, give access to different users, and perform the training. Although not necessarily part of the implementation, most often the system documentation is also completed after the development.</p>
                            <p class="has-margin-b30">In the case of the first project, approx. 1 week should be enough, while for the second project this can take 2-4 weeks.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-testing-and-bug-fixes.jpg') }}" alt="Software testing is really required to point out the defects and errors" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Testing and debugging</h2>
                            <p>Once implemented, all that remains is testing and fixing bugs. Of course, testing is already done by the development team during the development phase, but for all software, there are bugs and test cases that are only revealed when end users start using the software.</p>
                            <p>It is important to note that when we speak about the time required for testing, this does not coincide with the warranty period defined in the contract.</p>
                            <p class="has-margin-b30">Testing and debugging takes 3-4 weeks for the first project and around 6-8 weeks for the second project. During this time, most of the remaining bugs can be fixed and the software can be used without interruption. However,  1 or 2 minor bugs may occasionally occur later on as well.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-support.jpg') }}" alt="In maintenance the developers fix previously unknown bugs in the accepted functionality" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">After the project</h2>
                            <p>This concludes the effective project. As we saw in the first project, a simple CRM system can be developed in roughly 15 to 25 weeks, while a fairly high-complexity ERP system can be realistically developed in 45 to 65 weeks.</p>
                            <p>Although the development project is over, a new project will be launched immediately after, during which the software will need to be maintained and software upgrades will need to be performed. Moreover, our experience is that the development itself does not stop here, as the software needs to be constantly modified and new modules need to be added to meet the ever-evolving needs of the customers.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'How Long Does It Take to Build a Custom Software?'])
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
    "datePublished": "2019-02-17T12:00:00",
    "dateModified": "2019-02-17T12:00:00",
    "description": "We're going to try and answer a question we frequently face: How Long Does It Take to Build a Custom Software?",
    "headline": "How Long Does It Take to Build a Custom Software?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-how-long-is-a-development-project-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Freelancer, Outsourcing",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "How Long Does It Take to Build a Custom Software?",
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
                "name": "How Long Does It Take to Build a Custom Software?"
            }
        }
    ]
}
</script>
@endpush
