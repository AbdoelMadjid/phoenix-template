@extends('layouts.vertical')

@section('title', 'Vertical Align')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Vertical Align</h2>
        <p class="text-body-tertiary lead mb-2">Easily change the vertical alignment of inline, inline-block, inline-table, and table cell elements.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/vertical-align/" target="_blank">Vertical align on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                        <div class="mt-2 text-body-secondary">
                          <p class="mb-0 pt-1 mt-2">Change the alignment of elements with the vertical-alignment utilities. Please note that vertical-align only affects inline, inline-block, inline-table, and table cell elements.
                            <br> Choose from <code>.align-baseline,</code> <code>.align-top,</code> <code>.align-middle,</code> <code>.align-bottom,</code> <code>.align-text-bottom,</code> and <code>.align-text-top</code> as needed.
                            <br>Multiple links and tap targets are not recommended with stretched links. However, some <code>position </code>and <code>z-index </code>styles can help should this be required.
                          </p>
                        </div>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#example-code" role="button" aria-controls="example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;span class=&quot;align-baseline&quot;&gt;baseline&lt;/span&gt;
&lt;span class=&quot;align-top&quot;&gt;top&lt;/span&gt;
&lt;span class=&quot;align-middle&quot;&gt;middle&lt;/span&gt;
&lt;span class=&quot;align-bottom&quot;&gt;bottom&lt;/span&gt;
&lt;span class=&quot;align-text-top&quot;&gt;text-top&lt;/span&gt;
&lt;span class=&quot;align-text-bottom&quot;&gt;text-bottom&lt;/span&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <span class="align-baseline">baseline</span>
                      <span class="align-top">top</span>
                      <span class="align-middle">middle</span>
                      <span class="align-bottom">bottom</span>
                      <span class="align-text-top">text-top</span>
                      <span class="align-text-bottom">text-bottom</span>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Vertical Alignment With Table Cells</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#vertical-alignment-with-table-cells-code" role="button" aria-controls="vertical-alignment-with-table-cells-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="vertical-alignment-with-table-cells-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-responsive scrollbar&quot;&gt;
  &lt;table class=&quot;table table-bordered&quot; style=&quot;height: 100px;&quot;&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td class=&quot;align-baseline&quot;&gt;baseline&lt;/td&gt;
        &lt;td class=&quot;align-top&quot;&gt;top&lt;/td&gt;
        &lt;td class=&quot;align-middle&quot;&gt;middle&lt;/td&gt;
        &lt;td class=&quot;align-bottom&quot;&gt;bottom&lt;/td&gt;
        &lt;td class=&quot;align-text-top&quot;&gt;text-top&lt;/td&gt;
        &lt;td class=&quot;align-text-bottom&quot;&gt;text-bottom&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="table-responsive scrollbar">
                        <table class="table table-bordered" style="height: 100px;">
                          <tbody>
                            <tr>
                              <td class="align-baseline">baseline</td>
                              <td class="align-top">top</td>
                              <td class="align-middle">middle</td>
                              <td class="align-bottom">bottom</td>
                              <td class="align-text-top">text-top</td>
                              <td class="align-text-bottom">text-bottom</td>
                            </tr>
                          </tbody>
                        </table>
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
                  <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#vertical-alignment-with-table-cells">Vertical Alignment With Table Cells example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
