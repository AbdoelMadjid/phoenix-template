@extends('layouts.vertical')

@section('title', 'Plugin')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Plugin</h2>
        <p class="text-body-tertiary lead mb-2">List of third-party plugins that Phoenix uses</p>
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0" data-anchor="data-anchor">Simple approach(without npm)</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="simple-approachwithout-npm-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Place your new plugin in &lt;code&gt;public/vendors&lt;/code&gt; folder. Eg: to add the &lt;code&gt;flatpickr&lt;/code&gt; plugin, we will download it from &lt;a href=&quot;https://flatpickr.js.org/&quot; target=&quot;_blank&quot;&gt;here,&lt;/a&gt; unzip it and place the &lt;code&gt;flatpickr-master&lt;/code&gt; folder in &lt;code&gt;public/vendors&lt;/code&gt; folder. You can now simply link the plugin files to your HTML and use them.&lt;/p&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <p>Place your new plugin in <code>public/vendors</code> folder. Eg: to add the <code>flatpickr</code> plugin, we will download it from <a href="https://flatpickr.js.org/" target="_blank">here,</a> unzip it and place the <code>flatpickr-master</code> folder in <code>public/vendors</code> folder. You can now simply link the plugin files to your HTML and use them.</p>
            </div>
          </div>
        </div>
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0" data-anchor="data-anchor">Using npm</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="using-npm-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Suppose we are installing the &lt;code&gt;flatpickr&lt;/code&gt; plugin. Here are the steps:&lt;/p&gt;
&lt;p class=&quot;fw-bold mb-0&quot;&gt;Step 1:&lt;/p&gt;
&lt;p&gt;run npm command for install plugin. for &lt;code&gt;flatpickr &lt;/code&gt;we can run &lt;/p&gt;&lt;Pre&gt; &lt;code class=&quot;lang-js&quot;&gt;npm i flatpickr&lt;/code&gt;&lt;/Pre&gt;
&lt;p class=&quot;fw-bold mb-0 mt-3&quot;&gt;Step 2:&lt;/p&gt;
&lt;p&gt;Go to &lt;code&gt;vendors.json &lt;/code&gt;file and give the path directory from node_modules as follow&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;language-js&quot;&gt;&amp;quot;flatpickr&amp;quot;: {
	&amp;quot;src&amp;quot;: [&amp;quot;dist/flatpickr.min.js&amp;quot;, &amp;quot;dist/flatpickr.min.css&amp;quot;],
	&amp;quot;dest&amp;quot;: &amp;quot;flatpickr&amp;quot;
}&lt;/code&gt;&lt;/pre&gt;
&lt;p&gt;Here, &lt;code&gt;dest&lt;/code&gt; refers to &lt;code&gt;public/vendors/&lt;/code&gt;, where gulp will copy files from the &lt;code&gt;flatpickr&lt;/code&gt; plugin. We actually use the &lt;code&gt;vendors&lt;/code&gt; folder to store neccassary plugins. And all the plugins folder name will be as we give the dest value&lt;/p&gt;
&lt;p class=&quot;fw-bold mb-0 mt-3&quot;&gt;Step 3:&lt;/p&gt;
&lt;p&gt;Run the following command:&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;lang-js&quot;&gt;gulp vendor:move&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <p>Suppose we are installing the <code>flatpickr</code> plugin. Here are the steps:</p>
              <p class="fw-bold mb-0">Step 1:</p>
              <p>run npm command for install plugin. for <code>flatpickr </code>we can run </p><pre> <code class="lang-js">npm i flatpickr</code></pre>
              <p class="fw-bold mb-0 mt-3">Step 2:</p>
              <p>Go to <code>vendors.json </code>file and give the path directory from node_modules as follow</p><pre><code class="language-js">&quot;flatpickr&quot;: {
	&quot;src&quot;: [&quot;dist/flatpickr.min.js&quot;, &quot;dist/flatpickr.min.css&quot;],
	&quot;dest&quot;: &quot;flatpickr&quot;
}</code></pre>
              <p>Here, <code>dest</code> refers to <code>public/vendors/</code>, where gulp will copy files from the <code>flatpickr</code> plugin. We actually use the <code>vendors</code> folder to store neccassary plugins. And all the plugins folder name will be as we give the dest value</p>
              <p class="fw-bold mb-0 mt-3">Step 3:</p>
              <p>Run the following command:</p><pre><code class="lang-js">gulp vendor:move</code></pre>
            </div>
          </div>
        </div>
        <h2 class="mt-5 mb-3">Built-in plugins</h2>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Anchor.js</h5>
          </div>
          <div class="card-body">
            <p>A JavaScript utility for adding deep anchor links to existing page content. AnchorJS is lightweight, accessible, and has no dependencies.</p><a href="https://www.bryanbraun.com/anchorjs/#basic-usage" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">CountUp</h5>
          </div>
          <div class="card-body">
            <p>CountUp.js is a dependency-free, lightweight JavaScript class that can be used to quickly create animations that display numerical data in a more interesting way.</p><a href="https://github.com/inorganik/CountUp.js" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Dayjs</h5>
          </div>
          <div class="card-body">
            <p>Day.js 2KB immutable date-time library alternative to Moment.js with the same modern API.</p><a href="https://day.js.org/docs/en/installation/installation" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Dropzone</h5>
          </div>
          <div class="card-body">
            <p>Dropzone.js is one of the most popular drag and drop JavaScript libraries. It is free, fully open source, and makes it easy for you to handle dropped files on your website.</p><a href="https://www.dropzone.dev/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Echarts.js</h5>
          </div>
          <div class="card-body">
            <p>A powerful, interactive charting and visualization library for browser.</p><a href="https://echarts.apache.org/en/option.html" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Flatpickr</h5>
          </div>
          <div class="card-body">
            <p>Lightweight, powerful javascript datetimepicker with no dependencies.</p><a href="https://flatpickr.js.org/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">FontAwesome 5</h5>
          </div>
          <div class="card-body">
            <p>Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and toolkit.</p><a href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">FullCalendar</h5>
          </div>
          <div class="card-body">
            <p>FullCalendar generates real React virtual DOM nodes so you can leverage Fiber, React's highly optimized rendering engine.</p><a href="https://fullcalendar.io/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Glightbox</h5>
          </div>
          <div class="card-body">
            <p>Glightbox is a pure javascript lightbox. It can display images, iframes, inline content and videos with optional autoplay for YouTube, Vimeo and even self hosted videos.</p><a href="https://github.com/biati-digital/glightbox" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Google Map</h5>
          </div>
          <div class="card-body">
            <p>Phoenix uses Google map with Snazzy Maps, with different color schemes aimed towards web designers and developers.</p><a href="https://developers.google.com/maps/documentation/javascript/tutorial" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Is.js</h5>
          </div>
          <div class="card-body">
            <p>Micro check plugin. Check types, regexps, presence, time and more...</p><a href="http://is.js.org/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">List.js</h5>
          </div>
          <div class="card-body">
            <p>Tiny, invisible and simple, yet powerful and incredibly fast vanilla JavaScript that adds search, sort, filters and flexibility to plain HTML lists, tables, or anything.</p><a href="https://listjs.com/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Lodash</h5>
          </div>
          <div class="card-body">
            <p>A modern JavaScript utility library delivering modularity, performance, &amp; extras.</p><a href="https://lodash.com" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Rater</h5>
          </div>
          <div class="card-body">
            <p>Star rating widget for the browser. Unlimited number of stars. No dependencies. No Jquery required.</p><a href="https://fredolss.github.io/rater-js/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Sortablejs</h5>
          </div>
          <div class="card-body">
            <p>Reorderable drag-and-drop lists for modern browsers and touch devices. No jQuery or framework required.</p><a href="https://sortablejs.github.io/Sortable/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Swiper</h5>
          </div>
          <div class="card-body">
            <p>Swiper is the most modern free mobile touch slider with hardware accelerated transitions and amazing native behavior. It is intended to be used in mobile websites, mobile web apps, and mobile native/hybrid apps.</p><a href="https://swiperjs.com" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Tinymce</h5>
          </div>
          <div class="card-body">
            <p>The world's most popular JavaScript library for rich text editing.</p><a href="https://www.tiny.cloud/docs/quick-start/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-0" data-anchor="data-anchor">Typed Text</h5>
          </div>
          <div class="card-body">
            <p>A JavaScript library that types out, deletes them, and then types again.</p><a href="https://mattboldt.com/demos/typed-js/" target="_blank">Full Documentation</a>
          </div>
        </div>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050">
          <div class="toast align-items-center text-white bg-dark border-0" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-theme="dark">
              <div class="toast-body p-3"></div><button class="btn-close me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
