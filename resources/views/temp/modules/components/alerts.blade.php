@extends('layouts.vertical')

@section('title', 'Alerts')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Alert</h2>
        <p class="text-body-tertiary lead mb-2">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/alerts/" target="_blank">Alerts on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Alert Subtle Examples</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#alert-subtle-examples-code" role="button" aria-controls="alert-subtle-examples-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="alert-subtle-examples-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-subtle-primary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-secondary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-success&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-danger&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-warning&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-info&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="alert alert-subtle-primary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-subtle-secondary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-subtle-success" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-subtle-danger" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-subtle-warning" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-subtle-info" role="alert">A simple primary alert—check it out!</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Alert Outline Examples</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#alert-outline-examples-code" role="button" aria-controls="alert-outline-examples-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="alert-outline-examples-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-outline-primary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-secondary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-success&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-danger&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-warning&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-info&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="alert alert-outline-primary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-outline-secondary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-outline-success" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-outline-danger" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-outline-warning" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-outline-info" role="alert">A simple primary alert—check it out!</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Phoenix Alert Examples</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#phoenix-alert-examples-code" role="button" aria-controls="phoenix-alert-examples-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="phoenix-alert-examples-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-phoenix-primary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-phoenix-secondary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-phoenix-success&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-phoenix-danger&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-phoenix-warning&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-phoenix-info&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="alert alert-phoenix-primary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-phoenix-secondary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-phoenix-success" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-phoenix-danger" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-phoenix-warning" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-phoenix-info" role="alert">A simple primary alert—check it out!</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Solid Alert Examples</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#solid-alert-examples-code" role="button" aria-controls="solid-alert-examples-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="solid-alert-examples-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;A simple primary alert—check it out!&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-secondary" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-success" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-danger" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-warning" role="alert">A simple primary alert—check it out!</div>
                      <div class="alert alert-info" role="alert">A simple primary alert—check it out!</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Alerts with icon</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#alerts-with-icon-code" role="button" aria-controls="alerts-with-icon-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="alerts-with-icon-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-outline-warning d-flex align-items-center&quot; role=&quot;alert&quot;&gt;
  &lt;span class=&quot;fas fa-info-circle text-warning fs-5 me-3&quot;&gt;&lt;/span&gt;
  &lt;p class=&quot;mb-0 flex-1&quot;&gt;A simple primary alert—check it out!&lt;/p&gt;
  &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-success d-flex align-items-center&quot; role=&quot;alert&quot;&gt;
  &lt;span class=&quot;fas fa-check-circle text-success fs-5 me-3&quot;&gt;&lt;/span&gt;
  &lt;p class=&quot;mb-0 flex-1&quot;&gt;A simple primary alert—check it out!&lt;/p&gt;
  &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-danger d-flex align-items-center&quot; role=&quot;alert&quot;&gt;
  &lt;span class=&quot;fas fa-times-circle text-danger fs-5 me-3&quot;&gt;&lt;/span&gt;
  &lt;p class=&quot;mb-0 flex-1&quot;&gt;A simple danger alert—check it out!&lt;/p&gt;
  &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="alert alert-outline-warning d-flex align-items-center" role="alert">
                        <span class="fas fa-info-circle text-warning fs-5 me-3"></span>
                        <p class="mb-0 flex-1">A simple primary alert—check it out!</p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      <div class="alert alert-outline-success d-flex align-items-center" role="alert">
                        <span class="fas fa-check-circle text-success fs-5 me-3"></span>
                        <p class="mb-0 flex-1">A simple primary alert—check it out!</p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      <div class="alert alert-outline-danger d-flex align-items-center" role="alert">
                        <span class="fas fa-times-circle text-danger fs-5 me-3"></span>
                        <p class="mb-0 flex-1">A simple danger alert—check it out!</p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Additional Content</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#additional-content-code" role="button" aria-controls="additional-content-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="additional-content-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-subtle-success&quot; role=&quot;alert&quot;&gt;
  &lt;h4 class=&quot;alert-heading fw-semibold&quot;&gt;Well done!&lt;/h4&gt;
  &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
  &lt;hr class=&quot;bg-body-tertiary&quot; /&gt;
  &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="alert alert-subtle-success" role="alert">
                        <h4 class="alert-heading fw-semibold">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr class="bg-body-tertiary">
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Dismissing</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#dismissing-code" role="button" aria-controls="dismissing-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="dismissing-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-subtle-warning alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
  &lt;strong&gt;Holy guacamole!&lt;/strong&gt; You should check in on some of those fields below.
  &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="alert alert-subtle-warning alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
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
                  <li class="nav-item"> <a class="nav-link" href="#alert-subtle-examples">Alert Subtle Examples</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#alert-outline-examples">Alert Outline Examples</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#phoenix-alert-examples">Phoenix Alert Examples</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#solid-alert-examples">Solid Alert Examples</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#alerts-with-icon">Alerts with icon</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#additional-content">Additional Content</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#dismissing">Dismissing</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
