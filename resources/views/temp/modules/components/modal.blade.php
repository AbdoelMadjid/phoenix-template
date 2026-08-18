@extends('layouts.vertical')

@section('title', 'Modal')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Modals</h2>
    <p class="text-body-tertiary lead mb-2">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for
        lightboxes, user notifications, or completely custom content.</p><a class="btn btn-link p-0"
        href="https://getbootstrap.com/docs/5.3/components/modal/" target="_blank">Modal on Bootstrap<span class="ms-1"
            data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Basic Modal</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#basic-modal-code" role="button" aria-controls="basic-modal-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="basic-modal-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot;&gt;Launch basic modal&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Modal title&lt;/h5&gt;&lt;button class=&quot;btn btn-close p-1&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p class=&quot;text-body-tertiary lh-lg mb-0&quot;&gt;This is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). &lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Okay&lt;/button&gt;&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot;&gt;Cancel&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary" type="button"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Launch basic modal</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5><button
                                                    class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-body-tertiary lh-lg mb-0">This is a static modal example
                                                    (meaning its position and display have been overridden). Included are
                                                    the modal header, modal body (required for padding), and modal footer
                                                    (optional). </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-primary"
                                                    type="button">Okay</button>
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Static backdrop</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#static-backdrop-code" role="button" aria-controls="static-backdrop-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="static-backdrop-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#staticBackdrop&quot;&gt;Launch demo modal 2&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;staticBackdrop&quot; tabindex=&quot;-1&quot; data-bs-backdrop=&quot;static&quot; aria-labelledby=&quot;staticBackdropLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header justify-content-between bg-primary&quot;&gt;
        &lt;h5 class=&quot;modal-title text-white dark__text-gray-1100&quot; id=&quot;staticBackdropLabel&quot;&gt;Modal title&lt;/h5&gt;&lt;button class=&quot;btn p-1&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;span class=&quot;fas fa-times fs-9 text-white dark__text-gray-1100&quot;&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p class=&quot;text-body-tertiary lh-lg mb-0&quot;&gt;This is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). &lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Okay&lt;/button&gt;&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot;&gt;Cancel&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary" type="button"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Launch demo modal 2</button>
                                <div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header justify-content-between bg-primary">
                                                <h5 class="modal-title text-white dark__text-gray-1100"
                                                    id="staticBackdropLabel">Modal title</h5><button class="btn p-1"
                                                    type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                                        class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-body-tertiary lh-lg mb-0">This is a static modal example
                                                    (meaning its position and display have been overridden). Included are
                                                    the modal header, modal body (required for padding), and modal footer
                                                    (optional). </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-primary"
                                                    type="button">Okay</button>
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Scrolling long content (scroll
                                        body)</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#scrolling-long-content-scroll-body-code" role="button"
                                            aria-controls="scrolling-long-content-scroll-body-code" aria-expanded="false">
                                            <span class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="scrolling-long-content-scroll-body-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#scrollingLong&quot;&gt;Launch Scrolling long content modal&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;scrollingLong&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;scrollingLongModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot; id=&quot;scrollingLongModalLabel&quot;&gt;Modal title&lt;/h5&gt;&lt;button class=&quot;btn p-1 btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p class=&quot;text-body-tertiary lh-lg mb-0&quot;&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Okay&lt;/button&gt;&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot;&gt;Cancel&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary" type="button"
                                    data-bs-toggle="modal" data-bs-target="#scrollingLong">Launch Scrolling long content
                                    modal</button>
                                <div class="modal fade" id="scrollingLong" tabindex="-1"
                                    aria-labelledby="scrollingLongModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollingLongModalLabel">Modal title</h5>
                                                <button class="btn p-1 btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-body-tertiary lh-lg mb-0">Cras mattis consectetur purus sit
                                                    amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
                                                    quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                                    magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur
                                                    purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                                    at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                    et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.
                                                    Donec ullamcorper nulla non metus auctor fringilla. Cras mattis
                                                    consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur
                                                    ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                                    faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                                    scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed
                                                    consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras
                                                    justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                    porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
                                                    magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum
                                                    nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla. Cras mattis consectetur purus sit amet
                                                    fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                    sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean
                                                    lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna,
                                                    vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-primary"
                                                    type="button">Okay</button>
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Scrolling long content (scroll
                                        modal)</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#scrolling-long-content-scroll-modal-code" role="button"
                                            aria-controls="scrolling-long-content-scroll-modal-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="scrolling-long-content-scroll-modal-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#scrollingLong2&quot;&gt;Launch Scrolling long content modal&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;scrollingLong2&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;scrollingLongModalLabel2&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot; id=&quot;scrollingLongModalLabel2&quot;&gt;Modal title&lt;/h5&gt;&lt;button class=&quot;btn btn-close p-1&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p class=&quot;text-body-tertiary lh-lg mb-0&quot;&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Okay&lt;/button&gt;&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot;&gt;Cancel&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary" type="button"
                                    data-bs-toggle="modal" data-bs-target="#scrollingLong2">Launch Scrolling long content
                                    modal</button>
                                <div class="modal fade" id="scrollingLong2" tabindex="-1"
                                    aria-labelledby="scrollingLongModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollingLongModalLabel2">Modal title</h5>
                                                <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-body-tertiary lh-lg mb-0">Cras mattis consectetur purus sit
                                                    amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
                                                    quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                                    magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur
                                                    purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
                                                    at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                    et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.
                                                    Donec ullamcorper nulla non metus auctor fringilla. Cras mattis
                                                    consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur
                                                    ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                                    faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                                    scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed
                                                    consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                    auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras
                                                    justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                    porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
                                                    magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum
                                                    nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla. Cras mattis consectetur purus sit amet
                                                    fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent
                                                    commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                    sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean
                                                    lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna,
                                                    vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-primary"
                                                    type="button">Okay</button>
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Vertically centered</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#vertically-centered-code" role="button"
                                            aria-controls="vertically-centered-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="vertically-centered-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#verticallyCentered&quot;&gt;Vertically centered modal&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;verticallyCentered&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;verticallyCenteredModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot; id=&quot;verticallyCenteredModalLabel&quot;&gt;Modal title&lt;/h5&gt;&lt;button class=&quot;btn btn-close p-1&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p class=&quot;text-body-tertiary lh-lg mb-0&quot;&gt;This is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). &lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Okay&lt;/button&gt;&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot;&gt;Cancel&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary" type="button"
                                    data-bs-toggle="modal" data-bs-target="#verticallyCentered">Vertically centered
                                    modal</button>
                                <div class="modal fade" id="verticallyCentered" tabindex="-1"
                                    aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="verticallyCenteredModalLabel">Modal title</h5>
                                                <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-body-tertiary lh-lg mb-0">This is a static modal example
                                                    (meaning its position and display have been overridden). Included are
                                                    the modal header, modal body (required for padding), and modal footer
                                                    (optional). </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-primary"
                                                    type="button">Okay</button>
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Tooltips and popovers</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#tooltips-and-popovers-code" role="button"
                                            aria-controls="tooltips-and-popovers-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="tooltips-and-popovers-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#tooltipModal&quot;&gt;Launch Tooltips and Popovers Modal&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;tooltipModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;tooltipModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot; id=&quot;tooltipModalLabel&quot;&gt;Modal title&lt;/h5&gt;&lt;button class=&quot;btn btn-close p-1&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;h5&gt;Tooltip in a modal&lt;/h5&gt;
        &lt;p&gt; &lt;/p&gt;This &lt;a class=&quot;text-primary&quot; href=&quot;#!&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;Link&lt;/a&gt; triggers a tooltip on hover.
        &lt;hr /&gt;
        &lt;h5&gt;Popover in a modal&lt;/h5&gt;
        &lt;p&gt; &lt;/p&gt;This &lt;button class=&quot;btn btn-phoenix-secondary&quot; type=&quot;button&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Popover title&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;button&lt;/button&gt; triggers a popover on click.
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Okay&lt;/button&gt;&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot;&gt;Cancel&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy"><button class="btn btn-primary" type="button"
                                    data-bs-toggle="modal" data-bs-target="#tooltipModal">Launch Tooltips and Popovers
                                    Modal</button>
                                <div class="modal fade" id="tooltipModal" tabindex="-1"
                                    aria-labelledby="tooltipModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tooltipModalLabel">Modal title</h5><button
                                                    class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Tooltip in a modal</h5>
                                                <p> </p>This <a class="text-primary" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Tooltip on top">Link</a> triggers a tooltip on hover.
                                                <hr>
                                                <h5>Popover in a modal</h5>
                                                <p> </p>This <button class="btn btn-phoenix-secondary" type="button"
                                                    data-bs-toggle="popover" title="Popover title"
                                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">button</button>
                                                triggers a popover on click.
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-primary"
                                                    type="button">Okay</button>
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <li class="nav-item"> <a class="nav-link" href="#basic-modal">Basic Modal</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#static-backdrop">Static backdrop</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#scrolling-long-content-scroll-body">Scrolling
                                long content (scroll body)</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#scrolling-long-content-scroll-modal">Scrolling
                                long content (scroll modal)</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#vertically-centered">Vertically centered</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#tooltips-and-popovers">Tooltips and popovers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
