@extends('layouts.vertical')

@section('title', 'Background')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Background</h2>
        <p class="text-body-tertiary lead mb-2">Convey meaning through color with a handful of color utility classes. Includes support for styling links with hover states, too.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank">Background on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card" id="doc-bg-color">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Solid colors</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#solid-colors-code" role="button" aria-controls="solid-colors-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="solid-colors-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-0&quot;&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-primary  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-primary  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-white&quot;&gt;#3874ff&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-secondary  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-secondary  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-white&quot;&gt;#49525d&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-success  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-success  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-white&quot;&gt;#25b003&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-info  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-info  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-white&quot;&gt;#0097eb&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-warning  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-warning  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-white&quot;&gt;#e5780b&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-danger  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-danger  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-white&quot;&gt;#ec1f00&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="row g-0">
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-primary  false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-primary  </code><br><code class="mt-2 d-dark-none text-white">#3874ff</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-secondary  false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-secondary  </code><br><code class="mt-2 d-dark-none text-white">#49525d</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-success  false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-success  </code><br><code class="mt-2 d-dark-none text-white">#25b003</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-info  false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-info  </code><br><code class="mt-2 d-dark-none text-white">#0097eb</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-warning  false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-warning  </code><br><code class="mt-2 d-dark-none text-white">#e5780b</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-danger  false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-danger  </code><br><code class="mt-2 d-dark-none text-white">#ec1f00</code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card" id="doc-bg-body">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Body colors</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#body-colors-code" role="button" aria-controls="body-colors-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="body-colors-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-0&quot;&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-body&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-body&quot;&gt;.bg-body&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-body-highlight&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-body&quot;&gt;.bg-body-highlight&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-body-secondary&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-body&quot;&gt;.bg-body-secondary&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-body-tertiary&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-body&quot;&gt;.bg-body-tertiary&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-body-quaternary&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-body&quot;&gt;.bg-body-quaternary&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="row g-0">
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-body" style="height: 180px"><code class="text-body">.bg-body</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-body-highlight" style="height: 180px"><code class="text-body">.bg-body-highlight</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-body-secondary" style="height: 180px"><code class="text-body">.bg-body-secondary</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-body-tertiary" style="height: 180px"><code class="text-body">.bg-body-tertiary</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-body-quaternary" style="height: 180px"><code class="text-body">.bg-body-quaternary</code></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card" id="doc-bg-subtle">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Subtle colors</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#subtle-colors-code" role="button" aria-controls="subtle-colors-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="subtle-colors-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-0&quot;&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-primary-subtle&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-primary-emphasis&quot;&gt;.text-primary-emphasis&lt;/code&gt;&lt;br /&gt;&lt;code class=&quot;text-primary-emphasis&quot;&gt;.bg-primary-subtle&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-secondary-subtle&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-secondary-emphasis&quot;&gt;.text-secondary-emphasis&lt;/code&gt;&lt;br /&gt;&lt;code class=&quot;text-secondary-emphasis&quot;&gt;.bg-secondary-subtle&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-success-subtle&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-success-emphasis&quot;&gt;.text-success-emphasis&lt;/code&gt;&lt;br /&gt;&lt;code class=&quot;text-success-emphasis&quot;&gt;.bg-success-subtle&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-info-subtle&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-info-emphasis&quot;&gt;.text-info-emphasis&lt;/code&gt;&lt;br /&gt;&lt;code class=&quot;text-info-emphasis&quot;&gt;.bg-info-subtle&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-warning-subtle&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-warning-emphasis&quot;&gt;.text-warning-emphasis&lt;/code&gt;&lt;br /&gt;&lt;code class=&quot;text-warning-emphasis&quot;&gt;.bg-warning-subtle&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 bg-danger-subtle&quot; style=&quot;height: 180px&quot;&gt;&lt;code class=&quot;text-danger-emphasis&quot;&gt;.text-danger-emphasis&lt;/code&gt;&lt;br /&gt;&lt;code class=&quot;text-danger-emphasis&quot;&gt;.bg-danger-subtle&lt;/code&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="row g-0">
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-primary-subtle" style="height: 180px"><code class="text-primary-emphasis">.text-primary-emphasis</code><br><code class="text-primary-emphasis">.bg-primary-subtle</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-secondary-subtle" style="height: 180px"><code class="text-secondary-emphasis">.text-secondary-emphasis</code><br><code class="text-secondary-emphasis">.bg-secondary-subtle</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-success-subtle" style="height: 180px"><code class="text-success-emphasis">.text-success-emphasis</code><br><code class="text-success-emphasis">.bg-success-subtle</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-info-subtle" style="height: 180px"><code class="text-info-emphasis">.text-info-emphasis</code><br><code class="text-info-emphasis">.bg-info-subtle</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-warning-subtle" style="height: 180px"><code class="text-warning-emphasis">.text-warning-emphasis</code><br><code class="text-warning-emphasis">.bg-warning-subtle</code></div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 bg-danger-subtle" style="height: 180px"><code class="text-danger-emphasis">.text-danger-emphasis</code><br><code class="text-danger-emphasis">.bg-danger-subtle</code></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card" id="doc-bg-gradients">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Gradients</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#gradients-code" role="button" aria-controls="gradients-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="gradients-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-0&quot;&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-primary bg-gradient false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-gradient&lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-primary  &lt;/code&gt;&lt;br/&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-secondary bg-gradient false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-gradient&lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-secondary  &lt;/code&gt;&lt;br/&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-success bg-gradient false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-gradient&lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-success  &lt;/code&gt;&lt;br/&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-info bg-gradient false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-gradient&lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-info  &lt;/code&gt;&lt;br/&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-warning bg-gradient false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-gradient&lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-warning  &lt;/code&gt;&lt;br/&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-danger bg-gradient false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-gradient&lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;text-white&quot;&gt;.bg-danger  &lt;/code&gt;&lt;br/&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="row g-0">
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-primary bg-gradient false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-gradient</code><br><code class="text-white">.bg-primary  </code><br></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-secondary bg-gradient false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-gradient</code><br><code class="text-white">.bg-secondary  </code><br></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-success bg-gradient false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-gradient</code><br><code class="text-white">.bg-success  </code><br></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-info bg-gradient false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-gradient</code><br><code class="text-white">.bg-info  </code><br></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-warning bg-gradient false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-gradient</code><br><code class="text-white">.bg-warning  </code><br></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-danger bg-gradient false" style="height: 180px">
                            <pre class="text-center"><code class="text-white">.bg-gradient</code><br><code class="text-white">.bg-danger  </code><br></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card" id="doc-bg-grays">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Grays</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#grays-code" role="button" aria-controls="grays-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="grays-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-0&quot;&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-1100  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-1100  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#15181b&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-1000  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-1000  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#2b3036&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-900  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-900  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#49525d&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-800  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-800  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#5a6573&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-700  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-700  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#6d7a8a&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-600  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-600  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#84909e&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-500  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-500  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#9aa3af&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-400  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-gray-100&quot;&gt;.bg-gray-400  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-gray-100&quot;&gt;#b1b9c2&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-300  false&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-body-emphasis&quot;&gt;.bg-gray-300  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-body-emphasis&quot;&gt;#e2e5e9&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-200  border&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-body-emphasis&quot;&gt;.bg-gray-200  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-body-emphasis&quot;&gt;#f1f2f4&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-lg-3&quot;&gt;
    &lt;div class=&quot;p-3 d-flex flex-center bg-gray-100  border&quot; style=&quot;height: 180px&quot;&gt;
      &lt;pre class=&quot;text-center&quot;&gt;&lt;code class=&quot;text-body-emphasis&quot;&gt;.bg-gray-100  &lt;/code&gt;&lt;br/&gt;&lt;code class=&quot;mt-2 d-dark-none text-body-emphasis&quot;&gt;#f6f7f8&lt;/code&gt;&lt;/pre&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="row g-0">
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-1100  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-1100  </code><br><code class="mt-2 d-dark-none text-gray-100">#15181b</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-1000  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-1000  </code><br><code class="mt-2 d-dark-none text-gray-100">#2b3036</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-900  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-900  </code><br><code class="mt-2 d-dark-none text-gray-100">#49525d</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-800  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-800  </code><br><code class="mt-2 d-dark-none text-gray-100">#5a6573</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-700  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-700  </code><br><code class="mt-2 d-dark-none text-gray-100">#6d7a8a</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-600  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-600  </code><br><code class="mt-2 d-dark-none text-gray-100">#84909e</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-500  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-500  </code><br><code class="mt-2 d-dark-none text-gray-100">#9aa3af</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-400  false" style="height: 180px">
                            <pre class="text-center"><code class="text-gray-100">.bg-gray-400  </code><br><code class="mt-2 d-dark-none text-gray-100">#b1b9c2</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-300  false" style="height: 180px">
                            <pre class="text-center"><code class="text-body-emphasis">.bg-gray-300  </code><br><code class="mt-2 d-dark-none text-body-emphasis">#e2e5e9</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-200  border" style="height: 180px">
                            <pre class="text-center"><code class="text-body-emphasis">.bg-gray-200  </code><br><code class="mt-2 d-dark-none text-body-emphasis">#f1f2f4</code></pre>
                          </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                          <div class="p-3 d-flex flex-center bg-gray-100  border" style="height: 180px">
                            <pre class="text-center"><code class="text-body-emphasis">.bg-gray-100  </code><br><code class="mt-2 d-dark-none text-body-emphasis">#f6f7f8</code></pre>
                          </div>
                        </div>
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
                  <li class="nav-item"> <a class="nav-link" href="#solid-colors">Solid colors</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#grays">Grays</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#gradients">Gradients</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
