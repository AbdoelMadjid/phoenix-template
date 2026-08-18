@extends('layouts.vertical')

@section('title', 'Badge')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Badges</h2>
    <p class="text-body-tertiary lead mb-2">Documentation and examples for badges, our small count and labeling component.
    </p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/badge/" target="_blank">Badges on
        Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Phoenix Badges</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#phoenix-badges-code" role="button" aria-controls="phoenix-badges-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="phoenix-badges-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;badge badge-phoenix badge-phoenix-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix badge-phoenix-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix badge-phoenix-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix badge-phoenix-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix badge-phoenix-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix badge-phoenix-danger&quot;&gt;Danger&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span
                                    class="badge badge-phoenix badge-phoenix-primary">Primary</span>
                                <span class="badge badge-phoenix badge-phoenix-secondary">Secondary</span>
                                <span class="badge badge-phoenix badge-phoenix-success">Success</span>
                                <span class="badge badge-phoenix badge-phoenix-info">Info</span>
                                <span class="badge badge-phoenix badge-phoenix-warning">Warning</span>
                                <span class="badge badge-phoenix badge-phoenix-danger">Danger</span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Phoenix Badge with icons</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#phoenix-badge-with-icons-code" role="button"
                                            aria-controls="phoenix-badge-with-icons-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="phoenix-badge-with-icons-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;badge badge-phoenix fs-10 badge-phoenix-primary&quot;&gt;&lt;span class=&quot;badge-label&quot;&gt;Primary&lt;/span&gt;&lt;span class=&quot;ms-1&quot; data-feather=&quot;package&quot; style=&quot;height:12.8px;width:12.8px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix fs-10 badge-phoenix-secondary&quot;&gt;&lt;span class=&quot;badge-label&quot;&gt;Secondary&lt;/span&gt;&lt;span class=&quot;ms-1&quot; data-feather=&quot;plus&quot; style=&quot;height:12.8px;width:12.8px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix fs-10 badge-phoenix-success&quot;&gt;&lt;span class=&quot;badge-label&quot;&gt;Success&lt;/span&gt;&lt;span class=&quot;ms-1&quot; data-feather=&quot;check&quot; style=&quot;height:12.8px;width:12.8px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix fs-10 badge-phoenix-info&quot;&gt;&lt;span class=&quot;badge-label&quot;&gt;Info&lt;/span&gt;&lt;span class=&quot;ms-1&quot; data-feather=&quot;info&quot; style=&quot;height:12.8px;width:12.8px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix fs-10 badge-phoenix-warning&quot;&gt;&lt;span class=&quot;badge-label&quot;&gt;Warning&lt;/span&gt;&lt;span class=&quot;ms-1&quot; data-feather=&quot;alert-octagon&quot; style=&quot;height:12.8px;width:12.8px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;
&lt;span class=&quot;badge badge-phoenix fs-10 badge-phoenix-danger&quot;&gt;&lt;span class=&quot;badge-label&quot;&gt;Danger&lt;/span&gt;&lt;span class=&quot;ms-1&quot; data-feather=&quot;x&quot; style=&quot;height:12.8px;width:12.8px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span
                                    class="badge badge-phoenix fs-10 badge-phoenix-primary"><span
                                        class="badge-label">Primary</span><span class="ms-1" data-feather="package"
                                        style="height:12.8px;width:12.8px;"></span></span>
                                <span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span
                                        class="badge-label">Secondary</span><span class="ms-1" data-feather="plus"
                                        style="height:12.8px;width:12.8px;"></span></span>
                                <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                        class="badge-label">Success</span><span class="ms-1" data-feather="check"
                                        style="height:12.8px;width:12.8px;"></span></span>
                                <span class="badge badge-phoenix fs-10 badge-phoenix-info"><span
                                        class="badge-label">Info</span><span class="ms-1" data-feather="info"
                                        style="height:12.8px;width:12.8px;"></span></span>
                                <span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                        class="badge-label">Warning</span><span class="ms-1"
                                        data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span>
                                <span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span
                                        class="badge-label">Danger</span><span class="ms-1" data-feather="x"
                                        style="height:12.8px;width:12.8px;"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Background Color</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use our background utility classes to quickly
                                        change the appearance of a badge. Please note that when using Bootstrap’s default
                                        <code>.bg-body-highlight</code>, you’ll likely need a text color utility like
                                        <code>.text-dark</code> for proper styling. This is because background utilities do
                                        not set anything but <code>background-color</code>.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#background-color-code" role="button"
                                            aria-controls="background-color-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="background-color-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;badge text-bg-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge text-bg-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge text-bg-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge text-bg-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge text-bg-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge text-bg-danger&quot;&gt;Danger&lt;/span&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><span class="badge text-bg-primary">Primary</span>
                                <span class="badge text-bg-secondary">Secondary</span>
                                <span class="badge text-bg-success">Success</span>
                                <span class="badge text-bg-info">Info</span>
                                <span class="badge text-bg-warning">Warning</span>
                                <span class="badge text-bg-danger">Danger</span>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Buttons</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Badges scale to match the size of the
                                        immediate parent element by using relative font sizing and em units. As of v5,
                                        badges no longer have focus or hover styles for links.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#buttons-code" role="button" aria-controls="buttons-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="buttons-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary d-flex align-items-center&quot; type=&quot;button&quot;&gt;Notifications &lt;span class=&quot;badge bg-primary-dark ms-2&quot;&gt;4&lt;/span&gt;&lt;/button&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary d-flex align-items-center"
                                    type="button">Notifications <span
                                        class="badge bg-primary-dark ms-2">4</span></button></div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Positioned</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use utilities to modify a <code>.badge</code>
                                        and position it in the corner of a link or button.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#positioned-code" role="button" aria-controls="positioned-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="positioned-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary position-relative&quot; type=&quot;button&quot;&gt;
  Inbox&lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary-dark&quot;&gt;99+&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary position-relative"
                                    type="button">
                                    Inbox<span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary-dark">99+<span
                                            class="visually-hidden">unread messages</span></span>
                                </button></div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Examples</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Badges scale to match the size of the
                                        immediate parent element by using relative font sizing and em units. As of v5,
                                        badges no longer have focus or hover styles for links.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#examples-code" role="button" aria-controls="examples-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="examples-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h1&gt;Example heading &lt;span class=&quot;badge text-bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2&gt;Example heading &lt;span class=&quot;badge text-bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3&gt;Example heading &lt;span class=&quot;badge text-bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;Example heading &lt;span class=&quot;badge text-bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5&gt;Example heading &lt;span class=&quot;badge text-bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6&gt;Example heading &lt;span class=&quot;badge text-bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <h1>Example heading <span class="badge text-bg-secondary">New</span></h1>
                                <h2>Example heading <span class="badge text-bg-secondary">New</span></h2>
                                <h3>Example heading <span class="badge text-bg-secondary">New</span></h3>
                                <h4>Example heading <span class="badge text-bg-secondary">New</span></h4>
                                <h5>Example heading <span class="badge text-bg-secondary">New</span></h5>
                                <h6>Example heading <span class="badge text-bg-secondary">New</span></h6>
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
                        <li class="nav-item"> <a class="nav-link" href="#examples">Examples</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#buttons">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#positioned">Positioned</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#background-color">Background Color</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#pill-badges">Pill Badges</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#badge-with-icons">Badge with icons</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
