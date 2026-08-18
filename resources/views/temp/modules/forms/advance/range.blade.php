@extends('layouts.vertical')

@section('title', 'Range')

@push('styles')
    <link href="{{ asset('vendors/nouislider/nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Range Slider</h2>
    <p class="text-body-tertiary lead mb-2">A lightweight, ARIA-accessible JavaScript range slider with multi-touch and
        keyboard support. Fast and has no dependencies.</p><a class="btn btn-link p-0"
        href="https://refreshless.com/nouislider/" target="_blank">Documentation for noUiSlider<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border mb-3 mt-6" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Default</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#default-code" role="button" aria-controls="default-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="default-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div data-nouislider=&quot;data-nouislider&quot;&gt;&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div data-nouislider="data-nouislider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Range Connect</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#range-connect-code" role="button" aria-controls="range-connect-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="range-connect-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div data-nouislider='{&quot;start&quot;:[20,80],&quot;connect&quot;:true}'&gt;&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div data-nouislider='{"start":[20,80],"connect":true}'></div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Colored Sliders</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#colored-sliders-code" role="button" aria-controls="colored-sliders-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="colored-sliders-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;noUi-primary mb-4&quot; data-nouislider='{&quot;start&quot;:[45]}'&gt;&lt;/div&gt;
&lt;div class=&quot;noUi-success mb-4&quot; data-nouislider='{&quot;start&quot;:[35]}'&gt;&lt;/div&gt;
&lt;div class=&quot;noUi-info mb-4&quot; data-nouislider='{&quot;start&quot;:[40]}'&gt;&lt;/div&gt;
&lt;div class=&quot;noUi-warning mb-4&quot; data-nouislider='{&quot;start&quot;:[70]}'&gt;&lt;/div&gt;
&lt;div class=&quot;noUi-danger&quot; data-nouislider='{&quot;start&quot;:[65]}'&gt;&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="noUi-primary mb-4" data-nouislider='{"start":[45]}'></div>
                                <div class="noUi-success mb-4" data-nouislider='{"start":[35]}'></div>
                                <div class="noUi-info mb-4" data-nouislider='{"start":[40]}'></div>
                                <div class="noUi-warning mb-4" data-nouislider='{"start":[70]}'></div>
                                <div class="noUi-danger" data-nouislider='{"start":[65]}'></div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Styling</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#styling-code" role="button" aria-controls="styling-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="styling-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-0 mb-4&quot; data-nouislider='{&quot;start&quot;:[45]}'&gt;&lt;/div&gt;
&lt;div class=&quot;noUi-primary-lighter noUi-handle-primary noUi-slider-medium noUi-handle-circle px-1 mb-4&quot; data-nouislider='{&quot;start&quot;:[45]}'&gt;&lt;/div&gt;
&lt;div class=&quot;noUi-primary-lighter noUi-slider-large noUi-handle-primary noUi-handle-circle ps-5 pe-3&quot; data-nouislider='{&quot;range&quot;:{&quot;min&quot;:0,&quot;max&quot;:250},&quot;start&quot;:[20,150],&quot;connect&quot;:true}'&gt;&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-0 mb-4"
                                    data-nouislider='{"start":[45]}'></div>
                                <div class="noUi-primary-lighter noUi-handle-primary noUi-slider-medium noUi-handle-circle px-1 mb-4"
                                    data-nouislider='{"start":[45]}'></div>
                                <div class="noUi-primary-lighter noUi-slider-large noUi-handle-primary noUi-handle-circle ps-5 pe-3"
                                    data-nouislider='{"range":{"min":0,"max":250},"start":[20,150],"connect":true}'></div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Stylesheet</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="stylesheet-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;link href=&amp;quot;vendors/nouislider/nouislider.min.css&amp;quot; rel=&amp;quot;stylesheet&amp;quot; /&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <pre><code class="language-html">&lt;link href=&quot;vendors/nouislider/nouislider.min.css&quot; rel=&quot;stylesheet&quot; /&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Javascript</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="javascript-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;vendors/nouislider/nouislider.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <pre><code class="language-html">&lt;script src=&quot;vendors/nouislider/nouislider.min.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <li class="nav-item"> <a class="nav-link" href="#default">Default</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#range-connect">Range Connect</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#colored-sliders">Colored Sliders</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#styling">Styling</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
