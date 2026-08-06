@extends('layouts.vertical')

@section('title', 'Typography')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Typography</h2>
        <p class="text-body-tertiary lead mb-2">Documentation and examples for common text utilities to control alignment, wrapping, weight, and more.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/text/" target="_blank">Spacing on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Text alignment</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Easily realign text to components with text alignment classes. For start, end, and center alignment, responsive classes are available that use the same viewport width breakpoints as the grid system.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#text-alignment-code" role="button" aria-controls="text-alignment-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="text-alignment-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;text-start&quot;&gt;Start aligned text on all viewport sizes.&lt;/p&gt;
&lt;p class=&quot;text-center&quot;&gt;Center aligned text on all viewport sizes.&lt;/p&gt;
&lt;p class=&quot;text-end&quot;&gt;End aligned text on all viewport sizes.&lt;/p&gt;
&lt;p class=&quot;text-sm-start&quot;&gt;Start aligned text on viewports sized SM (small) or wider.&lt;/p&gt;
&lt;p class=&quot;text-md-start&quot;&gt;Start aligned text on viewports sized MD (medium) or wider.&lt;/p&gt;
&lt;p class=&quot;text-lg-start&quot;&gt;Start aligned text on viewports sized LG (large) or wider.&lt;/p&gt;
&lt;p class=&quot;text-xl-start&quot;&gt;Start aligned text on viewports sized XL (extra-large) or wider.&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="text-start">Start aligned text on all viewport sizes.</p>
                      <p class="text-center">Center aligned text on all viewport sizes.</p>
                      <p class="text-end">End aligned text on all viewport sizes.</p>
                      <p class="text-sm-start">Start aligned text on viewports sized SM (small) or wider.</p>
                      <p class="text-md-start">Start aligned text on viewports sized MD (medium) or wider.</p>
                      <p class="text-lg-start">Start aligned text on viewports sized LG (large) or wider.</p>
                      <p class="text-xl-start">Start aligned text on viewports sized XL (extra-large) or wider.</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Text wrapping and overflow</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Wrap text with a <code>.text-wrap</code> class. Prevent text from wrapping with a <code>.text-nowrap</code> class.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#text-wrapping-and-overflow-code" role="button" aria-controls="text-wrapping-and-overflow-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="text-wrapping-and-overflow-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;badge text-bg-primary text-wrap mb-3&quot; style=&quot;width: 6rem;&quot;&gt;This text should wrap.&lt;/div&gt;
&lt;div class=&quot;text-nowrap bg-body-tertiary&quot; style=&quot;width: 8rem;&quot;&gt;This text should overflow the parent.&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="badge text-bg-primary text-wrap mb-3" style="width: 6rem;">This text should wrap.</div>
                      <div class="text-nowrap bg-body-tertiary" style="width: 8rem;">This text should overflow the parent.</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Word break</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Prevent long strings of text from breaking your component's layout by using <code>.text-break</code> to set <code>word-wrap: break-word</code> and <code>word-break: break-word</code>. We use <code>word-wrap</code> instead of the more common <code>overflow-wrap</code> for wider browser support, and add the deprecated <code>word-break: break-word</code> to avoid issues with flex containers.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#word-break-code" role="button" aria-controls="word-break-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="word-break-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;text-break&quot;&gt;mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="text-break">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Text transform</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Transform text in components with text capitalization classes.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#text-transform-code" role="button" aria-controls="text-transform-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="text-transform-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;text-lowercase&quot;&gt;Lowercased text.&lt;/p&gt;
&lt;p class=&quot;text-uppercase&quot;&gt;Uppercased text.&lt;/p&gt;
&lt;p class=&quot;text-capitalize&quot;&gt;CapiTaliZed text.&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="text-lowercase">Lowercased text.</p>
                      <p class="text-uppercase">Uppercased text.</p>
                      <p class="text-capitalize">CapiTaliZed text.</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Font size</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Quickly change the <code>font-size</code> of text. While our heading classes (e.g., <code>.h1</code>–<code>.h6</code>) apply <code>font-size</code>, <code>font-weight</code>, and <code>line-height</code>, these utilities <em>only</em> apply <code>font-size</code>. Sizing for these utilities matches HTML’s heading elements, so as the number increases, their size decreases.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#font-size-code" role="button" aria-controls="font-size-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="font-size-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h6 class=&quot;fs-10&quot;&gt;.fs-10&lt;/h6&gt;
