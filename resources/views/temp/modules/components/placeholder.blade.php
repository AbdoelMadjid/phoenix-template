@extends('layouts.vertical')

@section('title', 'Placeholder')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Placeholders</h2>
        <p class="text-body-tertiary lead mb-2">Use loading placeholders for your components or pages to indicate something may still be loading.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/placeholders/" target="_blank">Placeholders on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-6" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Examples</h4>
                        <p class="mb-0 mt-2 text-body-secondary">In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#examples-code" role="button" aria-controls="examples-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="examples-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex justify-content-center&quot;&gt;
  &lt;div class=&quot;card overflow-hidden&quot; style=&quot;max-width: 20rem;&quot;&gt;
    &lt;div class=&quot;card-img-top jhj&quot;&gt;
      &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/img/generic/1.jpg&quot; alt=&quot;Card image cap&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;a class=&quot;btn btn-primary btn-sm&quot; href=&quot;#!&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card overflow-hidden ms-3&quot; style=&quot;width: 20rem;&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;card-img-top&quot; style=&quot;width: 320px;height: 180px&quot;&gt;&lt;span class=&quot;placeholder w-100 h-100&quot;&gt;&lt;/span&gt;&lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title placeholder-glow&quot;&gt;&lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;&lt;/h5&gt;
      &lt;p class=&quot;card-text placeholder-glow&quot;&gt;
        &lt;span class=&quot;placeholder col-7&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-8&quot;&gt;&lt;/span&gt;
      &lt;/p&gt;
      &lt;a class=&quot;btn btn-primary disabled placeholder col-6&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="max-width: 20rem;">
                          <div class="card-img-top jhj">
                            <img class="img-fluid" src="{{ asset('assets/img/generic/1.jpg') }}" alt="Card image cap">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn btn-primary btn-sm" href="#!">Go somewhere</a>
                          </div>
                        </div>
                        <div class="card overflow-hidden ms-3" style="width: 20rem;" aria-hidden="true">
                          <div class="card-img-top" style="width: 320px;height: 180px"><span class="placeholder w-100 h-100"></span></div>
                          <div class="card-body">
                            <h5 class="card-title placeholder-glow"><span class="placeholder col-6"></span></h5>
                            <p class="card-text placeholder-glow">
                              <span class="placeholder col-7"></span>
                              <span class="placeholder col-4"></span>
                              <span class="placeholder col-4"></span>
                              <span class="placeholder col-6"></span>
                              <span class="placeholder col-8"></span>
                            </p>
                            <a class="btn btn-primary disabled placeholder col-6" href="#" tabindex="-1"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-6" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Width</h4>
                        <p class="mb-0 mt-2 text-body-secondary">You can change the <code>width</code> through grid column classes, width utilities, or inline styles.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#width-code" role="button" aria-controls="width-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="width-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;placeholder bg-quaternary col-6&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder bg-quaternary w-75&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder bg-quaternary&quot; style=&quot;width: 25%;&quot;&gt;&lt;/span&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><span class="placeholder bg-quaternary col-6"></span>
                      <span class="placeholder bg-quaternary w-75"></span>
                      <span class="placeholder bg-quaternary" style="width: 25%;"></span>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-6" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Color</h4>
                        <p class="mb-0 mt-2 text-body-secondary">By default, the <code>placeholder</code> uses <code>currentColor</code>. This can be overriden with a custom color or utility class.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#color-code" role="button" aria-controls="color-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="color-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;placeholder col-12 bg-primary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder col-12 bg-secondary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder col-12 bg-success&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder col-12 bg-danger&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder col-12 bg-warning&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder col-12 bg-info&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder col-12 bg-body-highlight&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder col-12 bg-dark&quot;&gt;&lt;/span&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><span class="placeholder col-12 bg-primary"></span>
                      <span class="placeholder col-12 bg-secondary"></span>
                      <span class="placeholder col-12 bg-success"></span>
                      <span class="placeholder col-12 bg-danger"></span>
                      <span class="placeholder col-12 bg-warning"></span>
                      <span class="placeholder col-12 bg-info"></span>
                      <span class="placeholder col-12 bg-body-highlight"></span>
                      <span class="placeholder col-12 bg-dark"></span>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-6" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Sizing</h4>
                        <p class="mb-0 mt-2 text-body-secondary">The size of <code>.placeholder</code>s are based on the typographic style of the parent element. Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or <code>.placeholder-xs</code>.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#sizing-code" role="button" aria-controls="sizing-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="sizing-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;placeholder bg-quaternary col-12 placeholder-lg&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder bg-quaternary col-12&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder bg-quaternary col-12 placeholder-sm&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;placeholder bg-quaternary col-12 placeholder-xs&quot;&gt;&lt;/span&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><span class="placeholder bg-quaternary col-12 placeholder-lg"></span>
                      <span class="placeholder bg-quaternary col-12"></span>
                      <span class="placeholder bg-quaternary col-12 placeholder-sm"></span>
                      <span class="placeholder bg-quaternary col-12 placeholder-xs"></span>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-6" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Animation</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Animate placeholders with <code>.placeholder-glow</code> or <code>.placeholder-wave</code> to better convey the perception of something being <em>actively</em> loaded.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#animation-code" role="button" aria-controls="animation-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="animation-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;placeholder-glow&quot;&gt;&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=&quot;placeholder-wave&quot;&gt;&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="placeholder-glow"><span class="placeholder col-12"></span></p>
                      <p class="placeholder-wave"><span class="placeholder col-12"></span></p>
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
                  <li class="nav-item"> <a class="nav-link" href="#label">Width</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#color">Color</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#sizing">Sizing</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#animation">Animation</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
