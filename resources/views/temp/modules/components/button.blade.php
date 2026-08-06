@extends('layouts.vertical')

@section('title', 'Button')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Buttons</h2>
        <p class="text-body-tertiary lead mb-2">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/buttons/" target="_blank">Buttons on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Phoenix Buttons</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#phoenix-buttons-code" role="button" aria-controls="phoenix-buttons-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="phoenix-buttons-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-phoenix-primary me-1 mb-1&quot; type=&quot;button&quot;&gt;Primary&lt;/button&gt;
&lt;button class=&quot;btn btn-phoenix-secondary me-1 mb-1&quot; type=&quot;button&quot;&gt;Secondary&lt;/button&gt;
&lt;button class=&quot;btn btn-phoenix-success me-1 mb-1&quot; type=&quot;button&quot;&gt;Success&lt;/button&gt;
&lt;button class=&quot;btn btn-phoenix-danger me-1 mb-1&quot; type=&quot;button&quot;&gt;Danger&lt;/button&gt;
&lt;button class=&quot;btn btn-phoenix-warning me-1 mb-1&quot; type=&quot;button&quot;&gt;Warning&lt;/button&gt;
&lt;button class=&quot;btn btn-phoenix-info me-1 mb-1&quot; type=&quot;button&quot;&gt;Info&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn btn-phoenix-primary me-1 mb-1" type="button">Primary</button>
                      <button class="btn btn-phoenix-secondary me-1 mb-1" type="button">Secondary</button>
                      <button class="btn btn-phoenix-success me-1 mb-1" type="button">Success</button>
                      <button class="btn btn-phoenix-danger me-1 mb-1" type="button">Danger</button>
                      <button class="btn btn-phoenix-warning me-1 mb-1" type="button">Warning</button>
                      <button class="btn btn-phoenix-info me-1 mb-1" type="button">Info</button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Solid Buttons</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#solid-buttons-code" role="button" aria-controls="solid-buttons-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="solid-buttons-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary me-1 mb-1&quot; type=&quot;button&quot;&gt;Primary&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary me-1 mb-1&quot; type=&quot;button&quot;&gt;Secondary&lt;/button&gt;
&lt;button class=&quot;btn btn-success me-1 mb-1&quot; type=&quot;button&quot;&gt;Success&lt;/button&gt;
&lt;button class=&quot;btn btn-danger me-1 mb-1&quot; type=&quot;button&quot;&gt;Danger&lt;/button&gt;
&lt;button class=&quot;btn btn-warning me-1 mb-1&quot; type=&quot;button&quot;&gt;Warning&lt;/button&gt;
&lt;button class=&quot;btn btn-info me-1 mb-1&quot; type=&quot;button&quot;&gt;Info&lt;/button&gt;
&lt;button class=&quot;btn btn-link me-1 mb-1&quot; type=&quot;button&quot;&gt;Link&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn btn-primary me-1 mb-1" type="button">Primary</button>
                      <button class="btn btn-secondary me-1 mb-1" type="button">Secondary</button>
                      <button class="btn btn-success me-1 mb-1" type="button">Success</button>
                      <button class="btn btn-danger me-1 mb-1" type="button">Danger</button>
                      <button class="btn btn-warning me-1 mb-1" type="button">Warning</button>
                      <button class="btn btn-info me-1 mb-1" type="button">Info</button>
                      <button class="btn btn-link me-1 mb-1" type="button">Link</button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Subtle Buttons</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#subtle-buttons-code" role="button" aria-controls="subtle-buttons-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="subtle-buttons-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-subtle-primary me-1 mb-1&quot; type=&quot;button&quot;&gt;Primary&lt;/button&gt;
