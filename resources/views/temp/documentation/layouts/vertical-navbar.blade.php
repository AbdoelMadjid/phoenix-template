@extends('layouts.vertical')

@section('title', 'Vertical Navbar')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm" data-anchor="data-anchor">Vertical Navbar</h2>
    <p class="text-body-tertiary lead mb-2">Here is the default Phoenix's powerful, responsive vertical navigation. The
        following sections describe how you can customize both the responsive breakpoint and collapsing behavior.</p><a
        class="btn btn-link p-0" href="{{ url('demo/vertical-sidenav') }}" target="_blank">Vertical navbar example<span
            class="ms-1" data-feather="chevron-right"></span></a>
    <div class="card shadow-none border mb-4 mt-5" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Navbar vertical structure</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="navbar-vertical-structure-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html&amp;gt;

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
                <pre class="scrollbar my-5"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;

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
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-0&quot;&gt;Phoenix used the Bootstrap's &lt;code&gt;.navbar-expand{-sm|-md|-lg|-xl|-xxl} &lt;/code&gt; classes in &lt;code&gt;.navbar-vertical &lt;/code&gt;element to decide when the navbar vertical will expand or not.&lt;/p&gt;&lt;pre class=&quot;scrollbar mt-5&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;nav class=&amp;quot;navbar navbar-vertical navbar-expand-lg&amp;quot;&amp;gt;&amp;lt;/nav&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p class="mb-0">Phoenix used the Bootstrap's <code>.navbar-expand{-sm|-md|-lg|-xl|-xxl} </code> classes in
                    <code>.navbar-vertical </code>element to decide when the navbar vertical will expand or not.</p>
                <pre class="scrollbar mt-5"><code class="language-html">&lt;nav class=&quot;navbar navbar-vertical navbar-expand-lg&quot;&gt;&lt;/nav&gt;</code></pre>
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
&lt;p class=&quot;mb-0&quot;&gt;From your project directory, If you are using gulp version open &lt;code&gt;src/js/config.js &lt;/code&gt;or if you are using directly from the public folder open &lt;code&gt;public/assets/js/config.js &lt;/code&gt;and set &lt;code&gt;phoenixIsNavbarVerticalCollapsed: true &lt;/code&gt;of &lt;code&gt;initialConfig &lt;/code&gt;object to collapse the Vertical Navigation by default&lt;/p&gt;&lt;pre class=&quot;scrollbar mt-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const initialConfig = {
  phoenixIsNavbarVerticalCollapsed: false,
  ...
};
&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p>You can control the default collapsing behavior of phoenix's vertical navigation - whether it will show
                    up with the collapsed or expanded state when the page loads.</p>
                <p class="mb-0">From your project directory, If you are using gulp version open <code>src/js/config.js
                    </code>or if you are using directly from the public folder open <code>public/assets/js/config.js
                    </code>and set <code>phoenixIsNavbarVerticalCollapsed: true </code>of <code>initialConfig </code>object
                    to collapse the Vertical Navigation by default</p>
                <pre class="scrollbar mt-5"><code class="lang-html">const initialConfig = {
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
&lt;p&gt;From your project directory, If you are using gulp version open &lt;code&gt;src/js/config.js &lt;/code&gt;or if you are using directly from the public folder open &lt;code&gt;public/assets/js/config.js &lt;/code&gt;and set &lt;code&gt;phoenixNavbarVerticalStyle: 'darker' &lt;/code&gt;of &lt;code&gt;initialConfig &lt;/code&gt;object to collapse the Vertical Navigation by default&lt;/p&gt;&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const initialConfig = {
  phoenixNavbarVerticalStyle: 'default' || 'darker',
  ...
};&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mb-0&quot;&gt;Or to change navbar vertical color add &lt;code&gt;data-navbar-appearance=&quot;darker&quot; &lt;/code&gt;attribute in navber-vertical &lt;/p&gt;&lt;pre class=&quot;scrollbar mt-3&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;nav class=&amp;quot;navbar navbar-vertical navbar-expand-lg&amp;quot; data-navbar-appearance=&amp;quot;darker&amp;quot;&amp;gt;&amp;lt;/nav&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p>You can control Navbar vertical style of phoenix's between defaults and darker.</p>
                <p>From your project directory, If you are using gulp version open <code>src/js/config.js </code>or if you
                    are using directly from the public folder open <code>public/assets/js/config.js </code>and set
                    <code>phoenixNavbarVerticalStyle: 'darker' </code>of <code>initialConfig </code>object to collapse the
                    Vertical Navigation by default</p>
                <pre class="scrollbar my-5"><code class="lang-html">const initialConfig = {
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
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Customize</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="customize-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Phoenix allow you to customize your Navbar Vertical with SCSS or CSS variables. The available options are listed below: &lt;/p&gt;
&lt;h5&gt;Background color&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the background color of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-bg-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-bg-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-bg-color: #141824;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-bg-color: #141824;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;Border color&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the border color of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-border-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-border-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-border-color: #31374a;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-border-color: #31374a;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;label color&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the label color of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-label-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-label-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-label-color: #6e7891;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-label-color: #6e7891;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;Link color&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the link color of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-link-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-link-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-link-color: #9fa6bc;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-color: #9fa6bc;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;Link hover background&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the link hover background of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-link-hover-bg&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-link-hover-bg&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-link-hover-bg: #31374a;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-hover-bg: #31374a;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;Link hover color&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the link hover color of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-link-hover-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-link-hover-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-link-hover-color: #eff2f6;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-hover-color: #eff2f6;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;Link active color&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the link active color of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-link-active-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-link-active-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-link-active-color: #fff;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-active-color: #fff;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;Horizontal rule&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the horizontal rule of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-hr-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-hr-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-hr-color: #3e465b;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-hr-color: #3e465b;&lt;/code&gt;&lt;/pre&gt;
&lt;h5&gt;Dropdown indicator color&lt;/h5&gt;
&lt;p class=&quot;my-2&quot;&gt;To change the dropdown indicator color of the Navbar Vertical , update the SCSS variable &lt;code&gt;$navbar-vertical-dropdown-indicator-color&lt;/code&gt; in your &lt;code&gt;_user-variables.scss &lt;/code&gt;or CSS variable &lt;code&gt;--phoenix-navbar-vertical-dropdown-indicator-color&lt;/code&gt; in your &lt;code&gt;public/assets/css/user.css. &lt;/code&gt;Example:&lt;/p&gt;&lt;pre class=&quot;mb-4&quot;&gt;&lt;code class=&quot;language-css&quot;&gt;//- _user-variables.scss
$navbar-vertical-dropdown-indicator-color: #8a94ad;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-dropdown-indicator-color: #8a94ad;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p>Phoenix allow you to customize your Navbar Vertical with SCSS or CSS variables. The available options are
                    listed below: </p>
                <h5>Background color</h5>
                <p class="my-2">To change the background color of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-bg-color</code> in your <code>_user-variables.scss </code>or CSS variable
                    <code>--phoenix-navbar-vertical-bg-color</code> in your <code>public/assets/css/user.css.
                    </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-bg-color: #141824;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-bg-color: #141824;</code></pre>
                <h5>Border color</h5>
                <p class="my-2">To change the border color of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-border-color</code> in your <code>_user-variables.scss </code>or CSS variable
                    <code>--phoenix-navbar-vertical-border-color</code> in your <code>public/assets/css/user.css.
                    </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-border-color: #31374a;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-border-color: #31374a;</code></pre>
                <h5>label color</h5>
                <p class="my-2">To change the label color of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-label-color</code> in your <code>_user-variables.scss </code>or CSS variable
                    <code>--phoenix-navbar-vertical-label-color</code> in your <code>public/assets/css/user.css.
                    </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-label-color: #6e7891;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-label-color: #6e7891;</code></pre>
                <h5>Link color</h5>
                <p class="my-2">To change the link color of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-link-color</code> in your <code>_user-variables.scss </code>or CSS variable
                    <code>--phoenix-navbar-vertical-link-color</code> in your <code>public/assets/css/user.css.
                    </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-link-color: #9fa6bc;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-color: #9fa6bc;</code></pre>
                <h5>Link hover background</h5>
                <p class="my-2">To change the link hover background of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-link-hover-bg</code> in your <code>_user-variables.scss </code>or CSS variable
                    <code>--phoenix-navbar-vertical-link-hover-bg</code> in your <code>public/assets/css/user.css.
                    </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-link-hover-bg: #31374a;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-hover-bg: #31374a;</code></pre>
                <h5>Link hover color</h5>
                <p class="my-2">To change the link hover color of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-link-hover-color</code> in your <code>_user-variables.scss </code>or CSS variable
                    <code>--phoenix-navbar-vertical-link-hover-color</code> in your <code>public/assets/css/user.css.
                    </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-link-hover-color: #eff2f6;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-hover-color: #eff2f6;</code></pre>
                <h5>Link active color</h5>
                <p class="my-2">To change the link active color of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-link-active-color</code> in your <code>_user-variables.scss </code>or CSS
                    variable <code>--phoenix-navbar-vertical-link-active-color</code> in your
                    <code>public/assets/css/user.css. </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-link-active-color: #fff;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-link-active-color: #fff;</code></pre>
                <h5>Horizontal rule</h5>
                <p class="my-2">To change the horizontal rule of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-hr-color</code> in your <code>_user-variables.scss </code>or CSS variable
                    <code>--phoenix-navbar-vertical-hr-color</code> in your <code>public/assets/css/user.css.
                    </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-hr-color: #3e465b;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-hr-color: #3e465b;</code></pre>
                <h5>Dropdown indicator color</h5>
                <p class="my-2">To change the dropdown indicator color of the Navbar Vertical , update the SCSS variable
                    <code>$navbar-vertical-dropdown-indicator-color</code> in your <code>_user-variables.scss </code>or CSS
                    variable <code>--phoenix-navbar-vertical-dropdown-indicator-color</code> in your
                    <code>public/assets/css/user.css. </code>Example:</p>
                <pre class="mb-4"><code class="language-css">//- _user-variables.scss
$navbar-vertical-dropdown-indicator-color: #8a94ad;
or,
//- public/assets/css/user.css
--phoenix-navbar-vertical-dropdown-indicator-color: #8a94ad;</code></pre>
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
