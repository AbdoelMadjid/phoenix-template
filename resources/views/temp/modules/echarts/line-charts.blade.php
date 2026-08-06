@extends('layouts.vertical')

@section('title', 'Line Charts')

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
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic line chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#basic-line-chart-code" role="button" aria-controls="basic-line-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="basic-line-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-line-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-line-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-line-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-line-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic area line chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#basic-area-line-chart-code" role="button" aria-controls="basic-area-line-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="basic-area-line-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/area-line-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-area-line-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/area-line-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-area-line-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Stacked line chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#stacked-line-chart-code" role="button" aria-controls="stacked-line-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="stacked-line-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-line-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-stacked-line-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-line-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-stacked-line-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Stacked area chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#stacked-area-chart-code" role="button" aria-controls="stacked-area-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="stacked-area-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-area-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-stacked-area-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/stacked-area-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-stacked-area-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Line marker chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#line-marker-chart-code" role="button" aria-controls="line-marker-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="line-marker-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/line-marker-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-line-marker-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/line-marker-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-line-marker-chart-example" style="min-height:350px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Area pieces chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#area-pieces-chart-code" role="button" aria-controls="area-pieces-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="area-pieces-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/area-pieces-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-area-pieces-chart-example&quot; style=&quot;min-height:350px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/area-pieces-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-area-pieces-chart-example" style="min-height:350px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Step line chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#step-line-chart-code" role="button" aria-controls="step-line-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="step-line-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/step-line-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-step-line-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/step-line-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-step-line-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Line gradient chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#line-gradient-chart-code" role="button" aria-controls="line-gradient-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="line-gradient-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/line-gradient-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-line-gradient-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/line-gradient-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-line-gradient-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Dynamic line chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#dynamic-line-chart-code" role="button" aria-controls="dynamic-line-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="dynamic-line-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/dynamic-line-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-dynamic-line-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/dynamic-line-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-dynamic-line-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Line log chart</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#line-log-chart-code" role="button" aria-controls="line-log-chart-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="line-log-chart-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/line-log-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-line-log-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/line-log-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-line-log-chart-example" style="min-height:300px"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Share dataset</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#share-dataset-code" role="button" aria-controls="share-dataset-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="share-dataset-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/share-dataset-chart.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-share-dataset-chart-example&quot; style=&quot;min-height:500px&quot;&gt;&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/share-dataset-chart.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-share-dataset-chart-example" style="min-height:500px"></div>
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
