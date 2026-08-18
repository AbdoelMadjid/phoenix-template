@extends('layouts.vertical')

@section('title', 'Borders')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Borders</h2>
    <p class="text-body-tertiary lead mb-2">Use border utilities to quickly style the border and border-radius of an element.
        Great for images, buttons, or any other element.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/utilities/borders/" target="_blank">Borders on Bootstrap<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Border</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="border-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;The classes are named using the format &lt;code&gt;border-{side}&lt;/code&gt; for &lt;code&gt;xs&lt;/code&gt; and &lt;code&gt;border-{side}-{breakpoint}&lt;/code&gt; for &lt;code&gt;sm&lt;/code&gt;, &lt;code&gt;md&lt;/code&gt;, &lt;code&gt;lg&lt;/code&gt;, &lt;code&gt;xl&lt;/code&gt;, and &lt;code&gt;xxl&lt;/code&gt;.&lt;/p&gt;
&lt;p&gt;Where&lt;em&gt; side&lt;/em&gt; is one of:&lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt;&lt;code&gt;top&lt;/code&gt; - for classes that set style for &lt;code&gt;border-top&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;bottom&lt;/code&gt; - for classes that set style for &lt;code&gt;border-bottom&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;left&lt;/code&gt; - for classes that set style for &lt;code&gt;border-start&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;right&lt;/code&gt; - for classes that set style for &lt;code&gt;border-right&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;x&lt;/code&gt; - for classes that set both&lt;code&gt;*-left&lt;/code&gt; and &lt;code&gt;*-right&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;y&lt;/code&gt; - for classes that set both&lt;code&gt;*-top&lt;/code&gt; and &lt;code&gt;*-bottom&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;blank - for classes that set the&lt;code&gt;border&lt;/code&gt; style on all 4 side of the element.&lt;/li&gt;
&lt;/ul&gt;
&lt;p class=&quot;mb-0&quot;&gt;Use border utilities to quickly style the&lt;code&gt;border &lt;/code&gt; of an element. Great for images, buttons, or any other element.&lt;/p&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <p>The classes are named using the format <code>border-{side}</code> for <code>xs</code> and
                                    <code>border-{side}-{breakpoint}</code> for <code>sm</code>, <code>md</code>,
                                    <code>lg</code>, <code>xl</code>, and <code>xxl</code>.</p>
                                <p>Where<em> side</em> is one of:</p>
                                <ul>
                                    <li><code>top</code> - for classes that set style for <code>border-top</code></li>
                                    <li><code>bottom</code> - for classes that set style for <code>border-bottom</code></li>
                                    <li><code>left</code> - for classes that set style for <code>border-start</code></li>
                                    <li><code>right</code> - for classes that set style for <code>border-right</code></li>
                                    <li><code>x</code> - for classes that set both<code>*-left</code> and
                                        <code>*-right</code></li>
                                    <li><code>y</code> - for classes that set both<code>*-top</code> and
                                        <code>*-bottom</code></li>
                                    <li>blank - for classes that set the<code>border</code> style on all 4 side of the
                                        element.</li>
                                </ul>
                                <p class="mb-0">Use border utilities to quickly style the<code>border </code> of an
                                    element. Great for images, buttons, or any other element.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5 border-component" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Additive</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#additive-code" role="button" aria-controls="additive-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="additive-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;border&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-top&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-end&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-bottom&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-start&quot;&gt;&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span class="border"></span>
                                <span class="border-top"></span>
                                <span class="border-end"></span>
                                <span class="border-bottom"></span>
                                <span class="border-start"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5 border-component" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Subtractive</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#subtractive-code" role="button" aria-controls="subtractive-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="subtractive-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;border border-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-top-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-end-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-bottom-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-start-0&quot;&gt;&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span class="border border-0"></span>
                                <span class="border border-top-0"></span>
                                <span class="border border-end-0"></span>
                                <span class="border border-bottom-0"></span>
                                <span class="border border-start-0"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5 border-component" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Border Color</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Change the border color using utilities built
                                        on our theme colors. The most used border colors utility class of this themes are
                                        <code>.border</code> and <code>.border-translucent</code>.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#border-color-code" role="button" aria-controls="border-color-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="border-color-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;border border-info&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-success&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-warning&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-danger&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-cake&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-facebook&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-twitter&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-google-plus&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-github&quot;&gt;&lt;/span&gt;
