@extends('layouts.vertical')

@section('title', 'Heatmap Charts')

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
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Heatmap chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#heatmap-chart-code" role="button" aria-controls="heatmap-chart-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="heatmap-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/heatmap-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-heatmap-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/heatmap-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-heatmap-chart-example" style="min-height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Heatmap single series chart</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#heatmap-single-series-chart-code" role="button"
                                    aria-controls="heatmap-single-series-chart-code" aria-expanded="false"> <span
                                        class="me-2" data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="heatmap-single-series-chart-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/heatmap-single-series-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-heatmap-single-series-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/heatmap-single-series-chart.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                        <div class="echart-heatmap-single-series-chart-example" style="min-height:350px"></div>
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
