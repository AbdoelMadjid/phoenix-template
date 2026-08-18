@extends('layouts.vertical')

@section('title', 'Dropdown')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Dropdowns</h2>
    <p class="text-body-tertiary lead mb-2">Toggle contextual overlays for displaying lists of links and more with the
        Bootstrap dropdown plugin.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/components/dropdowns/" target="_blank">Dropdowns on Bootstrap<span
            class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <h2 class="mt-5" data-anchor="data-anchor">Overview</h2>
                    <p> Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made
                        interactive with the included Bootstrap dropdown JavaScript plugin. They’re toggled by clicking, not
                        by hovering; this is <a href="https://markdotto.com/2012/02/27/bootstrap-explained-dropdowns/">an
                            intentional design decision</a>.</p>
                    <p>Dropdowns are built on a third party library, <a href="https://popper.js.org/">Popper</a>, which
                        provides dynamic positioning and viewport detection. Be sure to include <a
                            href="{{ asset('assets/external/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js') }}">popper.min.js</a>
                        before Bootstrap’s JavaScript or use <code>bootstrap.bundle.min.js</code> /
                        <code>bootstrap.bundle.js</code> which contains Popper. Popper isn’t used to position dropdowns in
                        navbars though as dynamic positioning isn’t required.</p>
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;dropdown d-inline-block&quot;&gt;
  &lt;button class=&quot;btn btn-phoenix-secondary dropdown-toggle&quot; id=&quot;dropdownMenuButton&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown button&lt;/button&gt;&lt;span class=&quot;caret&quot;&gt; &lt;/span&gt;
  &lt;div class=&quot;dropdown-menu dropdown-menu-end py-0&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="dropdown d-inline-block">
                                    <button class="btn btn-phoenix-secondary dropdown-toggle" id="dropdownMenuButton"
                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown button</button><span class="caret"> </span>
                                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Dropdown Link</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#dropdown-link-code" role="button" aria-controls="dropdown-link-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="dropdown-link-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;dropdown&quot;&gt;
  &lt;a class=&quot;btn btn-link dropdown-toggle&quot; id=&quot;dropdownMenuLink&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown link&lt;/a&gt;
  &lt;div class=&quot;dropdown-menu dropdown-menu-end py-0&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="dropdown">
                                    <a class="btn btn-link dropdown-toggle" id="dropdownMenuLink" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown link</a>
                                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Button Variant</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#button-variant-code" role="button"
                                            aria-controls="button-variant-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="button-variant-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-group me-1&quot;&gt;
  &lt;button class=&quot;btn dropdown-toggle mb-1 btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Primary&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-1&quot;&gt;
  &lt;button class=&quot;btn dropdown-toggle mb-1 btn-secondary&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Secondary&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-1&quot;&gt;
  &lt;button class=&quot;btn dropdown-toggle mb-1 btn-success&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Success&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-1&quot;&gt;
  &lt;button class=&quot;btn dropdown-toggle mb-1 btn-info&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Info&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-1&quot;&gt;
  &lt;button class=&quot;btn dropdown-toggle mb-1 btn-warning&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Warning&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-1&quot;&gt;
  &lt;button class=&quot;btn dropdown-toggle mb-1 btn-danger&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Danger&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="btn-group me-1">
                                    <button class="btn dropdown-toggle mb-1 btn-primary" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Primary</button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group me-1">
                                    <button class="btn dropdown-toggle mb-1 btn-secondary" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Secondary</button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group me-1">
                                    <button class="btn dropdown-toggle mb-1 btn-success" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Success</button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group me-1">
                                    <button class="btn dropdown-toggle mb-1 btn-info" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Info</button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group me-1">
                                    <button class="btn dropdown-toggle mb-1 btn-warning" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Warning</button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group me-1">
                                    <button class="btn dropdown-toggle mb-1 btn-danger" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Danger</button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Button Split</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#button-split-code" role="button" aria-controls="button-split-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="button-split-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Primary&lt;/button&gt;
  &lt;button class=&quot;btn dropdown-toggle dropdown-toggle-split btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Secondary&lt;/button&gt;
  &lt;button class=&quot;btn dropdown-toggle dropdown-toggle-split btn-secondary&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-success&quot; type=&quot;button&quot;&gt;Success&lt;/button&gt;
  &lt;button class=&quot;btn dropdown-toggle dropdown-toggle-split btn-success&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-info&quot; type=&quot;button&quot;&gt;Info&lt;/button&gt;
  &lt;button class=&quot;btn dropdown-toggle dropdown-toggle-split btn-info&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-warning&quot; type=&quot;button&quot;&gt;Warning&lt;/button&gt;
  &lt;button class=&quot;btn dropdown-toggle dropdown-toggle-split btn-warning&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-danger&quot; type=&quot;button&quot;&gt;Danger&lt;/button&gt;
  &lt;button class=&quot;btn dropdown-toggle dropdown-toggle-split btn-danger&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;

    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-primary" type="button">Primary</button>
                                    <button class="btn dropdown-toggle dropdown-toggle-split btn-primary" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-secondary" type="button">Secondary</button>
                                    <button class="btn dropdown-toggle dropdown-toggle-split btn-secondary" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-success" type="button">Success</button>
                                    <button class="btn dropdown-toggle dropdown-toggle-split btn-success" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-info" type="button">Info</button>
                                    <button class="btn dropdown-toggle dropdown-toggle-split btn-info" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-warning" type="button">Warning</button>
                                    <button class="btn dropdown-toggle dropdown-toggle-split btn-warning" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-danger" type="button">Danger</button>
                                    <button class="btn dropdown-toggle dropdown-toggle-split btn-danger" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-group mb-1 mb-md-0 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-primary btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Large button&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 mb-md-0 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-primary btn-md dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Regular button&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 mb-md-0 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-primary btn-sm dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Small button&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;hr /&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-primary btn-lg&quot; type=&quot;button&quot;&gt;Large split button&lt;/button&gt;
  &lt;button class=&quot;btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-primary btn-md&quot; type=&quot;button&quot;&gt;Regular split button&lt;/button&gt;
  &lt;button class=&quot;btn btn-md btn-primary dropdown-toggle dropdown-toggle-split&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-1 me-1&quot;&gt;
  &lt;button class=&quot;btn btn-primary btn-sm&quot; type=&quot;button&quot;&gt;Small split button&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="btn-group mb-1 mb-md-0 me-1">
                                    <button class="btn btn-primary btn-lg dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Large
                                        button</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 mb-md-0 me-1">
                                    <button class="btn btn-primary btn-md dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Regular
                                        button</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 mb-md-0 me-1">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Small
                                        button</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-primary btn-lg" type="button">Large split button</button>
                                    <button class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split"
                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-primary btn-md" type="button">Regular split button</button>
                                    <button class="btn btn-md btn-primary dropdown-toggle dropdown-toggle-split"
                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mb-1 me-1">
                                    <button class="btn btn-primary btn-sm" type="button">Small split button</button>
                                    <button class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split"
                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Directions</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#directions-code" role="button" aria-controls="directions-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="directions-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Default dropup button--&gt;