&lt;button class=&quot;btn btn-subtle-secondary me-1 mb-1&quot; type=&quot;button&quot;&gt;Secondary&lt;/button&gt;
&lt;button class=&quot;btn btn-subtle-success me-1 mb-1&quot; type=&quot;button&quot;&gt;Success&lt;/button&gt;
&lt;button class=&quot;btn btn-subtle-danger me-1 mb-1&quot; type=&quot;button&quot;&gt;Danger&lt;/button&gt;
&lt;button class=&quot;btn btn-subtle-warning me-1 mb-1&quot; type=&quot;button&quot;&gt;Warning&lt;/button&gt;
&lt;button class=&quot;btn btn-subtle-info me-1 mb-1&quot; type=&quot;button&quot;&gt;Info&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn btn-subtle-primary me-1 mb-1" type="button">Primary</button>
                      <button class="btn btn-subtle-secondary me-1 mb-1" type="button">Secondary</button>
                      <button class="btn btn-subtle-success me-1 mb-1" type="button">Success</button>
                      <button class="btn btn-subtle-danger me-1 mb-1" type="button">Danger</button>
                      <button class="btn btn-subtle-warning me-1 mb-1" type="button">Warning</button>
                      <button class="btn btn-subtle-info me-1 mb-1" type="button">Info</button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Outline Buttons</h4>
                        <p class="mb-0 mt-2 text-body-secondary">In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#outline-buttons-code" role="button" aria-controls="outline-buttons-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="outline-buttons-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-outline-primary me-1 mb-1&quot; type=&quot;button&quot;&gt;Primary&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-secondary me-1 mb-1&quot; type=&quot;button&quot;&gt;Secondary&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-success me-1 mb-1&quot; type=&quot;button&quot;&gt;Success&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-danger me-1 mb-1&quot; type=&quot;button&quot;&gt;Danger&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-warning me-1 mb-1&quot; type=&quot;button&quot;&gt;Warning&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-info me-1 mb-1&quot; type=&quot;button&quot;&gt;Info&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn btn-outline-primary me-1 mb-1" type="button">Primary</button>
                      <button class="btn btn-outline-secondary me-1 mb-1" type="button">Secondary</button>
                      <button class="btn btn-outline-success me-1 mb-1" type="button">Success</button>
                      <button class="btn btn-outline-danger me-1 mb-1" type="button">Danger</button>
                      <button class="btn btn-outline-warning me-1 mb-1" type="button">Warning</button>
                      <button class="btn btn-outline-info me-1 mb-1" type="button">Info</button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Close Buttons</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Provide an option to dismiss or close a component with <code>.btn-close</code>. Default styling is limited, but highly customizable. Modify the Sass variables to replace the default <code>background-image</code>. <strong>Be sure to include text for screen readers</strong>, as we’ve done with <code>aria-label</code>.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#close-buttons-code" role="button" aria-controls="close-buttons-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="close-buttons-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn-close&quot; type=&quot;button&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;button class=&quot;btn-close&quot; type=&quot;button&quot; disabled=&quot;&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn-close" type="button" aria-label="Close"></button>
                      <button class="btn-close" type="button" disabled="" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Close buttons white variant</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Add <code>data-bs-theme="dark"</code> to the <code>.btn-close</code> class, or to its parent element to invert the close button. This uses <code>filter</code> property to invert the <code>background-image</code> without overriding its value..</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#close-buttons-white-variant-code" role="button" aria-controls="close-buttons-white-variant-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="close-buttons-white-variant-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;bg-body-highlight rounded-1 p-3&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; disabled=&quot;&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="bg-body-highlight rounded-1 p-3" data-bs-theme="dark">
                        <button class="btn-close" type="button" aria-label="Close"></button>
                        <button class="btn-close" type="button" disabled="" aria-label="Close"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Button Sizes</h4>
                        <p class="mb-0 mt-2 text-body-secondary">Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#button-sizes-code" role="button" aria-controls="button-sizes-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="button-sizes-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary btn-sm me-1 mb-1&quot; type=&quot;button&quot;&gt;Request Payout&lt;/button&gt;
&lt;button class=&quot;btn btn-primary me-1 mb-1&quot; type=&quot;button&quot;&gt;Request Payout&lt;/button&gt;
&lt;button class=&quot;btn btn-primary btn-lg me-1 mb-1&quot; type=&quot;button&quot;&gt;Request Payout&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn btn-primary btn-sm me-1 mb-1" type="button">Request Payout</button>
                      <button class="btn btn-primary me-1 mb-1" type="button">Request Payout</button>
                      <button class="btn btn-primary btn-lg me-1 mb-1" type="button">Request Payout</button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Button Capsule</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#button-capsule-code" role="button" aria-controls="button-capsule-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="button-capsule-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-phoenix-secondary rounded-pill me-1 mb-1&quot; type=&quot;button&quot;&gt;Example
