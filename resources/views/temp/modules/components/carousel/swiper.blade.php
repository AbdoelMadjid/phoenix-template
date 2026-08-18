@extends('layouts.vertical')

@section('title', 'Swiper')

@push('styles')
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Swiper</h2>
    <p class="text-body-tertiary lead mb-2">Swiper is the most modern free mobile touch slider with hardware accelerated
        transitions and amazing native behavior. It is intended to be used in mobile websites, mobile web apps, and mobile
        native/hybrid apps.</p><a class="btn btn-link p-0" href="https://swiperjs.com/get-started"
        target="_blank">Documentation for swiper<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Swiper with thumbnail</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">This can be simply done by using the attribute.
                                        For Swiper with thumbnail use <code>thumb </code>options in your pug/HTML. You can
                                        place thumbnail to a specific parent by providing <code>thumbOptions: '#parentID'
                                        </code>value in <code>thumb </code>options. Otherwise thumbnail will be placed after
                                        the <code>.swiper </code>element.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#swiper-with-thumbnail-code" role="button"
                                            aria-controls="swiper-with-thumbnail-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="swiper-with-thumbnail-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;swiper-theme-container&quot;&gt;
  &lt;div class=&quot;swiper theme-slider&quot; data-swiper='{&quot;spaceBetween&quot;:8,&quot;loop&quot;:true,&quot;loopedSlides&quot;:5,&quot;thumb&quot;:{&quot;spaceBetween&quot;:8,&quot;slidesPerView&quot;:5,&quot;loop&quot;:true,&quot;freeMode&quot;:true,&quot;grabCursor&quot;:true,&quot;loopedSlides&quot;:5,&quot;centeredSlides&quot;:true,&quot;centeredSlidesBounds&quot;:true,&quot;slideToClickedSlide&quot;:true,&quot;watchSlidesVisibility&quot;:true,&quot;watchSlidesProgress&quot;:true},&quot;slideToClickedSlide&quot;:true}'&gt;
    &lt;div class=&quot;swiper-wrapper&quot;&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;&lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/30.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/31.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/32.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/33.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/34.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/35.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;swiper-nav&quot;&gt;
    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;span class=&quot;fas fa-chevron-right nav-icon&quot;&gt;&lt;/span&gt;&lt;/div&gt;
    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;span class=&quot;fas fa-chevron-left nav-icon&quot;&gt;&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="swiper-theme-container">
                                    <div class="swiper theme-slider"
                                        data-swiper='{"spaceBetween":8,"loop":true,"loopedSlides":5,"thumb":{"spaceBetween":8,"slidesPerView":5,"loop":true,"freeMode":true,"grabCursor":true,"loopedSlides":5,"centeredSlides":true,"centeredSlidesBounds":true,"slideToClickedSlide":true,"watchSlidesVisibility":true,"watchSlidesProgress":true},"slideToClickedSlide":true}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/30.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/31.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/32.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/33.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/34.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/35.jpg') }}" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="swiper-nav">
                                        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                        </div>
                                        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Swiper without thumbnail</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">For Swiper without thumbnail simply remove
                                        thumb options from your pug/HTML.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#swiper-without-thumbnail-code" role="button"
                                            aria-controls="swiper-without-thumbnail-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="swiper-without-thumbnail-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;swiper-theme-container&quot;&gt;
  &lt;div class=&quot;swiper theme-slider&quot; data-swiper='{&quot;autoplay&quot;:true,&quot;spaceBetween&quot;:5,&quot;loop&quot;:true,&quot;loopedSlides&quot;:5,&quot;slideToClickedSlide&quot;:true}'&gt;
    &lt;div class=&quot;swiper-wrapper&quot;&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;&lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/30.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/31.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/32.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/33.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/34.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/35.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;swiper-nav&quot;&gt;
    &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;span class=&quot;fas fa-chevron-right nav-icon&quot;&gt;&lt;/span&gt;&lt;/div&gt;
    &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;span class=&quot;fas fa-chevron-left nav-icon&quot;&gt;&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="swiper-theme-container">
                                    <div class="swiper theme-slider"
                                        data-swiper='{"autoplay":true,"spaceBetween":5,"loop":true,"loopedSlides":5,"slideToClickedSlide":true}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/30.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/31.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/32.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/33.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/34.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/35.jpg') }}" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="swiper-nav">
                                        <div class="swiper-button-next"><span
                                                class="fas fa-chevron-right nav-icon"></span></div>
                                        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Swiper without navigation example
                                    </h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#swiper-without-navigation-example-code" role="button"
                                            aria-controls="swiper-without-navigation-example-code" aria-expanded="false">
                                            <span class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="swiper-without-navigation-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;swiper-theme-container&quot;&gt;
  &lt;div class=&quot;swiper theme-slider&quot; data-swiper='{&quot;autoplay&quot;:true,&quot;spaceBetween&quot;:5,&quot;loop&quot;:true,&quot;loopedSlides&quot;:5,&quot;slideToClickedSlide&quot;:true}'&gt;
    &lt;div class=&quot;swiper-wrapper&quot;&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;&lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/30.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/31.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/32.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/33.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/34.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt; &lt;img class=&quot;rounded-1 img-fluid&quot; src=&quot;../../../assets/img/generic/35.jpg&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="swiper-theme-container">
                                    <div class="swiper theme-slider"
                                        data-swiper='{"autoplay":true,"spaceBetween":5,"loop":true,"loopedSlides":5,"slideToClickedSlide":true}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/30.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/31.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/32.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/33.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/34.jpg') }}" alt=""></div>
                                            <div class="swiper-slide"> <img class="rounded-1 img-fluid"
                                                    src="{{ asset('assets/img/generic/35.jpg') }}" alt=""></div>
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
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Stylesheet</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="stylesheet-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;link href=&amp;quot;vendors/swiper/swiper-bundle.min.css&amp;quot; rel=&amp;quot;stylesheet&amp;quot; /&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <pre><code class="language-html">&lt;link href=&quot;vendors/swiper/swiper-bundle.min.css&quot; rel=&quot;stylesheet&quot; /&gt;</code></pre>
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;vendors/swiper/swiper-bundle.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <pre><code class="language-html">&lt;script src=&quot;vendors/swiper/swiper-bundle.min.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <li class="nav-item"> <a class="nav-link" href="#swiper-with-thumbnail">Swiper with thumbnail</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#swiper-without-thumbnail">Swiper without
                                thumbnail</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#swiper-without-navigation-example">Swiper
                                without navigation example</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
