@extends('layouts.vertical')

@section('title', 'Stacks')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Stacks</h2>
    <p class="text-body-tertiary lead mb-2">Shorthand helpers that build on top of our flexbox utilities to make component
        layout faster and easier than ever.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/helpers/stacks/" target="_blank">Stacks on Bootstrap<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Vertical</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use <code>.vstack</code> to create vertical
                                        layouts. Stacked items are full-width by default. Use <code>.gap-*</code> utilities
                                        to add space between items.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#vertical-code" role="button" aria-controls="vertical-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="vertical-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;vstack gap-3&quot;&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;First item&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;Second item&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;Third item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="vstack gap-3">
                                    <div class="border border-translucent bg-body-secondary px-3">First item</div>
                                    <div class="border border-translucent bg-body-secondary px-3">Second item</div>
                                    <div class="border border-translucent bg-body-secondary px-3">Third item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Horizontal</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use <code>.hstack</code> for horizontal
                                        layouts. Stacked items are vertically centered by default and only take up their
                                        necessary width. Use <code>.gap-*</code> utilities to add space between items.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#horizontal-code" role="button" aria-controls="horizontal-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="horizontal-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;hstack gap-3&quot;&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;First item&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;Second item&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;Third item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="hstack gap-3">
                                    <div class="border border-translucent bg-body-secondary px-3">First item</div>
                                    <div class="border border-translucent bg-body-secondary px-3">Second item</div>
                                    <div class="border border-translucent bg-body-secondary px-3">Third item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Margin utilities</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Using horizontal margin utilities like
                                        <code>.ms-auto</code> as spacers:</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#margin-utilities-code" role="button"
                                            aria-controls="margin-utilities-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="margin-utilities-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;hstack gap-3&quot;&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;First item&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3 ms-auto&quot;&gt;Second item&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;Third item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="hstack gap-3">
                                    <div class="border border-translucent bg-body-secondary px-3">First item</div>
                                    <div class="border border-translucent bg-body-secondary px-3 ms-auto">Second item</div>
                                    <div class="border border-translucent bg-body-secondary px-3">Third item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Vertical rules</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">allowing you to create vertical dividers in
                                        common layouts</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#vertical-rules-code" role="button"
                                            aria-controls="vertical-rules-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="vertical-rules-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;hstack gap-3&quot;&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;First item&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3 ms-auto&quot;&gt;Second item&lt;/div&gt;
  &lt;div class=&quot;vr bg-body-secondary&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;border border-translucent bg-body-secondary px-3&quot;&gt;Third item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="hstack gap-3">
                                    <div class="border border-translucent bg-body-secondary px-3">First item</div>
                                    <div class="border border-translucent bg-body-secondary px-3 ms-auto">Second item</div>
                                    <div class="vr bg-body-secondary"></div>
                                    <div class="border border-translucent bg-body-secondary px-3">Third item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Stack buttons</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use <code>.vstack</code> to stack buttons and
                                        other elements:</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#stack-buttons-code" role="button" aria-controls="stack-buttons-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="stack-buttons-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;vstack gap-2 col-md-5 mx-auto&quot;&gt;&lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Save changes&lt;/button&gt;&lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Cancel&lt;/button&gt;&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="vstack gap-2 col-md-5 mx-auto"><button class="btn btn-secondary"
                                        type="button">Save changes</button>
                                    <button class="btn btn-outline-secondary" type="button">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Inline form</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Create an inline form with
                                        <code>.hstack:</code></p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#inline-form-code" role="button" aria-controls="inline-form-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="inline-form-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;hstack gap-3&quot;&gt;&lt;input class=&quot;form-control me-auto&quot; type=&quot;text&quot; placeholder=&quot;Add your item here...&quot; aria-label=&quot;Add your item here...&quot; /&gt;&lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Submit&lt;/button&gt;
  &lt;div class=&quot;vr bg-body-secondary&quot;&gt;&lt;/div&gt;&lt;button class=&quot;btn btn-outline-danger&quot; type=&quot;button&quot;&gt;Reset&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="hstack gap-3"><input class="form-control me-auto" type="text"
                                        placeholder="Add your item here..." aria-label="Add your item here..."><button
                                        class="btn btn-secondary" type="button">Submit</button>
                                    <div class="vr bg-body-secondary"></div><button class="btn btn-outline-danger"
                                        type="button">Reset</button>
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
                        <li class="nav-item"> <a class="nav-link" href="#vertical">Vertical</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#horizontal">Horizontal</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#margin-utilities">Margin utilities</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#vertical-rules">Vertical rules</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#stack-buttons">Stack buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#inline-form">Inline form</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
