@extends('layouts.vertical')

@section('title', 'Calendar')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Calendar</h2>
        <p class="text-body-tertiary lead mb-2">Phoenix uses FullCalendar for calendar component. FullCalendar is full-sized drag & drop event calendar.</p><a class="btn btn-link p-0" href="https://fullcalendar.io/" target="_blank">FullCalendar Documentation<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-end">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0" data-anchor="data-anchor">Calendar Example</h4>
                <p class="mb-0 mt-2 text-body-secondary">Basic example of FullCalendar with default options in Phoenix. You can also pass the extra options using <code>data-calendar </code> attribute.<a href="{{ url('apps/calendar') }}" target="_blank">See advanced implementation of fullCalendar </a></p>
              </div>
              <div class="col col-md-auto">
                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#calendar-example-code" role="button" aria-controls="calendar-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="calendar-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div data-calendar='{&quot;events&quot;:[{&quot;title&quot;:&quot;Bootcamp&quot;,&quot;start&quot;:&quot;2025-11-02&quot;}]}'&gt;&lt;/div&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <div data-calendar='{"events":[{"title":"Bootcamp","start":"2025-11-02"}]}'></div>
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
            <div class="collapse code-collapse" id="javascript-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt; &amp;lt;script src=&amp;quot;vendors/fullcalendar/index.global.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy"><pre><code class="language-html"> &lt;script src=&quot;vendors/fullcalendar/index.global.min.js&quot;&gt;&lt;/script&gt;</code></pre>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/fullcalendar/index.global.min.js') }}"></script>
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
