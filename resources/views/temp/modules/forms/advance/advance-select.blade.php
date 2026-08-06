@extends('layouts.vertical')

@section('title', 'Advance Select')

@push('styles')
<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Advance Select</h2>
        <p class="text-body-tertiary lead mb-2">Phoenix uses <b>Choices.js</b> for advance select. Choices.js is a lightweight, configurable select box/text input plugin. Similar to Select2 and Selectize but without the jQuery dependency</p><a class="btn btn-link p-0" href="https://github.com/Choices-js/Choices" target="_blank">Documentation for Choices<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border mb-4 mt-6" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Multiple Select Example</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#multiple-select-example-code" role="button" aria-controls="multiple-select-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="multiple-select-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label for=&quot;organizerMultiple&quot;&gt;Multiple&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;organizerMultiple&quot; data-choices=&quot;data-choices&quot; multiple=&quot;multiple&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
  &lt;option value=&quot;&quot;&gt;Select organizer...&lt;/option&gt;
  &lt;option&gt;Massachusetts Institute of Technology&lt;/option&gt;
  &lt;option&gt;University of Chicago&lt;/option&gt;
  &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
  &lt;option&gt;California Institute of Technology&lt;/option&gt;
&lt;/select&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><label for="organizerMultiple">Multiple</label><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option value="">Select organizer...</option>
                        <option>Massachusetts Institute of Technology</option>
                        <option>University of Chicago</option>
                        <option>GSAS Open Labs At Harvard</option>
                        <option>California Institute of Technology</option>
                      </select></div>
                  </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Single Select Example</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#single-select-example-code" role="button" aria-controls="single-select-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="single-select-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label for=&quot;organizerSingle&quot;&gt;Single&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;organizerSingle&quot; data-choices=&quot;data-choices&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
  &lt;option value=&quot;&quot;&gt;Select organizer...&lt;/option&gt;
  &lt;option&gt;Massachusetts Institute of Technology&lt;/option&gt;
  &lt;option&gt;University of Chicago&lt;/option&gt;
  &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
  &lt;option&gt;California Institute of Technology&lt;/option&gt;
&lt;/select&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy"><label for="organizerSingle">Single</label><select class="form-select" id="organizerSingle" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option value="">Select organizer...</option>
                        <option>Massachusetts Institute of Technology</option>
                        <option>University of Chicago</option>
                        <option>GSAS Open Labs At Harvard</option>
                        <option>California Institute of Technology</option>
                      </select></div>
                  </div>
                </div>
                <div class="card shadow-none border mb-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Floating label Example</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#floating-label-example-code" role="button" aria-controls="floating-label-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="floating-label-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-floating form-floating-advance-select mb-3&quot;&gt;&lt;label for=&quot;floaTingLabelSingleSelect&quot;&gt;Single&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;floaTingLabelSingleSelect&quot; data-choices=&quot;data-choices&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
    &lt;option&gt;Massachusetts Institute of Technology&lt;/option&gt;
    &lt;option&gt;University of Chicago&lt;/option&gt;
    &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
    &lt;option&gt;California Institute of Technology&lt;/option&gt;
  &lt;/select&gt;&lt;/div&gt;
