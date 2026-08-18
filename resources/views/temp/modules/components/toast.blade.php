@extends('layouts.vertical')

@section('title', 'Toast')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Toasts</h2>
    <p class="text-body-tertiary lead mb-2">Push notifications to your visitors with a toast, a lightweight and easily
        customizable alert message.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/toasts/"
        target="_blank">Toasts on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
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
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#basic-example-code" role="button" aria-controls="basic-example-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="basic-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;toast show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header&quot;&gt;
    &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;&lt;small class=&quot;text-body-secondary&quot;&gt;11 mins ago&lt;/small&gt;
    &lt;button class=&quot;btn ms-2 p-0&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;uil uil-times fs-7&quot;&gt;&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                                    data-bs-autohide="false">
                                    <div class="toast-header">
                                        <strong class="me-auto">Bootstrap</strong><small class="text-body-secondary">11 mins
                                            ago</small>
                                        <button class="btn ms-2 p-0" type="button" data-bs-dismiss="toast"
                                            aria-label="Close"><span class="uil uil-times fs-7"></span></button>
                                    </div>
                                    <div class="toast-body">Hello, world! This is a toast message.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mt-4 rounded-bottom-0" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Placement</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Place toasts with the helper classes as you
                                        need them. The top right is often used for notifications, as is the top middle. If
                                        you’re only ever going to show one toast at a time, put the positioning styles right
                                        on the <code>.toast</code>.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#placement-code" role="button" aria-controls="placement-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="placement-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;position-relative mb-4&quot; aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;min-height: 130px;&quot;&gt;
  &lt;div class=&quot;toast show position-absolute top-0 end-0&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
      &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small class=&quot;text-body-secondary&quot;&gt;11 mins ago&lt;/small&gt;
      &lt;button class=&quot;btn ms-2 p-0&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;uil uil-times fs-7&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="position-relative mb-4" aria-live="polite" aria-atomic="true"
                                    style="min-height: 130px;">
                                    <div class="toast show position-absolute top-0 end-0">
                                        <div class="toast-header">
                                            <strong class="me-auto">Bootstrap</strong>
                                            <small class="text-body-secondary">11 mins ago</small>
                                            <button class="btn ms-2 p-0" type="button" data-bs-dismiss="toast"
                                                aria-label="Close"><span class="uil uil-times fs-7"></span></button>
                                        </div>
                                        <div class="toast-body">Hello, world! This is a toast message.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border border-top-0 rounded-top-0 mb-4"
                        data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <p class="mb-0 mt-2 text-body-secondary">You can also get fancy with flexbox utilities
                                        to align toasts horizontally and/or vertically.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#-code" role="button" aria-controls="-code" aria-expanded="false">
                                            <span class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex flex-center&quot; aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;min-height: 300px;&quot;&gt;
  &lt;div class=&quot;toast show&quot; role=&quot;alert&quot; data-bs-autohide=&quot;false&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;&lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small class=&quot;text-body-secondary&quot;&gt;11 mins ago&lt;/small&gt;
      &lt;button class=&quot;btn ms-2 p-0&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;uil uil-times fs-7&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex flex-center" aria-live="polite" aria-atomic="true"
                                    style="min-height: 300px;">
                                    <div class="toast show" role="alert" data-bs-autohide="false"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header"><strong class="me-auto">Bootstrap</strong>
                                            <small class="text-body-secondary">11 mins ago</small>
                                            <button class="btn ms-2 p-0" type="button" data-bs-dismiss="toast"
                                                aria-label="Close"><span class="uil uil-times fs-7"></span></button>
                                        </div>
                                        <div class="toast-body">Hello, world! This is a toast message.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Live Toast</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#live-toast-code" role="button" aria-controls="live-toast-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="live-toast-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary&quot; id=&quot;liveToastBtn&quot; type=&quot;button&quot;&gt;Show live toast&lt;/button&gt;
