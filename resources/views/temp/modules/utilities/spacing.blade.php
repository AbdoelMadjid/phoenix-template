@extends('layouts.vertical')

@section('title', 'Spacing')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Spacing</h2>
        <p class="text-body-tertiary lead mb-2">Bootstrap includes a wide range of shorthand responsive margin, padding, and gap utility classes to modify an element’s appearance.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/spacing/" target="_blank">Spacing on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card border my-5">
                  <div class="card-header border-bottom">
                    <h3 data-anchor="data-anchor">Margin and padding</h3>
                  </div>
                  <div class="card-body">
                    <p>Assign responsive-friendly margin or padding values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from .25rem to 3rem.</p>
                    <p class="mb-0">Using the CSS Grid layout module? Consider using the <a href="https://getbootstrap.com/docs/5.1/utilities/spacing/#gap">gap utility</a></p>
                  </div>
                </div>
                <div class="card border my-5">
                  <div class="card-header border-bottom">
                    <h3 class="mb-0" data-anchor="data-anchor">Notations </h3>
                  </div>
                  <div class="card-body">
                    <p> Spacing utilities that apply to all breakpoints, from <code>xs </code>to <code>xxl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code>min-width: 0 </code>and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>
                    <p>The classes are named using the format <code>{property}{sides}-{size}</code> for <code>xs</code> and <code>{property}{sides}-{breakpoint}-{size}</code> for <code>sm</code>,<code>md</code>,<code>lg</code>,<code>xl</code> and <code>xxl</code>.</p>
                    <p class="mb-0">Where<em>property</em> is one of:</p>
                    <ul>
                      <li><code>m</code> - for classes that set <code>margin</code></li>
                      <li><code>p</code> - for classes that set <code>padding</code></li>
                    </ul>
                    <p class="mb-0">Where<em>sides</em> is one of:</p>
                    <ul>
                      <li><code>t</code> - for classes that set <code>margin-top</code> or <code>padding-top</code></li>
                      <li><code>b</code> - for classes that set <code>margin-bottom</code> or <code>padding-bottom</code></li>
                      <li><code>s</code> - for classes that set <code>margin-left</code> or <code>padding-left</code></li>
                      <li><code>e</code> - for classes that set <code>margin-right</code> or <code>padding-right</code></li>
                      <li><code>x</code> - for classes that set both <code>*-left</code> and <code>*-right</code></li>
                      <li><code>y</code> - for classes that set both <code>*-top</code> and <code>*-bottom</code></li>
                      <li>blank - for classes that set a <code>margin</code> or <code>padding</code> on all 4 sides of the element</li>
                    </ul>
                    <p class="mb-0">Where<em>size</em> is one of: <code>0</code>,<code>1</code>,<code>2</code>,<code>3</code>,<code>4</code>,<code>5</code>,<code>6</code>,<code>7</code>,<code>8</code>,<code>9</code>,<code>10</code>,<code>11</code> &amp; <code>auto </code></p>
                  </div>
                </div>
                <div class="card border my-5">
                  <div class="card-header border-bottom">
                    <h3 class="mb-1" data-anchor="data-anchor">Examples</h3>
                    <p class="text-body-tertiary mb-0">Here are some representative examples of these classes:</p>
                  </div>
                  <div class="card-body p-0"><pre><code class="language-css">.mt-0 {
margin-top: 0 !important;
}

.ms-1 {
margin-left: ($spacer * .25) !important;
}

.px-2 {
padding-left: ($spacer * .5) !important;
padding-right: ($spacer * .5) !important;
}

.p-3 {
padding: $spacer !important;
}</code></pre>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Horizontal centering</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Additionally, Bootstrap also includes an <code>.mx-auto</code> class for horizontally centering fixed-width block level content—that is, content that has <code>display: block</code> and <code>a width</code> set—by setting the horizontal margins to <code>auto</code>.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#horizontal-centering-code" role="button" aria-controls="horizontal-centering-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="horizontal-centering-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;mx-auto bg-body-highlight&quot; style=&quot;width: 200px;&quot;&gt;Centered element&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="mx-auto bg-body-highlight" style="width: 200px;">Centered element</div>
                    </div>
                  </div>
                </div>
                <div class="card border my-5">
                  <div class="card-header border-bottom">
                    <h3 class="mb-1" data-anchor="data-anchor">Negative margins</h3>
                    <p class="text-body-tertiary mb-0">In CSS, <code>margin </code>properties can utilize negative values (<code>padding </code>cannot). These negative margins are <strong>disabled </strong>by default, but can be enabled in Sass by setting <code>$enable-negative-margins: true</code>.
                      The syntax is nearly the same as the default, positive margin utilities, but with the addition of <code>n </code>before the requested size. Here’s an example class that’s the opposite of <code>.mt-1</code>:</p>
                  </div>
                  <div class="card-body p-0"><pre><code class="language-css">.mt-n1 {
margin-top: -0.25rem !important;
}</code></pre>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Gap</h4>
                        <p class="mb-0 mt-2 text-body-secondary">When using <code>display: grid</code>, you can make use of <code>gap</code> utilities on the parent grid container. This can save on having to add margin utilities to individual grid items (children of a <code>display: grid</code> container). Gap utilities are responsive by default, and are generated via our utilities API, based on the <code>$spacers</code> Sass map.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#gap-code" role="button" aria-controls="gap-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="gap-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-grid gap-3&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-highlight border border-translucent&quot;&gt;Grid item 1&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-highlight border border-translucent&quot;&gt;Grid item 2&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-highlight border border-translucent&quot;&gt;Grid item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="d-grid gap-3">
                        <div class="p-2 bg-body-highlight border border-translucent">Grid item 1</div>
                        <div class="p-2 bg-body-highlight border border-translucent">Grid item 2</div>
                        <div class="p-2 bg-body-highlight border border-translucent">Grid item 3</div>
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
                  <li class="nav-item"> <a class="nav-link" href="#margin-and-padding">Margin and padding</a>
                    <ul class="nav flex-column">
                      <li class="nav-item"> <a class="nav-link" href="#notations">Notations</a></li>
                      <li class="nav-item"> <a class="nav-link" href="#examples">Examples</a></li>
                      <li class="nav-item"> <a class="nav-link" href="#horizontal-centering">Horizontal centering</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="#negative-margins">Negative margins</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#gap">Gap</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
