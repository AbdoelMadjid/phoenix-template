@extends('layouts.vertical')

@section('title', 'Styling')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Styling</h2>
    <p class="text-body-tertiary lead mb-2">We recommend you customize your theme styles using the user style files. You can
        customize the theme’s styles with the following approaches:</p>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Gulp based workflow</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="gulp-based-workflow-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-1&quot;&gt;You can add your own SCSS and override the theme style in the &lt;code&gt;src/scss/user.scss&lt;/code&gt; file.&lt;/p&gt;
&lt;div class=&quot;border border-translucent rounded-1 bg-body-emphasis px-3 py-2 mb-4&quot;&gt;&lt;code&gt;user.scss&lt;/code&gt;&lt;/div&gt;
&lt;p class=&quot;mb-1&quot;&gt;To make broader changes to the design of the theme, such as changing the color scheme or font sizes, use &lt;code&gt;src/scss/_user-variables.scss&lt;/code&gt;. Any variable from &lt;code&gt;node_modules/bootstrap/scss/variables&lt;/code&gt; or &lt;code&gt;src/scss/theme/_variables.scss&lt;/code&gt; can be overridden with your own value.&lt;/p&gt;
&lt;div class=&quot;border border-translucent rounded-1 bg-body-emphasis px-3 py-2 mb-4&quot;&gt;&lt;code&gt;_user-variables.scss&lt;/code&gt;&lt;/div&gt;
&lt;p class=&quot;mb-1&quot;&gt;To remove bootstrap components, update &lt;code&gt;src/scss/_bootstrap.scss&lt;/code&gt; file.&lt;/p&gt;
&lt;div class=&quot;border border-translucent rounded-1 bg-body-emphasis px-3 py-2&quot;&gt;&lt;code&gt;_bootstrap.scss&lt;/code&gt;&lt;/div&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p class="mb-1">You can add your own SCSS and override the theme style in the
                    <code>src/scss/user.scss</code> file.</p>
                <div class="border border-translucent rounded-1 bg-body-emphasis px-3 py-2 mb-4"><code>user.scss</code>
                </div>
                <p class="mb-1">To make broader changes to the design of the theme, such as changing the color scheme or
                    font sizes, use <code>src/scss/_user-variables.scss</code>. Any variable from
                    <code>node_modules/bootstrap/scss/variables</code> or <code>src/scss/theme/_variables.scss</code> can be
                    overridden with your own value.</p>
                <div class="border border-translucent rounded-1 bg-body-emphasis px-3 py-2 mb-4">
                    <code>_user-variables.scss</code></div>
                <p class="mb-1">To remove bootstrap components, update <code>src/scss/_bootstrap.scss</code> file.</p>
                <div class="border border-translucent rounded-1 bg-body-emphasis px-3 py-2"><code>_bootstrap.scss</code>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">If you are not using Gulp based workflow</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="if-you-are-not-using-gulp-based-workflow-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-1&quot;&gt;You can add your own CSS and override the theme style in the &lt;code&gt;public/assets/css/user.css&lt;/code&gt; file.&lt;/p&gt;
&lt;div class=&quot;border border-translucent rounded-1 bg-body-emphasis px-3 py-2&quot;&gt;&lt;code&gt;user.css&lt;/code&gt;&lt;/div&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p class="mb-1">You can add your own CSS and override the theme style in the
                    <code>public/assets/css/user.css</code> file.</p>
                <div class="border border-translucent rounded-1 bg-body-emphasis px-3 py-2"><code>user.css</code></div>
            </div>
        </div>
    </div>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Changing theme colors</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="changing-theme-colors-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-1&quot;&gt;Changing theme colors &lt;code&gt;public/assets/css/user.css&lt;/code&gt; file.&lt;/p&gt;
&lt;div class=&quot;border border-translucent rounded-1 bg-body-emphasis px-3 py-2&quot;&gt;&lt;code&gt;user.css&lt;/code&gt;&lt;/div&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p class="mb-1">Changing theme colors <code>public/assets/css/user.css</code> file.</p>
                <div class="border border-translucent rounded-1 bg-body-emphasis px-3 py-2"><code>user.css</code></div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0 fs-6" data-anchor="data-anchor">Changing theme colors</h5>
        </div>
        <div class="card-body bg-body-highlight">
            <h5 data-anchor="data-anchor">Gulp based workflow</h5>
            <p>If you are using gulp base work flow, you can update your theme colors with two different approaches.</p>
            <h6 class="mb-3 fs-7 mt-6" data-anchor="data-anchor">1. Using scss variable:</h6>
            <div class="px-4">
                <p class="mb-1">You can bring your necessary variable colors form <code>src/scss/theme/_colors.scss
                    </code>and paste it into <code>src/scss/_user-variables.scss </code>then update variables as your
                    necessity. We recommend to follow this approach.</p>
                <div class="border border-translucent rounded-1 bg-body-emphasis px-3 py-2 mb-3">
                    <code>_user-variables.scss</code></div>
                <p> Light mode is default theme style in phoenix. So, if you update any bootstrap’s SCSS variables, it will
                    effect in Light mode. If you want to update any color, find the corresponding variable for this color
                    and place theme to _user-variables.scss file. For example:</p>
                <pre><code class="lang-css">//*-----------------------------------------------
//|   Theme Colors
//-----------------------------------------------*/

