@extends('layouts.vertical')

@section('title', 'Overflow')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Overflow</h2>
        <p class="text-body-tertiary lead mb-2">Use these shorthand utilities for quickly configuring how content overflows an element.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/overflow/" target="_blank">Overflow on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5 overflow-docs overflow-hidden" data-component-card="data-component-card" style="min-height: 250px;">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Adjust the overflow property on the fly with four default values and classes. These classes are not responsive by default.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#example-code" role="button" aria-controls="example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;overflow-auto&quot;&gt;This is an example of using &lt;code&gt;.overflow-auto &lt;/code&gt;on an element with set width and height dimensions. By design, this content will vertically scroll.&lt;/div&gt;
  &lt;div class=&quot;overflow-hidden&quot;&gt;This is an example of using &lt;code&gt;.overflow-auto &lt;/code&gt;on an element with set width and height dimensions. By design, this content will vertically scroll.&lt;/div&gt;
  &lt;div class=&quot;overflow-visible&quot;&gt;This is an example of using &lt;code&gt;.overflow-visible &lt;/code&gt;on an element with set width and height dimensions. By design, this content will vertically scroll.&lt;/div&gt;
  &lt;div class=&quot;overflow-scroll&quot;&gt;This is an example of using &lt;code&gt;.overflow-scroll &lt;/code&gt;on an element with set width and height dimensions. By design, this content will vertically scroll.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="d-flex">
                        <div class="overflow-auto">This is an example of using <code>.overflow-auto </code>on an element with set width and height dimensions. By design, this content will vertically scroll.</div>
                        <div class="overflow-hidden">This is an example of using <code>.overflow-auto </code>on an element with set width and height dimensions. By design, this content will vertically scroll.</div>
                        <div class="overflow-visible">This is an example of using <code>.overflow-visible </code>on an element with set width and height dimensions. By design, this content will vertically scroll.</div>
                        <div class="overflow-scroll">This is an example of using <code>.overflow-scroll </code>on an element with set width and height dimensions. By design, this content will vertically scroll.</div>
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
