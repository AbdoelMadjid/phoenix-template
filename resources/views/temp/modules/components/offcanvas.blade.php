@extends('layouts.vertical')

@section('title', 'Offcanvas')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Offcanvas</h2>
        <p class="text-body-tertiary lead mb-2">Build hidden sidebars into your project for navigation, shopping carts, and more with a few classes and our JavaScript plugin.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/offcanvas/" target="_blank">Offcanvas on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                        <div class="mt-2 text-body-secondary">Use the buttons below to show and hide an offcanvas element via JavaScript that toggles the <code>.show</code> class on an element with the <code>.offcanvas</code> class.<ul class='mb-2'>
                            <li><code>.offcanvas</code> hides content (default)</li>
                            <li><code>.offcanvas.show</code> shows content</li>
                          </ul>You can use a link with the <code>href</code> attribute, or a button with the <code>data-bs-target</code> attribute. In both cases, the <code>data-bs-toggle="offcanvas"</code> is required.</div>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#example-code" role="button" aria-controls="example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;a class=&quot;btn btn-primary me-1&quot; data-bs-toggle=&quot;offcanvas&quot; href=&quot;#offcanvasExample&quot; role=&quot;button&quot; aria-controls=&quot;offcanvasExample&quot;&gt;Link with href&lt;/a&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasExample&quot; aria-controls=&quot;offcanvasExample&quot;&gt;Button with data-bs-target&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvasExample&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasExampleLabel&quot;&gt;Offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;div&gt;Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.&lt;/div&gt;
    &lt;div class=&quot;dropdown mt-3&quot;&gt;
      &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; id=&quot;dropdownMenuButton&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot;&gt;Dropdown button&lt;/button&gt;
      &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><a class="btn btn-primary me-1" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Link with href</a>
                      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Button with data-bs-target</button>
                      <div class="offcanvas offcanvas-start" id="offcanvasExample" tabindex="-1">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                          <button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</div>
                          <div class="dropdown mt-3">
                            <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown">Dropdown button</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
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
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Placement</h4>
                        <div class="mt-2 text-body-secondary">There’s no default placement for offcanvas components, so you must add one of the modifier classes below:
                          <ul>
                            <li><code>.offcanvas-top</code> places offcanvas on the top of the viewport</li>
                            <li><code>.offcanvas-end</code> places offcanvas on the right of the viewport</li>
                            <li><code>.offcanvas-start</code> places offcanvas on the left of the viewport (shown above)</li>
                            <li><code>.offcanvas-bottom</code> places offcanvas on the bottom of the viewport</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#placement-code" role="button" aria-controls="placement-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="placement-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Top Offcanvas--&gt;
&lt;button class=&quot;btn btn-primary mb-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasTop&quot; aria-controls=&quot;offcanvasTop&quot;&gt;Top Offcanvas&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-top&quot; id=&quot;offcanvasTop&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasTopLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 id=&quot;offcanvasTopLabel&quot;&gt;Offcanvas top&lt;/h5&gt;&lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;&lt;!-- Right Offcanvas--&gt;
&lt;button class=&quot;btn btn-primary mb-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasRight&quot; aria-controls=&quot;offcanvasRight&quot;&gt;Right Offcanvas&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-end&quot; id=&quot;offcanvasRight&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasRightLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 id=&quot;offcanvasRightLabel&quot;&gt;Offcanvas right&lt;/h5&gt;&lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;&lt;!-- Left Offcanvas--&gt;
&lt;button class=&quot;btn btn-primary mb-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasLeft&quot; aria-controls=&quot;offcanvasLeft&quot;&gt;Left Offcanvas&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvasLeft&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasLeftLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 id=&quot;offcanvasLeftLabel&quot;&gt;Offcanvas left&lt;/h5&gt;&lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;&lt;!-- Bottom Offcanvas--&gt;
&lt;button class=&quot;btn btn-primary mb-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasBottom&quot; aria-controls=&quot;offcanvasBottom&quot;&gt;Bottom offcanvas&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-bottom&quot; id=&quot;offcanvasBottom&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasBottomLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasBottomLabel&quot;&gt;Offcanvas bottom&lt;/h5&gt;&lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body small&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <!-- Top Offcanvas-->
                      <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Top Offcanvas</button>
                      <div class="offcanvas offcanvas-top" id="offcanvasTop" tabindex="-1" aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasTopLabel">Offcanvas top</h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">...</div>
                      </div><!-- Right Offcanvas-->
                      <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Right Offcanvas</button>
                      <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Offcanvas right</h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">...</div>
                      </div><!-- Left Offcanvas-->
                      <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Left Offcanvas</button>
                      <div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1" aria-labelledby="offcanvasLeftLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasLeftLabel">Offcanvas left</h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">...</div>
                      </div><!-- Bottom Offcanvas-->
                      <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Bottom offcanvas</button>
                      <div class="offcanvas offcanvas-bottom" id="offcanvasBottom" tabindex="-1" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">...</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Backdrop</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Scrolling the <code>&lt;body&gt;</code> element is disabled when an offcanvas and its backdrop are visible. Use the <code>data-bs-scroll</code> attribute to toggle <code>&lt;body&gt;</code> scrolling and <code>data-bs-backdrop</code> to toggle the backdrop.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#backdrop-code" role="button" aria-controls="backdrop-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="backdrop-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;!-- Enable body scrolling--&gt;
&lt;button class=&quot;btn btn-primary mb-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasScrolling&quot; aria-controls=&quot;offcanvasScrolling&quot;&gt;Enable body scrolling&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvasScrolling&quot; data-bs-scroll=&quot;true&quot; data-bs-backdrop=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasScrollingLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasScrollingLabel&quot;&gt;Colored with scrolling&lt;/h5&gt;&lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Try scrolling the rest of the page to see this option in action.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;!-- Enable backdrop --&gt;
&lt;button class=&quot;btn btn-primary mb-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBackdrop&quot; aria-controls=&quot;offcanvasWithBackdrop&quot;&gt;Enable backdrop (default)&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvasWithBackdrop&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasWithBackdropLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBackdropLabel&quot;&gt;Offcanvas with backdrop&lt;/h5&gt;&lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;.....&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;!-- Enable both scrolling &amp; backdrop--&gt;
&lt;button class=&quot;btn btn-primary mb-1&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBothOptions&quot; aria-controls=&quot;offcanvasWithBothOptions&quot;&gt;Enable both scrolling &amp; backdrop&lt;/button&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvasWithBothOptions&quot; data-bs-scroll=&quot;true&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasWithBothOptionsLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBothOptionsLabel&quot;&gt;Backdroped with scrolling&lt;/h5&gt;&lt;button class=&quot;btn-close text-reset&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Try scrolling the rest of the page to see this option in action.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <!-- Enable body scrolling-->
                      <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>
                      <div class="offcanvas offcanvas-start" id="offcanvasScrolling" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <p>Try scrolling the rest of the page to see this option in action.</p>
                        </div>
                      </div><!-- Enable backdrop -->
                      <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Enable backdrop (default)</button>
                      <div class="offcanvas offcanvas-start" id="offcanvasWithBackdrop" tabindex="-1" aria-labelledby="offcanvasWithBackdropLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <p>.....</p>
                        </div>
                      </div><!-- Enable both scrolling & backdrop-->
                      <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
                      <div class="offcanvas offcanvas-start" id="offcanvasWithBothOptions" data-bs-scroll="true" tabindex="-1" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <p>Try scrolling the rest of the page to see this option in action.</p>
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
                  <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#placement">Placement</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#backdrop">Backdrop</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