&lt;h6 class=&quot;fs-9&quot;&gt;.fs-9&lt;/h6&gt;
&lt;h6 class=&quot;fs-8&quot;&gt;.fs-8&lt;/h6&gt;
&lt;h6 class=&quot;fs-7&quot;&gt;.fs-7&lt;/h6&gt;
&lt;h6 class=&quot;fs-6&quot;&gt;.fs-6&lt;/h6&gt;
&lt;h6 class=&quot;fs-5&quot;&gt;.fs-5&lt;/h6&gt;
&lt;h6 class=&quot;fs-4&quot;&gt;.fs-4&lt;/h6&gt;
&lt;h6 class=&quot;fs-3&quot;&gt;.fs-3&lt;/h6&gt;
&lt;h6 class=&quot;fs-2&quot;&gt;.fs-2&lt;/h6&gt;
&lt;h6 class=&quot;fs-1&quot;&gt;.fs-1&lt;/h6&gt;
&lt;h6 class=&quot;fs-8&quot;&gt;.fs-8&lt;/h6&gt;
&lt;div class=&quot;mt-3&quot;&gt;
  &lt;h6 class=&quot;fs-sm-8&quot;&gt;.fs-sm-8&lt;/h6&gt;
  &lt;h6 class=&quot;fs-md-7&quot;&gt;.fs-md-7&lt;/h6&gt;
  &lt;h6 class=&quot;fs-lg-7&quot;&gt;.fs-lg-7&lt;/h6&gt;
  &lt;h6 class=&quot;fs-xl-5&quot;&gt;.fs-xl-5&lt;/h6&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <h6 class="fs-10">.fs-10</h6>
                      <h6 class="fs-9">.fs-9</h6>
                      <h6 class="fs-8">.fs-8</h6>
                      <h6 class="fs-7">.fs-7</h6>
                      <h6 class="fs-6">.fs-6</h6>
                      <h6 class="fs-5">.fs-5</h6>
                      <h6 class="fs-4">.fs-4</h6>
                      <h6 class="fs-3">.fs-3</h6>
                      <h6 class="fs-2">.fs-2</h6>
                      <h6 class="fs-1">.fs-1</h6>
                      <h6 class="fs-8">.fs-8</h6>
                      <div class="mt-3">
                        <h6 class="fs-sm-8">.fs-sm-8</h6>
                        <h6 class="fs-md-7">.fs-md-7</h6>
                        <h6 class="fs-lg-7">.fs-lg-7</h6>
                        <h6 class="fs-xl-5">.fs-xl-5</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Font weight</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Quickly change the <code>font-weight</code> or <code>font-style</code> of text with these utilities. <code>font-style</code> utilities are abbreviated as <code>.fst-*</code> and <code>font-weight</code> utilities are abbreviated as <code>.fw-*</code>.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#font-weight-code" role="button" aria-controls="font-weight-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="font-weight-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;fw-light&quot;&gt;Font weight 300&lt;/div&gt;
&lt;div class=&quot;fw-normal&quot;&gt;Font weight 400&lt;/div&gt;
&lt;div class=&quot;fw-medium&quot;&gt;Font weight 500&lt;/div&gt;
&lt;div class=&quot;fw-semibold&quot;&gt;Font weight 600&lt;/div&gt;
&lt;div class=&quot;fw-bold&quot;&gt;Font weight 700&lt;/div&gt;
&lt;div class=&quot;fw-bolder&quot;&gt;Font weight 800&lt;/div&gt;
&lt;div class=&quot;fw-black&quot;&gt;Font weight 900&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="fw-light">Font weight 300</div>
                      <div class="fw-normal">Font weight 400</div>
                      <div class="fw-medium">Font weight 500</div>
                      <div class="fw-semibold">Font weight 600</div>
                      <div class="fw-bold">Font weight 700</div>
                      <div class="fw-bolder">Font weight 800</div>
                      <div class="fw-black">Font weight 900</div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Line height</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Change the line height with <code>.lh-*</code> utilities.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#line-height-code" role="button" aria-controls="line-height-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="line-height-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;lh-1&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.
&lt;/p&gt;
&lt;p class=&quot;lh-sm&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.&lt;/p&gt;
&lt;p class=&quot;lh-base&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.&lt;/p&gt;
&lt;p class=&quot;lh-lg&quot;&gt;This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.
                      </p>
                      <p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                      <p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                      <p class="lh-lg">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Heading</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#heading-code" role="button" aria-controls="heading-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="heading-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h1&gt;h1. Heading&lt;/h1&gt;
