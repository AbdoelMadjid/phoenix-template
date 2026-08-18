@extends('layouts.vertical')

@section('title', 'Bootstrap')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Carousel</h2>
    <p class="text-body-tertiary lead mb-2">A slideshow component for cycling through elements—images or slides of text—like
        a carousel.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/carousel/"
        target="_blank">Carousel on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic Example</h4>
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;carousel slide carousel-fade&quot; id=&quot;carouselExampleControls&quot; data-bs-ride=&quot;carousel&quot;&gt;
  &lt;div class=&quot;carousel-indicators&quot;&gt;
    &lt;button class=&quot;active&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleControls&quot; data-bs-slide-to=&quot;0&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
    &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleControls&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
    &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleControls&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;carousel-inner rounded&quot;&gt;
    &lt;div class=&quot;carousel-item active&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/6.jpg&quot; alt=&quot;First slide&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/7.jpg&quot; alt=&quot;Second slide&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/8.jpg&quot; alt=&quot;Third slide&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleControls&quot; data-bs-slide=&quot;prev&quot;&gt;
    &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleControls&quot; data-bs-slide=&quot;next&quot;&gt;
    &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="carousel slide carousel-fade" id="carouselExampleControls"
                                    data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button class="active" type="button" data-bs-target="#carouselExampleControls"
                                            data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleControls"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleControls"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner rounded">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/6.jpg') }}"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/7.jpg') }}"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/8.jpg') }}"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Styled Example</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#styled-example-code" role="button"
                                            aria-controls="styled-example-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="styled-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;carousel slide theme-slider text-center carousel-fade&quot; id=&quot;controlStyledExample&quot; data-ride=&quot;carousel&quot;&gt;
  &lt;div class=&quot;carousel-indicators&quot;&gt;
    &lt;button class=&quot;active&quot; type=&quot;button&quot; data-bs-target=&quot;#controlStyledExample&quot; data-bs-slide-to=&quot;0&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
    &lt;button type=&quot;button&quot; data-bs-target=&quot;#controlStyledExample&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
    &lt;button type=&quot;button&quot; data-bs-target=&quot;#controlStyledExample&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;carousel-inner rounded&quot;&gt;
    &lt;div class=&quot;carousel-item active&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/6.jpg&quot; alt=&quot;First slide&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/7.jpg&quot; alt=&quot;Second slide&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/8.jpg&quot; alt=&quot;Third slide&quot; /&gt;
    &lt;/div&gt;
    &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#controlStyledExample&quot; data-bs-slide=&quot;prev&quot;&gt;
      &lt;span class=&quot;fas fa-angle-left&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;&lt;/button&gt;
    &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#controlStyledExample&quot; data-bs-slide=&quot;next&quot;&gt;
      &lt;span class=&quot;fas fa-angle-right&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="carousel slide theme-slider text-center carousel-fade"
                                    id="controlStyledExample" data-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button class="active" type="button" data-bs-target="#controlStyledExample"
                                            data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#controlStyledExample"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#controlStyledExample"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner rounded">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/6.jpg') }}"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/7.jpg') }}"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/8.jpg') }}"
                                                alt="Third slide">
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#controlStyledExample" data-bs-slide="prev">
                                            <span class="fas fa-angle-left"></span>
                                            <span class="sr-only">Previous</span></button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#controlStyledExample" data-bs-slide="next">
                                            <span class="fas fa-angle-right"></span>
                                            <span class="sr-only">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">With Captions</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#with-captions-code" role="button" aria-controls="with-captions-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="with-captions-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;carousel slide carousel-fade&quot; id=&quot;carouselExampleCaptions&quot; data-ride=&quot;carousel&quot;&gt;
  &lt;div class=&quot;carousel-indicators&quot;&gt;
    &lt;button class=&quot;active&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;0&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
    &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
    &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;carousel-inner rounded-1&quot;&gt;
    &lt;div class=&quot;carousel-item active&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/5.jpg&quot; alt=&quot;First slide&quot; /&gt;
      &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
        &lt;h5 class=&quot;text-white&quot;&gt;First Slide Heading&lt;/h5&gt;
        &lt;p class=&quot;text-white&quot;&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/28.jpg&quot; alt=&quot;Second slide&quot; /&gt;
      &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
        &lt;h5 class=&quot;text-white&quot;&gt;Second Slide Heading&lt;/h5&gt;
        &lt;p class=&quot;text-white&quot;&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/9.jpg&quot; alt=&quot;Third slide&quot; /&gt;
      &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
        &lt;h5 class=&quot;text-white&quot;&gt;Third Slide Heading&lt;/h5&gt;
        &lt;p class=&quot;text-white&quot;&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide=&quot;prev&quot;&gt;
    &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide=&quot;next&quot;&gt;
    &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="carousel slide carousel-fade" id="carouselExampleCaptions"
                                    data-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button class="active" type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner rounded-1">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/5.jpg') }}"
                                                alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">First Slide Heading</h5>
                                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/28.jpg') }}"
                                                alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Second Slide Heading</h5>
                                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/9.jpg') }}"
                                                alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Third Slide Heading</h5>
                                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Crossfade</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#crossfade-code" role="button" aria-controls="crossfade-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="crossfade-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;carousel slide carousel-fade&quot; id=&quot;carouselExampleFade&quot; data-ride=&quot;carousel&quot;&gt;
  &lt;div class=&quot;carousel-inner rounded&quot;&gt;
    &lt;div class=&quot;carousel-item active&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/8.jpg&quot; alt=&quot;First slide&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/7.jpg&quot; alt=&quot;Second slide&quot; /&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-item&quot;&gt;
      &lt;img class=&quot;d-block w-100&quot; src=&quot;../../../assets/img/generic/6.jpg&quot; alt=&quot;Third slide&quot; /&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleFade&quot; data-bs-slide=&quot;prev&quot;&gt;
    &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleFade&quot; data-bs-slide=&quot;next&quot;&gt;
    &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="carousel slide carousel-fade" id="carouselExampleFade" data-ride="carousel">
                                    <div class="carousel-inner rounded">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/8.jpg') }}"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/7.jpg') }}"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/img/generic/6.jpg') }}"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
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
                        <li class="nav-item"> <a class="nav-link" href="#basic-example">Basic Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#styled-example">Styled Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#with-captions">With Captions</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#crossfade">Crossfade</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
