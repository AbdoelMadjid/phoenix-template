@extends('layouts.vertical')

@section('title', 'Sizing')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Sizing</h2>
        <p class="text-body-tertiary lead mb-2">Easily make an element as wide or as tall with our width and height utilities.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/sizing/" target="_blank">Sizing on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Width (relative to parent)</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#width-relative-to-parent-code" role="button" aria-controls="width-relative-to-parent-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="width-relative-to-parent-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 w-100&quot;&gt;&lt;code&gt;.w-100&lt;/code&gt;&lt;/div&gt;
&lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 w-75&quot;&gt;&lt;code&gt;.w-75&lt;/code&gt;&lt;/div&gt;
&lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 w-50&quot;&gt;&lt;code&gt;.w-50&lt;/code&gt;&lt;/div&gt;
&lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 w-25&quot;&gt;&lt;code&gt;.w-25&lt;/code&gt;&lt;/div&gt;
&lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 w-auto&quot;&gt;&lt;code&gt;.w-auto&lt;/code&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="bg-body-highlight p-2 border-dashed mb-3 w-100"><code>.w-100</code></div>
                      <div class="bg-body-highlight p-2 border-dashed mb-3 w-75"><code>.w-75</code></div>
                      <div class="bg-body-highlight p-2 border-dashed mb-3 w-50"><code>.w-50</code></div>
                      <div class="bg-body-highlight p-2 border-dashed mb-3 w-25"><code>.w-25</code></div>
                      <div class="bg-body-highlight p-2 border-dashed mb-3 w-auto"><code>.w-auto</code></div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Height (relative to parent)</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#height-relative-to-parent-code" role="button" aria-controls="height-relative-to-parent-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="height-relative-to-parent-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;vh-50 py-3&quot;&gt;
  &lt;div class=&quot;row h-100&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
      &lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 h-100&quot;&gt;&lt;code&gt;.h-100&lt;/code&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
      &lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 h-75&quot;&gt;&lt;code&gt;.h-75&lt;/code&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
      &lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 h-50&quot;&gt;&lt;code&gt;.h-50&lt;/code&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
      &lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 h-25&quot;&gt;&lt;code&gt;.h-25&lt;/code&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
      &lt;div class=&quot;bg-body-highlight p-2 border-dashed mb-3 h-auto&quot;&gt;&lt;code&gt;.h-auto&lt;/code&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="vh-50 py-3">
                        <div class="row h-100">
                          <div class="col">
                            <div class="bg-body-highlight p-2 border-dashed mb-3 h-100"><code>.h-100</code></div>
                          </div>
                          <div class="col">
                            <div class="bg-body-highlight p-2 border-dashed mb-3 h-75"><code>.h-75</code></div>
                          </div>
                          <div class="col">
                            <div class="bg-body-highlight p-2 border-dashed mb-3 h-50"><code>.h-50</code></div>
                          </div>
                          <div class="col">
                            <div class="bg-body-highlight p-2 border-dashed mb-3 h-25"><code>.h-25</code></div>
                          </div>
                          <div class="col">
                            <div class="bg-body-highlight p-2 border-dashed mb-3 h-auto"><code>.h-auto</code></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Special classes (relative to viewport)</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="special-classes-relative-to-viewport-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre class=&quot;rounded-3&quot;&gt;&lt;code class=&quot;lang-css&quot;&gt;.mw-100 { max-width: 100%; }
