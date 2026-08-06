@extends('layouts.vertical')

@section('title', 'Display')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Display</h2>
        <p class="text-body-tertiary lead mb-2">Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/display/" target="_blank">Display on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Notation</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="notation-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Display utility classes that apply to all breakpoints, from &lt;code&gt;xs &lt;/code&gt;to &lt;code&gt;xxl &lt;/code&gt;, have no breakpoint abbreviation in them. This is because those classes are applied from &lt;code&gt;min-width: 0;&lt;/code&gt;and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.&lt;/p&gt;
&lt;p class=&quot;mt-3&quot;&gt;As such, the classes are named using the format:&lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt;&lt;code&gt;.d-{value} &lt;/code&gt; for &lt;code&gt;xs &lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;.d-{breakpoint}-{value} &lt;/code&gt; for &lt;code&gt; sm&lt;/code&gt;,&lt;code&gt; md&lt;/code&gt;,&lt;code&gt; lg&lt;/code&gt;,&lt;code&gt; xl&lt;/code&gt;, and&lt;code&gt; xxl&lt;/code&gt;,&lt;/li&gt;
&lt;/ul&gt;
&lt;p class=&quot;mt-3&quot;&gt;Where value is one of:&lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt;&lt;code&gt;none&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;inline&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;inline-block&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;block&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;table&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;table-cell&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;table-row&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;flex&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;inline-flex&lt;/code&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;The display values can be altered by changing the &lt;code&gt;$displays &lt;/code&gt;variable and recompiling the SCSS.&lt;/p&gt;
&lt;p&gt;The media queries affect screen widths with the given breakpoint or larger. For example,&lt;code&gt;.d-lg-none &lt;/code&gt;sets &lt;code&gt;display: none;&lt;/code&gt;on both &lt;code&gt;lg &lt;/code&gt;and &lt;code&gt;xl &lt;/code&gt;screens.&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p>Display utility classes that apply to all breakpoints, from <code>xs </code>to <code>xxl </code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code>min-width: 0;</code>and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>
                      <p class="mt-3">As such, the classes are named using the format:</p>
                      <ul>
                        <li><code>.d-{value} </code> for <code>xs </code></li>
                        <li><code>.d-{breakpoint}-{value} </code> for <code> sm</code>,<code> md</code>,<code> lg</code>,<code> xl</code>, and<code> xxl</code>,</li>
                      </ul>
                      <p class="mt-3">Where value is one of:</p>
                      <ul>
                        <li><code>none</code></li>
                        <li><code>inline</code></li>
                        <li><code>inline-block</code></li>
                        <li><code>block</code></li>
                        <li><code>table</code></li>
                        <li><code>table-cell</code></li>
                        <li><code>table-row</code></li>
                        <li><code>flex</code></li>
                        <li><code>inline-flex</code></li>
                      </ul>
                      <p>The display values can be altered by changing the <code>$displays </code>variable and recompiling the SCSS.</p>
                      <p>The media queries affect screen widths with the given breakpoint or larger. For example,<code>.d-lg-none </code>sets <code>display: none;</code>on both <code>lg </code>and <code>xl </code>screens.</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#example-code" role="button" aria-controls="example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-inline bg-primary p-2 text-white&quot;&gt;d-inline&lt;/div&gt;
&lt;div class=&quot;d-block bg-primary p-2 text-white mt-3&quot;&gt;d-block&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="d-inline bg-primary p-2 text-white">d-inline</div>
                      <div class="d-block bg-primary p-2 text-white mt-3">d-block</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Hiding Elements</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="hiding-elements-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.&lt;/p&gt;
