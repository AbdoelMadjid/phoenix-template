@extends('layouts.vertical')

@section('title', 'Navs')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Navs</h2>
        <p class="text-body-tertiary lead mb-2">Documentation and examples of how to use Bootstrap’s included navigation components.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/navs-tabs/" target="_blank">Navs on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Horizontal</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#horizontal-code" role="button" aria-controls="horizontal-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="horizontal-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <ul class="nav">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Active</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Vertical</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#vertical-code" role="button" aria-controls="vertical-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="vertical-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;nav flex-column&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Active</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Pills</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#pills-code" role="button" aria-controls="pills-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="pills-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;nav nav-pills&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Active</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Fill and justify</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#fill-and-justify-code" role="button" aria-controls="fill-and-justify-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="fill-and-justify-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;nav nav-pills nav-fill mb-4&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Much longer nav link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class=&quot;nav nav-pills nav-justified&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Much longer nav link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <ul class="nav nav-pills nav-fill mb-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Active</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Much longer nav link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
                      </ul>
                      <ul class="nav nav-pills nav-justified">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Active</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Much longer nav link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
                      </ul>
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
                  <li class="nav-item"> <a class="nav-link" href="#horizontal">Horizontal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#vertical">Vertical</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#pills">Pills</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#fill-and-justify">Fill and justify</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
