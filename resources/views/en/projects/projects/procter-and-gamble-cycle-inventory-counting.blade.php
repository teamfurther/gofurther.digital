@section('title', 'Procter & Gamble CIC case study')
@section('description', 'P&G contacted us to develop a fixed asset counting solution to help keep track of their fixed assets.')
@section('preview_image', asset('media/projects/pg-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Procter & Gamble - Cycle Inventory Counting</h2>
        <h3 class="project__intro">
            P&G contacted us to develop a Cycle Inventory Counting solution to help keep track of their fixed assets.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Background</h4>
                    <p>Prior to contacting us, P&G was using printed spreadsheets to track over 7000 fixed assets at their Gyöngyös facility. Fixed assets managers downloaded the list of assets from SAP, split it equally between fixed asset owners and printed copies for each of them.</p>
                    <p>Fixed asset owners then used these sheets to mark if assets were found, in good state and in their correct location. They also took photos of the assets. At the end of this process, they entered all this information back into SAP. To cycle over all their 7000 assets, they needed 3 years!</p>
                    <p>Closely collaborating with their fixed assets team, we developed a mobile application which automatically pulls data from SAP, distributes work between fixed asset owners who then scan and photo the RFID tags or QR codes on the objects. At the end of the process, all the information is uploaded back into SAP automatically. With this solution, we managed to considerably reduce the time needed for inventorying, by 67%, to a single year.</p>
                    <div class="project__stats">
                        <div class="project__stat is-downward">
                            <span>7<small>k +</small></span> fixed<br />assets
                        </div>
                        <div class="project__stat">
                            <span>67<small>%</small></span> productivity<br />increase
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/pg-logo.svg') }}" alt="Procter & Gamble" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        The CIC mobile was finished in early 2020, and within a year, the inventory counting cycle which previously took 3 years, was completed, achieving a 67% productivity improvement.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__overview">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Key problems and solutions</h4>
                    </div>
                </div>
                <div class="columns has-margin-b90 is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Connecting with 3rd party software</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>P&G already had multiple software in place, such as SAP or a Microsoft Azure. We had to make sure we connect seamlessly to this environment.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>We have worked with Microsoft Azure before in the past, so we had that knowledge in place already, we just needed to work together with the P&G IT department to set up the connection. As for SAP we studied the official API documentation and consulted with the P&G team to ensure the process is fully automated.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/pg-overview-1.png') }}" alt="P&G - Connecting with 3rd party software" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Determining precise asset location</h5>
                        <em class="project__text-emphasis">Problem</em>
                        <p>For each object, we had to be able to determine their correct location. GPS works great for larger areas, but was not precise enough for smaller rooms.</p>
                        <em class="project__text-emphasis">Solution</em>
                        <p>Initially we launched the application with GPS-only location determination. We found that it worked better than expected, determining object location with a 90% accuracy. For smaller spaces, we tapped into beacon technology. The application was set up to be able to read location from small IoT devices called beacons, strategically placed in the correct rooms. With this solution we could achieve 100% accuracy.</p>
                    </div>
                    <div class="column has-text-right">
                        <img src="{{ asset('media/projects/pg-overview-2.png') }}" alt="P&G - Harnessing the power of beacon technology" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h4 class="heading-1">
                        Key takeaways
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        IoT is fun
                    </h5>
                    <p>We love working on projects which allow us to test out new technologies. The P&G Cycle Inventory Counting software was such an example. Beacon technology has been around 2013, but it is still not widely used, because of the limited applications. But it was an excellent fit for this very project.</p>
                    <p>We still think back fondly of the day the first beacons arrived in a package we ordered for testing. It was like Christmas morning!</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        The corporate process is very rigorous
                    </h5>
                    <p>Although we have worked with corporate clients before and since, we remember being amazed at how thorough the selection process was to become a P&G supplier. We had to go through a background check and put forward our information and physical security policies, business continuity plan and incident management processes.</p>
                    <p>Most companies our size don't even have these in place, so we were more than pleased that everything was found in order, and we didn't even have to make any revisions to the aforementioned policies.</p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        The gears of an enterprise grind slowly
                    </h5>
                    <p>Another aspect that we had to prepare for was the slow decision making process. This isn't specific to this client, it's just the nature of the enterprise world. Every choice or solution had to be approved on several levels, both by IT and the business side, and we had to make sure this is taken into account when submitting timelines.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/pg-gallery.jpg') }}" alt="Open gallery" />

            <span class="btn is-large">Expand gallery</span>
        </a>
    </section>

    <section class="section">
        <div class="project__contact">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-1">What can we do for you?</div>
                        <a class="btn is-large" href="{{ localizedRoute('contact') }}">
                            Book a consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.projects.banners.' . $bannerSlug)
@endsection

@push('content-modals')
    <div class="modal" id="gallery-modal" tabindex="-1" role="dialog">
        <div class="container">
            <div class="project__gallery-modal">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pg-gallery-1.jpg') }}" alt="Procter & Gamble - Cycle Inventory Counting" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Outgoing checklists</h5>
                            <div class="project__gallery-modal__description">
                                <p>This is where fixed asset accountants (FAA) manage assignments. The software pulls the list of fixed assets from SAP, then evenly distributes them between fixed asset owners (FAO), making sure not asset is checked more than once per cycle.</p>
                                <p>FAA are able to approve checklists or shift them to the next month, in case one of their FAO's is overloaded with work or on holidays. FAO's on the other hand, are able to request additional assets to check if they feel they can handle more work.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pg-gallery-2.png') }}" alt="Procter & Gamble - Cycle Inventory Counting" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Checking assets</h5>
                            <div class="project__gallery-modal__description">
                                <p>The check process starts with the FAO scanning the RFID tag or QR code on the asset. If the tag matches the asset being checked all the data is pulled from the database and the location is determined via GPS and beacon technology.</p>
                                <p>The FAO only has to take a couple of photos with the phone and confirm the validity of a couple of information. In case some information is erroneous, they have to file a report.</p>
                                <p>Before implementing the current software solution, FAO had to pull the asset list from SAP as a spreadsheet, print it, fill it out by hand  and then input data back into SAP. This process was unnecessarily time-consuming and led to a high rate of errors.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/pg-gallery-3.jpg') }}" alt="Procter & Gamble - Cycle Inventory Counting" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Incoming checklists</h5>
                            <div class="project__gallery-modal__description">
                                <p>The incoming checklists screen acts as flight control for the FAA. Here they can view the details of each completed checklist and get insights like overall cycle progress, issue breakdown or FAO workloads.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns has-text-centered">
                    <a class="btn is-large is-pearl" data-dismiss="modal">Close gallery</a>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
    <div class="modal__backdrop"></div>
@endpush



@push('structured-data')
    <script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "author": {
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
    "breadcrumb": {
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
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Our projects"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                    "name": "Procter & Gamble - Cycle Inventory Counting case study"
                }
            }
        ]
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
    "description": "P&G contacted us to develop a fixed asset counting solution to help keep track of their fixed assets. With the help of the application, P&G reduced their inventory cycle from 3 years, to just 1 year!",
    "headline": "Procter & Gamble - Cycle Inventory Counting case study",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Inventory, SAP, Microsoft Azure, Vue, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Procter & Gamble - Cycle Inventory Counting case study",
    "publisher": {
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
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Our projects"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                "name": "Procter & Gamble - Cycle Inventory Counting case study"
            }
        }
    ]
}
</script>
@endpush