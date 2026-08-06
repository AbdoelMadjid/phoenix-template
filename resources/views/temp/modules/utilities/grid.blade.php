@extends('layouts.vertical')

@section('title', 'Grid')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Grid</h2>
        <p class="text-body-tertiary lead mb-2">Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, six default responsive tiers, Sass variables and mixins, and dozens of predefined classes.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/layout/grid/" target="_blank">Grid on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Grid options</h4>
                        <p class="mb-0 mt-2 text-body-secondary">While Bootstrap uses <code>.col-</code>, <code>.col-sm-</code>, <code>.col-md-</code>, <code>.col-lg-</code> and <code>.col-xl-</code>, we introduced a new breakpoint, <code>.col-xxl-</code> for the massive screen size.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#grid-options-code" role="button" aria-controls="grid-options-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="grid-options-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-responsive scrollbar&quot;&gt;
  &lt;table class=&quot;table table-bordered table-striped mb-0&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Extra small&lt;br /&gt;&lt;small&gt;&amp;lt;576px&lt;/small&gt;&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Small&lt;br /&gt;&lt;small&gt;≥576px&lt;/small&gt;&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Medium&lt;br /&gt;&lt;small&gt;≥768px&lt;/small&gt;&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Large&lt;br /&gt;&lt;small&gt;≥992px&lt;/small&gt;&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Extra large&lt;br /&gt;&lt;small&gt;≥1200px&lt;/small&gt;&lt;/th&gt;
        &lt;th class=&quot;text-center&quot;&gt;Massive&lt;br /&gt;&lt;small&gt;≥1400px&lt;/small&gt;&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th class=&quot;text-nowrap&quot; scope=&quot;row&quot;&gt;Max container width&lt;/th&gt;
        &lt;td&gt;None (auto)&lt;/td&gt;
        &lt;td&gt;540px&lt;/td&gt;
        &lt;td&gt;720px&lt;/td&gt;
        &lt;td&gt;960px&lt;/td&gt;
        &lt;td&gt;1140px&lt;/td&gt;
        &lt;td&gt;1320px&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th class=&quot;text-nowrap&quot; scope=&quot;row&quot;&gt;Class prefix&lt;/th&gt;
        &lt;td&gt;&lt;code&gt;.col-&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;.col-sm-&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;.col-md-&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;.col-lg-&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;.col-xl-&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;.col-xxl-&lt;/code&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th class=&quot;text-nowrap&quot; scope=&quot;row&quot;&gt;# of columns&lt;/th&gt;
        &lt;td colspan=&quot;6&quot;&gt;12&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th class=&quot;text-nowrap&quot; scope=&quot;row&quot;&gt;Gutter width&lt;/th&gt;
        &lt;td colspan=&quot;6&quot;&gt;30px (15px on each side of a column)&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th class=&quot;text-nowrap&quot; scope=&quot;row&quot;&gt;Nestable&lt;/th&gt;
        &lt;td colspan=&quot;6&quot;&gt;Yes&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th class=&quot;text-nowrap&quot; scope=&quot;row&quot;&gt;Column ordering&lt;/th&gt;
        &lt;td colspan=&quot;6&quot;&gt;Yes&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped mb-0">
                          <thead>
                            <tr>
                              <th></th>
                              <th class="text-center">Extra small<br><small>&lt;576px</small></th>
                              <th class="text-center">Small<br><small>≥576px</small></th>
                              <th class="text-center">Medium<br><small>≥768px</small></th>
                              <th class="text-center">Large<br><small>≥992px</small></th>
                              <th class="text-center">Extra large<br><small>≥1200px</small></th>
                              <th class="text-center">Massive<br><small>≥1400px</small></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th class="text-nowrap" scope="row">Max container width</th>
                              <td>None (auto)</td>
                              <td>540px</td>
                              <td>720px</td>
                              <td>960px</td>
                              <td>1140px</td>
                              <td>1320px</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Class prefix</th>
                              <td><code>.col-</code></td>
                              <td><code>.col-sm-</code></td>
                              <td><code>.col-md-</code></td>
                              <td><code>.col-lg-</code></td>
                              <td><code>.col-xl-</code></td>
                              <td><code>.col-xxl-</code></td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row"># of columns</th>
                              <td colspan="6">12</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Gutter width</th>
                              <td colspan="6">30px (15px on each side of a column)</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Nestable</th>
                              <td colspan="6">Yes</td>
                            </tr>
                            <tr>
                              <th class="text-nowrap" scope="row">Column ordering</th>
                              <td colspan="6">Yes</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Equal-width</h4>
                        <p class="mb-0 mt-2 text-body-secondary">For example, here are two grid layouts that apply to every device and viewport, from xs to xxl. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#equal-width-code" role="button" aria-controls="equal-width-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="equal-width-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;container text-center&quot;&gt;
  &lt;div class=&quot;row bg-body-highlight mb-3&quot;&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;1 of 2&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;2 of 2&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row bg-body-highlight&quot;&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;1 of 3&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;2 of 3&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;3 of 3&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="container text-center">
                        <div class="row bg-body-highlight mb-3">
                          <div class="col p-2 border">1 of 2</div>
                          <div class="col p-2 border">2 of 2</div>
                        </div>
                        <div class="row bg-body-highlight">
                          <div class="col p-2 border">1 of 3</div>
                          <div class="col p-2 border">2 of 3</div>
                          <div class="col p-2 border">3 of 3</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Column width</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#column-width-code" role="button" aria-controls="column-width-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="column-width-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;container text-center&quot;&gt;
  &lt;div class=&quot;row bg-body-highlight mb-3&quot;&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;1 of 3&lt;/div&gt;
    &lt;div class=&quot;col-6 p-2 border&quot;&gt;2 of 3 (wider)&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;3 of 3&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row bg-body-highlight&quot;&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;1 of 3&lt;/div&gt;
    &lt;div class=&quot;col-5 p-2 border&quot;&gt;2 of 3 (wider)&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;3 of 3&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="container text-center">
                        <div class="row bg-body-highlight mb-3">
                          <div class="col p-2 border">1 of 3</div>
                          <div class="col-6 p-2 border">2 of 3 (wider)</div>
                          <div class="col p-2 border">3 of 3</div>
                        </div>
                        <div class="row bg-body-highlight">
                          <div class="col p-2 border">1 of 3</div>
                          <div class="col-5 p-2 border">2 of 3 (wider)</div>
                          <div class="col p-2 border">3 of 3</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Stacked to horizontal</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Using a single set of <code>.col-sm-*</code> classes, you can create a basic grid system that starts out stacked and becomes horizontal at the small breakpoint (<code>sm</code>).</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#stacked-to-horizontal-code" role="button" aria-controls="stacked-to-horizontal-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="stacked-to-horizontal-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;container text-center&quot;&gt;
  &lt;div class=&quot;row bg-body-highlight mb-3&quot;&gt;
    &lt;div class=&quot;col-sm-8 p-2 border&quot;&gt;col-sm-8&lt;/div&gt;
    &lt;div class=&quot;col-sm-4 p-2 border&quot;&gt;col-sm-4&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row bg-body-highlight&quot;&gt;
    &lt;div class=&quot;col-sm p-2 border&quot;&gt;col-sm&lt;/div&gt;
    &lt;div class=&quot;col-sm p-2 border&quot;&gt;col-sm&lt;/div&gt;
    &lt;div class=&quot;col-sm p-2 border&quot;&gt;col-sm&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="container text-center">
                        <div class="row bg-body-highlight mb-3">
                          <div class="col-sm-8 p-2 border">col-sm-8</div>
                          <div class="col-sm-4 p-2 border">col-sm-4</div>
                        </div>
                        <div class="row bg-body-highlight">
                          <div class="col-sm p-2 border">col-sm</div>
                          <div class="col-sm p-2 border">col-sm</div>
                          <div class="col-sm p-2 border">col-sm</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Mix and match</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. See the example below for a better idea of how it all works.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#mix-and-match-code" role="button" aria-controls="mix-and-match-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="mix-and-match-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;container text-center&quot;&gt;
  &lt;div class=&quot;row mb-3&quot;&gt;
    &lt;div class=&quot;col-md-8 bg-body-highlight p-2 border&quot;&gt;.col-md-8&lt;/div&gt;
    &lt;div class=&quot;col-6 col-md-4 bg-body-highlight p-2 border&quot;&gt;.col-6 .col-md-4&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row mb-3&quot;&gt;
    &lt;div class=&quot;col-6 col-md-4 bg-body-highlight p-2 border&quot;&gt;.col-6 .col-md-4&lt;/div&gt;
    &lt;div class=&quot;col-6 col-md-4 bg-body-highlight p-2 border&quot;&gt;.col-6 .col-md-4&lt;/div&gt;
    &lt;div class=&quot;col-6 col-md-4 bg-body-highlight p-2 border&quot;&gt;.col-6 .col-md-4&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-6 bg-body-highlight p-2 border&quot;&gt;.col-6&lt;/div&gt;
    &lt;div class=&quot;col-6 bg-body-highlight p-2 border&quot;&gt;.col-6&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="container text-center">
                        <div class="row mb-3">
                          <div class="col-md-8 bg-body-highlight p-2 border">.col-md-8</div>
                          <div class="col-6 col-md-4 bg-body-highlight p-2 border">.col-6 .col-md-4</div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-6 col-md-4 bg-body-highlight p-2 border">.col-6 .col-md-4</div>
                          <div class="col-6 col-md-4 bg-body-highlight p-2 border">.col-6 .col-md-4</div>
                          <div class="col-6 col-md-4 bg-body-highlight p-2 border">.col-6 .col-md-4</div>
                        </div>
                        <div class="row">
                          <div class="col-6 bg-body-highlight p-2 border">.col-6</div>
                          <div class="col-6 bg-body-highlight p-2 border">.col-6</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Row columns</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Use the responsive <code>.row-cols-*</code> classes to quickly set the number of columns that best render your content and layout. Whereas normal <code>.col-*</code> classes apply to the individual columns (e.g., <code>.col-md-4</code>), the row columns classes are set on the parent .row as a shortcut. With <code>.row-cols-auto</code> you can give the columns their natural width. <br> Use these row columns classes to quickly create basic grid layouts or to control your card layouts.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#row-columns-code" role="button" aria-controls="row-columns-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="row-columns-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;container text-center&quot;&gt;
  &lt;div class=&quot;row row-cols-2 bg-body-highlight&quot;&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;Column&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;Column&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;Column&lt;/div&gt;
    &lt;div class=&quot;col p-2 border&quot;&gt;Column&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="container text-center">
                        <div class="row row-cols-2 bg-body-highlight">
                          <div class="col p-2 border">Column</div>
                          <div class="col p-2 border">Column</div>
                          <div class="col p-2 border">Column</div>
                          <div class="col p-2 border">Column</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Nesting</h4>
                        <p class="mb-0 mt-2 text-body-secondary">To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#nesting-code" role="button" aria-controls="nesting-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="nesting-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;container text-center&quot;&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-sm-3 bg-body-highlight p-2 border&quot;&gt;Level 1: .col-sm-3&lt;/div&gt;
    &lt;div class=&quot;col-sm-9 bg-body-highlight p-3 border&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-8 col-sm-6 p-2 border&quot;&gt;Level 2: .col-8 .col-sm-6&lt;/div&gt;
        &lt;div class=&quot;col-4 col-sm-6 p-2 border&quot;&gt;Level 2: .col-4 .col-sm-6&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="container text-center">
                        <div class="row">
                          <div class="col-sm-3 bg-body-highlight p-2 border">Level 1: .col-sm-3</div>
                          <div class="col-sm-9 bg-body-highlight p-3 border">
                            <div class="row">
                              <div class="col-8 col-sm-6 p-2 border">Level 2: .col-8 .col-sm-6</div>
                              <div class="col-4 col-sm-6 p-2 border">Level 2: .col-4 .col-sm-6</div>
                            </div>
                          </div>
                        </div>
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
                  <li class="nav-item"> <a class="nav-link" href="#grid-options">Grid options</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#equal-width">Equal-width</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#column-width">Column width</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#stacked-to-horizontal">Stacked to horizontal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#mix-and-match">Mix and match</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#row-columns">Row columns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#nesting">Nesting</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
