@extends('layouts.vertical')

@section('title', 'Position')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Position</h2>
    <p class="text-body-tertiary lead mb-2">Use these shorthand utilities for quickly configuring the position of an element.
    </p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/position/" target="_blank">Position on
        Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card border my-5">
                        <div class="card-header border-bottom">
                            <h3 class="mb-2" data-anchor="data-anchor">Position values </h3>
                            <p class="text-body-tertiary">Quick positioning classes are available, though they are not
                                responsive.</p>
                        </div>
                        <div class="card-body">
                            <pre class="rounded-3"><code class="lang-css">.position-static
.position-relative
.position-absolute
.position-sticky
.fixed-top
.fixed-bottom</code></pre>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Arrange Elements</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Arrange elements easily with the edge
                                        positioning utilities. The format is <code>{property}-{position}. </code> has
                                        special utility class <code>.all-0 </code>to give full height/width to child element
                                        of parent element.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#arrange-elements-code" role="button"
                                            aria-controls="arrange-elements-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="arrange-elements-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;position-relative bg-body-secondary mb-4&quot; style=&quot;height: 200px;&quot;&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute top-0 start-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute top-0 end-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute top-50 start-50&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute bottom-50 end-50&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute bottom-0 start-0&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute bottom-0 end-0&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;position-relative&quot; style=&quot;height: 100px; width: 100px&quot;&gt;
  &lt;div class=&quot;bg-body-quaternary rounded-1 text-white d-flex flex-center position-absolute all-0&quot;&gt;.all-0&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="position-relative bg-body-secondary mb-4" style="height: 200px;">
                                    <div class="p-3 bg-body-quaternary rounded-1 position-absolute top-0 start-0"></div>
                                    <div class="p-3 bg-body-quaternary rounded-1 position-absolute top-0 end-0"></div>
                                    <div class="p-3 bg-body-quaternary rounded-1 position-absolute top-50 start-50"></div>
                                    <div class="p-3 bg-body-quaternary rounded-1 position-absolute bottom-50 end-50"></div>
                                    <div class="p-3 bg-body-quaternary rounded-1 position-absolute bottom-0 start-0"></div>
                                    <div class="p-3 bg-body-quaternary rounded-1 position-absolute bottom-0 end-0"></div>
                                </div>
                                <div class="position-relative" style="height: 100px; width: 100px">
                                    <div
                                        class="bg-body-quaternary rounded-1 text-white d-flex flex-center position-absolute all-0">
                                        .all-0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Center Elements</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">In addition, you can also center the elements
                                        with the transform utility classes <code>.translate-middle</code>,
                                        <code>.translate-middle-x </code>, <code>.translate-middle-y</code>. Responsive
                                        variations also exist for <code>transform-middle</code>, For example:
                                        <code>transform-{xxl|xl|lg|md|sm}-middle-{x|y}</code>.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#center-elements-code" role="button" aria-controls="center-elements-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="center-elements-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;position-relative bg-body-secondary&quot; style=&quot;height: 200px;&quot;&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute top-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute top-50 start-0 translate-middle-y&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute top-50 start-50 translate-middle&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute top-50 end-0 translate-middle-y&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;p-3 bg-body-quaternary rounded-1 position-absolute bottom-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="position-relative bg-body-secondary" style="height: 200px;">
                                    <div
                                        class="p-3 bg-body-quaternary rounded-1 position-absolute top-0 start-50 translate-middle-x">
                                    </div>
                                    <div
                                        class="p-3 bg-body-quaternary rounded-1 position-absolute top-50 start-0 translate-middle-y">
                                    </div>
                                    <div
                                        class="p-3 bg-body-quaternary rounded-1 position-absolute top-50 start-50 translate-middle">
                                    </div>
                                    <div
                                        class="p-3 bg-body-quaternary rounded-1 position-absolute top-50 end-0 translate-middle-y">
                                    </div>
                                    <div
                                        class="p-3 bg-body-quaternary rounded-1 position-absolute bottom-0 start-50 translate-middle-x">
                                    </div>
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
                        <li class="nav-item"> <a class="nav-link" href="#position-values">Position values</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#arrange-elements">Arrange elements</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#center-elements">Center elements</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
