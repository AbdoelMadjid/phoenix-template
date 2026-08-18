@extends('layouts.vertical')

@section('title', 'Bar Charts')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="row g-4 mb-9">
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Basic bar chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#basic-bar-chart-code" role="button" aria-controls="basic-bar-chart-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="basic-bar-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-bar-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-basic-bar-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-bar-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-basic-bar-chart-example" style="min-height:300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Horizontal bar chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#horizontal-bar-chart-code" role="button"
                                    aria-controls="horizontal-bar-chart-code" aria-expanded="false"> <span class="me-2"
                                        data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="horizontal-bar-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/horizontal-bar-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-horizontal-bar-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/horizontal-bar-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-horizontal-bar-chart-example" style="min-height:300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Bar chart with negative value</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#bar-chart-with-negative-value-code" role="button"
                                    aria-controls="bar-chart-with-negative-value-code" aria-expanded="false"> <span
                                        class="me-2" data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="bar-chart-with-negative-value-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-negative-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-bar-negative-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-negative-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-bar-negative-chart-example" style="min-height:300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Series bar chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#series-bar-chart-code" role="button" aria-controls="series-bar-chart-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                    code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                        class="me-2" data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="series-bar-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/series-bar-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-series-bar-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/series-bar-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-series-bar-chart-example" style="min-height:300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Stacked bar chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#stacked-bar-chart-code" role="button" aria-controls="stacked-bar-chart-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                    code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                        class="me-2" data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="stacked-bar-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-bar-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-stacked-bar-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-bar-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-stacked-bar-chart-example" style="min-height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Stacked horizontal bar chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#stacked-horizontal-bar-chart-code" role="button"
                                    aria-controls="stacked-horizontal-bar-chart-code" aria-expanded="false"> <span
                                        class="me-2" data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="stacked-horizontal-bar-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-horizontal-bar-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-stacked-horizontal-bar-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-horizontal-bar-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-stacked-horizontal-bar-chart-example" style="min-height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Bar race chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#bar-race-chart-code" role="button" aria-controls="bar-race-chart-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                    code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                        class="me-2" data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="bar-race-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-race-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-bar-race-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-race-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-bar-race-chart-example" style="min-height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Gradient bar chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#gradient-bar-chart-code" role="button"
                                    aria-controls="gradient-bar-chart-code" aria-expanded="false"> <span class="me-2"
                                        data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="gradient-bar-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-gradient-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-bar-gradient-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-gradient-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-bar-gradient-chart-example" style="min-height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Mixed chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#mixed-chart-code" role="button" aria-controls="mixed-chart-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                    code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                        class="me-2" data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="mixed-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-line-mixed-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-bar-line-mixed-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-line-mixed-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-bar-line-mixed-chart-example" style="min-height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Water fall chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#water-fall-chart-code" role="button" aria-controls="water-fall-chart-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                    code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                        class="me-2" data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="water-fall-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-waterfall-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-bar-waterfall-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-waterfall-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-bar-waterfall-chart-example" style="min-height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Bar timeline chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#bar-timeline-chart-code" role="button"
                                    aria-controls="bar-timeline-chart-code" aria-expanded="false"> <span class="me-2"
                                        data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="bar-timeline-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-timeline-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-bar-timeline-chart-example&quot; style=&quot;min-height:450px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/bar-timeline-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-bar-timeline-chart-example" style="min-height:450px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('assets/js/echarts-example.js') }}"></script>
@endpush
