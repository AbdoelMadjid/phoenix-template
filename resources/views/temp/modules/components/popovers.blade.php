@extends('layouts.vertical')

@section('title', 'Popovers')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Popovers</h2>
        <p class="text-body-tertiary lead mb-2">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/popovers/" target="_blank">Popovers on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
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
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#basic-example-code" role="button" aria-controls="basic-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="basic-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-1&quot;&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;button class=&quot;btn btn-secondary m-1&quot; type=&quot;button&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-content=&quot;Top Popover&quot;&gt;Top Popover&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;button class=&quot;btn btn-secondary m-1&quot; type=&quot;button&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-content=&quot;Left Popover&quot;&gt;Left Popover&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;button class=&quot;btn btn-secondary m-1&quot; type=&quot;button&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-content=&quot;Right Popover&quot;&gt;Right Popover&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-auto&quot;&gt;
    &lt;button class=&quot;btn btn-secondary m-1&quot; type=&quot;button&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-content=&quot;Bottom Popover&quot;&gt;Bottom Popover&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="row g-1">
                        <div class="col-auto">
                          <button class="btn btn-secondary m-1" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top Popover">Top Popover</button>
                        </div>
                        <div class="col-auto">
                          <button class="btn btn-secondary m-1" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left Popover">Left Popover</button>
                        </div>
                        <div class="col-auto">
                          <button class="btn btn-secondary m-1" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right Popover">Right Popover</button>
                        </div>
                        <div class="col-auto">
                          <button class="btn btn-secondary m-1" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom Popover">Bottom Popover</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-6" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Dismissible Example</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Use the <code>data-bs-trigger="focus"</code> to dismiss popovers on the user’s next click of a different element than the toggle element.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#dismissible-example-code" role="button" aria-controls="dismissible-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="dismissible-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;a class=&quot;btn btn-lg btn-danger&quot; tabindex=&quot;0&quot; role=&quot;button&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;focus&quot; title=&quot;Dismissible popover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;Dismissible popover&lt;/a&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><a class="btn btn-lg btn-danger" tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
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
                  <li class="nav-item"> <a class="nav-link" href="#dismissible-example">Dismissible Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
