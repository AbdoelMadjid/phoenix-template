@extends('layouts.vertical')

@section('title', 'Accordion')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Accordion</h2>
    <p class="text-body-tertiary lead mb-2">Build vertically collapsing accordions in combination with our Collapse
        JavaScript plugin.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/accordion/"
        target="_blank">Accordion on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Accordion Example</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#accordion-example-code" role="button"
                                            aria-controls="accordion-example-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="accordion-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
  &lt;div class=&quot;accordion-item border-top&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
        How long does it take to ship my order?
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;collapseOne&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body pt-0&quot;&gt;
        &lt;strong&gt;This is the first item&amp;apos;s accordion body.&lt;/strong&gt;
        It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&amp;apos;s also worth noting that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
        How long does it take to ship my order?
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseTwo&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body pt-0&quot;&gt;
        &lt;strong&gt;This is the second item&amp;apos;s accordion body.&lt;/strong&gt;
        It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&amp;apos;s also worth noting that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
        How long does it take to ship my order?
      &lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseThree&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body pt-0&quot;&gt;
        &lt;strong&gt;This is the third item&amp;apos;s accordion body.&lt;/strong&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&amp;apos;s also worth noting that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item border-top">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                How long does it take to ship my order?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="collapseOne"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body pt-0">
                                                <strong>This is the first item&apos;s accordion body.</strong>
                                                It is shown by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables.
                                                It&apos;s also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How long does it take to ship my order?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="collapseTwo"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body pt-0">
                                                <strong>This is the second item&apos;s accordion body.</strong>
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables.
                                                It&apos;s also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                How long does it take to ship my order?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="collapseThree"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body pt-0">
                                                <strong>This is the third item&apos;s accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance, as
                                                well as the showing and hiding via CSS transitions. You can modify any of
                                                this with custom CSS or overriding our default variables. It&apos;s also
                                                worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
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
                        <li class="nav-item"> <a class="nav-link" href="#accordion-example">Accordion Example</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