&lt;div class=&quot;d-flex flex-column flex-sm-row justify-content-between&quot;&gt;
  &lt;div class=&quot;btn-group dropend mt-2&quot;&gt;
    &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropend&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group dropup mt-2&quot;&gt;
    &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropup&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group dropstart mt-2&quot;&gt;
    &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropstart&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;hr /&gt;
&lt;div class=&quot;d-flex flex-column flex-md-row justify-content-between&quot;&gt;
  &lt;div class=&quot;btn-group dropend mt-2&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Split dropend&lt;/button&gt;
    &lt;button class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group dropup mt-2&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Split dropup&lt;/button&gt;
    &lt;button class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group mt-2&quot;&gt;
    &lt;div class=&quot;btn-group dropstart&quot; role=&quot;group&quot;&gt;
      &lt;button class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;Toggle Dropstart&lt;/span&gt;&lt;/button&gt;
      &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Split dropstart&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <!-- Default dropup button-->
                                <div class="d-flex flex-column flex-sm-row justify-content-between">
                                    <div class="btn-group dropend mt-2">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropend</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup mt-2">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropup</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropstart mt-2">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropstart</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex flex-column flex-md-row justify-content-between">
                                    <div class="btn-group dropend mt-2"><button class="btn btn-primary"
                                            type="button">Split dropend</button>
                                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup mt-2"><button class="btn btn-primary"
                                            type="button">Split dropup</button>
                                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mt-2">
                                        <div class="btn-group dropstart" role="group">
                                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><span class="sr-only">Toggle
                                                    Dropstart</span></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="button">Split dropstart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Menu Items</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#menu-items-code" role="button" aria-controls="menu-items-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="menu-items-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; id=&quot;dropdownMenu2&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenu2&quot;&gt;
    &lt;button class=&quot;dropdown-item&quot; type=&quot;button&quot;&gt;Action&lt;/button&gt;
    &lt;button class=&quot;dropdown-item&quot; type=&quot;button&quot;&gt;Another action&lt;/button&gt;
    &lt;button class=&quot;dropdown-item&quot; type=&quot;button&quot;&gt;Something else here&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;p class=&quot;mt-3&quot;&gt;You can also create non-interactive dropdown items with &lt;code&gt;.dropdown-item-text&lt;/code&gt;. Feel free to style further with custom CSS or text utilities.&lt;/p&gt;
