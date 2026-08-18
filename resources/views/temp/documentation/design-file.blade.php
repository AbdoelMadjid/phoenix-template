@extends('layouts.vertical')

@section('title', 'Design File')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Design</h2>
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Figma file</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="collapse code-collapse" id="figma-file-code">
                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;alert alert-info p-3 mb-4&quot; role=&quot;alert&quot;&gt;
  &lt;div class=&quot;d-flex&quot;&gt;&lt;span class=&quot;fas fa-exclamation-circle fs-6&quot;&gt;&lt;/span&gt;
    &lt;div class=&quot;flex-1 ms-3&quot;&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Figma file is only available for &lt;strong&gt;Standard Plus &lt;/strong&gt;&amp;amp; &lt;strong&gt;Extended Plus &lt;/strong&gt;license&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;h5 data-anchor=&quot;data-anchor&quot;&gt;To play with the design:&lt;/h5&gt;
&lt;ul&gt;
  &lt;li&gt; &lt;a href=&quot;https://www.figma.com/&quot; target=&quot;_blank&quot;&gt;Download Figma&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;Download &lt;code&gt;Phoenix-design-v1.24.0.zip  &lt;/code&gt;from ThemeWagon account&lt;/li&gt;
  &lt;li&gt;Open the figma link from &lt;code&gt;Phoenix-design-v1.24.0 -&gt; Figma file link.md &lt;/code&gt;file&lt;/li&gt;
  &lt;li&gt;This file is &lt;code&gt;&quot;read-only&quot;. &lt;/code&gt;So, to customize the design on your own, you have to duplicate the Figma file and start the editing process on the copied file.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
                <div class="alert alert-info p-3 mb-4" role="alert">
                    <div class="d-flex"><span class="fas fa-exclamation-circle fs-6"></span>
                        <div class="flex-1 ms-3">
                            <p class="mb-0">Figma file is only available for <strong>Standard Plus </strong>&amp;
                                <strong>Extended Plus </strong>license</p>
                        </div>
                    </div>
                </div>
                <h5 data-anchor="data-anchor">To play with the design:</h5>
                <ul>
                    <li> <a href="https://www.figma.com/" target="_blank">Download Figma</a></li>
                    <li>Download <code>Phoenix-design-v1.24.0.zip </code>from ThemeWagon account</li>
                    <li>Open the figma link from <code>Phoenix-design-v1.24.0 -> Figma file link.md </code>file</li>
                    <li>This file is <code>"read-only". </code>So, to customize the design on your own, you have to
                        duplicate the Figma file and start the editing process on the copied file.</li>
                </ul>
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