&lt;div class=&quot;w-100&quot;&gt;&lt;/div&gt;
&lt;span class=&quot;border border-black&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-dark&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-1100&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-1000&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-900&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-800&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-700&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-600&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-500&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-400&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-translucent&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-gray-100&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-light&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-white&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-top border-top-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-end border-end-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-bottom border-bottom-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-start border-start-2&quot;&gt;&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span class="border border-info"></span>
                                <span class="border border-success"></span>
                                <span class="border border-warning"></span>
                                <span class="border border-danger"></span>
                                <span class="border border-cake"></span>
                                <span class="border border-facebook"></span>
                                <span class="border border-twitter"></span>
                                <span class="border border-google-plus"></span>
                                <span class="border border-github"></span>
                                <div class="w-100"></div>
                                <span class="border border-black"></span>
                                <span class="border border-dark"></span>
                                <span class="border border-gray-1100"></span>
                                <span class="border border-gray-1000"></span>
                                <span class="border border-gray-900"></span>
                                <span class="border border-gray-800"></span>
                                <span class="border border-gray-700"></span>
                                <span class="border border-gray-600"></span>
                                <span class="border border-gray-500"></span>
                                <span class="border border-gray-400"></span>
                                <span class="border"></span>
                                <span class="border border-translucent"></span>
                                <span class="border border-gray-100"></span>
                                <span class="border border-light"></span>
                                <span class="border border-white"></span>
                                <span class="border border-2"></span>
                                <span class="border-top border-top-2"></span>
                                <span class="border-end border-end-2"></span>
                                <span class="border-bottom border-bottom-2"></span>
                                <span class="border-start border-start-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5 border-component" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Border Width</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">You can control border width using helper
                                        classes <code>border-{1|2|3|4|5}</code>. In addition, you can also use <code>
                                            border-top-2</code>, <code> border-end-2</code>, <code> border-bottom-2</code>,
                                        <code> border-start-2</code></p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#border-width-code" role="button" aria-controls="border-width-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="border-width-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;border border-1&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-3&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-4&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-5&quot;&gt;&lt;/span&gt;
&lt;hr /&gt;
&lt;span class=&quot;border border-top-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-end-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-bottom-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-start-2&quot;&gt;&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <span class="border border-1"></span>
                                <span class="border border-2"></span>
                                <span class="border border-3"></span>
                                <span class="border border-4"></span>
                                <span class="border border-5"></span>
                                <hr>
                                <span class="border border-top-2"></span>
                                <span class="border border-end-2"></span>
                                <span class="border border-bottom-2"></span>
                                <span class="border border-start-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5 border-component" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Border Radius</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Add classes to an element to easily round its
                                        corners.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#border-radius-code" role="button" aria-controls="border-radius-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="border-radius-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;rounded-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-1&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-3&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-4&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-5&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-circle&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-pill&quot; style=&quot;width:150px; height:75px;&quot;&gt;&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span class="rounded-0"></span>
                                <span class="rounded-1"></span>
                                <span class="rounded-2"></span>
                                <span class="rounded-3"></span>
                                <span class="rounded-4"></span>
                                <span class="rounded-5"></span>
                                <span class="rounded-circle"></span>
                                <span class="rounded-pill" style="width:150px; height:75px;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5 border-component" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Border Sizes</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use the scaling classes for larger or smaller
                                        rounded corners. Sizes range from <code>0</code> to <code>3</code>, and can be
                                        configured by modifying the utilities API.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#border-sizes-code" role="button" aria-controls="border-sizes-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="border-sizes-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;rounded-top&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-top-lg&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-end&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-end-lg&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-bottom&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-bottom-lg&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-start&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;rounded-start-lg&quot;&gt;&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span class="rounded-top"></span>
                                <span class="rounded-top-lg"></span>
                                <span class="rounded-end"></span>
                                <span class="rounded-end-lg"></span>
                                <span class="rounded-bottom"></span>
                                <span class="rounded-bottom-lg"></span>
                                <span class="rounded-start"></span>
                                <span class="rounded-start-lg"></span>
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
                        <li class="nav-item"> <a class="nav-link" href="#border">Border</a>
                            <ul class="nav flex-column">
                                <li class="nav-item"> <a class="nav-link" href="#additive">Additive</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#subtractive">Subtractive</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#border-color">Border color</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#border-width">Border width</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#border-radius">Border radius</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#border-sizes">Border sizes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
