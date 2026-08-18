@extends('layouts.vertical')

@section('title', 'Combo Navbar')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm" data-anchor="data-anchor">Combo Navbar</h2>
    <p class="text-body-tertiary lead mb-2">Here is the default Phoenix's powerful, responsive vertical navigation. The
        following sections describe how you can customize both the responsive breakpoint and collapsing behavior.</p><a
        class="btn btn-link p-0" href="{{ url('demo/combo-nav') }}" target="_blank">Combo navbar example<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="card shadow-none border mb-4 mt-5" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Navbar combo structure</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="navbar-combo-structure-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-0&quot;&gt;Add &lt;code&gt;[data-navigation-type=&quot;combo&quot;] &lt;/code&gt;attribute in &lt;code&gt;Html &lt;/code&gt;element to start with combo-navbar&lt;/p&gt;&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html data-navigation-type=&amp;quot;combo&amp;quot;&amp;gt;

  &amp;lt;head&amp;gt;...&amp;lt;/head&amp;gt;

  &amp;lt;body&amp;gt;
    &amp;lt;main&amp;gt;
      &amp;lt;div class=&amp;quot;container-fluid&amp;quot;&amp;gt;
        &amp;lt;nav class=&amp;quot;navbar navbar-vertical navbar-expand-lg&amp;quot;&amp;gt;
          &amp;lt;!-- navbar vertical content goes here--&amp;gt;
        &amp;lt;/nav&amp;gt;
        &amp;lt;nav class=&amp;quot;navbar navbar-top navbar-expand&amp;quot;&amp;gt;
          &amp;lt;!-- navbar top content goes here--&amp;gt;
        &amp;lt;/nav&amp;gt;
        &amp;lt;div class=&amp;quot;content&amp;quot;&amp;gt;
          &amp;lt;!--  content goes here--&amp;gt;
        &amp;lt;/div&amp;gt;
      &amp;lt;/div&amp;gt;
    &amp;lt;/main&amp;gt;
  &amp;lt;/body&amp;gt;

&amp;lt;/html&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p class="mb-0">Add <code>[data-navigation-type="combo"] </code>attribute in <code>Html </code>element to
                    start with combo-navbar</p>
                <pre class="scrollbar my-5"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html data-navigation-type=&quot;combo&quot;&gt;

  &lt;head&gt;...&lt;/head&gt;

  &lt;body&gt;
    &lt;main&gt;
      &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;nav class=&quot;navbar navbar-vertical navbar-expand-lg&quot;&gt;
          &lt;!-- navbar vertical content goes here--&gt;
        &lt;/nav&gt;
        &lt;nav class=&quot;navbar navbar-top navbar-expand&quot;&gt;
          &lt;!-- navbar top content goes here--&gt;
        &lt;/nav&gt;
        &lt;div class=&quot;content&quot;&gt;
          &lt;!--  content goes here--&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/main&gt;
  &lt;/body&gt;

&lt;/html&gt;</code></pre>
            </div>
        </div>
    </div>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Responsive behavior </h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="responsive-behavior--code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-0&quot;&gt;Phoenix used the Bootstrap's &lt;code&gt;.navbar-expand{-sm|-md|-lg|-xl|-xxl} &lt;/code&gt; classes in &lt;code&gt;.navbar &lt;/code&gt;element to decide when the navbar vertical will expand or not.&lt;/p&gt;&lt;pre class=&quot;scrollbar mt-5&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;nav class=&amp;quot;navbar navbar-vertical navbar-expand-lg&amp;quot;&amp;gt;&amp;lt;/nav&amp;gt;
&amp;lt;nav class=&amp;quot;navbar navbar-top navbar-expand-lg&amp;quot; data-move-target=&amp;quot;navbarVerticalNav&amp;quot; data-navbar-top=&amp;quot;combo&amp;quot;&amp;gt;&amp;lt;/nav&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p class="mb-0">Phoenix used the Bootstrap's <code>.navbar-expand{-sm|-md|-lg|-xl|-xxl} </code> classes in
                    <code>.navbar </code>element to decide when the navbar vertical will expand or not.</p>
                <pre class="scrollbar mt-5"><code class="language-html">&lt;nav class=&quot;navbar navbar-vertical navbar-expand-lg&quot;&gt;&lt;/nav&gt;
