@extends('layouts.vertical')

@section('title', 'Checks')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Checks</h2>
        <p class="text-body-tertiary lead mb-2">Create consistent cross-browser and cross-device checkboxes and radios with our completely rewritten checks component.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/forms/checks-radios/" target="_blank">Checks on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Checks</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#checks-code" role="button" aria-controls="checks-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="checks-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexCheckDefault&quot; type=&quot;checkbox&quot; value=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;Default checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexCheckChecked&quot; type=&quot;checkbox&quot; value=&quot;&quot; checked=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckChecked&quot;&gt;Checked checkbox&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-check">
                        <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="" checked="">
                        <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Radios</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#radios-code" role="button" aria-controls="radios-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="radios-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexRadioDefault1&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault1&quot;&gt;Default radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexRadioDefault2&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; checked=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault2&quot;&gt;Default checked radio&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-check">
                        <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault">
                        <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="">
                        <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Switches</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#switches-code" role="button" aria-controls="switches-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="switches-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexSwitchCheckDefault&quot; type=&quot;checkbox&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDefault&quot;&gt;Default switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexSwitchCheckChecked&quot; type=&quot;checkbox&quot; checked=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckChecked&quot;&gt;Checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexSwitchCheckDisabled&quot; type=&quot;checkbox&quot; disabled=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDisabled&quot;&gt;Disabled switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;flexSwitchCheckCheckedDisabled&quot; type=&quot;checkbox&quot; checked=&quot;&quot; disabled=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckCheckedDisabled&quot;&gt;Disabled checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked="">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckDisabled" type="checkbox" disabled="">
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" id="flexSwitchCheckCheckedDisabled" type="checkbox" checked="" disabled="">
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Check Inline</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#check-inline-code" role="button" aria-controls="check-inline-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="check-inline-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;inlineCheckbox1&quot; type=&quot;checkbox&quot; value=&quot;option1&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox1&quot;&gt;Item 1&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;inlineCheckbox2&quot; type=&quot;checkbox&quot; value=&quot;option2&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox2&quot;&gt;Item 2&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;inlineCheckbox3&quot; type=&quot;checkbox&quot; value=&quot;option3&quot; disabled=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox3&quot;&gt;Item 3 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Item 1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Item 2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="option3" disabled="">
                        <label class="form-check-label" for="inlineCheckbox3">Item 3 (disabled)</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Radio Inline</h4>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#radio-inline-code" role="button" aria-controls="radio-inline-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="radio-inline-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;inlineRadio1&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; value=&quot;option1&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio1&quot;&gt;Item 1&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;inlineRadio2&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; value=&quot;option2&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio2&quot;&gt;item 2&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; id=&quot;inlineRadio3&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; value=&quot;option3&quot; disabled=&quot;&quot; /&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio3&quot;&gt;Item 3 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Item 1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2">
                        <label class="form-check-label" for="inlineRadio2">item 2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3" disabled="">
                        <label class="form-check-label" for="inlineRadio3">Item 3 (disabled)</label>
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
                  <li class="nav-item"> <a class="nav-link" href="#checks">Checks</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#radios">Radios</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#switches">Switches</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#check-inline">Check Inline</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#radio-inline">Radio Inline</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
