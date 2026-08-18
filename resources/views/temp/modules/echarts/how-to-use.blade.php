@extends('layouts.vertical')

@section('title', 'How To Use')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">How to use</h2>
    <p class="text-body-tertiary lead mb-2">A powerful, interactive charting and visualization library for browser.</p><a
        class="btn btn-link p-0" href="https://echarts.apache.org/en/option.html#title" target="_blank">Documentation for
        EChart<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">JavaScript</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="javascript-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;vendors/echarts/echarts.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <pre><code class="language-html">&lt;script src=&quot;vendors/echarts/echarts.min.js&quot;&gt;&lt;/script&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Getting Started</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="getting-started-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h5 class=&quot;mb-3&quot;&gt;For gulp based workflow:&lt;/h5&gt;
&lt;p&gt;To add a new chart using Echarts, follow the steps below: &lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt;Add an HTML element with a unique class name. For example: &lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt; &amp;lt;div class=&amp;quot;echart-total-sales-chart&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/li&gt;
  &lt;li&gt;Give a height of the chart element in CSS&lt;/li&gt;
  &lt;li&gt;Add a JavaScript file into &lt;code&gt;src/js &lt;/code&gt;directory and write a function to initialize the Echart with the required options.&lt;br /&gt;&lt;strong&gt;Tips: &lt;/strong&gt;Select any chart of Phoenix which you want to duplicate, copy the file and replace the class name and options.&lt;/li&gt;
  &lt;li&gt;import and call the function into the corresponding javascript file of the current page. For example: &lt;code&gt;ecommerce-dashboard.js, &lt;/code&gt;&lt;code&gt;projectmanagement-dashboard.js, &lt;/code&gt;&lt;code&gt;[your-custom-page].js &lt;/code&gt;etc.&lt;/li&gt;
