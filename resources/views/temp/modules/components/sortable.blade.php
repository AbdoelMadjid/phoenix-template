@extends('layouts.vertical')

@section('title', 'Sortable')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Sortable</h2>
        <p class="text-body-tertiary lead mb-2">Reorderable drag-and-drop lists for modern browsers and touch devices. No jQuery or framework required.</p><a class="btn btn-link p-0" href="https://sortablejs.github.io/Sortable/" target="_blank">Sortable<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="card shadow-none border my-4" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                  <div class="row g-3 justify-content-between align-items-end">
                    <div class="col-12 col-md">
                      <h4 class="text-body mb-0" data-anchor="data-anchor">Basic Example</h4>
                      <p class="mb-0 mt-2 text-body-secondary">Hare is the basic example of sortableJs. You can drag sortable items between the same group. Use <code>data-sortable</code> attribute to get default behavior. We have also designed our <a href="#!">Kanban Board</a> usign SortableJS libarary.</p>
                    </div>
                    <div class="col col-md-auto">
                      <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#basic-example-code" role="button" aria-controls="basic-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="collapse code-collapse" id="basic-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-6&quot; data-sortable=&quot;data-sortable&quot;&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item1&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item2&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item3&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6&quot; data-sortable=&quot;data-sortable&quot;&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item4&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item5&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy">
                    <div class="row">
                      <div class="col-6" data-sortable="data-sortable">
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item1</p>
                        </div>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item2</p>
                        </div>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item3</p>
                        </div>
                      </div>
                      <div class="col-6" data-sortable="data-sortable">
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item4</p>
                        </div>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item5</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card shadow-none border my-4" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                  <div class="row g-3 justify-content-between align-items-end">
                    <div class="col-12 col-md">
                      <h4 class="text-body mb-0" data-anchor="data-anchor">User Options</h4>
                      <p class="mb-0 mt-2 text-body-secondary">You can pass sortable options through <code>data-sortable</code> attribute like <code>data-sortable="{"group":"example","animation":150}"</code></p>
                    </div>
                    <div class="col col-md-auto">
                      <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#user-options-code" role="button" aria-controls="user-options-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="collapse code-collapse" id="user-options-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-6&quot; data-sortable='{&quot;group&quot;:&quot;example&quot;,&quot;animation&quot;:150}'&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item1&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item2&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item3&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6&quot; data-sortable='{&quot;group&quot;:&quot;example&quot;,&quot;animation&quot;:150}'&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item4&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sortable-item-wrapper mb-3&quot;&gt;
      &lt;p class=&quot;mb-0 sortable-item bg-body-highlight p-3 rounded-3&quot;&gt;Item5&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy">
                    <div class="row">
                      <div class="col-6" data-sortable='{"group":"example","animation":150}'>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item1</p>
                        </div>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item2</p>
                        </div>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item3</p>
                        </div>
                      </div>
                      <div class="col-6" data-sortable='{"group":"example","animation":150}'>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item4</p>
                        </div>
                        <div class="sortable-item-wrapper mb-3">
                          <p class="mb-0 sortable-item bg-body-highlight p-3 rounded-3">Item5</p>
                        </div>
                      </div>
                    </div>
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
                  <div class="collapse code-collapse" id="javascript-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt; &amp;lt;script src=&amp;quot;vendors/sortablejs/Sortable.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy"><pre><code class="language-html"> &lt;script src=&quot;vendors/sortablejs/Sortable.min.js&quot;&gt;&lt;/script&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-2">
              <div class="position-sticky mt-xl-4" style="top: 80px;">
                <h5 class="lh-1">On this page </h5>
                <hr>
                <ul class="nav nav-vertical flex-column doc-nav" data-doc-nav="data-doc-nav">
                  <li class="nav-item"> <a class="nav-link" href="#basic-example">Basic Example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#user-options">User Options</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/sortablejs/Sortable.min.js') }}"></script>
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
