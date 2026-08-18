@extends('layouts.vertical')

@section('title', 'Collapse')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Collapse</h2>
    <p class="text-body-tertiary lead mb-2">Toggle the visibility of content across your project with a few classes and our
        JavaScript plugins.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/collapse/"
        target="_blank">Collapse on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic Example</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#basic-example-code" role="button" aria-controls="basic-example-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="basic-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;
  &lt;a class=&quot;btn btn-phoenix-secondary mt-2&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;Link with href&lt;/a&gt;
  &lt;button class=&quot;btn btn-phoenix-secondary ms-sm-2 mt-2&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;Button with data-bs-target&lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
  &lt;div class=&quot;border border-translucent p-3 rounded&quot;&gt;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <p>
                                    <a class="btn btn-phoenix-secondary mt-2" data-bs-toggle="collapse"
                                        href="#collapseExample" role="button" aria-expanded="false"
                                        aria-controls="collapseExample">Link with href</a>
                                    <button class="btn btn-phoenix-secondary ms-sm-2 mt-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">Button with data-bs-target</button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="border border-translucent p-3 rounded">Anim pariatur cliche reprehenderit,
                                        enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-6" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Multiple Targets</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">A <code>&lt;button&gt;</code> or
                                        <code>&lt;a&gt;</code> can show and hide multiple elements by referencing them with
                                        a selector in its <code>href</code> or <code>data-bs-target</code>
                                        attribute.Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show
                                        and hide an element if they each reference it with their <code>href</code> or
                                        <code>data-bs-target</code> attribute.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#multiple-targets-code" role="button"
                                            aria-controls="multiple-targets-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="multiple-targets-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;
  &lt;a class=&quot;btn btn-phoenix-secondary mt-2 me-2&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
  &lt;button class=&quot;btn btn-phoenix-secondary mt-2 me-2&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
  &lt;button class=&quot;btn btn-phoenix-secondary mt-2&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-sm-6&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse mb-3 mb-sm-0&quot; id=&quot;multiCollapseExample1&quot;&gt;
      &lt;div class=&quot;card border border-translucent&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
      &lt;div class=&quot;card border border-translucent&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <p>
                                    <a class="btn btn-phoenix-secondary mt-2 me-2" data-bs-toggle="collapse"
                                        href="#multiCollapseExample1" role="button" aria-expanded="false"
                                        aria-controls="multiCollapseExample1">Toggle first element</a>
                                    <button class="btn btn-phoenix-secondary mt-2 me-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2"
                                        aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second
                                        element</button>
                                    <button class="btn btn-phoenix-secondary mt-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false"
                                        aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both
                                        elements</button>
                                </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="collapse multi-collapse mb-3 mb-sm-0" id="multiCollapseExample1">
                                            <div class="card border border-translucent">
                                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life accusamus terry richardson ad squid. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card border border-translucent">
                                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life accusamus terry richardson ad squid. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.</div>
                                            </div>
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
                        <li class="nav-item"> <a class="nav-link" href="#basic-example">Basic Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#multiple-targets">Multiple Targets</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
