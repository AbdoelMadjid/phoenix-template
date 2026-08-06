@extends('layouts.vertical')

@section('title', 'Geo Map')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Getting Started</h2>
        <p class="text-body-tertiary lead mb-2">ECharts can uses geoJSON format as map outline. You can use third-party <a href="https://geojson.org/" target="_blank">geoJSON</a> data (like maps) and register them into ECharts. You can get the JSON data from this <a href="https://github.com/pissang/starbucks/tree/gh-pages/json">Starbuck's Github repository</a>.</p><a class="btn btn-link p-0" href="https://echarts.apache.org/en/option.html#series-map.type" target="_blank">Echart's map documentation<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="row g-4 mb-9 mt-2">
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">World map</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#world-map-code" role="button" aria-controls="world-map-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="world-map-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;position-absolute z-2&quot; style=&quot;right:16px&quot;&gt;&lt;button class=&quot;btn btn-phoenix-secondary btn-sm session-by-country-map-reset&quot;&gt;&lt;span class=&quot;fas fa-sync-alt fs-9&quot;&gt;&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/session-by-country-map.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js--&gt;
&lt;div class=&quot;echart-session-by-country-map&quot; style=&quot;min-height: 400px;&quot;&gt;&lt;/div&gt;
&lt;h5 class=&quot;mt-3 mb-2&quot;&gt;JavaScript &lt;/h5&gt;&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt; &amp;lt;script src=&amp;quot;assets/data/world.js&amp;quot;&amp;gt; &amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <div class="position-absolute z-2" style="right:16px"><button class="btn btn-phoenix-secondary btn-sm session-by-country-map-reset"><span class="fas fa-sync-alt fs-9"></span></button></div><!-- Find the JS file for the following chart at: src/js/charts/echarts/session-by-country-map.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-session-by-country-map" style="min-height: 400px;"></div>
                  <h5 class="mt-3 mb-2">JavaScript </h5><pre><code class="language-html"> &lt;script src=&quot;assets/data/world.js&quot;&gt; &lt;/script&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Usa map</h4>
                  </div>
                  <div class="col col-md-auto">
                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#usa-map-code" role="button" aria-controls="usa-map-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="collapse code-collapse" id="usa-map-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;position-absolute z-2&quot; style=&quot;right:16px&quot;&gt;&lt;button class=&quot;btn btn-phoenix-secondary btn-sm usa-map-reset&quot;&gt;&lt;span class=&quot;fas fa-sync-alt fs-9&quot;&gt;&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;&lt;!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/map-usa.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js--&gt;
&lt;div class=&quot;echart-map-usa-example&quot; style=&quot;min-height: 400px;&quot;&gt;&lt;/div&gt;
&lt;h5 class=&quot;mt-3 mb-2&quot;&gt;JavaScript &lt;/h5&gt;&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt; &amp;lt;script src=&amp;quot;assets/data/usa.js&amp;quot;&amp;gt; &amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                  <div class="position-absolute z-2" style="right:16px"><button class="btn btn-phoenix-secondary btn-sm usa-map-reset"><span class="fas fa-sync-alt fs-9"></span></button></div><!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/map-usa.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                  <div class="echart-map-usa-example" style="min-height: 400px;"></div>
                  <h5 class="mt-3 mb-2">JavaScript </h5><pre><code class="language-html"> &lt;script src=&quot;assets/data/usa.js&quot;&gt; &lt;/script&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/data/world.js') }}"></script>
<script src="{{ asset('assets/data/usa.js') }}"></script>
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
<script src="{{ asset('assets/js/echarts-example.js') }}"></script>
@endpush
