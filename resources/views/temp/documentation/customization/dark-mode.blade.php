@extends('layouts.vertical')

@section('title', 'Dark Mode')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Dark Mode</h2>
        <p class="text-body-tertiary lead mb-2">It’s effortless to switch Dark Mode in Phoenix. You can enable Dark Mode by default or create a Dark/Light switch if you want. To set the default mode "Dark",you can also set system default theme in Phoenix. Please see the <a href='{{ url('configuration') }}'>configuration page</a>.</p>
        <div class="card shadow-none border my-5" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-end">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0">Toggle Dark Mode</h4>
                <p class="mb-0 mt-2 text-body-secondary">Toggling dark mode is very easy in Phoenix. You can toggle dark, light or auto mode by using checkbox, radio input, switch input and custom icon component.</p>
              </div>
              <div class="col col-md-auto">
                <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#toggle-dark-mode-code" role="button" aria-controls="toggle-dark-mode-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Hide code</a></nav>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="toggle-dark-mode-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;h5 class=&quot;fs-8 mb-2&quot;&gt;Checkbox &lt;/h5&gt;
    &lt;div class=&quot;form-check&quot;&gt;&lt;input class=&quot;form-check-input&quot; id=&quot;flexCheckDefault&quot; type=&quot;checkbox&quot; data-theme-control=&quot;phoenixTheme&quot; /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;Dark mode&lt;/label&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;h5 class=&quot;fs-8 mb-2&quot;&gt;Switch Input&lt;/h5&gt;
    &lt;div class=&quot;form-check form-switch ps-0&quot;&gt;&lt;input class=&quot;form-check-input ms-0 me-2&quot; id=&quot;switchDarkModeExample&quot; type=&quot;checkbox&quot; data-theme-control=&quot;phoenixTheme&quot; /&gt;&lt;label for=&quot;switchDarkModeExample&quot;&gt;Dark Mode&lt;/label&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;h5 class=&quot;fs-8 mb-2&quot;&gt;Custom icon&lt;/h5&gt;
    &lt;div class=&quot;theme-control-toggle fa-ion-wait pe-2&quot;&gt;&lt;input class=&quot;form-check-input ms-0 theme-control-toggle-input&quot; id=&quot;themeControlToggleDoc&quot; type=&quot;checkbox&quot; data-theme-control=&quot;phoenixTheme&quot; value=&quot;dark&quot; /&gt;&lt;label class=&quot;mb-0 theme-control-toggle-label theme-control-toggle-light&quot; for=&quot;themeControlToggleDoc&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Switch theme&quot;&gt;&lt;span class=&quot;icon&quot; data-feather=&quot;moon&quot;&gt;&lt;/span&gt;&lt;/label&gt;&lt;label class=&quot;mb-0 theme-control-toggle-label theme-control-toggle-dark&quot; for=&quot;themeControlToggleDoc&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Switch theme&quot;&gt;&lt;span class=&quot;icon&quot; data-feather=&quot;sun&quot;&gt;&lt;/span&gt;&lt;/label&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;h5 class=&quot;fs-9 mb-2&quot;&gt;Dropdown&lt;/h5&gt;
    &lt;div class=&quot;dropdown theme-control-dropdown&quot;&gt;&lt;button class=&quot;btn btn-sm btn-phoenix-secondary dropdown-toggle dropdown-caret-none&quot; type=&quot;button&quot; id=&quot;themeSwitchDropdown&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;fas fa-sun&quot; data-theme-dropdown-toggle-icon=&quot;light&quot;&gt;&lt;/span&gt;&lt;span class=&quot;fas fa-moon&quot; data-theme-dropdown-toggle-icon=&quot;dark&quot;&gt;&lt;/span&gt;&lt;span class=&quot;fas fa-adjust&quot; data-theme-dropdown-toggle-icon=&quot;auto&quot;&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;div class=&quot;dropdown-menu dropdown-caret border py-0 mt-2&quot; aria-labelledby=&quot;themeSwitchDropdown&quot;&gt;
        &lt;div class=&quot;rounded-2 py-2&quot;&gt;&lt;button class=&quot;dropdown-item d-flex align-items-center gap-2&quot; type=&quot;button&quot; value=&quot;light&quot; data-theme-control=&quot;phoenixTheme&quot;&gt;&lt;span class=&quot;fas fa-sun&quot;&gt;&lt;/span&gt;Light&lt;span class=&quot;fas fa-check dropdown-check-icon ms-auto text-body-quaternray&quot;&gt;&lt;/span&gt;&lt;/button&gt;&lt;button class=&quot;dropdown-item d-flex align-items-center gap-2&quot; type=&quot;button&quot; value=&quot;dark&quot; data-theme-control=&quot;phoenixTheme&quot;&gt;&lt;span class=&quot;fas fa-moon&quot; data-fa-transform=&quot;&quot;&gt;&lt;/span&gt;Dark&lt;span class=&quot;fas fa-check dropdown-check-icon ms-auto text-body-quaternray&quot;&gt;&lt;/span&gt;&lt;/button&gt;&lt;button class=&quot;dropdown-item d-flex align-items-center gap-2&quot; type=&quot;button&quot; value=&quot;auto&quot; data-theme-control=&quot;phoenixTheme&quot;&gt;&lt;span class=&quot;fas fa-adjust&quot; data-fa-transform=&quot;&quot;&gt;&lt;/span&gt;Auto&lt;span class=&quot;fas fa-check dropdown-check-icon ms-auto text-body-quaternray&quot;&gt;&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;h5 class=&quot;fs-8 mb-2&quot;&gt;Radio button&lt;/h5&gt;
    &lt;div class=&quot;form-check form-check-inline&quot;&gt;&lt;input class=&quot;form-check-input&quot; id=&quot;flexRadioDefault1&quot; type=&quot;radio&quot; value=&quot;light&quot; data-theme-control=&quot;phoenixTheme&quot; /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault1&quot;&gt;Light&lt;/label&gt;&lt;/div&gt;
    &lt;div class=&quot;form-check form-check-inline&quot;&gt;&lt;input class=&quot;form-check-input&quot; id=&quot;flexRadioDefault2&quot; type=&quot;radio&quot; value=&quot;dark&quot; data-theme-control=&quot;phoenixTheme&quot; /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault2&quot;&gt;Dark&lt;/label&gt;&lt;/div&gt;
    &lt;div class=&quot;form-check form-check-inline&quot;&gt;&lt;input class=&quot;form-check-input&quot; id=&quot;flexRadioDefault3&quot; type=&quot;radio&quot; value=&quot;auto&quot; data-theme-control=&quot;phoenixTheme&quot; /&gt;&lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault3&quot;&gt;Auto&lt;/label&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <div class="row g-3">
                <div class="col">
                  <h5 class="fs-8 mb-2">Checkbox </h5>
                  <div class="form-check"><input class="form-check-input" id="flexCheckDefault" type="checkbox" data-theme-control="phoenixTheme"><label class="form-check-label" for="flexCheckDefault">Dark mode</label></div>
                </div>
                <div class="col">
                  <h5 class="fs-8 mb-2">Switch Input</h5>
                  <div class="form-check form-switch ps-0"><input class="form-check-input ms-0 me-2" id="switchDarkModeExample" type="checkbox" data-theme-control="phoenixTheme"><label for="switchDarkModeExample">Dark Mode</label></div>
                </div>
                <div class="col">
                  <h5 class="fs-8 mb-2">Custom icon</h5>
                  <div class="theme-control-toggle fa-ion-wait pe-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggleDoc" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggleDoc" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleDoc" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                </div>
                <div class="col">
                  <h5 class="fs-9 mb-2">Dropdown</h5>
                  <div class="dropdown theme-control-dropdown"><button class="btn btn-sm btn-phoenix-secondary dropdown-toggle dropdown-caret-none" type="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust" data-theme-dropdown-toggle-icon="auto"></span></button>
                    <div class="dropdown-menu dropdown-caret border py-0 mt-2" aria-labelledby="themeSwitchDropdown">
                      <div class="rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="phoenixTheme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-body-quaternray"></span></button>
                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="phoenixTheme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-body-quaternray"></span></button>
                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="phoenixTheme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-body-quaternray"></span></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <h5 class="fs-8 mb-2">Radio button</h5>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="flexRadioDefault1" type="radio" value="light" data-theme-control="phoenixTheme"><label class="form-check-label" for="flexRadioDefault1">Light</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="flexRadioDefault2" type="radio" value="dark" data-theme-control="phoenixTheme"><label class="form-check-label" for="flexRadioDefault2">Dark</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="flexRadioDefault3" type="radio" value="auto" data-theme-control="phoenixTheme"><label class="form-check-label" for="flexRadioDefault3">Auto</label></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-none border my-5" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0">If you are using gulp based workflow</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="if-you-are-using-gulp-based-workflow-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h5 class=&quot;mb-2&quot;&gt;Modify Dark colors using SCSS&lt;/h5&gt;
