@extends('layouts.vertical')

@section('title', 'Form Control')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Form Control</h2>
    <p class="text-body-tertiary lead mb-2">Give textual form controls like <code>&lt;input&gt;</code>s and
        <code>&lt;textarea&gt;</code>s an upgrade with custom styles, sizing, focus states, and more.</p><a
        class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/forms/form-control/" target="_blank">Form Controls on
        Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
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
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#example-code" role="button" aria-controls="example-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;exampleFormControlInput&quot;&gt;Email address &lt;/label&gt;
  &lt;input class=&quot;form-control&quot; id=&quot;exampleFormControlInput&quot; type=&quot;email&quot; placeholder=&quot;name@example.com&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-0&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;exampleTextarea&quot;&gt;Example Textarea &lt;/label&gt;
  &lt;textarea class=&quot;form-control&quot; id=&quot;exampleTextarea&quot; rows=&quot;3&quot;&gt; &lt;/textarea&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput">Email address </label>
                                    <input class="form-control" id="exampleFormControlInput" type="email"
                                        placeholder="name@example.com">
                                </div>
                                <div class="mb-0">
                                    <label class="form-label" for="exampleTextarea">Example Textarea </label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3"> </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Sizing</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#sizing-code" role="button" aria-controls="sizing-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="sizing-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;mb-3&quot;&gt;
  &lt;input class=&quot;form-control form-control-lg&quot; id=&quot;sizingInputLg&quot; type=&quot;text&quot; placeholder=&quot;.form-control-lg&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;input class=&quot;form-control form-control&quot; id=&quot;sizingInput&quot; type=&quot;text&quot; placeholder=&quot;.form-control&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-0&quot;&gt;
  &lt;input class=&quot;form-control form-control-sm&quot; id=&quot;sizingInputSm&quot; type=&quot;text&quot; placeholder=&quot;.form-control-sm&quot; /&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg" id="sizingInputLg" type="text"
                                        placeholder=".form-control-lg">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control" id="sizingInput" type="text"
                                        placeholder=".form-control">
                                </div>
                                <div class="mb-0">
                                    <input class="form-control form-control-sm" id="sizingInputSm" type="text"
                                        placeholder=".form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Readonly plain text</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#readonly-plain-text-code" role="button"
                                            aria-controls="readonly-plain-text-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="readonly-plain-text-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;mb-3 row&quot;&gt;
  &lt;label class=&quot;col-sm-2 col-form-label&quot; for=&quot;staticEmail&quot;&gt;Email&lt;/label&gt;
  &lt;div class=&quot;col-sm-10&quot;&gt;
    &lt;input class=&quot;form-control-plaintext outline-none&quot; id=&quot;staticEmail&quot; type=&quot;text&quot; readonly=&quot;&quot; value=&quot;email@example.com&quot; /&gt;
    &lt;div class=&quot;mb-3 row&quot;&gt; &lt;/div&gt;
  &lt;/div&gt;
  &lt;label class=&quot;col-sm-2 col-form-label&quot; for=&quot;inputPassword&quot;&gt;Password&lt;/label&gt;
  &lt;div class=&quot;col-sm-10&quot;&gt;
    &lt;input class=&quot;form-control&quot; id=&quot;inputPassword&quot; type=&quot;password&quot; /&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label" for="staticEmail">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control-plaintext outline-none" id="staticEmail"
                                            type="text" readonly="" value="email@example.com">
                                        <div class="mb-3 row"> </div>
                                    </div>
                                    <label class="col-sm-2 col-form-label" for="inputPassword">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="inputPassword" type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">File Input</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#file-input-code" role="button" aria-controls="file-input-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="file-input-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;customFile&quot;&gt;File input example&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; id=&quot;customFile&quot; type=&quot;file&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;formFileDisabled&quot;&gt;Disabled file input example&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; id=&quot;formFileDisabled&quot; type=&quot;file&quot; disabled=&quot;disabled&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;formFileMultiple&quot;&gt;Multiple files input example&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; id=&quot;formFileMultiple&quot; type=&quot;file&quot; multiple=&quot;multiple&quot; /&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="mb-3">
                                    <label class="form-label" for="customFile">File input example</label>
                                    <input class="form-control" id="customFile" type="file">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formFileDisabled">Disabled file input example</label>
                                    <input class="form-control" id="formFileDisabled" type="file"
                                        disabled="disabled">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formFileMultiple">Multiple files input example</label>
                                    <input class="form-control" id="formFileMultiple" type="file"
                                        multiple="multiple">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">File Input Sizing</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#file-input-sizing-code" role="button"
                                            aria-controls="file-input-sizing-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="file-input-sizing-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;customFileSm&quot;&gt;Small file input example&lt;/label&gt;
  &lt;input class=&quot;form-control form-control-sm&quot; id=&quot;customFileSm&quot; type=&quot;file&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;customFileLg&quot;&gt;Large file input example&lt;/label&gt;
  &lt;input class=&quot;form-control form-control-lg&quot; id=&quot;customFileLg&quot; type=&quot;file&quot; /&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="mb-3">
                                    <label class="form-label" for="customFileSm">Small file input example</label>
                                    <input class="form-control form-control-sm" id="customFileSm" type="file">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="customFileLg">Large file input example</label>
                                    <input class="form-control form-control-lg" id="customFileLg" type="file">
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
                        <li class="nav-item"> <a class="nav-link" href="#sizing">Sizing</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#readonly-plain-text">Readonly plain text</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#file-input">File Input</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#file-input-sizing">File Input Sizing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
