@extends('layouts.vertical')

@section('title', 'Float')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Float</h2>
        <p class="text-body-tertiary lead mb-2">Toggle floats on any element, across any breakpoint, using our responsive float utilities</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/float/" target="_blank">Float on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Overview</h4>
                        <p class="mb-0 mt-2 text-body-secondary">These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the
                          <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/float">CSS <code>float</code> property</a>. <code>!important</code> is included to avoid specificity issues. These use the same viewport breakpoints as our grid system. Please be aware float utilities have no effect on flex items.
                        </p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#overview-code" role="button" aria-controls="overview-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="overview-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;float-start&quot;&gt;Float left on all viewport sizes&lt;/div&gt;&lt;br /&gt;
&lt;div class=&quot;float-end&quot;&gt;Float right on all viewport sizes&lt;/div&gt;&lt;br /&gt;
&lt;div class=&quot;float-none&quot;&gt;Don't float on all viewport sizes&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="float-start">Float left on all viewport sizes</div><br>
                      <div class="float-end">Float right on all viewport sizes</div><br>
                      <div class="float-none">Don't float on all viewport sizes</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Responsive</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Responsive variations also exist for each <code>float</code> value</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#responsive-code" role="button" aria-controls="responsive-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="responsive-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;float-sm-start&quot;&gt;Float start on viewports sized SM (small) or wider&lt;/div&gt;&lt;br /&gt;
&lt;div class=&quot;float-md-start&quot;&gt;Float start on viewports sized MD (medium) or wider&lt;/div&gt;&lt;br /&gt;
&lt;div class=&quot;float-lg-start&quot;&gt;Float start on viewports sized LG (large) or wider&lt;/div&gt;&lt;br /&gt;
&lt;div class=&quot;float-xl-start&quot;&gt;Float start on viewports sized XL (extra-large) or wider&lt;/div&gt;&lt;br /&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="float-sm-start">Float start on viewports sized SM (small) or wider</div><br>
                      <div class="float-md-start">Float start on viewports sized MD (medium) or wider</div><br>
                      <div class="float-lg-start">Float start on viewports sized LG (large) or wider</div><br>
                      <div class="float-xl-start">Float start on viewports sized XL (extra-large) or wider</div><br>
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
                  <li class="nav-item"> <a class="nav-link" href="#overview">Overview</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#responsive">Responsive</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
