@extends('layouts.vertical')

@section('title', 'Emoji Button')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Emoji button</h2>
    <p class="text-body-tertiary lead mb-2">Phoenix uses Picmo as a emoji picker component. It displays a panel of emojis
        where one can be selected. What is done with the selected emoji is up to you.</p><a class="btn btn-link p-0"
        href="https://picmojs.com/docs/api/overview/" target="_blank">Documentation for Picmo<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mb-9">
        <div class="card shadow-none border mb-3 mt-6" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                    </div>
                    <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                href="#example-code" role="button" aria-controls="example-code" aria-expanded="false">
                                <span class="me-2" data-feather="code"></span>View code</a><a
                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                    data-feather="eye"></span>Hide code</a></nav>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="example-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;position-relative&quot;&gt;
  &lt;div class=&quot;btn btn-primary&quot; data-picmo='{&quot;position&quot;:&quot;bottom-start&quot;}'&gt;&lt;span class=&quot;fa-regular fa-face-smile fs-7&quot;&gt;&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <div class="position-relative">
                        <div class="btn btn-primary" data-picmo='{"position":"bottom-start"}'><span
                                class="fa-regular fa-face-smile fs-7"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Javascript</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="javascript-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt; &amp;lt;script src=&amp;quot;https://unpkg.com/picmo@5.7.6/dist/umd/index.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;
 &amp;lt;script src=&amp;quot;https://unpkg.com/@picmo/popup-picker@5.7.6/dist/umd/index.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre><code class="language-html"> &lt;script src=&quot;https://unpkg.com/picmo@5.7.6/dist/umd/index.js&quot;&gt;&lt;/script&gt;
 &lt;script src=&quot;https://unpkg.com/@picmo/popup-picker@5.7.6/dist/umd/index.js&quot;&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/picmo@5.7.6/dist/umd/index.js"></script>
    <script src="https://unpkg.com/@picmo/popup-picker@5.7.6/dist/umd/index.js"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