&lt;p class=&quot;mb-0&quot;&gt;You can find all the variables used to create the dark mode in &lt;code&gt;/src/scss/theme/root/_dark.scss&lt;/code&gt; file. If you want to override a variable, copy that variable to your &lt;code&gt;/src/scss/user.scss&lt;/code&gt; file and update it as you see fit. When you change the variable with scss, make sure that the gulp is running.&lt;/p&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <h5 class="mb-2">Modify Dark colors using SCSS</h5>
              <p class="mb-0">You can find all the variables used to create the dark mode in <code>/src/scss/theme/root/_dark.scss</code> file. If you want to override a variable, copy that variable to your <code>/src/scss/user.scss</code> file and update it as you see fit. When you change the variable with scss, make sure that the gulp is running.</p>
            </div>
          </div>
        </div>
        <div class="card shadow-none border my-5" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0">If you are not using gulp based workflow</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="if-you-are-not-using-gulp-based-workflow-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h5 class=&quot;mb-2&quot;&gt;Modify Dark colors using CSS&lt;/h5&gt;
&lt;p&gt;You can find all the CSS variables used to create the dark mode in &lt;code&gt;/public/assets/css/theme.css&lt;/code&gt; file. Look for the class &lt;code&gt;:root.dark&lt;/code&gt; and you will see all the available variables. If you want to override a variable, copy that variable to your &lt;code&gt;/public/assets/css/user.css&lt;/code&gt; file and update it as you see fit.&lt;/p&gt;&lt;pre class=&quot;language-css&quot;&gt;&lt;code class=&quot;lang-css&quot;&gt;/*-----------------------------------------------
  Theme Styles
-----------------------------------------------*/
:root, [data-bs-theme=&quot;light&quot;] {
  --phoenix-body-color: #31374a;
  --phoenix-body-color-rgb: 49, 55, 74;

  --phoenix-body-bg: #e3e6ed;
  --phoenix-body-bg-rgb: 245, 247, 250;
}

