@extends('layouts.vertical')

@section('title', 'Tabs')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Tabs</h2>
    <p class="text-body-tertiary lead mb-2">Takes the basic nav and adds the <code>.nav-tabs</code> class to generate a
        tabbed interface. Use them to create tabbable regions with Bootstrap tab JavaScript plugin.</p><a
        class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#tabs" target="_blank">Tabs on
        Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic Example</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Takes the basic nav and adds the
                                        <code>.nav-tabs</code> class to generate a tabbed interface. Use them to create
                                        tabbable regions with our tab JavaScript plugin.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#basic-example-code" role="button" aria-controls="basic-example-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="basic-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;nav nav-underline fs-9&quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#tab-home&quot; role=&quot;tab&quot; aria-controls=&quot;tab-home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#tab-profile&quot; role=&quot;tab&quot; aria-controls=&quot;tab-profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#tab-contact&quot; role=&quot;tab&quot; aria-controls=&quot;tab-contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content mt-3&quot; id=&quot;myTabContent&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;tab-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot;&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;tab-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot;&gt;Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic.&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;tab-contact&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot;&gt;Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <ul class="nav nav-underline fs-9" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            href="#tab-home" role="tab" aria-controls="tab-home"
                                            aria-selected="true">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            href="#tab-profile" role="tab" aria-controls="tab-profile"
                                            aria-selected="false">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            href="#tab-contact" role="tab" aria-controls="tab-contact"
                                            aria-selected="false">Contact</a></li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab-home" role="tabpanel"
                                        aria-labelledby="home-tab">Raw denim you probably haven't heard of them jean shorts
                                        Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                        tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                        dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                                        Aliquip placeat salvia cillum iphone.</div>
                                    <div class="tab-pane fade" id="tab-profile" role="tabpanel"
                                        aria-labelledby="profile-tab">Food truck fixie locavore, accusamus mcsweeney's marfa
                                        nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR
                                        leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                                        Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts
                                        ullamco ad vinyl cillum PBR. Homo nostrud organic.</div>
                                    <div class="tab-pane fade" id="tab-contact" role="tabpanel"
                                        aria-labelledby="contact-tab">Etsy mixtape wayfarers, ethical wes anderson tofu
                                        before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table
                                        readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                        locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                        Leggings gentrify squid 8-bit cred pitchfork.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-2">
                <div class="position-sticky mt-xl-4" style="top: 80px;">
                    <h5 class="lh-1">On this page </h5>
                    <hr>
                    <ul class="nav nav-vertical flex-column doc-nav" data-doc-nav="data-doc-nav">
                        <li class="nav-item"> <a class="nav-link" href="#basic-example">Basic Example</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