&lt;div class=&quot;position-fixed bottom-0 end-0 p-3&quot; style=&quot;z-index: 5&quot;&gt;
  &lt;div class=&quot;toast fade&quot; id=&quot;liveToast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
      &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small class=&quot;text-body-secondary&quot;&gt;11 mins ago&lt;/small&gt;
      &lt;button class=&quot;btn ms-2 p-0&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;uil uil-times fs-7&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary" id="liveToastBtn"
                                    type="button">Show live toast</button>
                                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
                                    <div class="toast fade" id="liveToast" role="alert" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-header">
                                            <strong class="me-auto">Bootstrap</strong>
                                            <small class="text-body-secondary">11 mins ago</small>
                                            <button class="btn ms-2 p-0" type="button" data-bs-dismiss="toast"
                                                aria-label="Close"><span class="uil uil-times fs-7"></span></button>
                                        </div>
                                        <div class="toast-body">Hello, world! This is a toast message.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Translucent</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Toasts are slightly translucent, too, so they
                                        blend over whatever they might appear over.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#translucent-code" role="button" aria-controls="translucent-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 bg-dark">
                            <div class="collapse code-collapse" id="translucent-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;toast show&quot; role=&quot;alert&quot; data-bs-autohide=&quot;false&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
  &lt;div class=&quot;toast-header&quot;&gt;
    &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
    &lt;small class=&quot;text-body-secondary&quot;&gt;11 mins ago&lt;/small&gt;
    &lt;button class=&quot;btn ms-2 p-0&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot; data-bs-theme=&quot;dark&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;uil uil-times fs-7&quot;&gt;&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="toast show" role="alert" data-bs-autohide="false" aria-live="assertive"
                                    aria-atomic="true">
                                    <div class="toast-header">
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-body-secondary">11 mins ago</small>
                                        <button class="btn ms-2 p-0" type="button" data-bs-dismiss="toast"
                                            data-bs-theme="dark" aria-label="Close"><span
                                                class="uil uil-times fs-7"></span></button>
                                    </div>
                                    <div class="toast-body">Hello, world! This is a toast message.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Color schemes</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#color-schemes-code" role="button" aria-controls="color-schemes-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="color-schemes-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;toast show align-items-center text-white dark__text-gray-1100 bg-primary border-0&quot; role=&quot;alert&quot; data-bs-autohide=&quot;false&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
      &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
      &lt;/div&gt;
      &lt;button class=&quot;btn ms-2 p-0&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;uil uil-times fs-7 text-white&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex">
                                    <div class="toast show align-items-center text-white dark__text-gray-1100 bg-primary border-0"
                                        role="alert" data-bs-autohide="false" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                            <button class="btn ms-2 p-0" type="button" data-bs-dismiss="toast"
                                                aria-label="Close"><span
                                                    class="uil uil-times fs-7 text-white"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Custom Content</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">You can also add additional controls and
                                        components to toasts.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#custom-content-code" role="button"
                                            aria-controls="custom-content-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="custom-content-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;toast show align-items-center&quot; role=&quot;alert&quot; data-bs-autohide=&quot;false&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
  &lt;div class=&quot;d-flex&quot;&gt;
    &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
    &lt;button class=&quot;btn ms-2 p-0&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;uil uil-times fs-7&quot;&gt;&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;py-3 border-top border-translucent&quot;&gt;
    &lt;button class=&quot;btn btn-primary btn-sm&quot; type=&quot;button&quot;&gt;Take action&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary btn-sm ms-2&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="toast show align-items-center" role="alert" data-bs-autohide="false"
                                    aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">Hello, world! This is a toast message.</div>
                                        <button class="btn ms-2 p-0" type="button" data-bs-dismiss="toast"
                                            aria-label="Close"><span class="uil uil-times fs-7"></span></button>
                                    </div>
                                    <div class="py-3 border-top border-translucent">
                                        <button class="btn btn-primary btn-sm" type="button">Take action</button>
                                        <button class="btn btn-secondary btn-sm ms-2" type="button"
                                            data-bs-dismiss="toast">Close</button>
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
                        <li class="nav-item"> <a class="nav-link" href="#placement">Placement</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#live-toast">Live Toast</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#translucent">Translucent</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#color-schemes">Color schemes</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#custom-content">Custom Content</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
