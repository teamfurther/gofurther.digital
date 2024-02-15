@section('title', 'Conducting Usability Tests')
@section('description', 'Usability testing is a crucial step in product development. But what happens during a usability interview and how should you facilitate such a test?')
@section('preview_image', route('generate-cover', ['title' => 'Conducting Usability Tests']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Conducting Usability Tests</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-09-29 10:00:00">September 29th, 2022</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Usability testing serves as feedback to evaluate a product or service by testing it with potential users. The researcher (called a "facilitator" or a "moderator") asks a participant to perform tasks, usually using specific user interfaces. The researcher monitors the participant's behaviour and listens for feedback while each task is completed.</p>
                            <p>Depending on the research, usability testing objectives can vary but typically include the following:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Identifying issues in the design or user experience of the product or service;</li>
                                <li>Uncovering opportunities for enhancement;</li>
                                <li>Discovering and learning about the target user's behaviour and preference.</li>
                            </ul>
                            <p class="has-margin-b60">Usability testing is imperative because without this iterative design process, driven by observations of potential users and their interactions with the design, UX designers cannot create a flawless user experience.</p>
                            <h2 class="heading-2 has-margin-b30">The Elements of Usability Testing</h2>
                            <h3 class="heading-3 has-margin-b30">Facilitator (moderator)</h3>
                            <p class="has-margin-b60">The facilitator guides the participant(s) through each step of the procedure. They give instructions, respond to participant questions, and ask follow-up queries. The facilitator ensures that the test results are high-quality, valid data, taking extra care not to influence the participant's behaviour. Achieving this balance is challenging and takes practice.</p>
                            <h3 class="heading-3 has-margin-b30">Tasks</h3>
                            <p>During a usability test, participants carry out realistic activities that may be performed in real life as a user. Depending on the study questions and the type of usability testing, they might be either extremely specific or open-ended.</p>
                            <p class="has-margin-b60">When doing usability testing, task phrasing is crucial. Minor inaccuracies in a task's wording might lead participants to misinterpret what they are required to complete or affect how they perform the task (a psychological phenomenon called priming).</p>
                            <h3 class="heading-3 has-margin-b30">Participants</h3>
                            <p class="has-margin-b60">Participants are the potential users of the product or service under study. During usability testing, participants are often asked to speak their actions aloud (also known as the "think-aloud method"). As they complete activities, the participants may be asked to describe their thoughts and actions by the facilitator. This technique aims to understand participants' behaviours, objectives, thoughts, and motivations.</p>
                            <h2 class="heading-2 has-margin-b30">The Usability Testing Process</h2>
                            <h3 class="heading-3 has-margin-b30">Recruiting Participants</h3>
                            <ol class="list has-margin-b30 has-padding-l30">
                                <li>
                                    <p>Develop recruiting criteria</p>
                                    <ul class="list has-bullets has-margin-b30">
                                        <li>Learn who your users are. Develop <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-use-personas-in-product-development']) }}" target="_blank">personas</a>;</li>
                                        <li>Decide how many participants to recruit;</li>
                                        <li>Draft screening questions.</li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Determine the appropriate incentives</p>
                                    <ul class="list has-bullets has-margin-b30">
                                        <li>Monetary incentives — The most straightforward way to incentivise users to participate is by offering monetary incentives. When determining how much incentive to provide, consider mitigating factors: participant job level, needs, location and session length.</li>
                                        <li>Non-monetary incentives — The promise of high-quality goods could be more alluring to students or retirees – those who do not have to take time off from a conventional, income-earning job. You might offer these people a free copy or a discount on the software or other product being tested after it is released.</li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Recruit!</p>
                                    <ul class="list has-bullets">
                                        <li>We find it is easiest to recruit participants by going where your personas are. Topical Facebook groups or Reddit subreddits work well.</li>
                                        <li>If you're working on a spin-off product or a service related to your core business, your current customers could serve as participants in your usability test.</li>
                                        <li>Finally, you can also use platforms like  <a href="https://www.testingtime.com/en/" target="_blank">Testing Time</a> or <a href="https://www.userlytics.com" target="_blank">Userlytics</a> to recruit participants at a cost.
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            <h3 class="heading-3 has-margin-b30">Preparation</h3>
                            <p>When contacting users, keep the introductions brief and respectful. Whether the respondent chooses to speak with you or not will depend on your introduction. Some might think you are a telemarketer, convincing them to buy something. Therefore, you must clearly establish who you are and the purpose.</p>
                            <p>Try to avoid giving away too much information about what you'll be assessing so participants can't prepare in advance, especially when evaluating with new users.</p>
                            <p>Prepare a screening questionnaire, so you can filter out users who you don't want to interview. In the screening questionnaire, prioritise quick screening questions. For instance, ask about the respondent's job title or job description. Furthermore, you can ask their age range, gender, employment status, household income, language skills or disabilities, if any of these seem relevant. Some respondents may answer screening questions in the way they believe they should, in order to participate in the study. Ask questions in a way that prevents responders from knowing which response satisfies your criteria.</p>
                            <p>Send invitations which include information about the venue, a short overview of the testing session, the schedule, if applicable, any incentives given, draw attention to the fact that you plan to make a recording and mention If you will provide a meal or refreshments in case of an on-site test.</p>
                            <p class="has-margin-b60">A usability testing script is a plan of all the steps you will need to conduct a successful usability test. You must prepare the usability tasks and questions and evaluate them with your colleagues.</p>
                            <div class="columns">
                                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                                    <div class="avatar is-raspberry"></div>
                                    <h4 class="heading-4">Identify issues in the design or the UX</h4>
                                </div>
                                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                                    <div class="avatar is-pearl"></div>
                                    <h4 class="heading-4">Uncover opportunities for enhancement</h4>
                                </div>
                                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                                    <div class="avatar is-tangerine"></div>
                                    <h4 class="heading-4">Learn about user behaviour and preference</h4>
                                </div>
                            </div>
                            <h3 class="heading-3 has-margin-b30">The Test</h3>
                            <p>Make sure you are recording the user actions (on screen for software or as they are using the physical product) and the participant's facial expressions.</p>
                            <p class="has-margin-b60">The facilitator should give the participant tasks and monitor the participant's behaviour. Listen for feedback as they complete these activities and take notes. Ask follow-up questions. While completing these tasks, the participant should give verbal and behavioural feedback regarding the interface for best results.</p>
                            <h3 class="heading-3 has-margin-b30">Qualitative vs. Quantitative Testing</h3>
                            <p>The UX industry differentiates between qualitative and quantitative usability testing.</p>
                            <p>Qualitative usability testing aims to gather information, insights, and anecdotes about how users interact with the good or service. Qualitative usability testing is the most effective method for discovering user experience problems. Compared to quantitative usability testing, this type of testing is more prevalent.</p>
                            <p>Quantitative usability testing aims to gather metrics that describe the user experience. Task success and time on task are two metrics most frequently collected in quantitative usability testing. This is the most effective method for gathering benchmarks.</p>
                            <p class="has-margin-b60">Depending on the type of study, a usability test may require a different number of participants. We advise utilising five participants for typical qualitative usability research of a single user group to identify the bulk of the product's most prevalent issues.</p>
                            <h3 class="heading-3 has-margin-b30">Remote vs. On-site</h3>
                            <p>Remote usability tests are popular because they require less time and money than on-site studies. There are two types of remote usability testing: moderated and unmoderated.</p>
                            <p>Remote moderated usability tests work very similarly to on-site studies. The facilitator still interacts with the participant and asks her to perform tasks, even though they are in different physical locations. Typically, moderated tests can be performed using screen-sharing software like Google Meet or Zoom.</p>
                            <p class="has-margin-b60">In case of remote unmoderated usability testing, the facilitator and the participant are not interacting the same way as in-person or as it was moderated. The researcher sets up written tasks for the participant using a dedicated online remote-testing tool. The participant then completes those tasks alone, on her schedule. The task instructions and any additional questions are delivered by the testing tool. After the participant completes her task, the researcher receives a videotape of the session and data like task accomplishment.</p>
                            <h2 class="heading-2 has-margin-b30">Afterword</h2>
                            <p>Although many individuals support user testing, very little of it occurs in real design projects. But why do belief and action differ so much? It's mainly because of the company's inability to fire off an immediate, small test when faced with design decisions. Few companies can conduct these tests within the timeframes of fast-moving development projects. Testing becomes an uncommon and precious event that, at best, occurs only once in each project due to the absence of test preparation.</p>
                            <p>Usability testing is always postponed until the entire design is accessible. Despite many years of experience consistently demonstrating that most projects require multiple rounds of testing and redesign to achieve acceptable user-experience quality, and despite equally strong evidence indicating that it is considerably more affordable to fix usability problems discovered early in the project rather than at its end, this practice is still prevalent.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Conducting Usability Tests'])
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
    "description": "
        Usability testing is a crucial step in product development. But what happens during a usability interview and how should you facilitate such a test?",
    "headline": "Conducting Usability Tests",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'Conducting Usability Tests']) }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Usability Test, Usability, UX",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Conducting Usability Tests",
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
                "name": "Conducting Usability Tests"
            }
        }
    ]
}
</script>
@endpush
