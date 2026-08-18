@extends('layouts.vertical')

@section('title', 'Flex')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Flex</h2>
    <p class="text-body-tertiary lead mb-2">Quickly manage the layout, alignment, and sizing of grid columns, navigation,
        components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS
        may be necessary.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/utilities/flex/"
        target="_blank">Flex on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Flex Behaviors</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Apply <code> display </code> utilities to
                                        create a flexbox container and transform direct children elements into flex items.
                                        Flex containers and items are able to be modified further with additional flex
                                        properties.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#flex-behaviors-code" role="button" aria-controls="flex-behaviors-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="flex-behaviors-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex p-2 bg-body-secondary mb-2&quot;&gt;Flexbox container!&lt;/div&gt;
&lt;div class=&quot;d-inline-flex p-2 bg-body-secondary&quot;&gt;Inline flexbox container!&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex p-2 bg-body-secondary mb-2">Flexbox container!</div>
                                <div class="d-inline-flex p-2 bg-body-secondary">Inline flexbox container!</div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Direction Row</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use <code> .flex-row </code> to set a
                                        horizontal direction (the browser default), or .flex-row-reverse to start the
                                        horizontal direction from the opposite side.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#direction-row-code" role="button" aria-controls="direction-row-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="direction-row-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex bg-body-secondary mb-3 flex-row&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-3 flex-row-reverse&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex bg-body-secondary mb-3 flex-row">
                                    <div class="p-2 bg-body-secondary border">Flex item 1</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 2</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 3</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-3 flex-row-reverse">
                                    <div class="p-2 bg-body-secondary border">Flex item 1</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 2</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Direction Column</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use
                                        <code> .flex-column </code>
                                        to set a vertical direction, or
                                        <code> .flex-column-reverse </code>
                                        to start the vertical direction from the opposite side
                                    </p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#direction-column-code" role="button"
                                            aria-controls="direction-column-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="direction-column-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex bg-body-secondary mb-3 flex-column&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-3 flex-column-reverse&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 1&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 2&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex bg-body-secondary mb-3 flex-column">
                                    <div class="p-2 bg-body-secondary border">Flex item 1</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 2</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 3</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-3 flex-column-reverse">
                                    <div class="p-2 bg-body-secondary border">Flex item 1</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 2</div>
                                    <div class="p-2 bg-body-secondary border">Flex item 3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Justify Content</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">justify-content<code>justify-content
                                        </code>utilities on flexbox containers to change the alignment of flex items on the
                                        main axis (the x-axis to start, y-axis if <code>flex-direction: column </code>).
                                        Choose from start (browser default), <code>end </code>,<code>center
                                        </code>,<code>between </code>, or<code>around.</code></p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#justify-content-code" role="button"
                                            aria-controls="justify-content-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="justify-content-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex justify-content-start bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-end bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-center bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-between bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-around bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex justify-content-start bg-body-secondary mb-2">
                                    <div class="p-2 bg-body-secondary border">Flex Item</div>
                                </div>
                                <div class="d-flex justify-content-end bg-body-secondary mb-2">
                                    <div class="p-2 bg-body-secondary border">Flex Item</div>
                                </div>
                                <div class="d-flex justify-content-center bg-body-secondary mb-2">
                                    <div class="p-2 bg-body-secondary border">Flex Item</div>
                                </div>
                                <div class="d-flex justify-content-between bg-body-secondary mb-2">
                                    <div class="p-2 bg-body-secondary border">Flex Item</div>
                                </div>
                                <div class="d-flex justify-content-around bg-body-secondary mb-2">
                                    <div class="p-2 bg-body-secondary border">Flex Item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Align items</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use <code>align-items </code>utilities on
                                        flexbox containers to change the alignment of flex items on the cross axis (the
                                        y-axis to start, x-axis if <code>flex-direction: column </code>). Choose from
                                        <code>start </code>,<code>end </code>,<code>center </code>,<code>baseline </code>,
                                        or <code>stretch (browser default). </code></p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#align-items-code" role="button" aria-controls="align-items-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="align-items-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex align-items-start bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-end bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-center bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-baseline bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-stretch bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex align-items-start bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex align-items-end bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex align-items-center bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex align-items-baseline bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex align-items-stretch bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Align self</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use <code>align-self </code>utilities on
                                        flexbox items to individually change their alignment on the cross axis (the y-axis
                                        to start, x-axis if <code>flex-direction: column </code>). Choose from the same
                                        options as <code>align-items: start, </code><code>end </code>,<code>center
                                        </code>,<code>baseline </code>, or <code>stretch (browser default).</code></p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#align-self-code" role="button" aria-controls="align-self-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="align-self-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary align-self-start&quot;&gt;Align self start&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary align-self-end&quot;&gt;Align self end&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary align-self-center&quot;&gt;Align self center&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary align-self-baseline&quot;&gt;Align self baseline&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot; style=&quot;height: 5rem;&quot;&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary align-self-stretch&quot;&gt;Align self stretch&lt;/div&gt;
  &lt;div class=&quot;border p-2 bg-body-secondary&quot;&gt;Flex Item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                    <div class="border p-2 bg-body-secondary align-self-start">Align self start</div>
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                    <div class="border p-2 bg-body-secondary align-self-end">Align self end</div>
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                    <div class="border p-2 bg-body-secondary align-self-center">Align self center</div>
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                    <div class="border p-2 bg-body-secondary align-self-baseline">Align self baseline</div>
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-2" style="height: 5rem;">
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                    <div class="border p-2 bg-body-secondary align-self-stretch">Align self stretch</div>
                                    <div class="border p-2 bg-body-secondary">Flex Item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Fill</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use the <code>.flex-fill </code>class on a
                                        series of sibling elements to force them into widths equal to their content (or
                                        equal widths if their content does not surpass their border-boxes) while taking up
                                        all available horizontal space.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#fill-code" role="button" aria-controls="fill-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="fill-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex bg-body-secondary&quot;&gt;
  &lt;div class=&quot;p-2 flex-fill bg-body-secondary border&quot;&gt;Flex item with a lot of content&lt;/div&gt;
  &lt;div class=&quot;p-2 flex-fill bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 flex-fill bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex bg-body-secondary">
                                    <div class="p-2 flex-fill bg-body-secondary border">Flex item with a lot of content
                                    </div>
                                    <div class="p-2 flex-fill bg-body-secondary border">Flex item</div>
                                    <div class="p-2 flex-fill bg-body-secondary border">Flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Flex Grow</h4>
                                    <div class="mt-2 text-body-secondary">
                                        <p class='mt-2'>Use <code>.flex-grow-* </code>utilities to toggle a flex item’s
                                            ability to grow to fill available space. In the example below,
                                            the<code>.flex-grow-1 </code>elements uses all available space it can, while
                                            allowing the remaining two flex items their necessary space.</p>
                                    </div>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#flex-grow-code" role="button" aria-controls="flex-grow-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="flex-grow-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex bg-body-secondary&quot;&gt;
  &lt;div class=&quot;p-2 flex-grow-1 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Third flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex bg-body-secondary">
                                    <div class="p-2 flex-grow-1 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Third flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Flex Shrink</h4>
                                    <div class="mt-2 text-body-secondary">
                                        <p class='mt-2'>Use <code>.flex-shrink-*</code> utilities to toggle a flex item’s
                                            ability to shrink if necessary. In the example below, the second flex item with
                                            <code>.flex-shrink-1</code> is forced to wrap its contents to a new line,
                                            “shrinking” to allow more space for the previous flex item with
                                            <code>.w-100</code>.</p>
                                    </div>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#flex-shrink-code" role="button" aria-controls="flex-shrink-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="flex-shrink-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex bg-body-secondary&quot;&gt;
  &lt;div class=&quot;p-2 w-100 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 flex-shrink-1 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex bg-body-secondary">
                                    <div class="p-2 w-100 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 flex-shrink-1 bg-body-secondary border">Flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Auto margins</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Flexbox can do some pretty awesome things when
                                        you mix flex alignments with auto margins. Shown below are three examples of
                                        controlling flex items via auto margins: default (no auto margin), pushing two items
                                        to the right ( <code>.me-auto </code>), and pushing two items to the left
                                        (<code>.ms-auto </code>).</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#auto-margins-code" role="button" aria-controls="auto-margins-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="auto-margins-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;me-auto p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex bg-body-secondary mb-2&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;ms-auto p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex bg-body-secondary mb-2">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-2">
                                    <div class="me-auto p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex bg-body-secondary mb-2">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="ms-auto p-2 bg-body-secondary border">Flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">With align-items</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Vertically move one flex item to the top or
                                        bottom of a container by mixing
                                        <code> align-items </code>,
                                        <code> flex-direction: column </code>, and
                                        <code> margin-top: auto or margin-bottom: auto. </code>
                                    </p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#with-align-items-code" role="button"
                                            aria-controls="with-align-items-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="with-align-items-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex flex-column bg-body-secondary mb-3 align-items-start&quot; style=&quot;height: 200px;&quot;&gt;
  &lt;div class=&quot;mb-auto p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-column bg-body-secondary mb-3 align-items-end&quot; style=&quot;height: 200px;&quot;&gt;
  &lt;div class=&quot;mb-auto p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex flex-column bg-body-secondary mb-3 align-items-start"
                                    style="height: 200px;">
                                    <div class="mb-auto p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex flex-column bg-body-secondary mb-3 align-items-end"
                                    style="height: 200px;">
                                    <div class="mb-auto p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Wrap</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Change how flex items wrap in a flex
                                        container. Choose from no wrapping at all (the browser default) with
                                        <code>.flex-nowrap </code>, wrapping with<code>.flex-wrap </code>, or reverse
                                        wrapping with<code>.flex-wrap-reverse </code>.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#wrap-code" role="button" aria-controls="wrap-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="wrap-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex flex-nowrap mb-3 bg-body-secondary border py-3&quot; style=&quot;width: 8rem&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex mb-3 bg-body-secondary border flex-wrap&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex mb-3 bg-body-secondary border flex-wrap-reverse&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex flex-nowrap mb-3 bg-body-secondary border py-3" style="width: 8rem">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex mb-3 bg-body-secondary border flex-wrap">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex mb-3 bg-body-secondary border flex-wrap-reverse">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Order</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Change the <em>visual</em>order of specific
                                        flex items with a handful of <code>order </code>utilities. We only provide options
                                        for making an item first or last, as well as a reset to use the DOM order. As
                                        <code>order </code>takes any integer value (e.g., <code>5 </code>), add custom CSS
                                        for any additional values needed.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#order-code" role="button" aria-controls="order-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="order-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex flex-nowrap bg-body-secondary&quot;&gt;
  &lt;div class=&quot;order-3 p-2 bg-body-secondary border&quot;&gt;First flex item&lt;/div&gt;
  &lt;div class=&quot;order-2 p-2 bg-body-secondary border&quot;&gt;Second flex item&lt;/div&gt;
  &lt;div class=&quot;order-1 p-2 bg-body-secondary border&quot;&gt;Third flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex flex-nowrap bg-body-secondary">
                                    <div class="order-3 p-2 bg-body-secondary border">First flex item</div>
                                    <div class="order-2 p-2 bg-body-secondary border">Second flex item</div>
                                    <div class="order-1 p-2 bg-body-secondary border">Third flex item</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Aligh content</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Use <code>align-content </code>utilities on
                                        flexbox containers to align flex items<em>together</em>on the cross axis. Choose
                                        from <code>start (browser default) </code>,<code>end </code>,<code>center
                                        </code>,<code>between </code>,<code>around </code>, or <code>stretch. To demonstrate
                                            these utilities, we’ve enforced </code><code>flex-wrap: wrap </code>and
                                        increased the number of flex items.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#aligh-content-code" role="button" aria-controls="aligh-content-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="aligh-content-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex flex-wrap bg-body-secondary mb-3 align-content-start&quot; style=&quot;height: 300px;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap bg-body-secondary mb-3 align-content-center&quot; style=&quot;height: 300px;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap bg-body-secondary mb-3 align-content-end&quot; style=&quot;height: 300px;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap bg-body-secondary mb-3 align-content-between&quot; style=&quot;height: 300px;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap bg-body-secondary mb-3 align-content-around&quot; style=&quot;height: 300px;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap bg-body-secondary mb-3 align-content-stretch&quot; style=&quot;height: 300px;&quot;&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
  &lt;div class=&quot;p-2 bg-body-secondary border&quot;&gt;Flex item&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex flex-wrap bg-body-secondary mb-3 align-content-start"
                                    style="height: 300px;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex flex-wrap bg-body-secondary mb-3 align-content-center"
                                    style="height: 300px;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex flex-wrap bg-body-secondary mb-3 align-content-end"
                                    style="height: 300px;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex flex-wrap bg-body-secondary mb-3 align-content-between"
                                    style="height: 300px;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex flex-wrap bg-body-secondary mb-3 align-content-around"
                                    style="height: 300px;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                </div>
                                <div class="d-flex flex-wrap bg-body-secondary mb-3 align-content-stretch"
                                    style="height: 300px;">
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
                                    <div class="p-2 bg-body-secondary border">Flex item</div>
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
                        <li class="nav-item"> <a class="nav-link" href="#flex-behaviors">Flex behaviors</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#direction-row">Direction row</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#direction-column">Direction column</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#justify-content">Justify content</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#align-items">Align items</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#align-self">Align self</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#fill">Fill</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#flex-grow">Flex grow</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#flex-shrink">Flex shrink</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#auto-margins">Auto margins</a>
                            <ul class="nav flex-column">
                                <li class="nav-item"> <a class="nav-link" href="#align-items">Align items</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#wrap">Wrap</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#order">Order</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#align-content">Align content</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
