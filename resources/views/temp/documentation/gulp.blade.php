@extends('layouts.vertical')

@section('title', 'Gulp')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Gulp</h2>
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0" data-anchor="data-anchor">Introduction</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="introduction-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mt-4&quot;&gt;The &lt;code&gt;gulp&lt;/code&gt; command will build, serve and watch the project with the following gulp tasks:&lt;/p&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <p class="mt-4">The <code>gulp</code> command will build, serve and watch the project with the following gulp tasks:</p>
            </div>
          </div>
        </div>
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0" data-anchor="data-anchor">Commands</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="commands-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-responsive scrollbar&quot;&gt;
  &lt;table class=&quot;table table-bordered&quot;&gt;
    &lt;thead class=&quot;text-center&quot;&gt;
      &lt;tr&gt;
        &lt;th class=&quot;text-nowrap&quot;&gt;Task&lt;/th&gt;
        &lt;th&gt;Action&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;clean&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Delete the following directories:&lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;public/assets/css
public/assets/js
public/vendors // packages which are included in vendors.json
public/**/*.html
&lt;/code&gt;&lt;/pre&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;style&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Compiles &lt;code&gt;scss/theme.scss&lt;/code&gt; and generates &lt;code&gt;theme.css, theme.min.css, theme-rlt.css, theme-rtl.min.css&lt;/code&gt; and &lt;code&gt;theme.css.map, theme.min.css.map, theme-rlt.css.map, theme-rtl.min.css.map&lt;/code&gt; to the &lt;code&gt;public/assets/css/ &lt;/code&gt; directory.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;script&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Concat the &lt;code&gt;js&lt;/code&gt; files from &lt;code&gt;src/js/&lt;/code&gt; and transpiles with babel to &lt;code&gt;phoenix.js&lt;/code&gt; to the &lt;code&gt;public/assets/js/&lt;/code&gt; directory.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;compile:all&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Compiles all the &lt;code&gt;js, &lt;/code&gt;&lt;code&gt;scss, &lt;/code&gt;&lt;code&gt;pug &lt;/code&gt;files from the &lt;code&gt;src&lt;/code&gt; directory.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;vendor&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Runs &lt;code&gt;vendor:clean&lt;/code&gt; and &lt;code&gt;vendor:move&lt;/code&gt; in series.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;vendor:clean&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Delete the vendors from &lt;code&gt;public/vendors&lt;/code&gt; directory which are included in &lt;code&gt;vendors.json&lt;/code&gt;.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;vendor:move&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Copies the vendors from &lt;code&gt;node_modules/&lt;/code&gt; directory to &lt;code&gt;public/vendors&lt;/code&gt; directory according to the &lt;code&gt;vendors.json&lt;/code&gt;.&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;watch&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;All of the following folders are monitored for changes, which will tell the browser to reload automatically after any changes are made:&lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;public/assets/img
public/assets/fonts
public/assets/video
public/vendors/
src/pug 
src/scss
src/js&lt;/code&gt;&lt;/pre&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;build&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Will delete previous build directory and generate a new compressed version to deploy &lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;build/assets/img
build/assets/fonts
build/assets/video
build/assets/css
build/assets/js
build/vendors/
build/**/*.html&lt;/code&gt;&lt;/pre&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;text-nowrap ps-3&quot;&gt;&lt;code&gt;build:test&lt;/code&gt;&lt;/td&gt;
        &lt;td&gt;Will run the build version in port:3000&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <div class="table-responsive scrollbar">
                <table class="table table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th class="text-nowrap">Task</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-nowrap ps-3"><code>clean</code></td>
                      <td>Delete the following directories:<pre><code class="lang-html">public/assets/css
public/assets/js
public/vendors // packages which are included in vendors.json
public/**/*.html
</code></pre>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>style</code></td>
                      <td>Compiles <code>scss/theme.scss</code> and generates <code>theme.css, theme.min.css, theme-rlt.css, theme-rtl.min.css</code> and <code>theme.css.map, theme.min.css.map, theme-rlt.css.map, theme-rtl.min.css.map</code> to the <code>public/assets/css/ </code> directory.</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>script</code></td>
                      <td>Concat the <code>js</code> files from <code>src/js/</code> and transpiles with babel to <code>phoenix.js</code> to the <code>public/assets/js/</code> directory.</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>compile:all</code></td>
                      <td>Compiles all the <code>js, </code><code>scss, </code><code>pug </code>files from the <code>src</code> directory.</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>vendor</code></td>
                      <td>Runs <code>vendor:clean</code> and <code>vendor:move</code> in series.</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>vendor:clean</code></td>
                      <td>Delete the vendors from <code>public/vendors</code> directory which are included in <code>vendors.json</code>.</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>vendor:move</code></td>
                      <td>Copies the vendors from <code>node_modules/</code> directory to <code>public/vendors</code> directory according to the <code>vendors.json</code>.</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>watch</code></td>
                      <td>All of the following folders are monitored for changes, which will tell the browser to reload automatically after any changes are made:<pre><code class="lang-html">public/assets/img
public/assets/fonts
public/assets/video
public/vendors/
src/pug 
src/scss
src/js</code></pre>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>build</code></td>
                      <td>Will delete previous build directory and generate a new compressed version to deploy <pre><code class="lang-html">build/assets/img
build/assets/fonts
build/assets/video
build/assets/css
build/assets/js
build/vendors/
build/**/*.html</code></pre>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-nowrap ps-3"><code>build:test</code></td>
                      <td>Will run the build version in port:3000</td>
                    </tr>
                  </tbody>
                </table>
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