[data-bs-theme=&quot;dark&quot;] {
  --phoenix-body-color: #9fa6bc;
  --phoenix-body-color-rgb: 159, 166, 188;

  --phoenix-body-bg: #0f111a;
  --phoenix-body-bg-rgb: 15, 17, 26;
}
&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <h5 class="mb-2">Modify Dark colors using CSS</h5>
              <p>You can find all the CSS variables used to create the dark mode in <code>/public/assets/css/theme.css</code> file. Look for the class <code>:root.dark</code> and you will see all the available variables. If you want to override a variable, copy that variable to your <code>/public/assets/css/user.css</code> file and update it as you see fit.</p><pre class="language-css"><code class="lang-css">/*-----------------------------------------------
  Theme Styles
-----------------------------------------------*/
:root, [data-bs-theme="light"] {
  --phoenix-body-color: #31374a;
  --phoenix-body-color-rgb: 49, 55, 74;

  --phoenix-body-bg: #e3e6ed;
  --phoenix-body-bg-rgb: 245, 247, 250;
}

[data-bs-theme="dark"] {
  --phoenix-body-color: #9fa6bc;
  --phoenix-body-color-rgb: 159, 166, 188;

  --phoenix-body-bg: #0f111a;
  --phoenix-body-bg-rgb: 15, 17, 26;
}
</code></pre>
            </div>
          </div>
        </div>
        <div class="card shadow-none border my-5" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0">Using the Dark CSS classes in HTML</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="using-the-dark-css-classes-in-html-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h5 class=&quot;mb-3&quot;&gt;You can keep a style constant regardless of current (light or dark) mode&lt;/h5&gt;
