@extends('layouts.vertical')

@section('title', 'Visibility')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Sizing</h2>
    <p class="text-body-tertiary lead mb-2">Control the visibility, without modifying the display, of elements with
        visibility utilities.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/visibility/"
        target="_blank">Visibility on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                                    <div class="mt-2 text-body-secondary">
                                        <p>Set the <code>visibility </code>of elements with our visibility utilities. These
                                            utility classes do not modify the display value at all and do not affect layout
                                            – .invisible elements still take up space in the page. Content will be hidden
                                            both visually and for assistive technology/screen reader users</p>
                                        <p class="mb-0">Apply <code>.visible </code>or <code>.invisible </code>as needed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre class=&quot;rounded-3&quot;&gt;&lt;code class=&quot;lang-css&quot;&gt;.visible
.invisible&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <pre class="rounded-3"><code class="lang-css">.visible
.invisible</code></pre>
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
