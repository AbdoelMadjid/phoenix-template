@extends('layouts.vertical')

@section('title', 'Navbar')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Navbar</h2>
        <p class="text-body-tertiary lead mb-2">Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for Bootstrap collapse plugin.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/navbar/" target="_blank">Navbar on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Navbar Light</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#navbar-light-code" role="button" aria-controls="navbar-light-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="navbar-light-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;nav class=&quot;navbar navbar-expand-lg bg-light&quot; data-bs-theme=&quot;light&quot;&gt;
  &lt;div class=&quot;container-fluid&quot;&gt;&lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;&lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarLightExample&quot; aria-controls=&quot;navbarLightExample&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;&lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarLightExample&quot;&gt;
      &lt;ul class=&quot;navbar-nav me-auto mb-2 mb-lg-0&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;&lt;a class=&quot;nav-link dropdown-toggle&quot; id=&quot;navbarLightExampleDropdown&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;div class=&quot;dropdown-menu py-0&quot; aria-labelledby=&quot;navbarLightExampleDropdown&quot;&gt;
            &lt;div class=&quot;py-2 rounded-3&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
              &lt;hr class=&quot;dropdown-divider&quot; /&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;form class=&quot;d-flex&quot;&gt;&lt;input class=&quot;form-control me-2&quot; type=&quot;search&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot; /&gt;&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;submit&quot;&gt;Search&lt;/button&gt;&lt;/form&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
                        <div class="container-fluid"><a class="navbar-brand" href="#">Navbar</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLightExample" aria-controls="navbarLightExample" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                          <div class="collapse navbar-collapse" id="navbarLightExample">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                              <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarLightExampleDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu py-0" aria-labelledby="navbarLightExampleDropdown">
                                  <div class="py-2 rounded-3"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>
                              </li>
                              <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                            </ul>
                            <form class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-primary" type="submit">Search</button></form>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Navbar Dark</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#navbar-dark-code" role="button" aria-controls="navbar-dark-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="navbar-dark-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;nav class=&quot;navbar navbar-expand-lg bg-dark&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;div class=&quot;container-fluid&quot;&gt;&lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;&lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarSuccessExample&quot; aria-controls=&quot;navbarSuccessExample&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;&lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSuccessExample&quot;&gt;
      &lt;ul class=&quot;navbar-nav me-auto mb-2 mb-lg-0 text-white&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;&lt;a class=&quot;nav-link dropdown-toggle&quot; id=&quot;navbarSuccessExampleDropdown&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;div class=&quot;dropdown-menu py-0&quot; aria-labelledby=&quot;navbarSuccessExampleDropdown&quot;&gt;
            &lt;div class=&quot;py-2 rounded-3&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
              &lt;hr class=&quot;dropdown-divider&quot; /&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;form class=&quot;d-flex&quot;&gt;&lt;input class=&quot;form-control me-2&quot; type=&quot;search&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot; /&gt;&lt;button class=&quot;btn btn-phoenix-primary&quot; type=&quot;submit&quot;&gt;Search&lt;/button&gt;&lt;/form&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                        <div class="container-fluid"><a class="navbar-brand" href="#">Navbar</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSuccessExample" aria-controls="navbarSuccessExample" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                          <div class="collapse navbar-collapse" id="navbarSuccessExample">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
                              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                              <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarSuccessExampleDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu py-0" aria-labelledby="navbarSuccessExampleDropdown">
                                  <div class="py-2 rounded-3"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>
                              </li>
                              <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                            </ul>
                            <form class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-phoenix-primary" type="submit">Search</button></form>
                          </div>
                        </div>
                      </nav>
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
                  <li class="nav-item"> <a class="nav-link" href="#navbar-light">Navbar Light</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#navbar-dark">Navbar Dark</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
