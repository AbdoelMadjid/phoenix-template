@extends('layouts.vertical')

@section('title', 'List Group')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">List group</h2>
    <p class="text-body-tertiary lead mb-2">List groups are a flexible and powerful component for displaying a series of
        content. Modify and extend them to support just about any content within.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/components/list-group/" target="_blank">List group on Bootstrap<span
            class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="row g-3 mt-3 mb-9">
                    <div class="col-12 col-lg-6">
                        <div class="card shadow-none border" data-component-card="data-component-card">
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
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;News Feed&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Messages&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Events&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Groups&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Pages&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <ul class="list-group">
                                        <li class="list-group-item">News Feed</li>
                                        <li class="list-group-item">Messages</li>
                                        <li class="list-group-item">Events</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Pages</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card shadow-none border" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Active Item</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                            <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#active-item-code" role="button"
                                                aria-controls="active-item-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                    data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="active-item-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;list-group&quot;&gt;&lt;a class=&quot;list-group-item list-group-item-action active&quot; href=&quot;#!&quot;&gt;News Feed&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#!&quot;&gt;Messages&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#!&quot;&gt;Events&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#!&quot;&gt;Groups&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action disabled&quot; href=&quot;#!&quot;&gt;Pages&lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="list-group"><a class="list-group-item list-group-item-action active"
                                            href="#!">News Feed</a>
                                        <a class="list-group-item list-group-item-action" href="#!">Messages</a>
                                        <a class="list-group-item list-group-item-action" href="#!">Events</a>
                                        <a class="list-group-item list-group-item-action" href="#!">Groups</a>
                                        <a class="list-group-item list-group-item-action disabled" href="#!">Pages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card shadow-none border" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">List group flush</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#list-group-flush-code" role="button"
                                                aria-controls="list-group-flush-code" aria-expanded="false"> <span
                                                    class="me-2" data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="list-group-flush-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;list-group list-group-flush&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Messages&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Events&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Groups&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Pages&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Messages</li>
                                        <li class="list-group-item">Events</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Pages</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card shadow-none border" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">List group with badge</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#list-group-with-badge-code"
                                                role="button" aria-controls="list-group-with-badge-code"
                                                aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="list-group-with-badge-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;Messages&lt;span class=&quot;badge badge-phoenix badge-phoenix-primary rounded-pill&quot;&gt;14&lt;/span&gt;&lt;/li&gt;
  &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;Events&lt;span class=&quot;badge badge-phoenix badge-phoenix-primary rounded-pill&quot;&gt;2&lt;/span&gt;&lt;/li&gt;
  &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;Groups&lt;span class=&quot;badge badge-phoenix badge-phoenix-primary rounded-pill&quot;&gt;1&lt;/span&gt;&lt;/li&gt;
  &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;Pages&lt;span class=&quot;badge badge-phoenix badge-phoenix-primary rounded-pill&quot;&gt;9&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Messages<span
                                                class="badge badge-phoenix badge-phoenix-primary rounded-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Events<span
                                                class="badge badge-phoenix badge-phoenix-primary rounded-pill">2</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Groups<span
                                                class="badge badge-phoenix badge-phoenix-primary rounded-pill">1</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Pages<span
                                                class="badge badge-phoenix badge-phoenix-primary rounded-pill">9</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card shadow-none border" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">List group background</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#list-group-background-code"
                                                role="button" aria-controls="list-group-background-code"
                                                aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="list-group-background-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item py-3&quot;&gt;Example with background&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-primary py-3&quot;&gt;A simple primary list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-secondary py-3&quot;&gt;A simple secondary list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-success py-3&quot;&gt;A simple success list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-danger py-3&quot;&gt;A simple danger list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-warning py-3&quot;&gt;A simple warning list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-info py-3&quot;&gt;A simple info list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-light py-3&quot;&gt;A simple light list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-dark py-3&quot;&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <ul class="list-group">
                                        <li class="list-group-item py-3">Example with background</li>
                                        <li class="list-group-item list-group-item-primary py-3">A simple primary list
                                            group item</li>
                                        <li class="list-group-item list-group-item-secondary py-3">A simple secondary list
                                            group item</li>
                                        <li class="list-group-item list-group-item-success py-3">A simple success list
                                            group item</li>
                                        <li class="list-group-item list-group-item-danger py-3">A simple danger list group
                                            item</li>
                                        <li class="list-group-item list-group-item-warning py-3">A simple warning list
                                            group item</li>
                                        <li class="list-group-item list-group-item-info py-3">A simple info list group item
                                        </li>
                                        <li class="list-group-item list-group-item-light py-3">A simple light list group
                                            item</li>
                                        <li class="list-group-item list-group-item-dark py-3">A simple dark list group item
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card shadow-none border" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">List group with Link</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#list-group-with-link-code"
                                                role="button" aria-controls="list-group-with-link-code"
                                                aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="list-group-with-link-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;list-group&quot;&gt;
  &lt;a class=&quot;list-group-item list-group-item-action flex-column align-items-start p-3 p-sm-4 active&quot; href=&quot;#!&quot;&gt;
    &lt;div class=&quot;d-flex flex-column flex-sm-row justify-content-between mb-1 mb-md-0&quot;&gt;
      &lt;h5 class=&quot;mb-1&quot;&gt;List group · Bootstrap&lt;/h5&gt;
      &lt;small&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed. &lt;/p&gt;
    &lt;small&gt; The most basic list group&lt;/small&gt;
  &lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action flex-column align-items-start p-3 p-sm-4&quot; href=&quot;#!&quot;&gt;
    &lt;div class=&quot;d-flex flex-column flex-sm-row justify-content-between mb-1 mb-md-0&quot;&gt;
      &lt;h5 class=&quot;mb-1&quot;&gt;What is list group?&lt;/h5&gt;
      &lt;small class=&quot;text-body-tertiary text-opacity-85&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;Creating List Groups with Bootstrap. The list groups are very useful and flexible component for displaying lists of elements in a beautiful manner.&lt;/p&gt;
    &lt;small class=&quot;text-body-tertiary text-opacity-85&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action flex-column align-items-start p-3 p-sm-4&quot; href=&quot;#!&quot;&gt;
    &lt;div class=&quot;d-flex flex-column flex-sm-row justify-content-between mb-1 mb-md-0&quot;&gt;
      &lt;h5 class=&quot;mb-1&quot;&gt;What is ordered list?&lt;/h5&gt;
      &lt;small class=&quot;text-body-tertiary text-opacity-85&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;An ordered list typically is a numbered list of items. HTML 3.0 gives you the ability to control the sequence number - to continue where the previous list left off, or to start at a particular number.&lt;/p&gt;
    &lt;small class=&quot;text-body-tertiary text-opacity-85&quot;&gt;An ordered list&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action flex-column align-items-start p-3 p-sm-4 active"
                                            href="#!">
                                            <div
                                                class="d-flex flex-column flex-sm-row justify-content-between mb-1 mb-md-0">
                                                <h5 class="mb-1">List group · Bootstrap</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">The most basic list group is an unordered list with list
                                                items and the proper classes. Build upon it with the options that follow, or
                                                with your own CSS as needed. </p>
                                            <small> The most basic list group</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action flex-column align-items-start p-3 p-sm-4"
                                            href="#!">
                                            <div
                                                class="d-flex flex-column flex-sm-row justify-content-between mb-1 mb-md-0">
                                                <h5 class="mb-1">What is list group?</h5>
                                                <small class="text-body-tertiary text-opacity-85">3 days ago</small>
                                            </div>
                                            <p class="mb-1">Creating List Groups with Bootstrap. The list groups are very
                                                useful and flexible component for displaying lists of elements in a
                                                beautiful manner.</p>
                                            <small class="text-body-tertiary text-opacity-85">Donec id elit non mi
                                                porta.</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action flex-column align-items-start p-3 p-sm-4"
                                            href="#!">
                                            <div
                                                class="d-flex flex-column flex-sm-row justify-content-between mb-1 mb-md-0">
                                                <h5 class="mb-1">What is ordered list?</h5>
                                                <small class="text-body-tertiary text-opacity-85">3 days ago</small>
                                            </div>
                                            <p class="mb-1">An ordered list typically is a numbered list of items. HTML
                                                3.0 gives you the ability to control the sequence number - to continue where
                                                the previous list left off, or to start at a particular number.</p>
                                            <small class="text-body-tertiary text-opacity-85">An ordered list</small>
                                        </a>
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
                        <li class="nav-item"> <a class="nav-link" href="#active-item">Active Item</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#list-group-flush">List group flush</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#list-group-with-badge">List group with badge</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#list-group-background">List group background</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#list-group-with-link">List group with Link</a>
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
