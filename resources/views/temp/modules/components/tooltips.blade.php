@extends('layouts.vertical')

@section('title', 'Tooltips')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Tooltips</h2>
    <p class="text-body-tertiary lead mb-2">Documentation and examples for adding custom Bootstrap tooltips with CSS and
        JavaScript using CSS3 for animations and data-bs-attributes for local title storage.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/components/tooltips/" target="_blank">Tooltips on Bootstrap<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-6" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Hover over the links below to see
                                        tooltips:<br>Tight pants next level keffiyeh <a href="#"
                                            data-bs-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard
                                        of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown.
                                        Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a
                                            href="#" data-bs-toggle="tooltip" title=""
                                            data-original-title="Another tooltip">have a</a> terry richardson vinyl
                                        chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel
                                        williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic
                                        artisan <a href="#" data-bs-toggle="tooltip" title=""
                                            data-original-title="Another one here too">whatever keytar</a>, scenester
                                        farm-to-table banksy Austin <a href="#" data-bs-toggle="tooltip"
                                            title="The last tip!">twitter handle</a> freegan cred raw denim single-origin
                                        coffee viral.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#example-code" role="button" aria-controls="example-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-secondary btn-sm m-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;
  Tooltip on top
&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary btn-sm m-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;
  Tooltip on right
&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary btn-sm m-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;
  Tooltip on bottom
&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary btn-sm m-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;
  Tooltip on left
&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary btn-sm m-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;&amp;lt;em&amp;gt;Tooltip&amp;lt;/em&amp;gt; &amp;lt;u&amp;gt;with&amp;lt;/u&amp;gt; &amp;lt;b&amp;gt;HTML&amp;lt;/b&amp;gt;&quot; data-bs-html=&quot;true&quot;&gt;
  Tooltip with HTML
&lt;/button&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-secondary btn-sm m-1" type="button"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                    Tooltip on top
                                </button>
                                <button class="btn btn-secondary btn-sm m-1" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Tooltip on right">
                                    Tooltip on right
                                </button>
                                <button class="btn btn-secondary btn-sm m-1" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Tooltip on bottom">
                                    Tooltip on bottom
                                </button>
                                <button class="btn btn-secondary btn-sm m-1" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Tooltip on left">
                                    Tooltip on left
                                </button>
                                <button class="btn btn-secondary btn-sm m-1" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"
                                    data-bs-html="true">
                                    Tooltip with HTML
                                </button>
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
                        <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