&lt;nav class=&quot;navbar navbar-top navbar-expand-lg&quot; data-move-target=&quot;navbarVerticalNav&quot; data-navbar-top=&quot;combo&quot;&gt;&lt;/nav&gt;</code></pre>
            </div>
        </div>
    </div>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Collapsing behavior</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="collapsing-behavior-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;You can control the default collapsing behavior of phoenix's vertical navigation - whether it will show up with the collapsed or expanded state when the page loads.&lt;/p&gt;
&lt;p class=&quot;mb-0&quot;&gt;From your project directory, If you are using gulp version open &lt;code&gt;src/js/config.js &lt;/code&gt;or if you are using directly from the public folder open &lt;code&gt;public/assets/js/theme.js &lt;/code&gt;and set &lt;code&gt;phoenixIsNavbarVerticalCollapsed: true &lt;/code&gt;of &lt;code&gt;CONFIG &lt;/code&gt;object to collapse the Vertical Navigation by default&lt;/p&gt;&lt;pre class=&quot;scrollbar mt-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const CONFIG = {
  phoenixIsNavbarVerticalCollapsed: false,
  ...
};
&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p>You can control the default collapsing behavior of phoenix's vertical navigation - whether it will show
                    up with the collapsed or expanded state when the page loads.</p>
                <p class="mb-0">From your project directory, If you are using gulp version open <code>src/js/config.js
                    </code>or if you are using directly from the public folder open <code>public/assets/js/theme.js
                    </code>and set <code>phoenixIsNavbarVerticalCollapsed: true </code>of <code>CONFIG </code>object to
                    collapse the Vertical Navigation by default</p>
                <pre class="scrollbar mt-5"><code class="lang-html">const CONFIG = {
  phoenixIsNavbarVerticalCollapsed: false,
  ...
};
</code></pre>
            </div>
        </div>
    </div>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Vertical Navbar appearance</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="vertical-navbar-appearance-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;You can control Navbar vertical style of phoenix's between defaults and darker.&lt;/p&gt;
&lt;p&gt;From your project directory, If you are using gulp version open &lt;code&gt;src/js/config.js &lt;/code&gt;or if you are using directly from the public folder open &lt;code&gt;public/assets/js/theme.js &lt;/code&gt;and set &lt;code&gt;phoenixNavbarVerticalStyle: 'darker' &lt;/code&gt;of &lt;code&gt;CONFIG &lt;/code&gt;object to collapse the Vertical Navigation by default&lt;/p&gt;&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const CONFIG = {
  phoenixNavbarVerticalStyle: 'default' || 'darker',
  ...
};&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mb-0&quot;&gt;Or to change navbar vertical color add &lt;code&gt;data-navbar-appearance=&quot;darker&quot; &lt;/code&gt;attribute in navber-vertical &lt;/p&gt;&lt;pre class=&quot;scrollbar mt-3&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;nav class=&amp;quot;navbar navbar-vertical navbar-expand-lg&amp;quot; data-navbar-appearance=&amp;quot;darker&amp;quot;&amp;gt;&amp;lt;/nav&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p>You can control Navbar vertical style of phoenix's between defaults and darker.</p>
                <p>From your project directory, If you are using gulp version open <code>src/js/config.js </code>or if you
                    are using directly from the public folder open <code>public/assets/js/theme.js </code>and set
                    <code>phoenixNavbarVerticalStyle: 'darker' </code>of <code>CONFIG </code>object to collapse the Vertical
                    Navigation by default</p>
                <pre class="scrollbar my-5"><code class="lang-html">const CONFIG = {
  phoenixNavbarVerticalStyle: 'default' || 'darker',
  ...
};</code></pre>
                <p class="mb-0">Or to change navbar vertical color add <code>data-navbar-appearance="darker"
                    </code>attribute in navber-vertical </p>
                <pre class="scrollbar mt-3"><code class="language-html">&lt;nav class=&quot;navbar navbar-vertical navbar-expand-lg&quot; data-navbar-appearance=&quot;darker&quot;&gt;&lt;/nav&gt;</code></pre>
            </div>
        </div>
    </div>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Horizontal Navbar appearance</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="horizontal-navbar-appearance-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;You can control top nav style of vertical navbar between defaults and darker.&lt;/p&gt;
