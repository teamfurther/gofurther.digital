@section('title', 'How does a software optimise your manufacturing processes?')
@section('description', 'In today\'s article we\'d like to show you how a software can help optimise your product development, supply chain and manufacturing processes.')
@section('preview_image', asset('media/blog/cover-manufacturing-software-en.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-manufacturing-software.jpg') }}" srcset="{{ asset('media/blog/featured-manufacturing-software-769w.jpg') }} 769w" sizes="100vw" alt="How does a software optimise your manufacturing processes?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">How does a software optimise your manufacturing processes?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-10-26 12:00:00">Oct 26th, 2019</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">We previously wrote about the benefits a software can bring to your <a href="{{ localizedRoute('blog.view', ['slug' => 'when-is-it-time-to-use-a-crm']) }}">sales</a> vagy az <a href="{{ localizedRoute('blog.view', ['slug' => 'going-paperless-how-to-digitise-your-business']) }}">operations</a>. Today we'd like to show you how these software can be used outside the office, optimising your manufacturing processes.</p>
                            <h2 class="heading-2 has-margin-b30">Product Lifecycle Management</h2>
                            <p>A manufacturing software is made up of multiple modules. The first one is the PLM or product lifecycle management. The PLM's goal is to plan a product from design and manufacturing schemes to servicing and disposal.</p>
                            <p>Let's take a real-life example. One of our <a href="{{ localizedRoute('projects.view', ['slug' => 'njoy-the-hive']) }}">oldest clients</a> is manufacturing consumer electronics. In their case, the PLM software contains all the documents related to products and organises the necessary human resources. It also contains the bill-of-materials (BoM) and service manuals.</p>
                            <p>Think of a PLM, like a hub which supplies information about a product to the company and other software modules.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-plm-en.png') }}" alt="A PLM documents every stage of a product's lifecycle" />
                                <figcaption>A PLM documents every stage of a product's lifecycle</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Optimal Inventory</h2>
                            <p>The effective manufacturing process starts when a request comes in through the CRM. When a request is transformed into an order, it gets sent to the MRP, or material requirements planning module. As its name implies, the MRP's tasks were related to requirements planning, but with the introduction of the MRP II, it could also handle capacity planning as well. Let's see what this means in practice.</p>
                            <p>The MRP's primary goal is to ensure that all the materials and resources are ready for production, while also making sure that we only have minimal inventory. This is called optimal inventory, and its purpose is to lower our warehousing and transport costs.</p>
                            <p>The MRP module receives the BoM from the PLM, and based on the orders, it calculates the necessary inventory levels for the upcoming period and tells us exactly when to procure supplies. This is then communicated to the inventory and supply chain modules.</p>
                            <p>In an ideal situation, we can create a zero inventory manufacturing process. That means that as the shipment arrives from your supplier, it's immediately used in production. This is one of the pillars of the Just-in-time methodology developed in the ‘60's by Toyota.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-optimal-inventory.jpg') }}" alt="An optimal inventory means we only keep the bare minimum of stock" />
                                <figcaption>An optimal inventory means we only keep the bare minimum of stock</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Optimal manufacturing processes</h2>
                            <p>An MRP software's other feature is to ensure that we always have enough products to fulfill every order. This is done by aligning procurement with orders and service requests, and planning resources and capacity for the upcoming period and the different production facilities.</p>
                            <p>Just-in-time production demands that downtimes are reduced. Material conveyance, machine tooling or waiting times related to human resources can all be considered as downtime. An MRP software takes into consideration all these parameters when planning production.</p>
                            <p>The MRP is also responsible for preventive maintenance. From the production data, an MRP can calculate exactly what the mean time between failure (MTBF) and mean time to repair (MTTR) is, or when the next failure is expected to happen. Based on this information, the software can plan preventive maintenance to avoid failures and the interruption of production.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-mrp-en.png') }}" alt="An MRP module contstantly communicates with the PLM and other modules" />
                                <figcaption>An MRP module contstantly communicates with the PLM and other modules</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Quality Control</h2>
                            <p>Quality control is another important feature of a production software. We can set up control points in the different stages of a process. For example, we can set up a control point to monitor the scrap rates after cutting. If the scrap rate increases, we can document and analyse the problem. If the root cause is found, we can take preventive measures so it doesn't happen again.</p>
                            <p>A software is capable of recording a huge amount of manufacturing data. This can be machine data, cycle times, or the aforementioned tooling and maintenance times.</p>
                            <p>Acting on this data, and MRP can create detailed statistics and reports from which you can get a precise picture or your production costs or it can give you and idea on which process you need to improve. Modern MRP software are even capable of machine learning, which means they can learn from this data and fine-tune processes without outside intervention.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-qc.jpg') }}" alt="You can set up various control points to ensure production quality" />
                                <figcaption>You can set up various control points to ensure production quality</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Conclusions</h2>
                            <p>Let's reiterate how a manufacturing software can help. Putting it simply, it helps improve your manufacturing efficiency and lower your costs.</p>
                            <p>This is achieved by:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>organising product information</li>
                                <li>optimising the supply chain</li>
                                <li>scheduling production and maintenance</li>
                                <li>quality control</li>
                                <li>generating precise statistics and reports.</li>
                            </ul>
                            <p>If this article was interesting to you, and you'd like to learn more about how a software can help your manufacturing efforts, get in touch with us!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'How does a software optimise your manufacturing processes?'])
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
    "datePublished": "2019-10-26T12:00:00",
    "dateModified": "2019-10-26T12:00:00",
    "description": "In today\'s article we'd like to show you how a software can help optimise your product development, supply chain and manufacturing processes.",
    "headline": "How does a software optimise your manufacturing processes?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-manufacturing-software-en.jpg') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "PLM, Product Lifecycle Management, MRP, Material Resource Planning, Resource Planning, Capacity Planning, Optimal Inventory, Quality Control, Digital Business, Digital Transformation, ERP",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}"
    },
    "name": "How does a software optimise your manufacturing processes?",
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
                "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}",
                "name": "How does a software optimise your manufacturing processes?"
            }
        }
    ]
}
</script>
@endpush
