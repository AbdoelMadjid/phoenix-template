@extends('layouts.vertical')

@section('title', 'Gauge Chart')

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
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic gauge chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#basic-gauge-chart-code" role="button" aria-controls="basic-gauge-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="basic-gauge-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-gauge-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-basic-gauge-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-gauge-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-basic-gauge-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Gauge progress chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#gauge-progress-chart-code" role="button" aria-controls="gauge-progress-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="gauge-progress-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-progress-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-gauge-progress-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-progress-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-gauge-progress-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Gauge ring chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#gauge-ring-chart-code" role="button" aria-controls="gauge-ring-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="gauge-ring-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-ring-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-gauge-ring-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-ring-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-gauge-ring-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Gauge multi ring chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#gauge-multi-ring-chart-code" role="button" aria-controls="gauge-multi-ring-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="gauge-multi-ring-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-multi-ring-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-gauge-multiring-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-multi-ring-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-gauge-multiring-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Gauge multi title chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#gauge-multi-title-chart-code" role="button" aria-controls="gauge-multi-title-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="gauge-multi-title-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-multi-title-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-gauge-multi-title-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-multi-title-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-gauge-multi-title-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Gauge grade chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#gauge-grade-chart-code" role="button" aria-controls="gauge-grade-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="gauge-grade-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-grade-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-gauge-grade-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/gauge-grade-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-gauge-grade-chart-example" style="min-height:300px"></div>
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