&lt;p class=&quot;mb-0&quot;&gt;From your project directory, If you are using gulp version open &lt;code&gt;src/js/config.js &lt;/code&gt;or if you are using directly from the public folder open &lt;code&gt;public/assets/js/theme.js &lt;/code&gt;and set &lt;code&gt;phoenixNavbarTopStyle: darker &lt;/code&gt;of &lt;code&gt;CONFIG &lt;/code&gt;object to collapse the Vertical Navigation by default&lt;/p&gt;&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const CONFIG = {
  phoenixNavbarTopStyle: 'default' || 'darker',
  ...
};
&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mb-0&quot;&gt;Or to change navbar vertical color just add &lt;code&gt;data-navbar-appearance=&quot;darker&quot; &lt;/code&gt;attribute in navber-vertical &lt;/p&gt;&lt;pre class=&quot;scrollbar mt-3&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;nav class=&amp;quot;navbar navbar-top&amp;quot; data-navbar-appearance=&amp;quot;darker&amp;quot;&amp;gt;&amp;lt;/nav&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p>You can control top nav style of vertical navbar between defaults and darker.</p>
                <p class="mb-0">From your project directory, If you are using gulp version open <code>src/js/config.js
                    </code>or if you are using directly from the public folder open <code>public/assets/js/theme.js
                    </code>and set <code>phoenixNavbarTopStyle: darker </code>of <code>CONFIG </code>object to collapse the
                    Vertical Navigation by default</p>
                <pre class="scrollbar my-5"><code class="lang-html">const CONFIG = {
  phoenixNavbarTopStyle: 'default' || 'darker',
  ...
};
</code></pre>
                <p class="mb-0">Or to change navbar vertical color just add <code>data-navbar-appearance="darker"
                    </code>attribute in navber-vertical </p>
                <pre class="scrollbar mt-3"><code class="language-html">&lt;nav class=&quot;navbar navbar-top&quot; data-navbar-appearance=&quot;darker&quot;&gt;&lt;/nav&gt;</code></pre>
            </div>
        </div>
    </div>
    <h2 class="mb-2 lh-sm mt-12" data-anchor="data-anchor">Combo navbar slim</h2>
    <p class="text-body-tertiary lead mb-2">Pheonix provides another layout for navbar vertical with navbar slim.</p><a
        class="btn btn-link p-0" href="{{ url('demo/combo-nav-slim') }}" target="_blank">Combo navbar slim example<span
            class="ms-1" data-feather="chevron-right"></span></a>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Navbar slim structure</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="navbar-slim-structure-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html class=&amp;quot;navbar-combo&amp;quot; data-navbar-horizontal-shape=&amp;quot;slim&amp;quot;&amp;gt;

  &amp;lt;head&amp;gt;...&amp;lt;/head&amp;gt;

  &amp;lt;body&amp;gt;
    &amp;lt;main&amp;gt;
      &amp;lt;div class=&amp;quot;container-fluid&amp;quot;&amp;gt;
        &amp;lt;nav class=&amp;quot;navbar navbar-vertical navbar-expand-lg&amp;quot;&amp;gt;
          &amp;lt;!-- navbar vertical content goes here--&amp;gt;
        &amp;lt;/nav&amp;gt;
        &amp;lt;nav class=&amp;quot;navbar navbar-top navbar-slim&amp;quot;&amp;gt;
          &amp;lt;!-- navbar top slim content goes here--&amp;gt;
        &amp;lt;/nav&amp;gt;
        &amp;lt;div class=&amp;quot;content&amp;quot;&amp;gt;
          &amp;lt;!--  content goes here--&amp;gt;
        &amp;lt;/div&amp;gt;
      &amp;lt;/div&amp;gt;
    &amp;lt;/main&amp;gt;
  &amp;lt;/body&amp;gt;

&amp;lt;/html&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <pre class="scrollbar my-5"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html class=&quot;navbar-combo&quot; data-navbar-horizontal-shape=&quot;slim&quot;&gt;

  &lt;head&gt;...&lt;/head&gt;

  &lt;body&gt;
    &lt;main&gt;
      &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;nav class=&quot;navbar navbar-vertical navbar-expand-lg&quot;&gt;
          &lt;!-- navbar vertical content goes here--&gt;
        &lt;/nav&gt;
        &lt;nav class=&quot;navbar navbar-top navbar-slim&quot;&gt;
          &lt;!-- navbar top slim content goes here--&gt;
        &lt;/nav&gt;
        &lt;div class=&quot;content&quot;&gt;
          &lt;!--  content goes here--&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/main&gt;
  &lt;/body&gt;

&lt;/html&gt;</code></pre>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050">
        <div class="toast align-items-center text-white bg-dark border-0" id="icon-copied-toast" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-theme="dark">
                <div class="toast-body p-3"></div><button class="btn-close me-2 m-auto" type="button"
                    data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