$primary: $blue !default; 
$secondary: $gray-600 !default;
$success: $green !default;
$info: $cyan !default;
$warning: $yellow !default;
$danger: $red !default;
$light: $gray-100 !default;
$dark: $gray-1100 !default;  
</code></pre>
                <p class="mt-3">Most of the background and text colors used from body colors, to update the colors change
                    the corresponding variables.</p>
                <pre><code class="lang-css">//*-----------------------------------------------
//|   Body Colors
//-----------------------------------------------*/

$body-color: $gray-900 !default;
$body-bg: $gray-50 !default;

$body-secondary-color: $gray-800 !default;
$body-secondary-bg: $gray-200 !default;

$body-tertiary-color: $gray-700 !default;
$body-tertiary-bg: $gray-300 !default;

$body-quaternary-color: $gray-500 !default;
$body-quaternary-bg: $gray-400 !default;

$body-emphasis-color: $gray-1100 !default;
$body-emphasis-bg: $white !default;

$body-highlight-color: $gray-1000 !default;
$body-highlight-bg: $gray-100 !default;

</code></pre>
                <p class="mt-3">If you want to update any theme colors for dark mode, update
                    <code>$theme-colors-dark</code>variable and to update the grays colors you have to update the
                    <code>$grays-dark </code>variable.</p>
                <pre><code class="lang-css">/*-----------------------------------------------
|   Theme Styles
-----------------------------------------------*/
$theme-colors-dark: (
  'primary': $primary-dark,
  'secondary': $secondary-dark,
  'success': $success-dark,
  'info': $info-dark,
  'warning': $warning-dark,
  'danger': $danger-dark,
) !default;
</code></pre>
                <h6 class="mt-4 fs-7 mb-2 fw-semibold">All Colors</h6>
                <p class="mb-1"> All <strong>Phoenix </strong>colors are available as Sass variables and Sass map in
                    <code>src/scss/theme/_colors.scss </code>file. To avoid increased file sizes, we don’t create text or
                    background color classes for each of these variables. Instead, we choose a subset of these colors for a
                    theme palette.</p>
                <p>You'll find all the colors used in the theme in a sass map name <code>$theme-color-shades </code>in
                    <code>src/scss/theme/_colors.scss </code>file.
                    If you want to use any <strong>Phoenix </strong>color to generate <code>text/bg </code>utility class,
                    Add the color variable in <code>$theme-color-shades </code>map. If you want to add/change color for dark
                    mode, update the <code>$theme-color-shades-dark </code>map. </p>
                <pre><code class="lang-css">$theme-color-shades: (
  'primary-lighter': $blue-200,
  'primary-light': $blue-300,
  'primary-dark': $blue-600,
  'primary-darker': $blue-700,

  'secondary-lighter': $gray-200,
  'secondary-light': $gray-300,
  'secondary-dark': $gray-1000,
  'secondary-darker': $gray-700,

  'warning-lighter': $orange-200,
  'warning-light': $orange-300,
  'warning-dark': $orange-600,
  'warning-darker': $orange-700,

  'danger-lighter': $red-200,
  'danger-light': $red-300,
  'danger-dark': $red-600,
  'danger-darker': $red-700,

  'success-lighter': $green-200,
  'success-light': $green-300,
  'success-dark': $green-600,
  'success-darker': $green-700,

  'info-lighter': $cyan-200,
  'info-light': $cyan-300,
  'info-dark': $cyan-600,
  'info-darker': $cyan-700,
) !default;

  

</code></pre>
            </div>
            <h6 class="mb-3 mt-8 fs-7" data-anchor="data-anchor">2. Using CSS variable:</h6>
            <div class="px-4">
                <div class="border border-translucent rounded-1 bg-body-emphasis px-3 py-2 mb-3"><code>_user.scss</code>
                </div>
                <p>To update theme color with this approach, you have to update CSS variable for both modes. If you change
                    any color you have to assign its corresponding RGB color too. Please note that sometimes you may need to
                    update corresponding component's CSS variable. For example:</p>
                <pre><code class="lang-css">/*-----------------------------------------------
|   Theme Styles
-----------------------------------------------*/
$success: #00d27a;
$danger: #e63757;
:root, [data-bs-theme='light'] {
  --phoenix-primary:  #{$success};
  --phoenix-primary-rgb: #{to-rgb($success)};
  ...
  ...
  ...
}
[data-bs-theme='dark']{
  --phoenix-primary: #{$danger};
  --phoenix-primary-rgb: #{to-rgb($danger)};
  .card{
    --phoenix-card-bg: #{$success};
  }
}

</code></pre>
                <h5 class="mt-4" data-anchor="data-anchor">If you are not using Gulp based workflow </h5>
                <p>You can add your own CSS and override the theme style in the <code>public/assets/css/user.css
                    </code>file. You can update all theme colors including grays using css variables. If you change any
                    color you have to assign its corresponding rgb color. Sometimes you may need to update corresponding
                    component's css variable too.</p>
                <pre><code class="lang-css">/*-----------------------------------------------
|   Theme Styles
-----------------------------------------------*/
:root, [data-bs-theme='light'] {
  --phoenix-primary:  #00d27a;
  --phoenix-primary-rgb: 0, 210, 122;
  ...
  ...
  ...
  /* grays */
  --phoenix-gray-100:  #f9fafd;
  --phoenix-gray-100-rgb: 249, 250, 253;
}
[data-bs-theme='dark']{
  --phoenix-primary:  #e63757;
  --phoenix-primary-rgb: 230, 55, 87;

  .card{
    --phoenix-card-bg: #00d27a;
  }
}</code></pre>
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
