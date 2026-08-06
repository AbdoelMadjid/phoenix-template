@extends('layouts.vertical')

@section('title', 'Pie Charts')

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
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Pie chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#pie-chart-code" role="button" aria-controls="pie-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="pie-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-pie-chart-example&quot; style=&quot;min-height:320px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-pie-chart-example" style="min-height:320px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Doughnut chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#doughnut-chart-code" role="button" aria-controls="doughnut-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="doughnut-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/doughnut-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-doughnut-chart-example&quot; style=&quot;min-height:320px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/doughnut-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-doughnut-chart-example" style="min-height:320px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Doughnut rounded chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#doughnut-rounded-chart-code" role="button" aria-controls="doughnut-rounded-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="doughnut-rounded-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/doughnut-rounded-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-doughnut-rounded-chart-example&quot; style=&quot;min-height:320px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/doughnut-rounded-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-doughnut-rounded-chart-example" style="min-height:320px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Pie multiple chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#pie-multiple-chart-code" role="button" aria-controls="pie-multiple-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="pie-multiple-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-multiple-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-pie-multiple-chart-example&quot; style=&quot;min-height:320px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-multiple-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-pie-multiple-chart-example" style="min-height:320px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Pie label align chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#pie-label-align-chart-code" role="button" aria-controls="pie-label-align-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="pie-label-align-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-label-align-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-pie-label-align-chart-example&quot; style=&quot;min-height:320px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-label-align-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-pie-label-align-chart-example" style="min-height:320px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Pie edge align chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#pie-edge-align-chart-code" role="button" aria-controls="pie-edge-align-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="pie-edge-align-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-edge-align-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-pie-edge-align-chart-example&quot; style=&quot;min-height:320px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/pie-edge-align-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-pie-edge-align-chart-example" style="min-height:320px"></div>
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
