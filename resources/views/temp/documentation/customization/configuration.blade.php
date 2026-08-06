@extends('layouts.vertical')

@section('title', 'Configuration')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Setting up configuration</h2>
        <p class="text-body-tertiary lead mb-2">Phoenix has a global configuration system. You can change the theme settings with a single global javascript object.</p>
        <div class="mt-4">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
              <div class="card shadow-none border my-5" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                  <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                      <h4 class="text-body mb-0" data-anchor="data-anchor">Setting configuration</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="collapse code-collapse" id="setting-configuration-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h5&gt;For Gulp based workflow&lt;/h5&gt;
&lt;p&gt;Edit the &lt;code&gt;src/js/config.js&lt;/code&gt; file.&lt;/p&gt;
&lt;h5&gt;If you are not using Gulp based workflow&lt;/h5&gt;
&lt;p&gt;Edit the &lt;code&gt;public/assets/js/config.js&lt;/code&gt; file.&lt;/p&gt;
&lt;h5 class=&quot;fs-8&quot;&gt;Configuration object:&lt;/h5&gt;&lt;pre&gt;&lt;code class=&quot;lang-js&quot;&gt;const initialConfig = {
  phoenixIsNavbarVerticalCollapsed: false,
  phoenixTheme: 'light',
  phoenixNavbarTopStyle: 'default',
  phoenixNavbarVerticalStyle: 'default',
  phoenixNavbarPosition: 'vertical',
  phoenixNavbarTopShape: 'default',
  phoenixIsRTL: false,
  phoenixSupportChat: true
};
&lt;/code&gt;&lt;/pre&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy">
                    <h5>For Gulp based workflow</h5>
                    <p>Edit the <code>src/js/config.js</code> file.</p>
                    <h5>If you are not using Gulp based workflow</h5>
                    <p>Edit the <code>public/assets/js/config.js</code> file.</p>
                    <h5 class="fs-8">Configuration object:</h5><pre><code class="lang-js">const initialConfig = {
  phoenixIsNavbarVerticalCollapsed: false,
  phoenixTheme: 'light',
  phoenixNavbarTopStyle: 'default',
  phoenixNavbarVerticalStyle: 'default',
  phoenixNavbarPosition: 'vertical',
  phoenixNavbarTopShape: 'default',
  phoenixIsRTL: false,
  phoenixSupportChat: true
};
</code></pre>
                  </div>
                </div>
              </div>
              <div class="card shadow-none border my-5" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                  <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                      <h4 class="text-body mb-0" data-anchor="data-anchor">Available Options</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="collapse code-collapse" id="available-options-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-responsive scrollbar&quot;&gt;
  &lt;table class=&quot;table table-bordered border border-translucent fs-9 mb-0&quot;&gt;
    &lt;thead class=&quot;bg-body-secondary text-body&quot;&gt;
      &lt;tr&gt;
        &lt;th class=&quot;white-space-nowrap&quot;&gt;Option&lt;/th&gt;
        &lt;th class=&quot;white-space-nowrap&quot;&gt;Type&lt;/th&gt;
        &lt;th class=&quot;white-space-nowrap&quot;&gt;Defaults&lt;/th&gt;
        &lt;th class=&quot;white-space-nowrap&quot; style=&quot;min-width: 20rem&quot;&gt;Description&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixIsNavbarVerticalCollapsed&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot; style=&quot;min-width: 7rem&quot;&gt;&lt;code&gt;Boolean&lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot; style=&quot;min-width: 7rem&quot;&gt;&lt;code&gt;false&lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;Set &lt;code&gt;true&lt;/code&gt; to make the vertical navbar stay collapsed when the page loads. &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixTheme&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;string &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot;&gt; &lt;code&gt;light &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;This option is for setting up the default color mode (&lt;code&gt;light&lt;/code&gt;, &lt;code&gt;dark&lt;/code&gt; or &lt;code&gt;auto&lt;/code&gt;) for your project. Set &lt;code&gt;dark&lt;/code&gt; to make the default color mode dark.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixNavbarTopStyle&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;string &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot;&gt; &lt;code&gt;default &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;Set &lt;code&gt;darker &lt;/code&gt;to make the top navbar darker when the page loads.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixNavbarVerticalStyle&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;string &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot;&gt; &lt;code&gt;default &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;Set &lt;code&gt;darker &lt;/code&gt;to make the vertical navbar darker when the page loads.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixNavbarPosition&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;string &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot;&gt; &lt;code&gt;vertical &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;This option is for changing the navigation type. Available values:&lt;ul class=&quot;mb-0&quot;&gt;
            &lt;li&gt;&lt;code&gt;vertical&lt;/code&gt;&lt;/li&gt;
            &lt;li&gt;&lt;code&gt;horizontal&lt;/code&gt;&lt;/li&gt;
            &lt;li&gt;&lt;code&gt;combo&lt;/code&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixNavbarTopShape&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;string &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot;&gt; &lt;code&gt;default &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;Set &lt;code&gt;slim &lt;/code&gt;to make the top navbar slim when the page loads.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixIsRTL&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;Boolean&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;&lt;code&gt;false&lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;Use &lt;code&gt;true&lt;/code&gt; to make the whole layout RTL (Right to Left). Recommended for languages such as Arabic, Hebrew, or other RTL languages.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;ps-2 white-space-nowrap&quot;&gt;phoenixSupportChat&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot;&gt; &lt;code&gt;Boolean &lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;white-space-nowrap&quot;&gt; &lt;code&gt;true&lt;/code&gt;&lt;/td&gt;
        &lt;td class=&quot;pe-2&quot;&gt;This option is for showing the chat widget. Set &lt;code&gt;false &lt;/code&gt;to hide the chat widget when the page loads.&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
                  </div>
                  <div class="p-4 code-to-copy">
                    <div class="table-responsive scrollbar">
                      <table class="table table-bordered border border-translucent fs-9 mb-0">
                        <thead class="bg-body-secondary text-body">
                          <tr>
                            <th class="white-space-nowrap">Option</th>
                            <th class="white-space-nowrap">Type</th>
                            <th class="white-space-nowrap">Defaults</th>
                            <th class="white-space-nowrap" style="min-width: 20rem">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixIsNavbarVerticalCollapsed</td>
                            <td class="white-space-nowrap" style="min-width: 7rem"><code>Boolean</code></td>
                            <td class="white-space-nowrap" style="min-width: 7rem"><code>false</code></td>
                            <td class="pe-2">Set <code>true</code> to make the vertical navbar stay collapsed when the page loads. </td>
                          </tr>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixTheme</td>
                            <td><code>string </code></td>
                            <td class="white-space-nowrap"> <code>light </code></td>
                            <td class="pe-2">This option is for setting up the default color mode (<code>light</code>, <code>dark</code> or <code>auto</code>) for your project. Set <code>dark</code> to make the default color mode dark.</td>
                          </tr>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixNavbarTopStyle</td>
                            <td><code>string </code></td>
                            <td class="white-space-nowrap"> <code>default </code></td>
                            <td class="pe-2">Set <code>darker </code>to make the top navbar darker when the page loads.</td>
                          </tr>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixNavbarVerticalStyle</td>
                            <td><code>string </code></td>
                            <td class="white-space-nowrap"> <code>default </code></td>
                            <td class="pe-2">Set <code>darker </code>to make the vertical navbar darker when the page loads.</td>
                          </tr>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixNavbarPosition</td>
                            <td><code>string </code></td>
                            <td class="white-space-nowrap"> <code>vertical </code></td>
                            <td class="pe-2">This option is for changing the navigation type. Available values:<ul class="mb-0">
                                <li><code>vertical</code></li>
                                <li><code>horizontal</code></li>
                                <li><code>combo</code></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixNavbarTopShape</td>
                            <td><code>string </code></td>
                            <td class="white-space-nowrap"> <code>default </code></td>
                            <td class="pe-2">Set <code>slim </code>to make the top navbar slim when the page loads.</td>
                          </tr>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixIsRTL</td>
                            <td><code>Boolean</code></td>
                            <td><code>false</code></td>
                            <td class="pe-2">Use <code>true</code> to make the whole layout RTL (Right to Left). Recommended for languages such as Arabic, Hebrew, or other RTL languages.</td>
                          </tr>
                          <tr>
                            <td class="ps-2 white-space-nowrap">phoenixSupportChat</td>
                            <td class="white-space-nowrap"> <code>Boolean </code></td>
                            <td class="white-space-nowrap"> <code>true</code></td>
                            <td class="pe-2">This option is for showing the chat widget. Set <code>false </code>to hide the chat widget when the page loads.</td>
                          </tr>
                        </tbody>
                      </table>
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
                  <li class="nav-item"> <a class="nav-link" href="#setting-configuration">Setting configuration</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#available-options">Available Options</a></li>
                </ul>
              </div>
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