.min-vw-100 { min-width: 100vw; }
.vw-100 { width: 100vw; }
.min-vh-100 { min-height: 100vh; }
.min-vh-75 { min-height: 75vh; }
.min-vh-50 { min-height: 50vh; }
.min-vh-25 { min-height: 25vh; }
.vh-100 { height: 100vh !important; }
.vh-75 { height: 75vh !important; }
.vh-50 { height: 50vh !important; }
.vh-25 { height: 25vh !important; }
.min-vh-sm-75 { min-height: 75vh; }
.min-vh-sm-50 { min-height: 50vh; }
.min-vh-sm-25 { min-height: 25vh; }
.vh-sm-100 { height: 100vh !important; }
.vh-sm-75 { height: 75vh !important; }
.vh-sm-50 { height: 50vh !important; }
.vh-sm-25 { height: 25vh !important; }
.min-vh-md-100 { min-height: 100vh; }
.min-vh-md-75 { min-height: 75vh; }
.min-vh-md-50 { min-height: 50vh; }
.min-vh-md-25 { min-height: 25vh; }
.vh-md-100 { height: 100vh !important; }
.vh-md-75 { height: 75vh !important; }
.vh-md-50 { height: 50vh !important; }
.vh-md-25 { height: 25vh !important; }
.min-vh-lg-100 { min-height: 100vh; }
.min-vh-lg-75 { min-height: 75vh; }
.min-vh-lg-50 { min-height: 50vh; }
.min-vh-lg-25 { min-height: 25vh; }
.vh-lg-100 { height: 100vh !important; }
.vh-lg-75 { height: 75vh !important; }
.vh-lg-50 { height: 50vh !important; }
.vh-lg-25 { height: 25vh !important; }
.min-vh-xl-100 { min-height: 100vh; }
.min-vh-xl-75 { min-height: 75vh; }
.min-vh-xl-50 { min-height: 50vh; }
.min-vh-xl-25 { min-height: 25vh; }
.vh-xl-100 { height: 100vh !important; }
.vh-xl-75 { height: 75vh !important; }
.vh-xl-50 { height: 50vh !important; }
.vh-xl-25 { height: 25vh !important; }
.min-vh-xxl-100 { min-height: 100vh; }
.min-vh-xxl-75 { min-height: 75vh; }
.min-vh-xxl-50 { min-height: 50vh; }
.min-vh-xxl-25 { min-height: 25vh; }
.vh-xxl-100 { height: 100vh !important; }
.vh-xxl-75 { height: 75vh !important; }
.vh-xxl-50 { height: 50vh !important; }
.vh-xxl-25 { height: 25vh !important; }&lt;/code&gt;&lt;/pre&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><pre class="rounded-3"><code class="lang-css">.mw-100 { max-width: 100%; }
.min-vw-100 { min-width: 100vw; }
.vw-100 { width: 100vw; }
.min-vh-100 { min-height: 100vh; }
.min-vh-75 { min-height: 75vh; }
.min-vh-50 { min-height: 50vh; }
.min-vh-25 { min-height: 25vh; }
.vh-100 { height: 100vh !important; }
.vh-75 { height: 75vh !important; }
.vh-50 { height: 50vh !important; }
.vh-25 { height: 25vh !important; }
.min-vh-sm-75 { min-height: 75vh; }
.min-vh-sm-50 { min-height: 50vh; }
.min-vh-sm-25 { min-height: 25vh; }
.vh-sm-100 { height: 100vh !important; }
.vh-sm-75 { height: 75vh !important; }
.vh-sm-50 { height: 50vh !important; }
.vh-sm-25 { height: 25vh !important; }
.min-vh-md-100 { min-height: 100vh; }
.min-vh-md-75 { min-height: 75vh; }
.min-vh-md-50 { min-height: 50vh; }
.min-vh-md-25 { min-height: 25vh; }
.vh-md-100 { height: 100vh !important; }
.vh-md-75 { height: 75vh !important; }
.vh-md-50 { height: 50vh !important; }
.vh-md-25 { height: 25vh !important; }
.min-vh-lg-100 { min-height: 100vh; }
.min-vh-lg-75 { min-height: 75vh; }
.min-vh-lg-50 { min-height: 50vh; }
.min-vh-lg-25 { min-height: 25vh; }
.vh-lg-100 { height: 100vh !important; }
.vh-lg-75 { height: 75vh !important; }
.vh-lg-50 { height: 50vh !important; }
.vh-lg-25 { height: 25vh !important; }
.min-vh-xl-100 { min-height: 100vh; }
.min-vh-xl-75 { min-height: 75vh; }
.min-vh-xl-50 { min-height: 50vh; }
.min-vh-xl-25 { min-height: 25vh; }
.vh-xl-100 { height: 100vh !important; }
.vh-xl-75 { height: 75vh !important; }
.vh-xl-50 { height: 50vh !important; }
.vh-xl-25 { height: 25vh !important; }
.min-vh-xxl-100 { min-height: 100vh; }
.min-vh-xxl-75 { min-height: 75vh; }
.min-vh-xxl-50 { min-height: 50vh; }
.min-vh-xxl-25 { min-height: 25vh; }
.vh-xxl-100 { height: 100vh !important; }
.vh-xxl-75 { height: 75vh !important; }
.vh-xxl-50 { height: 50vh !important; }
.vh-xxl-25 { height: 25vh !important; }</code></pre>
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
                  <li class="nav-item"> <a class="nav-link" href="#width-relative-to-parent">Width</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#height-relative-to-parent">Height</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#special-classes-relative-to-viewport">Special classes</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
