@extends('layouts.vertical')

@section('title', 'Pagination')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Pagination</h2>
    <p class="text-body-tertiary lead mb-2">Documentation and examples for showing pagination to indicate a series of related
        content exists across multiple pages.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/components/pagination/" target="_blank">Pagination on Bootstrap<span
            class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-6" data-component-card="data-component-card">
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination mb-0&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;fas fa-chevron-left&quot;&gt; &lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt; &lt;span class=&quot;fas fa-chevron-right&quot;&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <span class="fas fa-chevron-left"> </span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <span
                                                    class="fas fa-chevron-right"></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-6" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Alignment</h4>
                                    <div class="mt-2 text-body-secondary">
                                        <p>Change the alignment of pagination components with <a
                                                href="{{ url('modules/utilities/flex') }}">flexbox utilities</a>.</p>
                                    </div>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#alignment-code" role="button" aria-controls="alignment-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="alignment-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Center--&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- End--&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <!-- Center-->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item active" aria-current="page"><a class="page-link"
                                                href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                                <!-- End-->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item"><a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item active" aria-current="page"><a class="page-link"
                                                href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
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
                        <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#alignment">Alignment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
