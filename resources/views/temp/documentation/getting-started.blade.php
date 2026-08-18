@extends('layouts.vertical')

@section('title', 'Getting Started')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Getting Started</h2>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Quick start</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="quick-start-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-0&quot;&gt;Looking to start your project quickly? Just unzip the &lt;code&gt;Phoenix-v1.24.0.zip&lt;/code&gt;. We have precompiled and packaged everything in the &lt;code&gt;public&lt;/code&gt; directory for you. Start editing the &lt;code&gt;public/pages/starter.html&lt;/code&gt; with a text or code editor, save it, and open the file in your favourite browser to see the changes.&lt;/p&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p class="mb-0">Looking to start your project quickly? Just unzip the <code>Phoenix-v1.24.0.zip</code>. We
                    have precompiled and packaged everything in the <code>public</code> directory for you. Start editing the
                    <code>public/pages/starter.html</code> with a text or code editor, save it, and open the file in your
                    favourite browser to see the changes.</p>
            </div>
        </div>
    </div>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Setting up Build system</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="setting-up-build-system-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Unzip the &lt;code&gt;Phoenix-v1.24.0.zip&lt;/code&gt; to any folder and open a command line or terminal at that location.
  theme's dev tools require &lt;a href=&quot;https://nodejs.org/en/&quot; target=&quot;_blank&quot;&gt;Node&lt;/a&gt; and &lt;a href=&quot;https://git-scm.com/&quot; target=&quot;_blank&quot;&gt;Git&lt;/a&gt; . If you do not have them in your machine, please install their latest stable version from their corresponding website. As you have &lt;span class=&quot;fw-black text-body-emphasis&quot;&gt;Node and Git installed and accessible from your terminal or command line&lt;/span&gt;, install &lt;a href=&quot;https://gulpjs.com/&quot; target=&quot;_blank&quot;&gt;Gulp CLI&lt;/a&gt; package
  globally with the following command:&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;npm i gulp-cli -g
&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mt-4&quot;&gt;When you’re done, install the rest of the theme’s dependencies with:&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;npm i
&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mt-4&quot;&gt;Now run:&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;gulp
&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mt-4&quot;&gt;Running gulp will compile the SCSS, transpile the javascript, copy all required libraries form &lt;code&gt;node_modules&lt;/code&gt; to the corresponding &lt;code&gt;public/assets/vendors &lt;/code&gt; directory and will open a browser window to &lt;code&gt;public/index.html&lt;/code&gt;&lt;/p&gt;
&lt;p&gt;All of the following folders are monitored for changes, which will tell the browser to reload automatically after any changes are made:&lt;/p&gt;&lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;public/assets/fonts/
public/assets/video/
public/assets/img/
public/vendors
src/pug/
src/scss/ 
src/js/
&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mt-4&quot;&gt;Now you can edit any &lt;code&gt;pug&lt;/code&gt; file from &lt;code&gt;src/pug&lt;/code&gt;, change SCSS variable with &lt;code&gt;scss/_user-variables.scss&lt;/code&gt;, or write your own SCSS code in &lt;code&gt;scss/_user.scss&lt;/code&gt; and add or update &lt;code&gt;javaScript&lt;/code&gt; from &lt;code&gt;src/js&lt;/code&gt; directory.&lt;/p&gt;
&lt;div class=&quot;alert alert-subtle-warning&quot;&gt;Running the &lt;code&gt;gulp&lt;/code&gt; command will discard and regenerate all the files in following directories:&lt;/div&gt;&lt;pre&gt;&lt;code class=&quot;lang-html&quot;&gt;public/**/*.html
public/assets/css/
public/assets/js/
public/vendors
&lt;/code&gt;&lt;/pre&gt;
&lt;p class=&quot;mt-4&quot;&gt;Hit &lt;code&gt;Ctrl+C&lt;/code&gt; or just close the command line window to stop the server.&lt;/p&gt;
&lt;p&gt;Happy editing!&lt;/p&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <p>Unzip the <code>Phoenix-v1.24.0.zip</code> to any folder and open a command line or terminal at that
                    location.
                    theme's dev tools require <a href="https://nodejs.org/en/" target="_blank">Node</a> and <a
                        href="https://git-scm.com/" target="_blank">Git</a> . If you do not have them in your machine,
                    please install their latest stable version from their corresponding website. As you have <span
                        class="fw-black text-body-emphasis">Node and Git installed and accessible from your terminal or
                        command line</span>, install <a href="https://gulpjs.com/" target="_blank">Gulp CLI</a> package
                    globally with the following command:</p>
                <pre><code class="lang-html">npm i gulp-cli -g
</code></pre>
                <p class="mt-4">When you’re done, install the rest of the theme’s dependencies with:</p>
                <pre><code class="lang-html">npm i
</code></pre>
                <p class="mt-4">Now run:</p>
                <pre><code class="lang-html">gulp
</code></pre>
                <p class="mt-4">Running gulp will compile the SCSS, transpile the javascript, copy all required libraries
                    form <code>node_modules</code> to the corresponding <code>public/assets/vendors </code> directory and
                    will open a browser window to <code>public/index.html</code></p>
                <p>All of the following folders are monitored for changes, which will tell the browser to reload
                    automatically after any changes are made:</p>
                <pre><code class="lang-html">public/assets/fonts/
public/assets/video/
public/assets/img/
public/vendors
src/pug/
src/scss/ 
src/js/
</code></pre>
                <p class="mt-4">Now you can edit any <code>pug</code> file from <code>src/pug</code>, change SCSS variable
                    with <code>scss/_user-variables.scss</code>, or write your own SCSS code in <code>scss/_user.scss</code>
                    and add or update <code>javaScript</code> from <code>src/js</code> directory.</p>
                <div class="alert alert-subtle-warning">Running the <code>gulp</code> command will discard and regenerate
                    all the files in following directories:</div>
                <pre><code class="lang-html">public/**/*.html
public/assets/css/
public/assets/js/
public/vendors
</code></pre>
                <p class="mt-4">Hit <code>Ctrl+C</code> or just close the command line window to stop the server.</p>
                <p>Happy editing!</p>
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
