@extends('layouts.vertical')

@section('title', 'Card')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Cards</h2>
    <p class="text-body-tertiary lead mb-2">Bootstrap’s cards provide a flexible and extensible content container with
        multiple variants and options.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/components/card/" target="_blank">Cards on Bootstrap<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="row mb-9">
                    <div class="col-lg-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Basic Example</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                            <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#basic-example-code" role="button"
                                                aria-controls="basic-example-code" aria-expanded="false"> <span
                                                    class="me-2" data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                    data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="basic-example-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;card&quot; style=&quot;max-width:20rem;&quot;&gt;
  &lt;img class=&quot;card-img-top&quot; src=&quot;../../assets/img/generic/66.jpg&quot; alt=&quot;...&quot; /&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Title goes here&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Here is the example of the Multiple Container Sortable feature of the &lt;/p&gt;
    &lt;button class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="card" style="max-width:20rem;">
                                        <img class="card-img-top" src="{{ asset('assets/img/generic/66.jpg') }}"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Title goes here</h5>
                                            <p class="card-text">Here is the example of the Multiple Container Sortable
                                                feature of the </p>
                                            <button class="btn btn-primary">Go somewhere</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Card with list</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                            <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#card-with-list-code" role="button"
                                                aria-controls="card-with-list-code" aria-expanded="false"> <span
                                                    class="me-2" data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                    data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="card-with-list-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;card p-3&quot; style=&quot;max-width:20rem;&quot;&gt;
  &lt;a class=&quot;dropdown-item fw-bold text-warning&quot; href=&quot;#!&quot;&gt;
    &lt;span class=&quot;fas fa-crown me-1&quot;&gt;&lt;/span&gt;
    &lt;span&gt;Go Pro&lt;/span&gt;
  &lt;/a&gt;
  &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Set status&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Profile &amp;amp; account&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Feedback&lt;/a&gt;
  &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Settings&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Logout&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="card p-3" style="max-width:20rem;">
                                        <a class="dropdown-item fw-bold text-warning" href="#!">
                                            <span class="fas fa-crown me-1"></span>
                                            <span>Go Pro</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Set status</a>
                                        <a class="dropdown-item" href="#!">Profile &amp; account</a>
                                        <a class="dropdown-item" href="#!">Feedback</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Settings</a>
                                        <a class="dropdown-item" href="#!">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Image overlays</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#image-overlays-code" role="button" aria-controls="image-overlays-code"
                                        aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                        code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                            class="me-2" data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="image-overlays-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;card text-white overflow-hidden&quot; style=&quot;max-width:30rem;&quot;&gt;
  &lt;img class=&quot;card-img-top&quot; src=&quot;../../assets/img/generic/46.png&quot; alt=&quot;...&quot; /&gt;
  &lt;div class=&quot;card-img-overlay d-flex align-items-end&quot;&gt;
    &lt;div&gt;
      &lt;h4 class=&quot;card-title text-white&quot;&gt;Card title&lt;/h4&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <div class="card text-white overflow-hidden" style="max-width:30rem;">
                                <img class="card-img-top" src="{{ asset('assets/img/generic/46.png') }}" alt="...">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <div>
                                        <h4 class="card-title text-white">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Horizontal</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
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
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;card&quot; style=&quot;max-width:32rem;&quot;&gt;
  &lt;div class=&quot;row g-0&quot;&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
      &lt;img class=&quot;img-fluid h-100 rounded-start&quot; src=&quot;../../assets/img/generic/36.png&quot; alt=&quot;...&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-8&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Card Title&lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
        &lt;p class=&quot;card-text&quot;&gt; &lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <div class="card" style="max-width:32rem;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img class="img-fluid h-100 rounded-start"
                                            src="{{ asset('assets/img/generic/36.png') }}" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Card Title</h4>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                            <p class="card-text"> <small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Card Groups</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#card-groups-code" role="button" aria-controls="card-groups-code"
                                        aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                        code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                            class="me-2" data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="card-groups-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;card-group&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img class=&quot;card-img-top&quot; src=&quot;../../assets/img/generic/54.png&quot; alt=&quot;...&quot; /&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;First card title&lt;/h4&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;p class=&quot;card-text&quot;&gt;
        &lt;small class=&quot;text-muted&quot;&gt;Last updated 45 mins ago&lt;/small&gt;
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img class=&quot;card-img-top&quot; src=&quot;../../assets/img/generic/44.png&quot; alt=&quot;...&quot; /&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;First card title&lt;/h4&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;p class=&quot;card-text&quot;&gt;
        &lt;small class=&quot;text-muted&quot;&gt;Last updated 45 mins ago&lt;/small&gt;
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img class=&quot;card-img-top&quot; src=&quot;../../assets/img/generic/46.png&quot; alt=&quot;...&quot; /&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;First card title&lt;/h4&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;p class=&quot;card-text&quot;&gt;
        &lt;small class=&quot;text-muted&quot;&gt;Last updated 45 mins ago&lt;/small&gt;
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img class=&quot;card-img-top&quot; src=&quot;../../assets/img/generic/45.png&quot; alt=&quot;...&quot; /&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;First card title&lt;/h4&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;p class=&quot;card-text&quot;&gt;
        &lt;small class=&quot;text-muted&quot;&gt;Last updated 45 mins ago&lt;/small&gt;
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <div class="card-group">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/img/generic/54.png') }}"
                                        alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">First card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 45 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/img/generic/44.png') }}"
                                        alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">First card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 45 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/img/generic/46.png') }}"
                                        alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">First card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 45 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/img/generic/45.png') }}"
                                        alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">First card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in a wider card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 45 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Card Background Styles</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#card-background-styles-code" role="button"
                                        aria-controls="card-background-styles-code" aria-expanded="false"> <span
                                            class="me-2" data-feather="code"></span>View code</a><a
                                        class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                            data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="card-background-styles-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-4&quot;&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-white bg-primary&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-white&quot;&gt;Primary Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-white bg-secondary&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-white&quot;&gt;Secondary Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-white bg-success&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-white&quot;&gt;Success Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-white bg-danger&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-white&quot;&gt;Danger Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-white bg-warning&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-white&quot;&gt;Warning Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-white bg-info&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-white&quot;&gt;Info Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-dark bg-light&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-dark&quot;&gt;Light Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card text-white bg-dark&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title text-white&quot;&gt;Dark Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <div class="row g-4">
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-white bg-primary">
                                        <div class="card-body">
                                            <h4 class="card-title text-white">Primary Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-white bg-secondary">
                                        <div class="card-body">
                                            <h4 class="card-title text-white">Secondary Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-white bg-success">
                                        <div class="card-body">
                                            <h4 class="card-title text-white">Success Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-white bg-danger">
                                        <div class="card-body">
                                            <h4 class="card-title text-white">Danger Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-white bg-warning">
                                        <div class="card-body">
                                            <h4 class="card-title text-white">Warning Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-white bg-info">
                                        <div class="card-body">
                                            <h4 class="card-title text-white">Info Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-dark bg-light">
                                        <div class="card-body">
                                            <h4 class="card-title text-dark">Light Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card text-white bg-dark">
                                        <div class="card-body">
                                            <h4 class="card-title text-white">Dark Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Card Border Styles</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#card-border-styles-code" role="button"
                                        aria-controls="card-border-styles-code" aria-expanded="false"> <span
                                            class="me-2" data-feather="code"></span>View code</a><a
                                        class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                            data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="card-border-styles-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-4&quot;&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-primary&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Primary Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-secondary&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Secondary Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-success&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Success Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-danger&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Danger Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-warning&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Warning Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-info&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Info Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-light&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Light Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-md-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;card border border-dark&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Dark Border Card &lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <div class="row g-4">
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-primary">
                                        <div class="card-body">
                                            <h4 class="card-title">Primary Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-secondary">
                                        <div class="card-body">
                                            <h4 class="card-title">Secondary Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-success">
                                        <div class="card-body">
                                            <h4 class="card-title">Success Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-danger">
                                        <div class="card-body">
                                            <h4 class="card-title">Danger Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-warning">
                                        <div class="card-body">
                                            <h4 class="card-title">Warning Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-info">
                                        <div class="card-body">
                                            <h4 class="card-title">Info Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-light">
                                        <div class="card-body">
                                            <h4 class="card-title">Light Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card border border-dark">
                                        <div class="card-body">
                                            <h4 class="card-title">Dark Border Card </h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
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
                        <li class="nav-item"> <a class="nav-link" href="#basic-example">Basic Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#card-with-list">Card with list</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#image-overlays">Image overlays</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#horizontal">Horizontal</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#card-groups">Card Groups</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#card-background-styles">Card Background
                                Styles</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#card-border-styles">Card Border Styles</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
