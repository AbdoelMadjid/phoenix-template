@extends('layouts.vertical')

@section('title', 'Opacity')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Opacity</h2>
        <p class="text-body-tertiary lead mb-2">Control the opacity of elements.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/opacity/" target="_blank">Opacity on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5 opacity-docs" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                        <p class="mb-0 mt-2 text-body-secondary">The opacity property sets the opacity level for an element. The opacity level describes the transparency level, where 1 is not transparent at all, .5 is 50% visible, and 0 is completely transparent. <br>Set the opacity of an element using .opacity-{value} utilities.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#example-code" role="button" aria-controls="example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;opacity-100 text-white&quot;&gt;100%&lt;/div&gt;
&lt;div class=&quot;opacity-75 text-white&quot;&gt;85%&lt;/div&gt;
&lt;div class=&quot;opacity-75 text-white&quot;&gt;75%&lt;/div&gt;
&lt;div class=&quot;opacity-50 text-white&quot;&gt;50%&lt;/div&gt;
&lt;div class=&quot;opacity-25 text-white&quot;&gt;25%&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="opacity-100 text-white">100%</div>
                      <div class="opacity-75 text-white">85%</div>
                      <div class="opacity-75 text-white">75%</div>
                      <div class="opacity-50 text-white">50%</div>
                      <div class="opacity-25 text-white">25%</div>
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
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