&lt;/button&gt;&lt;button class=&quot;btn btn-phoenix-secondary rounded-pill me-1 mb-1&quot; type=&quot;button&quot;&gt;
  &lt;span class=&quot;fas fa-align-left me-2&quot; data-fa-transform=&quot;shrink-3&quot;&gt;&lt;/span&gt;Icon Left&lt;/button&gt;
&lt;button class=&quot;btn btn-phoenix-secondary rounded-pill me-1 mb-1&quot; type=&quot;button&quot;&gt;
  Icon Right &lt;span class=&quot;fas fa-align-right ms-2&quot; data-fa-transform=&quot;shrink-3&quot;&gt;&lt;/span&gt;
&lt;/button&gt;&lt;button class=&quot;btn btn-outline-primary rounded-pill me-1 mb-1&quot; type=&quot;button&quot;&gt;Outline&lt;/button&gt;
&lt;hr /&gt;
&lt;button class=&quot;btn btn-sm btn-phoenix-secondary rounded-pill me-1 mb-1&quot; type=&quot;button&quot;&gt;Capsule Small&lt;/button&gt;
&lt;button class=&quot;btn btn-phoenix-secondary rounded-pill me-1 mb-1&quot; type=&quot;button&quot;&gt;Capsule Regular&lt;/button&gt;
&lt;button class=&quot;btn btn-lg btn-phoenix-secondary rounded-pill me-1 mb-1&quot; type=&quot;button&quot;&gt;Capsule Large&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">Example
                      </button>
                      <button class="btn btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">
                        <span class="fas fa-align-left me-2" data-fa-transform="shrink-3"></span>Icon Left</button>
                      <button class="btn btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">
                        Icon Right <span class="fas fa-align-right ms-2" data-fa-transform="shrink-3"></span>
                      </button>
                      <button class="btn btn-outline-primary rounded-pill me-1 mb-1" type="button">Outline</button>
                      <hr>
                      <button class="btn btn-sm btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">Capsule Small</button>
                      <button class="btn btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">Capsule Regular</button>
                      <button class="btn btn-lg btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">Capsule Large</button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Button Group</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#button-group-code" role="button" aria-controls="button-group-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="button-group-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Left&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Middle&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-secondary" type="button">Left</button>
                        <button class="btn btn-secondary" type="button">Middle</button>
                        <button class="btn btn-secondary" type="button">Right</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Button Toolbar</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#button-toolbar-code" role="button" aria-controls="button-toolbar-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="button-toolbar-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
  &lt;div class=&quot;btn-group me-2 mb-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;1&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;2&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;3&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group mb-2 me-2&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;5&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;6&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;7&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group mb-2&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;8&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2 mb-2" role="group" aria-label="First group">
                          <button class="btn btn-secondary" type="button">1</button>
                          <button class="btn btn-secondary" type="button">2</button>
                          <button class="btn btn-secondary" type="button">3</button>
                          <button class="btn btn-secondary" type="button">4</button>
                        </div>
                        <div class="btn-group mb-2 me-2" role="group" aria-label="Second group">
                          <button class="btn btn-secondary" type="button">5</button>
                          <button class="btn btn-secondary" type="button">6</button>
                          <button class="btn btn-secondary" type="button">7</button>
                        </div>
                        <div class="btn-group mb-2" role="group" aria-label="Third group">
                          <button class="btn btn-secondary" type="button">8</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Button toolbar with input group</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#button-toolbar-with-input-group-code" role="button" aria-controls="button-toolbar-with-input-group-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="button-toolbar-with-input-group-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-toolbar mb-3&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
  &lt;div class=&quot;btn-group mb-2 me-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;1&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;2&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;3&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;input-group mb-2&quot;&gt;
    &lt;div class=&quot;input-group-text&quot; id=&quot;btnGroupAddon&quot;&gt;@&lt;/div&gt;
    &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Input group example&quot; aria-label=&quot;Input group example&quot; aria-describedby=&quot;btnGroupAddon&quot; /&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-toolbar justify-content-between&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
  &lt;div class=&quot;btn-group mb-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;1&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;2&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;3&lt;/button&gt;
    &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;input-group mb-2&quot;&gt;
    &lt;div class=&quot;input-group-text&quot; id=&quot;btnGroupAddon2&quot;&gt;@&lt;/div&gt;
    &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Input group example&quot; aria-label=&quot;Input group example&quot; aria-describedby=&quot;btnGroupAddon2&quot; /&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mb-2 me-2" role="group" aria-label="First group">
                          <button class="btn btn-secondary" type="button">1</button>
                          <button class="btn btn-secondary" type="button">2</button>
                          <button class="btn btn-secondary" type="button">3</button>
                          <button class="btn btn-secondary" type="button">4</button>
                        </div>
                        <div class="input-group mb-2">
                          <div class="input-group-text" id="btnGroupAddon">@</div>
                          <input class="form-control" type="text" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                        </div>
                      </div>
                      <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mb-2" role="group" aria-label="First group">
                          <button class="btn btn-secondary" type="button">1</button>
                          <button class="btn btn-secondary" type="button">2</button>
                          <button class="btn btn-secondary" type="button">3</button>
                          <button class="btn btn-secondary" type="button">4</button>
                        </div>
                        <div class="input-group mb-2">
                          <div class="input-group-text" id="btnGroupAddon2">@</div>
                          <input class="form-control" type="text" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Button group sizing</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#button-group-sizing-code" role="button" aria-controls="button-group-sizing-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="button-group-sizing-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-group btn-group-lg me-2&quot; role=&quot;group&quot; aria-label=&quot;...&quot;&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Left&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Middle&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mt-2 me-2&quot; role=&quot;group&quot; aria-label=&quot;...&quot;&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Left&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Middle&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group btn-group-sm mt-2&quot; role=&quot;group&quot; aria-label=&quot;...&quot;&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Left&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Middle&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="btn-group btn-group-lg me-2" role="group" aria-label="...">
                        <button class="btn btn-secondary" type="button">Left</button>
                        <button class="btn btn-secondary" type="button">Middle</button>
                        <button class="btn btn-secondary" type="button">Right</button>
                      </div>
                      <div class="btn-group mt-2 me-2" role="group" aria-label="...">
                        <button class="btn btn-secondary" type="button">Left</button>
                        <button class="btn btn-secondary" type="button">Middle</button>
                        <button class="btn btn-secondary" type="button">Right</button>
                      </div>
                      <div class="btn-group btn-group-sm mt-2" role="group" aria-label="...">
                        <button class="btn btn-secondary" type="button">Left</button>
                        <button class="btn btn-secondary" type="button">Middle</button>
                        <button class="btn btn-secondary" type="button">Right</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Button group vertical variation</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#button-group-vertical-variation-code" role="button" aria-controls="button-group-vertical-variation-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="button-group-vertical-variation-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical button group&quot;&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <button class="btn btn-secondary" type="button">Button</button>
                        <button class="btn btn-secondary" type="button">Button</button>
                        <button class="btn btn-secondary" type="button">Button</button>
                        <button class="btn btn-secondary" type="button">Button</button>
                        <button class="btn btn-secondary" type="button">Button</button>
                        <button class="btn btn-secondary" type="button">Button</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Disabled state</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#disabled-state-code" role="button" aria-controls="disabled-state-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="disabled-state-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-lg btn-primary&quot; type=&quot;button&quot; disabled=&quot;disabled&quot;&gt;Primary button&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary btn-lg ms-2&quot; type=&quot;button&quot; disabled=&quot;disabled&quot;&gt;Button&lt;/button&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><button class="btn btn-lg btn-primary" type="button" disabled="disabled">Primary button</button>
                      <button class="btn btn-secondary btn-lg ms-2" type="button" disabled="disabled">Button</button>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Block buttons</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#block-buttons-code" role="button" aria-controls="block-buttons-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="block-buttons-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-grid gap-2&quot;&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
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
                  <li class="nav-item"> <a class="nav-link" href="#phoenix-buttons">Phoenix Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#solid-buttons">Solid Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#subtle-buttons">Subtle Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#outline-buttons">Outline Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#close-buttons">Close Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#close-buttons-white-variant">Close buttons white variant</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#button-sizes">Button Sizes</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#button-capsule">Button Capsule</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#button-group">Button Group</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#button-toolbar">Button Toolbar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#button-toolbar-with-input-group">Button toolbar with input group</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#button-group-sizing">Button group sizing</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#button-group-vertical-variation">Button group vertical variation</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#disabled-state">Disabled state</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#block-buttons">Block buttons</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
