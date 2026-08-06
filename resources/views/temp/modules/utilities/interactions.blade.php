@extends('layouts.vertical')

@section('title', 'Interactions')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Interactions</h2>
        <p class="text-body-tertiary lead mb-2">Utility classes that change how users interact with contents of a website.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/interactions/" target="_blank">Interactions on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Text selection</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Change the way in which the content is selected when the user interacts with it.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#text-selection-code" role="button" aria-controls="text-selection-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="text-selection-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;user-select-all&quot;&gt;This paragraph will be entirely selected when clicked by the user.&lt;/p&gt;
&lt;p class=&quot;user-select-auto&quot;&gt;This paragraph has default select behavior.&lt;/p&gt;
&lt;p class=&quot;user-select-none&quot;&gt;This paragraph will not be selectable when clicked by the user.&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
                      <p class="user-select-auto">This paragraph has default select behavior.</p>
                      <p class="user-select-none">This paragraph will not be selectable when clicked by the user.</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Pointer events</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Bootstrap provides <code>.pe-none</code> and <code>.pe-auto</code> classes to prevent or add element interactions.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#pointer-events-code" role="button" aria-controls="pointer-events-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="pointer-events-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;&lt;a class=&quot;pe-none&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked.&lt;/p&gt;
&lt;p&gt;&lt;a class=&quot;pe-auto&quot; href=&quot;#&quot;&gt;This link&lt;/a&gt; can be clicked (this is default behavior).&lt;/p&gt;
&lt;p class=&quot;pe-none&quot;&gt;&lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked because the &lt;code&gt;pointer-events&lt;/code&gt; property is inherited from its parent. However, &lt;a class=&quot;pe-auto&quot; href=&quot;#&quot;&gt;this link&lt;/a&gt; has a &lt;code&gt;pe-auto&lt;/code&gt; class and can be clicked.&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p><a class="pe-none" href="#" tabindex="-1" aria-disabled="true">This link</a> can not be clicked.</p>
                      <p><a class="pe-auto" href="#">This link</a> can be clicked (this is default behavior).</p>
                      <p class="pe-none"><a href="#" tabindex="-1" aria-disabled="true">This link</a> can not be clicked because the <code>pointer-events</code> property is inherited from its parent. However, <a class="pe-auto" href="#">this link</a> has a <code>pe-auto</code> class and can be clicked.</p>
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
                  <li class="nav-item"> <a class="nav-link" href="#text-selection">Text selection</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#pointer-events">Pointer events</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