&lt;p&gt;If you want a component to retain it’s color (light or dark) as it is regardless of the current mode, you can use the following classes -&lt;/p&gt;
&lt;p&gt; &lt;code&gt;[data-bs-theme=&quot;light&quot;]&lt;/code&gt; - It will keep the color light even if the current mode is dark&lt;/p&gt;
&lt;p&gt; &lt;code&gt;[data-bs-theme=&quot;dark&quot;]&lt;/code&gt; - It will keep the color dark even if the current mode is light&lt;/p&gt;
&lt;p&gt;The following two examples illustrate the color persistency -&lt;/p&gt;
&lt;div class=&quot;row gx-3&quot;&gt;
  &lt;div class=&quot;col-lg-6&quot;&gt;
    &lt;h5&gt;Keep the color light even if the current mode is dark&lt;/h5&gt;
    &lt;div class=&quot;card bg-body-highlight&quot; data-bs-theme=&quot;light&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;p class=&quot;mb-0 text-body-tertiary&quot;&gt;&lt;b&gt;This element will retain its color if you switch between light and dark modes.&lt;/b&gt;&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;&lt;pre class=&quot;mt-2&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;div class=&amp;quot;card bg-body-highlight&amp;quot; data-bs-theme=&amp;quot;light&amp;quot;&amp;gt;
  &amp;lt;div class=&amp;quot;card-body&amp;quot;&amp;gt;
    &amp;lt;p class=&amp;quot;mb-0 text-body-tertiary&amp;quot;&amp;gt;&amp;lt;b&amp;gt;This element will retain its color if you switch between light and dark modes.&amp;lt;/b&amp;gt;&amp;lt;/p&amp;gt;
  &amp;lt;/div&amp;gt;
&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-lg-6&quot;&gt;
    &lt;h5&gt;Keep the color dark even if the current mode is light&lt;/h5&gt;
    &lt;div class=&quot;card bg-body-highlight&quot; data-bs-theme=&quot;dark&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;p class=&quot;mb-0 text-body-tertiary&quot;&gt;&lt;b&gt;This element will retain its color if you switch between light and dark modes.&lt;/b&gt;&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;&lt;pre class=&quot;mt-2&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;div class=&amp;quot;card bg-body-highlight&amp;quot; data-bs-theme=&amp;quot;dark&amp;quot;&amp;gt;
  &amp;lt;div class=&amp;quot;card-body&amp;quot;&amp;gt;
    &amp;lt;p class=&amp;quot;mb-0 text-body-tertiary&amp;quot;&amp;gt;&amp;lt;b&amp;gt;This element will retain its color if you switch between light and dark modes.&amp;lt;/b&amp;gt;&amp;lt;/p&amp;gt;
  &amp;lt;/div&amp;gt;
&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;h6 class=&quot;fs-8 mt-4&quot;&gt;Override Background and Text color only for dark mode&lt;/h6&gt;
&lt;p&gt;If you want to use a different text color or background color rather than the default dark theme color for any element, you can use the special &quot;dark&quot; classes: &lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt; &lt;code&gt;dark__bg-* &lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;dark__text-* &lt;/code&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;The following element illustrates the example:&lt;/p&gt;
&lt;div class=&quot;card bg-light dark__bg-primary&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;This element will get different bg color rather than the default dark theme color.&lt;/span&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;pre class=&quot;mt-2&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;div class=&amp;quot;card bg-light dark__bg-primary&amp;quot;&amp;gt;
  &amp;lt;div class=&amp;quot;card-body&amp;quot;&amp;gt;
    &amp;lt;p class=&amp;quot;mb-0&amp;quot;&amp;gt;&amp;lt;span class=&amp;quot;fw-bold&amp;quot;&amp;gt;This element will get different bg color rather than the default dark theme color.&amp;lt;/span&amp;gt;&amp;lt;/p&amp;gt;
  &amp;lt;/div&amp;gt;
