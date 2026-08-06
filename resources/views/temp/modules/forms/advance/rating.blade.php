@extends('layouts.vertical')

@section('title', 'Rating')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Rating</h2>
        <p class="text-body-tertiary lead mb-2">Star rating widget for the browser. Unlimited number of stars. No dependencies. No Jquery required.</p><a class="btn btn-link p-0" href="https://fredolss.github.io/rater-js/" target="_blank">Documentation for rater<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mb-9">
          <div class="card shadow-none border mb-3 mt-6" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                </div>
                <div class="col col-md-auto">
                  <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#example-code" role="button" aria-controls="example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-block&quot; data-rater='{&quot;starSize&quot;:32,&quot;step&quot;:0.5}'&gt;&lt;/div&gt;</code></pre>
              </div>
              <div class="p-4 code-to-copy">
                <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
              </div>
            </div>
          </div>
          <div class="card shadow-none border" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0" data-anchor="data-anchor">Javascript</h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="collapse code-collapse" id="javascript-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;vendors/rater-js/index.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
              </div>
              <div class="p-4 code-to-copy"><pre><code class="language-html">&lt;script src=&quot;vendors/rater-js/index.js&quot;&gt;&lt;/script&gt;</code></pre>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/rater-js/index.js') }}"></script>
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