&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; id=&quot;dropdownMenu3&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown with text&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenu3&quot;&gt;
  &lt;span class=&quot;dropdown-item-text&quot;&gt;Dropdown item text&lt;/span&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" id="dropdownMenu2" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <p class="mt-3">You can also create non-interactive dropdown items with
                                    <code>.dropdown-item-text</code>. Feel free to style further with custom CSS or text
                                    utilities.</p>
                                <button class="btn btn-primary dropdown-toggle" id="dropdownMenu3" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown with
                                    text</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <span class="dropdown-item-text">Dropdown item text</span>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Active Link</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#active-link-code" role="button" aria-controls="active-link-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="active-link-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; id=&quot;activeLinkExample&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;activeLinkExample&quot;&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;
  &lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Active link&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary dropdown-toggle"
                                    id="activeLinkExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="activeLinkExample">
                                    <a class="dropdown-item" href="#">Regular link</a>
                                    <a class="dropdown-item active" href="#">Active link</a>
                                    <a class="dropdown-item" href="#">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Disabled Link</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#disabled-link-code" role="button" aria-controls="disabled-link-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="disabled-link-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; id=&quot;disabledLinkExample&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;disabledLinkExample&quot;&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;
  &lt;a class=&quot;dropdown-item disabled&quot; href=&quot;#&quot;&gt;Disabled link&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary dropdown-toggle"
                                    id="disabledLinkExample" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="disabledLinkExample">
                                    <a class="dropdown-item" href="#">Regular link</a>
                                    <a class="dropdown-item disabled" href="#">Disabled link</a>
                                    <a class="dropdown-item" href="#">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Alignment</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#alignment-code" role="button" aria-controls="alignment-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="alignment-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-display=&quot;static&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Right-aligned menu&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">Right-aligned menu</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Headers</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#headers-code" role="button" aria-controls="headers-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="headers-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; id=&quot;headerExample&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;headerExample&quot;&gt;
  &lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown Header&lt;/h6&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action link&lt;/a&gt;
  &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary dropdown-toggle"
                                    id="headerExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="headerExample">
                                    <h6 class="dropdown-header">Dropdown Header</h6>
                                    <a class="dropdown-item" href="#">Regular link</a>
                                    <a class="dropdown-item" href="#">Another action link</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Dividers</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#dividers-code" role="button" aria-controls="dividers-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="dividers-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; id=&quot;dividerExample&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dividerExample&quot;&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
  &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
  &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary dropdown-toggle"
                                    id="dividerExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="dividerExample">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
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
                        <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#dropdown-link">Dropdown Link</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#button-variant">Button Variant</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#button-split">Button Split</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#sizing">Sizing</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#directions">Directions</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#menu-items">Menu Items</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#active-link">Active Link</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#disabled-link">Disabled Link</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#headers">Headers</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#dividers">Dividers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
