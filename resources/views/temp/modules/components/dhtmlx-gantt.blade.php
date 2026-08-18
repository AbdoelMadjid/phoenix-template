@extends('layouts.vertical')

@section('title', 'Dhtmlx Gantt')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">DHTMLX Gantt</h2>
    <p class="text-body-tertiary lead mb-2">DHTMLX Gantt is an open source JavaScript Gantt chart library that helps you
        illustrate and manage a project schedule in a nice-looking diagram.</p><a class="btn btn-link p-0"
        href="https://github.com/DHTMLX/gantt" target="_blank">DHTMLX Gantt<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mb-9">
        <div class="card shadow-none border mb-4 mt-5" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Html</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="html-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;div class=&amp;quot;gantt-app-container scrollbar&amp;quot;&amp;gt;
  &amp;lt;div id=&amp;quot;gantt-app&amp;quot; style=&amp;quot;width:100%;height:100%;&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;
&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre class="scrollbar my-5"><code class="language-html">&lt;div class=&quot;gantt-app-container scrollbar&quot;&gt;
  &lt;div id=&quot;gantt-app&quot; style=&quot;width:100%;height:100%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
        <div class="card shadow-none border mb-3" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Stylesheet</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="stylesheet-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;link href=&amp;quot;../../vendors/dhtmlx-gantt/dhtmlxgantt.css&amp;quot; rel=&amp;quot;stylesheet&amp;quot; /&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre><code class="language-html">&lt;link href=&quot;../../vendors/dhtmlx-gantt/dhtmlxgantt.css&quot; rel=&quot;stylesheet&quot; /&gt;</code></pre>
                </div>
            </div>
        </div>
        <div class="card shadow-none border mb-3" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Javascript</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="javascript-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;../../vendors/dhtmlx-gantt/dhtmlxgantt.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;
&amp;lt;script src=&amp;quot;../../assets/js/pages/gantt-chart.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre><code class="language-html">&lt;script src=&quot;../../vendors/dhtmlx-gantt/dhtmlxgantt.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;../../assets/js/pages/gantt-chart.js&quot;&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
