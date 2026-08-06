@extends('layouts.vertical')

@section('title', 'Floating Labels')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Floating labels</h2>
        <p class="text-body-tertiary lead mb-2">Create beautifully simple form labels that float over your input fields.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/forms/floating-labels/" target="_blank">Floating labels on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
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
                    <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;input class=&quot;form-control&quot; id=&quot;floatingInput&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; /&gt;
  &lt;label for=&quot;floatingInput&quot;&gt;Email address&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-floating&quot;&gt;
  &lt;input class=&quot;form-control&quot; id=&quot;floatingPassword&quot; type=&quot;password&quot; placeholder=&quot;Password&quot; /&gt;
  &lt;label for=&quot;floatingPassword&quot;&gt;Password&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="floatingInput" type="email" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating">
                        <input class="form-control" id="floatingPassword" type="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Icon example</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#icon-example-code" role="button" aria-controls="icon-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="icon-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-icon-container&quot;&gt;
  &lt;div class=&quot;form-floating mb-3&quot;&gt;&lt;input class=&quot;form-control form-icon-input&quot; id=&quot;floatingInputIconExample&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; /&gt;&lt;label class=&quot;form-icon-label&quot; for=&quot;floatingInputIconExample&quot;&gt;Email address&lt;/label&gt;&lt;/div&gt;
  &lt;span class=&quot;fa-solid fa-envelope text-body fs-9 form-icon&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-icon-container">
                        <div class="form-floating mb-3"><input class="form-control form-icon-input" id="floatingInputIconExample" type="email" placeholder="name@example.com"><label class="form-icon-label" for="floatingInputIconExample">Email address</label></div>
                        <span class="fa-solid fa-envelope text-body fs-9 form-icon"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Validation</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#validation-code" role="button" aria-controls="validation-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="validation-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;input class=&quot;form-control is-valid&quot; id=&quot;floatingInputValid&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; value=&quot;test@example.com&quot; /&gt;
  &lt;label for=&quot;floatingInputValid&quot;&gt;Valid input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-floating&quot;&gt;
  &lt;input class=&quot;form-control is-invalid&quot; id=&quot;floatingInputInvalid&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; value=&quot;test@example.com&quot; /&gt;
  &lt;label for=&quot;floatingInputInvalid&quot;&gt;Invalid input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-floating mb-3">
                        <input class="form-control is-valid" id="floatingInputValid" type="email" placeholder="name@example.com" value="test@example.com">
                        <label for="floatingInputValid">Valid input</label>
                      </div>
                      <div class="form-floating">
                        <input class="form-control is-invalid" id="floatingInputInvalid" type="email" placeholder="name@example.com" value="test@example.com">
                        <label for="floatingInputInvalid">Invalid input</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Textareas</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#textareas-code" role="button" aria-controls="textareas-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="textareas-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-floating&quot;&gt;
  &lt;textarea class=&quot;form-control&quot; id=&quot;floatingTextarea2&quot; placeholder=&quot;Leave a comment here&quot; style=&quot;height: 100px&quot;&gt;&lt;/textarea&gt;
  &lt;label for=&quot;floatingTextarea2&quot;&gt;Comments&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea2" placeholder="Leave a comment here" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Selects</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#selects-code" role="button" aria-controls="selects-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="selects-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-floating&quot;&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;floatingSelect&quot; aria-label=&quot;Floating label select example&quot;&gt;
    &lt;option selected=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;label for=&quot;floatingSelect&quot;&gt;Works with selects&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          <option selected="">Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
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
                  <li class="nav-item"> <a class="nav-link" href="#icon-example">Icon example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#validation ">Validation </a></li>
                  <li class="nav-item"> <a class="nav-link" href="#textareas">Textareas</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#selects">Selects</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