&lt;p&gt;To hide elements simply use the&lt;code&gt;.d-none &lt;/code&gt;class or one of the&lt;code&gt;.d-{sm,md,lg,xl,xxl}-none &lt;/code&gt;classes for any responsive screen variation.&lt;/p&gt;
&lt;p&gt;To show an element only on a given interval of screen sizes you can combine one&lt;code&gt;.d-*-none class with a&lt;/code&gt;&lt;code&gt;.d-*-* class, for example&lt;/code&gt;&lt;code&gt;.d-none .d-md-block .d-xl-none &lt;/code&gt;will hide the element for all screen sizes except on medium and large devices.&lt;/p&gt;
&lt;table class=&quot;table table-bordered&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th class=&quot;ps-2&quot;&gt;Screen Size&lt;/th&gt;
      &lt;th&gt;Class&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Hidden on all&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-none&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Hidden only on xs&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-none .d-sm-block&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Hidden only on sm&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-sm-none .d-md-block&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Hidden only on md&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-md-none .d-lg-block&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Hidden only on lg&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-lg-none .d-xl-block&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Hidden only on xl&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-xl-none&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Visible on all&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-block&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Visible only on xs&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-block .d-sm-none&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Visible only on sm&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-none .d-sm-block .d-md-none&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Visible only on md&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-none .d-md-block .d-lg-none&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Visible only on lg&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-none .d-lg-block .d-xl-none&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td class=&quot;ps-2&quot;&gt;Visible only on xl&lt;/td&gt;
      &lt;td&gt;&lt;code&gt;.d-none .d-xl-block&lt;/code&gt;&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.</p>
                      <p>To hide elements simply use the<code>.d-none </code>class or one of the<code>.d-{sm,md,lg,xl,xxl}-none </code>classes for any responsive screen variation.</p>
                      <p>To show an element only on a given interval of screen sizes you can combine one<code>.d-*-none class with a</code><code>.d-*-* class, for example</code><code>.d-none .d-md-block .d-xl-none </code>will hide the element for all screen sizes except on medium and large devices.</p>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="ps-2">Screen Size</th>
                            <th>Class</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="ps-2">Hidden on all</td>
                            <td><code>.d-none</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Hidden only on xs</td>
                            <td><code>.d-none .d-sm-block</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Hidden only on sm</td>
                            <td><code>.d-sm-none .d-md-block</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Hidden only on md</td>
                            <td><code>.d-md-none .d-lg-block</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Hidden only on lg</td>
                            <td><code>.d-lg-none .d-xl-block</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Hidden only on xl</td>
                            <td><code>.d-xl-none</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Visible on all</td>
                            <td><code>.d-block</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Visible only on xs</td>
                            <td><code>.d-block .d-sm-none</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Visible only on sm</td>
                            <td><code>.d-none .d-sm-block .d-md-none</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Visible only on md</td>
                            <td><code>.d-none .d-md-block .d-lg-none</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Visible only on lg</td>
                            <td><code>.d-none .d-lg-block .d-xl-none</code></td>
                          </tr>
                          <tr>
                            <td class="ps-2">Visible only on xl</td>
                            <td><code>.d-none .d-xl-block</code></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Display in Prints</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Change the <code>display </code>value of elements when printing with our print display utility classes. Includes support for the same <code>display </code>values as our responsive <code>.d-* utilities. </code>
                        <ul class='mt-3'>
                          <li><code>.d-print-none</code></li>
                          <li><code>.d-print-inline</code></li>
                          <li><code>.d-print-inline-block</code></li>
                          <li><code>.d-print-block</code></li>
                          <li><code>.d-print-table</code></li>
                          <li><code>.d-print-table-row</code></li>
                          <li><code>.d-print-table-cell</code></li>
                          <li><code>.d-print-flex</code></li>
                          <li><code>.d-print-inline-flex</code></li>
                        </ul>
                        <p class='mt-3 mb-0'>The print and display classes can be combined.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#display-in-prints-code" role="button" aria-controls="display-in-prints-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="display-in-prints-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-print-none&quot;&gt;Screen Only (Hide on print only)&lt;/div&gt;
&lt;div class=&quot;d-none d-print-block&quot;&gt;Print Only (Hide on screen only)&lt;/div&gt;
&lt;div class=&quot;d-none d-lg-block d-print-block&quot;&gt;Hide up to large on screen, but always show on print&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="d-print-none">Screen Only (Hide on print only)</div>
                      <div class="d-none d-print-block">Print Only (Hide on screen only)</div>
                      <div class="d-none d-lg-block d-print-block">Hide up to large on screen, but always show on print</div>
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
                  <li class="nav-item"> <a class="nav-link" href="#notation">Notation</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#hiding-elements">Hiding Elements</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#display-in-prints">Display in Prints</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
