@extends('layouts.vertical')

@section('title', 'File Uploader')

@push('styles')
    <link href="{{ asset('vendors/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">File Uploader</h2>
    <p class="text-body-tertiary lead mb-2">Phoenix uses <b>DropzoneJS</b> for file-uploader. DropzoneJS is an open-source
        library that provides drag & drop file uploads with image previews.</p><a class="btn btn-link p-0"
        href="https://www.dropzonejs.com/" target="_blank">Documentation for DropzoneJS<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mb-9">
        <div class="card shadow-none border mb-3 mt-6" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-end">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Single File Upload</h4>
                        <p class="mb-0 mt-2 text-body-secondary"><code>Dropzone </code>requires a valid server-side url for
                            the file upload. You can easily pass it through <code>data-options </code>attribute like
                            <code>data-options!={ url: 'valid/url'}</code></p>
                    </div>
                    <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                href="#single-file-upload-code" role="button" aria-controls="single-file-upload-code"
                                aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a
                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                    data-feather="eye"></span>Hide code</a></nav>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="single-file-upload-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;dropzone dropzone-multiple p-0&quot; id=&quot;dropzone&quot; data-dropzone=&quot;data-dropzone&quot; data-options='{&quot;url&quot;:&quot;valid/url&quot;,&quot;maxFiles&quot;:1,&quot;dictDefaultMessage&quot;:&quot;Choose or Drop a file here&quot;}'&gt;
  &lt;div class=&quot;fallback&quot;&gt;&lt;input type=&quot;file&quot; name=&quot;file&quot; /&gt;&lt;/div&gt;
  &lt;div class=&quot;dz-message&quot; data-dz-message=&quot;data-dz-message&quot;&gt;
    &lt;div class=&quot;dz-message-text&quot;&gt;&lt;img class=&quot;me-2&quot; src=&quot;../../../assets/img/icons/cloud-upload.svg&quot; width=&quot;25&quot; alt=&quot;&quot; /&gt;Drop your file here&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;dz-preview dz-preview-multiple m-0 d-flex flex-column&quot;&gt;
    &lt;div class=&quot;d-flex pb-3 border-bottom border-translucent media px-2&quot;&gt;
      &lt;div class=&quot;border p-2 rounded-2 me-2&quot;&gt;&lt;img class=&quot;rounded-2 dz-image&quot; src=&quot;../../../assets/img/icons/file.png&quot; alt=&quot;...&quot; data-dz-thumbnail=&quot;data-dz-thumbnail&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;flex-1 d-flex flex-between-center&quot;&gt;
        &lt;div&gt;
          &lt;h6 data-dz-name=&quot;data-dz-name&quot;&gt;&lt;/h6&gt;
          &lt;div class=&quot;d-flex align-items-center&quot;&gt;
            &lt;p class=&quot;mb-0 fs-9 text-body-quaternary lh-1&quot; data-dz-size=&quot;data-dz-size&quot;&gt;&lt;/p&gt;
            &lt;div class=&quot;dz-progress&quot;&gt;&lt;span class=&quot;dz-upload&quot; data-dz-uploadprogress=&quot;&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;&lt;span class=&quot;fs-10 text-danger&quot; data-dz-errormessage=&quot;data-dz-errormessage&quot;&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;dropdown&quot;&gt;&lt;button class=&quot;btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h&quot;&gt;&lt;/span&gt;&lt;/button&gt;
          &lt;div class=&quot;dropdown-menu dropdown-menu-end border border-translucent py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot; data-dz-remove=&quot;data-dz-remove&quot;&gt;Remove File&lt;/a&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <div class="dropzone dropzone-multiple p-0" id="dropzone" data-dropzone="data-dropzone"
                        data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                        <div class="fallback"><input type="file" name="file"></div>
                        <div class="dz-message" data-dz-message="data-dz-message">
                            <div class="dz-message-text"><img class="me-2"
                                    src="{{ asset('assets/img/icons/cloud-upload.svg') }}" width="25"
                                    alt="">Drop your file here</div>
                        </div>
                        <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                            <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                                <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                                        src="{{ asset('assets/img/icons/file.png') }}" alt="..."
                                        data-dz-thumbnail="data-dz-thumbnail"></div>
                                <div class="flex-1 d-flex flex-between-center">
                                    <div>
                                        <h6 data-dz-name="data-dz-name"></h6>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 fs-9 text-body-quaternary lh-1" data-dz-size="data-dz-size"></p>
                                            <div class="dz-progress"><span class="dz-upload"
                                                    data-dz-uploadprogress=""></span></div>
                                        </div><span class="fs-10 text-danger"
                                            data-dz-errormessage="data-dz-errormessage"></span>
                                    </div>
                                    <div class="dropdown"><button
                                            class="btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a
                                                class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove
                                                File</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-none border mb-3 mt-6" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Single image Upload</h4>
                    </div>
                    <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                href="#single-image-upload-code" role="button" aria-controls="single-image-upload-code"
                                aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a
                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                    data-feather="eye"></span>Hide code</a></nav>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="single-image-upload-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;dropzone dropzone-single p-0&quot; id=&quot;dropzone-single&quot; data-dropzone=&quot;data-dropzone&quot; data-options='{&quot;url&quot;:&quot;valid/url&quot;,&quot;maxFiles&quot;:1,&quot;maxFilesize&quot;:5,&quot;acceptedFiles&quot;:&quot;image/*&quot;,&quot;dictDefaultMessage&quot;:&quot;Choose or Drop a file here&quot;}'&gt;
  &lt;div class=&quot;fallback&quot;&gt;&lt;input type=&quot;file&quot; name=&quot;file&quot; /&gt;&lt;/div&gt;
  &lt;div class=&quot;dz-message&quot; data-dz-message=&quot;data-dz-message&quot;&gt;
    &lt;div class=&quot;dz-message-text&quot;&gt;&lt;img class=&quot;me-2&quot; src=&quot;../../../assets/img/icons/cloud-upload.svg&quot; width=&quot;25&quot; alt=&quot;&quot; /&gt;Drop your file here&lt;/div&gt;&lt;button class=&quot;btn dz-upload-btn border-0 position-absolute z-5 bg-black bg-opacity-50 text-white mt-3 ms-3 px-3&quot; data-dz-message=&quot;data-dz-message&quot;&gt;Change Picture&lt;span class=&quot;fa-solid fa-camera fs-10 ms-1&quot;&gt;&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;dz-preview d-block m-0&quot;&gt;
    &lt;div class=&quot;rounded-2 position-relative&quot; style=&quot;height: 144px&quot;&gt;&lt;img class=&quot;rounded-2 w-100 h-100 object-fit-cover&quot; src=&quot;../../../assets/img/icons/file-bg.png&quot; alt=&quot;...&quot; data-dz-thumbnail=&quot;data-dz-thumbnail&quot; /&gt;&lt;button class=&quot;btn border-0 position-absolute top-0 end-0 z-5 bg-black bg-opacity-50 text-white mt-3 me-3 px-3 cursor-pointer&quot; data-dz-remove=&quot;data-dz-remove&quot;&gt;&lt;span class=&quot;fa-solid fa-xmark cursor-pointer&quot;&gt;&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <div class="dropzone dropzone-single p-0" id="dropzone-single" data-dropzone="data-dropzone"
                        data-options='{"url":"valid/url","maxFiles":1,"maxFilesize":5,"acceptedFiles":"image/*","dictDefaultMessage":"Choose or Drop a file here"}'>
                        <div class="fallback"><input type="file" name="file"></div>
                        <div class="dz-message" data-dz-message="data-dz-message">
                            <div class="dz-message-text"><img class="me-2"
                                    src="{{ asset('assets/img/icons/cloud-upload.svg') }}" width="25"
                                    alt="">Drop your file here</div><button
                                class="btn dz-upload-btn border-0 position-absolute z-5 bg-black bg-opacity-50 text-white mt-3 ms-3 px-3"
                                data-dz-message="data-dz-message">Change Picture<span
                                    class="fa-solid fa-camera fs-10 ms-1"></span></button>
                        </div>
                        <div class="dz-preview d-block m-0">
                            <div class="rounded-2 position-relative" style="height: 144px"><img
                                    class="rounded-2 w-100 h-100 object-fit-cover"
                                    src="{{ asset('assets/img/icons/file-bg.png') }}" alt="..."
                                    data-dz-thumbnail="data-dz-thumbnail"><button
                                    class="btn border-0 position-absolute top-0 end-0 z-5 bg-black bg-opacity-50 text-white mt-3 me-3 px-3 cursor-pointer"
                                    data-dz-remove="data-dz-remove"><span
                                        class="fa-solid fa-xmark cursor-pointer"></span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-none border mb-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Multiple File Upload</h4>
                    </div>
                    <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                href="#multiple-file-upload-code" role="button"
                                aria-controls="multiple-file-upload-code" aria-expanded="false"> <span class="me-2"
                                    data-feather="code"></span>View code</a><a
                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                    data-feather="eye"></span>Hide code</a></nav>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="multiple-file-upload-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;form class=&quot;dropzone dropzone-multiple p-0&quot; id=&quot;dropzone-multiple&quot; data-dropzone=&quot;data-dropzone&quot; action=&quot;#!&quot;&gt;
  &lt;div class=&quot;fallback&quot;&gt;&lt;input name=&quot;file&quot; type=&quot;file&quot; multiple=&quot;multiple&quot; /&gt;&lt;/div&gt;
  &lt;div class=&quot;dz-message&quot; data-dz-message=&quot;data-dz-message&quot;&gt;&lt;img class=&quot;me-2&quot; src=&quot;../../../assets/img/icons/cloud-upload.svg&quot; width=&quot;25&quot; alt=&quot;&quot; /&gt;Drop your files here&lt;/div&gt;
  &lt;div class=&quot;dz-preview dz-preview-multiple m-0 d-flex flex-column&quot;&gt;
    &lt;div class=&quot;d-flex mb-3 pb-3 border-bottom border-translucent media&quot;&gt;
      &lt;div class=&quot;border p-2 rounded-2 me-2&quot;&gt;&lt;img class=&quot;rounded-2 dz-image&quot; src=&quot;../../../assets/img/icons/file.png&quot; alt=&quot;...&quot; data-dz-thumbnail=&quot;data-dz-thumbnail&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;flex-1 d-flex flex-between-center&quot;&gt;
        &lt;div&gt;
          &lt;h6 data-dz-name=&quot;data-dz-name&quot;&gt;&lt;/h6&gt;
          &lt;div class=&quot;d-flex align-items-center&quot;&gt;
            &lt;p class=&quot;mb-0 fs-9 text-body-quaternary lh-1&quot; data-dz-size=&quot;data-dz-size&quot;&gt;&lt;/p&gt;
            &lt;div class=&quot;dz-progress&quot;&gt;&lt;span class=&quot;dz-upload&quot; data-dz-uploadprogress=&quot;&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;&lt;span class=&quot;fs-10 text-danger&quot; data-dz-errormessage=&quot;data-dz-errormessage&quot;&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;dropdown&quot;&gt;&lt;button class=&quot;btn btn-link text-body-tertiary btn-sm dropdown-toggle btn-reveal dropdown-caret-none&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h&quot;&gt;&lt;/span&gt;&lt;/button&gt;
          &lt;div class=&quot;dropdown-menu dropdown-menu-end border border-translucent py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot; data-dz-remove=&quot;data-dz-remove&quot;&gt;Remove File&lt;/a&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <form class="dropzone dropzone-multiple p-0" id="dropzone-multiple" data-dropzone="data-dropzone"
                        action="#!">
                        <div class="fallback"><input name="file" type="file" multiple="multiple"></div>
                        <div class="dz-message" data-dz-message="data-dz-message"><img class="me-2"
                                src="{{ asset('assets/img/icons/cloud-upload.svg') }}" width="25" alt="">Drop
                            your files here</div>
                        <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                            <div class="d-flex mb-3 pb-3 border-bottom border-translucent media">
                                <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                                        src="{{ asset('assets/img/icons/file.png') }}" alt="..."
                                        data-dz-thumbnail="data-dz-thumbnail"></div>
                                <div class="flex-1 d-flex flex-between-center">
                                    <div>
                                        <h6 data-dz-name="data-dz-name"></h6>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 fs-9 text-body-quaternary lh-1" data-dz-size="data-dz-size">
                                            </p>
                                            <div class="dz-progress"><span class="dz-upload"
                                                    data-dz-uploadprogress=""></span></div>
                                        </div><span class="fs-10 text-danger"
                                            data-dz-errormessage="data-dz-errormessage"></span>
                                    </div>
                                    <div class="dropdown"><button
                                            class="btn btn-link text-body-tertiary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a
                                                class="dropdown-item" href="#!"
                                                data-dz-remove="data-dz-remove">Remove File</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card shadow-none border mb-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Stylesheet</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="stylesheet-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;link href=&amp;quot;vendors/dropzone/dropzone.css&amp;quot; rel=&amp;quot;stylesheet&amp;quot; /&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre><code class="language-html">&lt;link href=&quot;vendors/dropzone/dropzone.css&quot; rel=&quot;stylesheet&quot; /&gt;</code></pre>
                </div>
            </div>
        </div>
        <div class="card shadow-none border" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Javascript</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="javascript-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;script src=&amp;quot;vendors/dropzone/dropzone-min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <pre><code class="language-html">&lt;script src=&quot;vendors/dropzone/dropzone-min.js&quot;&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
