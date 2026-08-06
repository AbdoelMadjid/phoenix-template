@extends('layouts.vertical')

@section('title', 'Shadows')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Shadows</h2>
        <p class="text-body-tertiary lead mb-2">Add or remove shadows to elements with box-shadow utilities.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/shadows/" target="_blank">Shadows on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Examples</h4>
                        <p class="mb-0 mt-2 text-body-secondary">While shadows on components are disabled by default in Bootstrap and can be enabled via <code>$enable-shadows</code>, you can also quickly add or remove a shadow with our <code>box-shadow</code> utility classes. Includes support for <code>.shadow-none</code> and three default sizes (which have associated variables to match).</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#examples-code" role="button" aria-controls="examples-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="examples-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;shadow-none p-3 mb-5 bg-body-highlight rounded&quot;&gt;No shadow&lt;/div&gt;
&lt;div class=&quot;shadow-sm p-3 mb-5 bg-body-highlight rounded&quot;&gt;Small shadow&lt;/div&gt;
&lt;div class=&quot;shadow p-3 mb-5 bg-body-highlight rounded&quot;&gt;Regular shadow&lt;/div&gt;
&lt;div class=&quot;shadow-lg p-3 mb-5 bg-body-highlight rounded&quot;&gt;Larger shadow&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="shadow-none p-3 mb-5 bg-body-highlight rounded">No shadow</div>
                      <div class="shadow-sm p-3 mb-5 bg-body-highlight rounded">Small shadow</div>
                      <div class="shadow p-3 mb-5 bg-body-highlight rounded">Regular shadow</div>
                      <div class="shadow-lg p-3 mb-5 bg-body-highlight rounded">Larger shadow</div>
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
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
