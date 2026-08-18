@extends('layouts.vertical')

@section('title', 'Colors')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Color</h2>
    <p class="text-body-tertiary lead mb-2">Convey meaning through color with a handful of color utility classes. Includes
        support for styling links with hover states, too.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/utilities/colors/" target="_blank">Color on Bootstrap<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Colors</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#colors-code" role="button" aria-controls="colors-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="colors-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;text-primary&quot;&gt;text-primary&lt;/p&gt;
&lt;p class=&quot;text-secondary&quot;&gt;text-secondary&lt;/p&gt;
&lt;p class=&quot;text-success&quot;&gt;text-success&lt;/p&gt;
&lt;p class=&quot;text-info&quot;&gt;text-info&lt;/p&gt;
&lt;p class=&quot;text-warning&quot;&gt;text-warning&lt;/p&gt;
&lt;p class=&quot;text-danger&quot;&gt;text-danger&lt;/p&gt;
&lt;p class=&quot;text-body&quot;&gt;text-body&lt;/p&gt;
&lt;p class=&quot;text-body-highlight&quot;&gt;text-body-highlight&lt;/p&gt;
&lt;p class=&quot;text-body-secondary&quot;&gt;text-body-secondary&lt;/p&gt;
&lt;p class=&quot;text-body-tertiary&quot;&gt;text-body-tertiary&lt;/p&gt;
&lt;p class=&quot;text-body-quaternary&quot;&gt;text-body-quaternary&lt;/p&gt;
&lt;p class=&quot;text-body-emphasis&quot;&gt;text-body-emphasis&lt;/p&gt;&lt;span class=&quot;pe-3 text-primary-subtle  bg-dark dark__bg-gray-400 &quot;&gt;text-primary-subtle&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-primary-light  &quot;&gt;text-primary-light&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-primary-lighter  &quot;&gt;text-primary-lighter&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-primary-dark  &quot;&gt;text-primary-dark&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-primary-darker  &quot;&gt;text-primary-darker&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-primary-emphasis  &quot;&gt;text-primary-emphasis&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-secondary-subtle  bg-dark dark__bg-gray-400 &quot;&gt;text-secondary-subtle&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-secondary-light  &quot;&gt;text-secondary-light&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-secondary-lighter  &quot;&gt;text-secondary-lighter&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-secondary-dark   bg-white&quot;&gt;text-secondary-dark&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-secondary-darker  &quot;&gt;text-secondary-darker&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-secondary-emphasis  &quot;&gt;text-secondary-emphasis&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-success-subtle  bg-dark dark__bg-gray-400 &quot;&gt;text-success-subtle&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-success-light  &quot;&gt;text-success-light&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-success-lighter  &quot;&gt;text-success-lighter&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-success-dark  &quot;&gt;text-success-dark&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-success-darker  &quot;&gt;text-success-darker&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-success-emphasis  &quot;&gt;text-success-emphasis&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-info-subtle  bg-dark dark__bg-gray-400 &quot;&gt;text-info-subtle&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-info-light  &quot;&gt;text-info-light&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-info-lighter  &quot;&gt;text-info-lighter&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-info-dark  &quot;&gt;text-info-dark&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-info-darker  &quot;&gt;text-info-darker&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-info-emphasis  &quot;&gt;text-info-emphasis&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-warning-subtle  bg-dark dark__bg-gray-400 &quot;&gt;text-warning-subtle&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-warning-light  &quot;&gt;text-warning-light&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-warning-lighter  &quot;&gt;text-warning-lighter&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-warning-dark  &quot;&gt;text-warning-dark&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-warning-darker  &quot;&gt;text-warning-darker&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-warning-emphasis  &quot;&gt;text-warning-emphasis&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-danger-subtle  bg-dark dark__bg-gray-400 &quot;&gt;text-danger-subtle&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-danger-light  &quot;&gt;text-danger-light&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-danger-lighter  &quot;&gt;text-danger-lighter&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-danger-dark  &quot;&gt;text-danger-dark&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-danger-darker  &quot;&gt;text-danger-darker&lt;/span&gt;&lt;br /&gt;&lt;span class=&quot;pe-3 text-danger-emphasis  &quot;&gt;text-danger-emphasis&lt;/span&gt;&lt;br /&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <p class="text-primary">text-primary</p>
                                <p class="text-secondary">text-secondary</p>
                                <p class="text-success">text-success</p>
                                <p class="text-info">text-info</p>
                                <p class="text-warning">text-warning</p>
                                <p class="text-danger">text-danger</p>
                                <p class="text-body">text-body</p>
                                <p class="text-body-highlight">text-body-highlight</p>
                                <p class="text-body-secondary">text-body-secondary</p>
                                <p class="text-body-tertiary">text-body-tertiary</p>
                                <p class="text-body-quaternary">text-body-quaternary</p>
                                <p class="text-body-emphasis">text-body-emphasis</p><span
                                    class="pe-3 text-primary-subtle  bg-dark dark__bg-gray-400 ">text-primary-subtle</span><br><span
                                    class="pe-3 text-primary-light  ">text-primary-light</span><br><span
                                    class="pe-3 text-primary-lighter  ">text-primary-lighter</span><br><span
                                    class="pe-3 text-primary-dark  ">text-primary-dark</span><br><span
                                    class="pe-3 text-primary-darker  ">text-primary-darker</span><br><span
                                    class="pe-3 text-primary-emphasis  ">text-primary-emphasis</span><br><span
                                    class="pe-3 text-secondary-subtle  bg-dark dark__bg-gray-400 ">text-secondary-subtle</span><br><span
                                    class="pe-3 text-secondary-light  ">text-secondary-light</span><br><span
                                    class="pe-3 text-secondary-lighter  ">text-secondary-lighter</span><br><span
                                    class="pe-3 text-secondary-dark   bg-white">text-secondary-dark</span><br><span
                                    class="pe-3 text-secondary-darker  ">text-secondary-darker</span><br><span
                                    class="pe-3 text-secondary-emphasis  ">text-secondary-emphasis</span><br><span
                                    class="pe-3 text-success-subtle  bg-dark dark__bg-gray-400 ">text-success-subtle</span><br><span
                                    class="pe-3 text-success-light  ">text-success-light</span><br><span
                                    class="pe-3 text-success-lighter  ">text-success-lighter</span><br><span
                                    class="pe-3 text-success-dark  ">text-success-dark</span><br><span
                                    class="pe-3 text-success-darker  ">text-success-darker</span><br><span
                                    class="pe-3 text-success-emphasis  ">text-success-emphasis</span><br><span
                                    class="pe-3 text-info-subtle  bg-dark dark__bg-gray-400 ">text-info-subtle</span><br><span
                                    class="pe-3 text-info-light  ">text-info-light</span><br><span
                                    class="pe-3 text-info-lighter  ">text-info-lighter</span><br><span
                                    class="pe-3 text-info-dark  ">text-info-dark</span><br><span
                                    class="pe-3 text-info-darker  ">text-info-darker</span><br><span
                                    class="pe-3 text-info-emphasis  ">text-info-emphasis</span><br><span
                                    class="pe-3 text-warning-subtle  bg-dark dark__bg-gray-400 ">text-warning-subtle</span><br><span
                                    class="pe-3 text-warning-light  ">text-warning-light</span><br><span
                                    class="pe-3 text-warning-lighter  ">text-warning-lighter</span><br><span
                                    class="pe-3 text-warning-dark  ">text-warning-dark</span><br><span
                                    class="pe-3 text-warning-darker  ">text-warning-darker</span><br><span
                                    class="pe-3 text-warning-emphasis  ">text-warning-emphasis</span><br><span
                                    class="pe-3 text-danger-subtle  bg-dark dark__bg-gray-400 ">text-danger-subtle</span><br><span
                                    class="pe-3 text-danger-light  ">text-danger-light</span><br><span
                                    class="pe-3 text-danger-lighter  ">text-danger-lighter</span><br><span
                                    class="pe-3 text-danger-dark  ">text-danger-dark</span><br><span
                                    class="pe-3 text-danger-darker  ">text-danger-darker</span><br><span
                                    class="pe-3 text-danger-emphasis  ">text-danger-emphasis</span><br>
                            </div>
                        </div>
                    </div>
                    <h3 data-anchor="data-anchor">Opacity</h3>
                    <p class="text-body-tertiary">Color opacity allows for real-time color changes without compilation and
                        dynamic alpha transparency changes.</p>
                    <div class="card border overflow-hidden my-5">
                        <div class="card-header border-bottom">
                            <h3 class="mb-1" data-anchor="data-anchor">How it works </h3>
                            <p class="text-body-tertiary mb-0">Consider our default <code>.text-primary </code>utility.</p>
                        </div>
                        <div class="card-body p-0">
                            <pre><code class="language-css">.text-primary {
--phoenix-text-opacity: 1;
color: rgba(var(--phoenix-primary-rgb), var(--phoenix-text-opacity)) !important;
}</code></pre>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html"> &lt;div class=&quot;text-primary mb-1&quot;&gt;This is default primary text&lt;/div&gt;
 &lt;div class=&quot;text-primary mb-1&quot; style=&quot;--bs-text-opacity: .5;&quot;&gt;This is 50% opacity primary text using inline css&lt;/div&gt;
 &lt;div class=&quot;text-primary text-opacity-75 mb-1&quot;&gt;This is 75% opacity primary text using utility class&lt;/div&gt;
 &lt;div class=&quot;text-primary text-opacity-50 mb-1&quot;&gt;This is 50% opacity primary text using utility class&lt;/div&gt;
 &lt;div class=&quot;text-primary text-opacity-25 mb-1&quot;&gt;This is 25% opacity primary text using utility class&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="text-primary mb-1">This is default primary text</div>
                                <div class="text-primary mb-1" style="--bs-text-opacity: .5;">This is 50% opacity primary
                                    text using inline css</div>
                                <div class="text-primary text-opacity-75 mb-1">This is 75% opacity primary text using
                                    utility class</div>
                                <div class="text-primary text-opacity-50 mb-1">This is 50% opacity primary text using
                                    utility class</div>
                                <div class="text-primary text-opacity-25 mb-1">This is 25% opacity primary text using
                                    utility class</div>
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
                        <li class="nav-item"> <a class="nav-link" href="#colors">Colors</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#opacity">Opacity</a>
                            <ul class="nav flex-column">
                                <li class="nav-item"> <a class="nav-link" href="#how-it-works">How it works</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