&lt;/ul&gt;
&lt;h5 class=&quot;mt-5 mb-3&quot;&gt;If you're not using gulp: &lt;/h5&gt;
&lt;p&gt;If you are not using gulp based workflow and want to add Echart, Follow the steps below:&lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt;Add an HTML element with a unique class name. For example: &lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt; &amp;lt;div class=&amp;quot;echart-total-sales-chart&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/li&gt;
  &lt;li&gt;Give a height of the chart element in CSS&lt;/li&gt;
  &lt;li&gt;Write a function to initialize the echart with the class name added in the first step and pass the necessary options into the corresponding javascript file of the current page, such as &lt;code&gt;public/assets/js/ecommerce-dashboard.js, &lt;/code&gt;&lt;code&gt;public/assets/js/projectmanagement-dashboard.js, &lt;/code&gt;&lt;code&gt;public/assets/js/[your-custom-page].js &lt;/code&gt;etc.&lt;br /&gt;&lt;strong&gt;Tips: &lt;/strong&gt;Select the chart you want to duplicate and copy the chart's code from the corresponding javascript file or &lt;code&gt;public/assets/js/echart-example.js&lt;/code&gt;. Then place the code bottom of your selected js file, for example, &lt;code&gt;public/assets/js/ecommerce-dashboard.js, &lt;/code&gt;&lt;code&gt;public/assets/js/projectmanagement-dashboard.js, &lt;/code&gt;or &lt;code&gt;public/assets/js/[your-custom-page].js &lt;/code&gt;file and replace the class name and the options.&lt;/li&gt;
  &lt;li&gt;Call the function you made in previous step.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <h5 class="mb-3">For gulp based workflow:</h5>
                            <p>To add a new chart using Echarts, follow the steps below: </p>
                            <ul>
                                <li>Add an HTML element with a unique class name. For example:
                                    <pre><code class="language-html"> &lt;div class=&quot;echart-total-sales-chart&quot;&gt;&lt;/div&gt;</code></pre>
                                </li>
                                <li>Give a height of the chart element in CSS</li>
                                <li>Add a JavaScript file into <code>src/js </code>directory and write a function to
                                    initialize the Echart with the required options.<br><strong>Tips: </strong>Select any
                                    chart of Phoenix which you want to duplicate, copy the file and replace the class name
                                    and options.</li>
                                <li>import and call the function into the corresponding javascript file of the current page.
                                    For example: <code>ecommerce-dashboard.js, </code><code>projectmanagement-dashboard.js,
                                    </code><code>[your-custom-page].js </code>etc.</li>
                            </ul>
                            <h5 class="mt-5 mb-3">If you're not using gulp: </h5>
                            <p>If you are not using gulp based workflow and want to add Echart, Follow the steps below:</p>
                            <ul>
                                <li>Add an HTML element with a unique class name. For example:
                                    <pre><code class="language-html"> &lt;div class=&quot;echart-total-sales-chart&quot;&gt;&lt;/div&gt;</code></pre>
                                </li>
                                <li>Give a height of the chart element in CSS</li>
                                <li>Write a function to initialize the echart with the class name added in the first step
                                    and pass the necessary options into the corresponding javascript file of the current
                                    page, such as <code>public/assets/js/ecommerce-dashboard.js,
                                    </code><code>public/assets/js/projectmanagement-dashboard.js,
                                    </code><code>public/assets/js/[your-custom-page].js </code>etc.<br><strong>Tips:
                                    </strong>Select the chart you want to duplicate and copy the chart's code from the
                                    corresponding javascript file or <code>public/assets/js/echart-example.js</code>. Then
                                    place the code bottom of your selected js file, for example,
                                    <code>public/assets/js/ecommerce-dashboard.js,
                                    </code><code>public/assets/js/projectmanagement-dashboard.js, </code>or
                                    <code>public/assets/js/[your-custom-page].js </code>file and replace the class name and
                                    the options.</li>
                                <li>Call the function you made in previous step.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Responsive</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="responsive-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;All the charts of Echart’s are responsive by default in Phoenix. Echart’s responsive is working from echartSetOption function in &lt;code&gt;src/js/theme/charts/echarts/echarts-utils.js&lt;/code&gt; file (If you are not using gulp based workflow, you can find the function in &lt;code&gt;public/assets/js/phoenix.js&lt;/code&gt;). You can pass responsive options object as 4th parameter of &lt;code&gt;echartSetOption&lt;/code&gt; function. The object will consist the styles of different breakpoints like xs, sm, md, lg, xl, xxl. For example: Here the options will work above the sm(576px) screen.&lt;/p&gt;&lt;pre class=&quot;scrollbar mb-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const responsiveOptions = {
  sm: {
    yAxis: {
      show: true
    },
    grid: {
      left: 100
    }
  }
};&lt;/code&gt;&lt;/pre&gt;&lt;!-- Find the JS file for the following chart at: src/js/theme/charts/echarts/crm-lead-conversion.js--&gt;
&lt;!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/crm-dashboard.js--&gt;
&lt;div class=&quot;echart-lead-conversion&quot; style=&quot;min-height: 250px;&quot;&gt;&lt;/div&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <p>All the charts of Echart’s are responsive by default in Phoenix. Echart’s responsive is
                                working from echartSetOption function in
                                <code>src/js/theme/charts/echarts/echarts-utils.js</code> file (If you are not using gulp
                                based workflow, you can find the function in <code>public/assets/js/phoenix.js</code>). You
                                can pass responsive options object as 4th parameter of <code>echartSetOption</code>
                                function. The object will consist the styles of different breakpoints like xs, sm, md, lg,
                                xl, xxl. For example: Here the options will work above the sm(576px) screen.</p>
                            <pre class="scrollbar mb-5"><code class="lang-html">const responsiveOptions = {
  sm: {
    yAxis: {
      show: true
    },
    grid: {
      left: 100
    }
  }
};</code></pre>
                            <!-- Find the JS file for the following chart at: src/js/theme/charts/echarts/crm-lead-conversion.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/crm-dashboard.js-->
                            <div class="echart-lead-conversion" style="min-height: 250px;"></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-end">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Echart inside a Tab</h4>
                                <p class="mb-0 mt-2 text-body-secondary">To set any echarts inside Bootstrap tab component
                                    in Phoenix, follow the steps below:</p>
                                <ul>
                                    <li>Add <code>data-tab-has-echart </code>attribute to the <code>.nav-tab </code>element.
                                    </li>
                                    <li>Then add <code>data-echart-tab </code>attribute to the Echart element.</li>
                                </ul>
                                <p>By following these steps multiple echart can be added in a tab or multiple tabs with
                                    Echarts also be placed.</p>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#echart-inside-a-tab-code" role="button"
                                        aria-controls="echart-inside-a-tab-code" aria-expanded="false"> <span class="me-2"
                                            data-feather="code"></span>View code</a><a
                                        class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                            data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="echart-inside-a-tab-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;echart-tab-example nav nav-tabs mb-3&quot; id=&quot;echart-tab-example&quot; role=&quot;tablist&quot; data-tab-has-echarts=&quot;data-tab-has-echarts&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;&lt;button class=&quot;nav-link active&quot; id=&quot;bar-chart-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#bar-chart&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;bar-chart&quot; aria-selected=&quot;false&quot;&gt;Bar Chart&lt;/button&gt;&lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;&lt;button class=&quot;nav-link&quot; id=&quot;line-charts-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#line-charts&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;line-charts&quot; aria-selected=&quot;false&quot;&gt;Line Chart&lt;/button&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;echart-tab-example-content&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;bar-chart&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bar-chart-tab&quot;&gt;
    &lt;div class=&quot;echart-projection-actual&quot; style=&quot;height: 300px&quot; data-echart-tab=&quot;data-echart-tab&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;line-charts&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;line-charts-tab&quot;&gt;
    &lt;div class=&quot;echart-total-sales-chart&quot; style=&quot;height: 300px&quot; data-echart-tab=&quot;data-echart-tab&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <ul class="echart-tab-example nav nav-tabs mb-3" id="echart-tab-example" role="tablist"
                                data-tab-has-echarts="data-tab-has-echarts">
                                <li class="nav-item" role="presentation"><button class="nav-link active"
                                        id="bar-chart-tab" data-bs-toggle="tab" data-bs-target="#bar-chart"
                                        type="button" role="tab" aria-controls="bar-chart"
                                        aria-selected="false">Bar Chart</button></li>
                                <li class="nav-item" role="presentation"><button class="nav-link" id="line-charts-tab"
                                        data-bs-toggle="tab" data-bs-target="#line-charts" type="button" role="tab"
                                        aria-controls="line-charts" aria-selected="false">Line Chart</button></li>
                            </ul>
                            <div class="tab-content" id="echart-tab-example-content">
                                <div class="tab-pane fade show active" id="bar-chart" role="tabpanel"
                                    aria-labelledby="bar-chart-tab">
                                    <div class="echart-projection-actual" style="height: 300px"
                                        data-echart-tab="data-echart-tab"></div>
                                </div>
                                <div class="tab-pane fade" id="line-charts" role="tabpanel"
                                    aria-labelledby="line-charts-tab">
                                    <div class="echart-total-sales-chart" style="height: 300px"
                                        data-echart-tab="data-echart-tab"></div>
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
                        <li class="nav-item"> <a class="nav-link" href="#javascript">JavaScript</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#getting-started">Getting Started</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#responsive">Responsive</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#echart-inside-a-tab">Echart inside a Tab</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce-dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/crm-dashboard.js') }}"></script>
@endpush