&lt;div class=&quot;form-floating form-floating-advance-select&quot;&gt;&lt;label for=&quot;floaTingLabelMultipleSelect&quot;&gt;Multiple&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;floaTingLabelMultipleSelect&quot; data-choices=&quot;data-choices&quot; multiple=&quot;multiple&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
    &lt;option selected=&quot;selected&quot;&gt;Massachusetts Institute of Technology&lt;/option&gt;
    &lt;option&gt;University of Chicago&lt;/option&gt;
    &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
    &lt;option&gt;California Institute of Technology&lt;/option&gt;
  &lt;/select&gt;&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-floating form-floating-advance-select mb-3"><label for="floaTingLabelSingleSelect">Single</label><select class="form-select" id="floaTingLabelSingleSelect" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                          <option>Massachusetts Institute of Technology</option>
                          <option>University of Chicago</option>
                          <option>GSAS Open Labs At Harvard</option>
                          <option>California Institute of Technology</option>
                        </select></div>
                      <div class="form-floating form-floating-advance-select"><label for="floaTingLabelMultipleSelect">Multiple</label><select class="form-select" id="floaTingLabelMultipleSelect" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                          <option selected="selected">Massachusetts Institute of Technology</option>
                          <option>University of Chicago</option>
                          <option>GSAS Open Labs At Harvard</option>
                          <option>California Institute of Technology</option>
                        </select></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                  <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                      <h4 class="text-body mb-0" data-anchor="data-anchor">Validation Example</h4>
                    </div>
                    <div class="col col-md-auto">
                      <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#validation-example-code" role="button" aria-controls="validation-example-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="collapse code-collapse" id="validation-example-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;form class=&quot;needs-validation&quot; novalidate=&quot;novalidate&quot;&gt;
  &lt;div class=&quot;mb-3&quot;&gt;&lt;label for=&quot;organizerMultiple2&quot;&gt;Multiple&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;organizerMultiple2&quot; data-choices=&quot;data-choices&quot; multiple=&quot;multiple&quot; size=&quot;1&quot; name=&quot;organizerMultiple&quot; required=&quot;required&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
      &lt;option value=&quot;&quot;&gt;Select organizer...&lt;/option&gt;
      &lt;option&gt;Massachusetts Institute of Technology&lt;/option&gt;
      &lt;option&gt;University of Chicago&lt;/option&gt;
      &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
      &lt;option&gt;California Institute of Technology&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;Please select one or multiple&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3&quot;&gt;&lt;label for=&quot;organizerSingle2&quot;&gt;Single&lt;/label&gt;&lt;select class=&quot;form-select&quot; id=&quot;organizerSingle2&quot; data-choices=&quot;data-choices&quot; size=&quot;1&quot; required=&quot;required&quot; name=&quot;organizerSingle&quot; data-options='{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}'&gt;
      &lt;option value=&quot;&quot;&gt;Select organizer...&lt;/option&gt;
      &lt;option&gt;Massachusetts Institute of Technology&lt;/option&gt;
      &lt;option&gt;University of Chicago&lt;/option&gt;
      &lt;option&gt;GSAS Open Labs At Harvard&lt;/option&gt;
      &lt;option&gt;California Institute of Technology &lt;/option&gt;
    &lt;/select&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;Please select one&lt;/div&gt;
  &lt;/div&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/form&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy">
                    <form class="needs-validation" novalidate="novalidate">
                      <div class="mb-3"><label for="organizerMultiple2">Multiple</label><select class="form-select" id="organizerMultiple2" data-choices="data-choices" multiple="multiple" size="1" name="organizerMultiple" required="required" data-options='{"removeItemButton":true,"placeholder":true}'>
                          <option value="">Select organizer...</option>
                          <option>Massachusetts Institute of Technology</option>
                          <option>University of Chicago</option>
                          <option>GSAS Open Labs At Harvard</option>
                          <option>California Institute of Technology</option>
                        </select>
                        <div class="invalid-feedback">Please select one or multiple</div>
                      </div>
                      <div class="mb-3"><label for="organizerSingle2">Single</label><select class="form-select" id="organizerSingle2" data-choices="data-choices" size="1" required="required" name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                          <option value="">Select organizer...</option>
                          <option>Massachusetts Institute of Technology</option>
                          <option>University of Chicago</option>
                          <option>GSAS Open Labs At Harvard</option>
                          <option>California Institute of Technology </option>
                        </select>
                        <div class="invalid-feedback">Please select one</div>
                      </div><button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card shadow-none border my-4" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                  <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                      <h4 class="text-body mb-0" data-anchor="data-anchor">Stylesheet</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="collapse code-collapse" id="stylesheet-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;link href=&amp;quot;vendors/choices/choices.min.css&amp;quot; rel=&amp;quot;stylesheet&amp;quot; /&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy"><pre><code class="language-html">&lt;link href=&quot;vendors/choices/choices.min.css&quot; rel=&quot;stylesheet&quot; /&gt;</code></pre>
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
                  <div class="collapse code-collapse" id="javascript-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;vendors/choices/choices.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy"><pre><code class="language-html">&lt;script src=&quot;vendors/choices/choices.min.js&quot;&gt;&lt;/script&gt;</code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-2">
              <div class="position-sticky mt-xl-4" style="top: 80px;">
                <h5 class="lh-1">On this page </h5>
                <hr>
                <ul class="nav nav-vertical flex-column doc-nav" data-doc-nav="data-doc-nav">
                  <li class="nav-item"> <a class="nav-link" href="#multiple-select-example">Multiple Select Example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#single-select-example">Single Select Example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#floating-label-example">Floating label Example</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#validation-example">Validation Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
