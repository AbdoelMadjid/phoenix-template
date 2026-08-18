@extends('layouts.vertical')

@section('title', 'Date Picker')

@push('styles')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Date Picker</h2>
    <p class="text-body-tertiary lead mb-2">Lightweight, powerful javascript datetime picker with no dependencies.</p><a
        class="btn btn-link p-0" href="https://flatpickr.js.org/" target="_blank">Documentation for Flatpickr<span
            class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mb-9">
        <div class="row g-3 my-4">
            <div class="col-xl-6">
                <div class="card shadow-none border" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Date Picker</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#date-picker-code" role="button" aria-controls="date-picker-code"
                                        aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                        code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                            class="me-2" data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="date-picker-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label class=&quot;form-label&quot; for=&quot;datepicker&quot;&gt;Start Date&lt;/label&gt;
&lt;input class=&quot;form-control datetimepicker&quot; id=&quot;datepicker&quot; type=&quot;text&quot; placeholder=&quot;dd/mm/yyyy&quot; data-options='{&quot;disableMobile&quot;:true,&quot;dateFormat&quot;:&quot;d/m/Y&quot;}' /&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <label class="form-label" for="datepicker">Start Date</label>
                            <input class="form-control datetimepicker" id="datepicker" type="text"
                                placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card shadow-none border" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Time Picker</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#time-picker-code" role="button" aria-controls="time-picker-code"
                                        aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                        code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                            class="me-2" data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="time-picker-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label class=&quot;form-label&quot; for=&quot;timepicker1&quot;&gt;Start Time&lt;/label&gt;
&lt;input class=&quot;form-control datetimepicker&quot; id=&quot;timepicker1&quot; type=&quot;text&quot; placeholder=&quot;hour : minute&quot; data-options='{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}' /&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <label class="form-label" for="timepicker1">Start Time</label>
                            <input class="form-control datetimepicker" id="timepicker1" type="text"
                                placeholder="hour : minute"
                                data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card shadow-none border" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Date Time Picker</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#date-time-picker-code" role="button"
                                        aria-controls="date-time-picker-code" aria-expanded="false"> <span class="me-2"
                                            data-feather="code"></span>View code</a><a
                                        class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                            data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="date-time-picker-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label class=&quot;form-label&quot; for=&quot;datetimepicker&quot;&gt;Start Date&lt;/label&gt;
&lt;input class=&quot;form-control datetimepicker&quot; id=&quot;datetimepicker&quot; type=&quot;text&quot; placeholder=&quot;dd/mm/yyyy hour : minute&quot; data-options='{&quot;enableTime&quot;:true,&quot;dateFormat&quot;:&quot;d/m/y H:i&quot;,&quot;disableMobile&quot;:true}' /&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <label class="form-label" for="datetimepicker">Start Date</label>
                            <input class="form-control datetimepicker" id="datetimepicker" type="text"
                                placeholder="dd/mm/yyyy hour : minute"
                                data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card shadow-none border" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Range</h4>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#range-code" role="button" aria-controls="range-code"
                                        aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                        code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                            class="me-2" data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="range-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;label class=&quot;form-label&quot; for=&quot;timepicker2&quot;&gt;Select Time Range&lt;/label&gt;
&lt;input class=&quot;form-control datetimepicker&quot; id=&quot;timepicker2&quot; type=&quot;text&quot; placeholder=&quot;d/m/y to d/m/y&quot; data-options='{&quot;mode&quot;:&quot;range&quot;,&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}' /&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <label class="form-label" for="timepicker2">Select Time Range</label>
                            <input class="form-control datetimepicker" id="timepicker2" type="text"
                                placeholder="d/m/y to d/m/y"
                                data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card shadow-none border" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom bg-body">
                        <div class="row g-3 justify-content-between align-items-end">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Validation</h4>
                                <p class="mb-0 mt-2 text-body-secondary">Pass <code>"allowInput":true</code> through
                                    <code>data-options</code> attribute to apply the form validation.</p>
                            </div>
                            <div class="col col-md-auto">
                                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                        class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                            class="fas fa-copy me-1"></span>Copy Code</button><a
                                        class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                        href="#validation-code" role="button" aria-controls="validation-code"
                                        aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                        code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                            class="me-2" data-feather="eye"></span>Hide code</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="collapse code-collapse" id="validation-code">
                            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;form class=&quot;needs-validation&quot; novalidate=&quot;novalidate&quot;&gt;
  &lt;div class=&quot;mb-3&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;datepickerVal&quot;&gt; Date&lt;/label&gt;&lt;input class=&quot;form-control datetimepicker&quot; id=&quot;datepickerVal&quot; type=&quot;text&quot; placeholder=&quot;d/m/y&quot; required=&quot;required&quot; data-options='{&quot;disableMobile&quot;:true,&quot;allowInput&quot;:true}' /&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;dateTimepickerVal&quot;&gt;Date &amp; Time&lt;/label&gt;&lt;input class=&quot;form-control datetimepicker&quot; id=&quot;dateTimepickerVal&quot; type=&quot;text&quot; required=&quot;required&quot; placeholder=&quot;d/m/y H:i&quot; data-options='{&quot;enableTime&quot;:true,&quot;dateFormat&quot;:&quot;d/m/y H:i&quot;,&quot;disableMobile&quot;:true,&quot;allowInput&quot;:true}' /&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required&lt;/div&gt;
  &lt;/div&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/form&gt;</code></pre>
                        </div>
                        <div class="p-4 code-to-copy">
                            <form class="needs-validation" novalidate="novalidate">
                                <div class="mb-3"><label class="form-label" for="datepickerVal"> Date</label><input
                                        class="form-control datetimepicker" id="datepickerVal" type="text"
                                        placeholder="d/m/y" required="required"
                                        data-options='{"disableMobile":true,"allowInput":true}'>
                                    <div class="invalid-feedback">This field is required</div>
                                </div>
                                <div class="mb-3"><label class="form-label" for="dateTimepickerVal">Date &
                                        Time</label><input class="form-control datetimepicker" id="dateTimepickerVal"
                                        type="text" required="required" placeholder="d/m/y H:i"
                                        data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true,"allowInput":true}'>
                                    <div class="invalid-feedback">This field is required</div>
                                </div><button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
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
                <div class="collapse code-collapse" id="stylesheet-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;link href=&amp;quot;vendors/flatpickr/flatpickr.min.css&amp;quot; rel=&amp;quot;stylesheet&amp;quot; /&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre><code class="language-html">&lt;link href=&quot;vendors/flatpickr/flatpickr.min.css&quot; rel=&quot;stylesheet&quot; /&gt;</code></pre>
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
                <div class="collapse code-collapse" id="javascript-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;vendors/flatpickr/flatpickr.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre><code class="language-html">&lt;script src=&quot;vendors/flatpickr/flatpickr.min.js&quot;&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
