@extends('layouts.vertical')

@section('title', 'Input Group')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Input group</h2>
    <p class="text-body-tertiary lead mb-2">Easily extend form controls by adding text, buttons, or button groups on either
        side of textual inputs, custom selects, and custom file inputs.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/forms/input-group/" target="_blank">Input group on Bootstrap<span
            class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic example</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#basic-example-code" role="button" aria-controls="basic-example-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="basic-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot; /&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;label class=&quot;form-label&quot; for=&quot;basic-url&quot;&gt;Your vanity URL&lt;/label&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; id=&quot;basic-url&quot; type=&quot;text&quot; aria-describedby=&quot;basic-addon3&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Amount (to the nearest dollar)&quot; /&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
  &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;.
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input class="form-control" type="text" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                                <label class="form-label" for="basic-url">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input class="form-control" id="basic-url" type="text"
                                        aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Wrapping</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#wrapping-code" role="button" aria-controls="wrapping-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="wrapping-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;input-group flex-nowrap&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-wrapping&quot;&gt;@&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;addon-wrapping&quot; /&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">@</span>
                                    <input class="form-control" type="text" placeholder="Username"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Sizing</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#sizing-code" role="button" aria-controls="sizing-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="sizing-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;input-group input-group-sm mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-default&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group input-group-lg&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-lg&quot; /&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    <input class="form-control" type="text" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    <input class="form-control" type="text" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    <input class="form-control" type="text" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Checkboxes and Radios</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#checkboxes-and-radios-code" role="button"
                                            aria-controls="checkboxes-and-radios-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="checkboxes-and-radios-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; aria-label=&quot;Checkbox for following text input&quot; /&gt;
  &lt;/div&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Text input with checkbox&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; aria-label=&quot;Radio button for following text input&quot; /&gt;
  &lt;/div&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Text input with radio button&quot; /&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input" type="checkbox" value=""
                                            aria-label="Checkbox for following text input">
                                    </div>
                                    <input class="form-control" type="text" aria-label="Text input with checkbox">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <input class="form-check-input" type="radio" value=""
                                            aria-label="Radio button for following text input">
                                    </div>
                                    <input class="form-control" type="text" aria-label="Text input with radio button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Multiple inputs</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#multiple-inputs-code" role="button"
                                            aria-controls="multiple-inputs-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="multiple-inputs-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;First name&quot; /&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Last name&quot; /&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="input-group">
                                    <span class="input-group-text">First and last name</span>
                                    <input class="form-control" type="text" aria-label="First name">
                                    <input class="form-control" type="text" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Multiple Addons</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#multiple-addons-code" role="button"
                                            aria-controls="multiple-addons-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="multiple-addons-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot; /&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                    <input class="form-control" type="text"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
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
                        <li class="nav-item"> <a class="nav-link" href="#basic-example">Basic example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#wrapping">Wrapping</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#sizing">Sizing</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#checkboxes-and-radios">Checkboxes and Radios</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#multiple-inputs">Multiple inputs</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#multiple-addons">Multiple Addons</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
