@extends('layouts.vertical')

@section('title', 'Select')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Select</h2>
    <p class="text-body-tertiary lead mb-2">Customize the native &lt;select&gt; with custom CSS that changes the element’s
        initial appearance.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/forms/select/"
        target="_blank">Select on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;select class=&quot;form-select&quot; aria-label=&quot;Default select example&quot;&gt;
  &lt;option selected=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><select class="form-select" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select></div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Sizing</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#sizing-code" role="button" aria-controls="sizing-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="sizing-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;select class=&quot;form-select form-select-lg mb-3&quot; aria-label=&quot;.form-select-lg example&quot;&gt;
  &lt;option selected=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
&lt;select class=&quot;form-select form-select-sm&quot; aria-label=&quot;.form-select-sm example&quot;&gt;
  &lt;option selected=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><select class="form-select form-select-lg mb-3"
                                    aria-label=".form-select-lg example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
                        <li class="nav-item"> <a class="nav-link" href="#sizing">Sizing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
