@extends('layouts.vertical')

@section('title', 'Range')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Range</h2>
        <p class="text-body-tertiary lead mb-2">Use our custom range inputs for consistent cross-browser styling and built-in customization.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/forms/range/" target="_blank">Range on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Overview</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#overview-code" role="button" aria-controls="overview-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="overview-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label class=&quot;form-label&quot; for=&quot;customRange1&quot;&gt;Example range&lt;/label&gt;
&lt;input class=&quot;form-range&quot; id=&quot;customRange1&quot; type=&quot;range&quot; /&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><label class="form-label" for="customRange1">Example range</label>
                      <input class="form-range" id="customRange1" type="range">
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Min and max</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#min-and-max-code" role="button" aria-controls="min-and-max-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="min-and-max-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label class=&quot;form-label&quot; for=&quot;customRange2&quot;&gt;Example range&lt;/label&gt;
&lt;input class=&quot;form-range&quot; id=&quot;customRange2&quot; type=&quot;range&quot; min=&quot;0&quot; max=&quot;5&quot; /&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><label class="form-label" for="customRange2">Example range</label>
                      <input class="form-range" id="customRange2" type="range" min="0" max="5">
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Steps</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#steps-code" role="button" aria-controls="steps-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="steps-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label class=&quot;form-label&quot; for=&quot;customRange3&quot;&gt;Example range&lt;/label&gt;
&lt;input class=&quot;form-range&quot; id=&quot;customRange3&quot; type=&quot;range&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;0.5&quot; /&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><label class="form-label" for="customRange3">Example range</label>
                      <input class="form-range" id="customRange3" type="range" min="0" max="5" step="0.5">
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
                  <li class="nav-item"> <a class="nav-link" href="#min-and-max">Min and max</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#steps">Steps</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