&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <h5 class="mb-3">You can keep a style constant regardless of current (light or dark) mode</h5>
              <p>If you want a component to retain it’s color (light or dark) as it is regardless of the current mode, you can use the following classes -</p>
              <p> <code>[data-bs-theme="light"]</code> - It will keep the color light even if the current mode is dark</p>
              <p> <code>[data-bs-theme="dark"]</code> - It will keep the color dark even if the current mode is light</p>
              <p>The following two examples illustrate the color persistency -</p>
              <div class="row gx-3">
                <div class="col-lg-6">
                  <h5>Keep the color light even if the current mode is dark</h5>
                  <div class="card bg-body-highlight" data-bs-theme="light">
                    <div class="card-body">
                      <p class="mb-0 text-body-tertiary"><b>This element will retain its color if you switch between light and dark modes.</b></p>
                    </div>
                  </div><pre class="mt-2"><code class="language-html">&lt;div class=&quot;card bg-body-highlight&quot; data-bs-theme=&quot;light&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;p class=&quot;mb-0 text-body-tertiary&quot;&gt;&lt;b&gt;This element will retain its color if you switch between light and dark modes.&lt;/b&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
                <div class="col-lg-6">
                  <h5>Keep the color dark even if the current mode is light</h5>
                  <div class="card bg-body-highlight" data-bs-theme="dark">
                    <div class="card-body">
                      <p class="mb-0 text-body-tertiary"><b>This element will retain its color if you switch between light and dark modes.</b></p>
                    </div>
                  </div><pre class="mt-2"><code class="language-html">&lt;div class=&quot;card bg-body-highlight&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;p class=&quot;mb-0 text-body-tertiary&quot;&gt;&lt;b&gt;This element will retain its color if you switch between light and dark modes.&lt;/b&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
              </div>
              <h6 class="fs-8 mt-4">Override Background and Text color only for dark mode</h6>
              <p>If you want to use a different text color or background color rather than the default dark theme color for any element, you can use the special "dark" classes: </p>
              <ul>
                <li> <code>dark__bg-* </code></li>
                <li><code>dark__text-* </code></li>
              </ul>
              <p>The following element illustrates the example:</p>
              <div class="card bg-light dark__bg-primary">
                <div class="card-body">
                  <p class="mb-0"><span class="fw-bold">This element will get different bg color rather than the default dark theme color.</span></p>
                </div>
              </div><pre class="mt-2"><code class="language-html">&lt;div class=&quot;card bg-light dark__bg-primary&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;This element will get different bg color rather than the default dark theme color.&lt;/span&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
        <div class="card shadow-none border my-5" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0">Emit JavaScript event on color scheme change</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="emit-javascript-event-on-color-scheme-change-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;When you switch between the dark and light mode, or change any settings from the global theme config at runtime, we emit an event &lt;code&gt;clickControl&lt;/code&gt;.&lt;br /&gt;We used this event to update colors using JavaScript. For example, the charts change their colors using this event. You can catch and use this event with the following code snippet:&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;lang-js&quot;&gt;const themeController = document.body;

themeController.addEventListener(
  &quot;clickControl&quot;,
  ({ detail: { control, value } }) =&gt; {

    if (control === &quot;phoenixTheme&quot;) {
      // value will be localStorage theme value (dark/light/auto)
      const mode = value === 'auto' ? window.phoenix.utils.getSystemTheme() : value;
      console.log(mode) 
      // your code here

    }
  }
);&lt;/code&gt;&lt;/pre&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <p>When you switch between the dark and light mode, or change any settings from the global theme config at runtime, we emit an event <code>clickControl</code>.<br>We used this event to update colors using JavaScript. For example, the charts change their colors using this event. You can catch and use this event with the following code snippet:</p><pre><code class="lang-js">const themeController = document.body;

themeController.addEventListener(
  "clickControl",
  ({ detail: { control, value } }) => {

    if (control === "phoenixTheme") {
      // value will be localStorage theme value (dark/light/auto)
      const mode = value === 'auto' ? window.phoenix.utils.getSystemTheme() : value;
      console.log(mode) 
      // your code here

    }
  }
);</code></pre>
            </div>
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