&lt;h2&gt;h2. Heading&lt;/h2&gt;
&lt;h3&gt;h3. Heading&lt;/h3&gt;
&lt;h4&gt;h4. Heading&lt;/h4&gt;
&lt;h5&gt;h5. Heading&lt;/h5&gt;
&lt;h6&gt;h6. Heading&lt;/h6&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <h1>h1. Heading</h1>
                      <h2>h2. Heading</h2>
                      <h3>h3. Heading</h3>
                      <h4>h4. Heading</h4>
                      <h5>h5. Heading</h5>
                      <h6>h6. Heading</h6>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Heading classes</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#heading-classes-code" role="button" aria-controls="heading-classes-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="heading-classes-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;h1&quot;&gt;h1. Heading&lt;/p&gt;
&lt;p class=&quot;h2&quot;&gt;h2. Heading&lt;/p&gt;
&lt;p class=&quot;h3&quot;&gt;h3. Heading&lt;/p&gt;
&lt;p class=&quot;h4&quot;&gt;h4. Heading&lt;/p&gt;
&lt;p class=&quot;h5&quot;&gt;h5. Heading&lt;/p&gt;
&lt;p class=&quot;h6&quot;&gt;h6. Heading&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="h1">h1. Heading</p>
                      <p class="h2">h2. Heading</p>
                      <p class="h3">h3. Heading</p>
                      <p class="h4">h4. Heading</p>
                      <p class="h5">h5. Heading</p>
                      <p class="h6">h6. Heading</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Display</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#display-code" role="button" aria-controls="display-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="display-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h1 class=&quot;display-1 mb-3&quot;&gt;Display 1&lt;/h1&gt;
&lt;h1 class=&quot;display-2 mb-3&quot;&gt;Display 2&lt;/h1&gt;
&lt;h1 class=&quot;display-3 mb-3&quot;&gt;Display 3&lt;/h1&gt;
&lt;h1 class=&quot;display-4 mb-3&quot;&gt;Display 4&lt;/h1&gt;
&lt;h1 class=&quot;display-5 mb-3&quot;&gt;Display 5&lt;/h1&gt;
&lt;h1 class=&quot;display-6 mb-3&quot;&gt;Display 6&lt;/h1&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <h1 class="display-1 mb-3">Display 1</h1>
                      <h1 class="display-2 mb-3">Display 2</h1>
                      <h1 class="display-3 mb-3">Display 3</h1>
                      <h1 class="display-4 mb-3">Display 4</h1>
                      <h1 class="display-5 mb-3">Display 5</h1>
                      <h1 class="display-6 mb-3">Display 6</h1>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Font family</h4>
                        <p class="mb-0 mt-2 text-body-secondary">You have three font-family helper classes available to use.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#font-family-code" role="button" aria-controls="font-family-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="font-family-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Nunito sans&lt;/p&gt;
&lt;code class=&quot;text-monospace&quot;&gt;Monospace&lt;/code&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p>Nunito sans</p>
                      <code class="text-monospace">Monospace</code>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Reset color</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Reset a text or link's color with <code>.text-reset</code>, so that it inherits the color from its parent.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#reset-color-code" role="button" aria-controls="reset-color-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="reset-color-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;text-muted&quot;&gt;Muted text with a &lt;a class=&quot;text-reset&quot; href=&quot;#&quot;&gt;reset link&lt;/a&gt;.&lt;/p&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="text-muted">Muted text with a <a class="text-reset" href="#">reset link</a>.</p>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-5" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Text decoration</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Decorate text in components with text decoration classes.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#text-decoration-code" role="button" aria-controls="text-decoration-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="text-decoration-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;text-decoration-underline&quot;&gt;This text has a line underneath it.&lt;/p&gt;
&lt;p class=&quot;text-decoration-line-through&quot;&gt;This text has a line going through it.&lt;/p&gt;
&lt;a class=&quot;text-decoration-none&quot; href=&quot;#&quot;&gt;This link has its text decoration removed&lt;/a&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <p class="text-decoration-underline">This text has a line underneath it.</p>
                      <p class="text-decoration-line-through">This text has a line going through it.</p>
                      <a class="text-decoration-none" href="#">This link has its text decoration removed</a>
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
                  <li class="nav-item"> <a class="nav-link" href="#text-alignment">Text alignment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#text-wrapping-and-overflow">Text wrapping and overflow</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#word-break">Word break</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#text-transform">Text transform</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#font-size">Font size</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#font-weight-and-italics">Font weight and italics</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#line-height">Line height</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#heading">Heading</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#heading-classes">Heading classes</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#display">Display</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#font-family">Font family</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#reset-color">Reset color</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#text-decoration">Text decoration</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
