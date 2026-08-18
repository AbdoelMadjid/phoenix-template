@extends('layouts.vertical')

@section('title', 'Avatar')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Avatars</h2>
    <p class="text-body-tertiary lead mb-2">Use avater of different shapes and sizes with a single component.</p>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="row mb-9">
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Circular</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                            <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#circular-code" role="button"
                                                aria-controls="circular-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                    data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="circular-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-xl &quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Square</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                            <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#square-code" role="button"
                                                aria-controls="square-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                    data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="square-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-xl &quot;&gt;
  &lt;img class=&quot;rounded-none &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-none " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Soft</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                            <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                    class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#soft-code" role="button"
                                                aria-controls="soft-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="soft-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-xl &quot;&gt;
  &lt;img class=&quot;rounded-soft &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-soft " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Content</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#content-code" role="button"
                                                aria-controls="content-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="content-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-xl &quot;&gt;
  &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+2&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-xl ">
                                        <div class="avatar-name rounded-circle "><span>+2</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Name</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#name-code" role="button"
                                                aria-controls="name-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="name-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-xl &quot;&gt;
  &lt;div class=&quot;avatar-name rounded-circle&quot;&gt;&lt;span&gt;A&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-xl ">
                                        <div class="avatar-name rounded-circle"><span>A</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Emoji</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#emoji-code" role="button"
                                                aria-controls="emoji-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="emoji-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-xl &quot;&gt;
  &lt;div class=&quot;avatar-emoji rounded-circle &quot;&gt;&lt;span role=&quot;img&quot; aria-label=&quot;Emoji&quot;&gt;🎁&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-xl ">
                                        <div class="avatar-emoji rounded-circle "><span role="img"
                                                aria-label="Emoji">🎁</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Status</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#status-code" role="button"
                                                aria-controls="status-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="status-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-xl status-online  me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-xl status-offline  me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-xl status-away  me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-xl status-do-not-disturb  me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-xl status-online  me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-xl status-offline  me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-xl status-away  me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-xl status-do-not-disturb  me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-none border my-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Sizes</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#sizes-code" role="button"
                                                aria-controls="sizes-code" aria-expanded="false"> <span class="me-2"
                                                    data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="sizes-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar avatar-5xl avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-4xl avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-3xl avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-2xl avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-xl avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-l avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-m avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-s avatar-bordered me-4&quot;&gt;
  &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar avatar-5xl avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-4xl avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-3xl avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-2xl avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-xl avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-l avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-m avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="avatar avatar-s avatar-bordered me-4">
                                        <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow-none border mt-4" data-component-card="data-component-card">
                            <div class="card-header p-4 border-bottom bg-body">
                                <div class="row g-3 justify-content-between align-items-center">
                                    <div class="col-12 col-md">
                                        <h4 class="text-body mb-0" data-anchor="data-anchor">Avatar Group</h4>
                                    </div>
                                    <div class="col col-md-auto">
                                        <nav class="nav justify-content-end doc-tab-nav align-items-center"
                                            role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn"
                                                type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a
                                                class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                data-bs-toggle="collapse" href="#avatar-group-code" role="button"
                                                aria-controls="avatar-group-code" aria-expanded="false"> <span
                                                    class="me-2" data-feather="code"></span>View code</a><a
                                                class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                    class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="collapse code-collapse" id="avatar-group-code">
                                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;avatar-group mb-4&quot;&gt;
  &lt;div class=&quot;avatar avatar-5xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-5xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-5xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-5xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-5xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-5xl &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group mb-4&quot;&gt;
  &lt;div class=&quot;avatar avatar-4xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-4xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-4xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-4xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-4xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-4xl &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group mb-4&quot;&gt;
  &lt;div class=&quot;avatar avatar-3xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-3xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-3xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-3xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-3xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-3xl &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group&quot;&gt;
  &lt;div class=&quot;avatar avatar-2xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-2xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-2xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-2xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-2xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-2xl &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group mb-4&quot;&gt;
  &lt;div class=&quot;avatar avatar-xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-xl &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-xl &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group mb-4&quot;&gt;
  &lt;div class=&quot;avatar avatar-l &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-l &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-l &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-l &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-l &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-l &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group mb-4&quot;&gt;
  &lt;div class=&quot;avatar avatar-m &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-m &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-m &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-m &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-m &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-m &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group mb-4&quot;&gt;
  &lt;div class=&quot;avatar avatar-s &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/30.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-s &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/57.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-s &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/25.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-s &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/8.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-s &quot;&gt;
    &lt;img class=&quot;rounded-circle &quot; src=&quot;../../assets/img/team/58.webp&quot; alt=&quot;&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;avatar avatar-s &quot;&gt;
    &lt;div class=&quot;avatar-name rounded-circle &quot;&gt;&lt;span&gt;+3&lt;/span&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="p-4 code-to-copy">
                                    <div class="avatar-group mb-4">
                                        <div class="avatar avatar-5xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-5xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-5xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-5xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-5xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-5xl ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                                        </div>
                                    </div>
                                    <div class="avatar-group mb-4">
                                        <div class="avatar avatar-4xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-4xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-4xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-4xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-4xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-4xl ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                                        </div>
                                    </div>
                                    <div class="avatar-group mb-4">
                                        <div class="avatar avatar-3xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-3xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-3xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-3xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-3xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-3xl ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                                        </div>
                                    </div>
                                    <div class="avatar-group">
                                        <div class="avatar avatar-2xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-2xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-2xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-2xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-2xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-2xl ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                                        </div>
                                    </div>
                                    <div class="avatar-group mb-4">
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-xl ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                                        </div>
                                    </div>
                                    <div class="avatar-group mb-4">
                                        <div class="avatar avatar-l ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-l ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-l ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-l ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-l ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-l ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                                        </div>
                                    </div>
                                    <div class="avatar-group mb-4">
                                        <div class="avatar avatar-m ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-m ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-m ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-m ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-m ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-m ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                                        </div>
                                    </div>
                                    <div class="avatar-group mb-4">
                                        <div class="avatar avatar-s ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-s ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-s ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-s ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-s ">
                                            <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="avatar avatar-s ">
                                            <div class="avatar-name rounded-circle "><span>+3</span></div>
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
                        <li class="nav-item"> <a class="nav-link" href="#circular">Circular</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#square">Square</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#soft">Soft</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#content">Content</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#name">Name</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#emoji">Emoji</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#status">Status</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#sizes">Sizes</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#avatar-group">Avatar Group</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
