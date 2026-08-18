@extends('layouts.vertical')

@section('title', 'Advance Tables')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Advance Tables</h2>
    <p class="text-body-tertiary lead mb-2">Phoenix uses <b>List.Js</b> for advance table. List.Js is a Tiny, invisible and
        simple, yet powerful and incredibly fast vanilla JavaScript library that adds search, sort, filters and flexibility
        to plain HTML lists, tables, or anything.</p><a class="btn btn-link p-0" href="https://listjs.com/"
        target="_blank">Documentation for List.js<span class="ms-1" data-feather="chevron-right"></span></a>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Example</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#example-code" role="button" aria-controls="example-code"
                                            aria-expanded="false"> <span class="me-2" data-feather="code"></span>View
                                            code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                class="me-2" data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}'&gt;
  &lt;div class=&quot;table-responsive&quot;&gt;
    &lt;table class=&quot;table table-sm fs-9 mb-0&quot;&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th class=&quot;sort border-top border-translucent ps-3&quot; data-sort=&quot;name&quot;&gt;Name&lt;/th&gt;
          &lt;th class=&quot;sort border-top border-translucent&quot; data-sort=&quot;email&quot;&gt;Email&lt;/th&gt;
          &lt;th class=&quot;sort border-top border-translucent&quot; data-sort=&quot;age&quot;&gt;Age&lt;/th&gt;
          &lt;th class=&quot;sort text-end align-middle pe-0 border-top border-translucent&quot; scope=&quot;col&quot;&gt;ACTION&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody class=&quot;list&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Anna&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;anna@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;18&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Homer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;homer@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;35&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Oscar&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;oscar@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emily&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emily@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jara&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jara@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clark&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clark@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jennifer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jennifer@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tony&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tony@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tom&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tom@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Michael&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;michael@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Antony&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;antony@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Raymond&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;raymond@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Marie&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;marie@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Cohen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;cohen@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Rowen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;rowen@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;John&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;john@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emily&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emily@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;31&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Alice&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;alice@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;42&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;David&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;david@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;29&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Sullivan Benton&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;sullivan@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;23&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Uriah Nunez&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;uriah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;32&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Terry Lynch&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;terry@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;45&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Lailah Green&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;lailah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Phillip Mack&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;phillip@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;21&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Whitney Sawyer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;whitney@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;12&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jaliyah Ritter&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jaliyah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;12&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clayton Arnold&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clayton@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jett Donovan&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jett@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;31&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Javion Christensen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;javion@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Brittany Griffin&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;brittany@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;41&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Dustin Middleton&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;dustin@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;45&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Janessa Mann&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;janessa@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;65&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Evangeline Santos&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;evangeline@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;32&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Parker Todd&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;parker@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;41&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jaxson Gill&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jaxson@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;33&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Lucille&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;lucille@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;34&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Terrell&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;terrell@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;35&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Shayna&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;shayna@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;36&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Alvaro&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;alvaro@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clay&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clay@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Oscar&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;oscar@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tabitha&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tabitha@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jordon&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jordon@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex flex-between-center pt-3&quot;&gt;
    &lt;div class=&quot;pagination d-none&quot;&gt;&lt;/div&gt;
    &lt;p class=&quot;mb-0 fs-9&quot;&gt;
      &lt;span class=&quot;d-none d-sm-inline-block&quot; data-list-info=&quot;data-list-info&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;d-none d-sm-inline-block&quot;&gt; &amp;mdash; &lt;/span&gt;
      &lt;a class=&quot;fw-semibold&quot; href=&quot;#!&quot; data-list-view=&quot;*&quot;&gt;
        View all
        &lt;span class=&quot;fas fa-angle-right ms-1&quot; data-fa-transform=&quot;down-1&quot;&gt;&lt;/span&gt;
      &lt;/a&gt;&lt;a class=&quot;fw-semibold d-none&quot; href=&quot;#!&quot; data-list-view=&quot;less&quot;&gt;
        View Less
        &lt;span class=&quot;fas fa-angle-right ms-1&quot; data-fa-transform=&quot;down-1&quot;&gt;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/p&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
      &lt;button class=&quot;btn btn-sm btn-primary&quot; type=&quot;button&quot; data-list-pagination=&quot;prev&quot;&gt;&lt;span&gt;Previous&lt;/span&gt;&lt;/button&gt;
      &lt;button class=&quot;btn btn-sm btn-primary px-4 ms-2&quot; type=&quot;button&quot; data-list-pagination=&quot;next&quot;&gt;&lt;span&gt;Next&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div id="tableExample"
                                    data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                    <div class="table-responsive">
                                        <table class="table table-sm fs-9 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort border-top border-translucent ps-3" data-sort="name">
                                                        Name</th>
                                                    <th class="sort border-top border-translucent" data-sort="email">Email
                                                    </th>
                                                    <th class="sort border-top border-translucent" data-sort="age">Age</th>
                                                    <th class="sort text-end align-middle pe-0 border-top border-translucent"
                                                        scope="col">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td class="align-middle ps-3 name">Anna</td>
                                                    <td class="align-middle email">anna@example.com</td>
                                                    <td class="align-middle age">18</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Homer</td>
                                                    <td class="align-middle email">homer@example.com</td>
                                                    <td class="align-middle age">35</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Oscar</td>
                                                    <td class="align-middle email">oscar@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emily</td>
                                                    <td class="align-middle email">emily@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jara</td>
                                                    <td class="align-middle email">jara@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clark</td>
                                                    <td class="align-middle email">clark@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jennifer</td>
                                                    <td class="align-middle email">jennifer@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tony</td>
                                                    <td class="align-middle email">tony@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tom</td>
                                                    <td class="align-middle email">tom@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Michael</td>
                                                    <td class="align-middle email">michael@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Antony</td>
                                                    <td class="align-middle email">antony@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Raymond</td>
                                                    <td class="align-middle email">raymond@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Marie</td>
                                                    <td class="align-middle email">marie@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Cohen</td>
                                                    <td class="align-middle email">cohen@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Rowen</td>
                                                    <td class="align-middle email">rowen@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">John</td>
                                                    <td class="align-middle email">john@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emily</td>
                                                    <td class="align-middle email">emily@example.com</td>
                                                    <td class="align-middle age">31</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Alice</td>
                                                    <td class="align-middle email">alice@example.com</td>
                                                    <td class="align-middle age">42</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">David</td>
                                                    <td class="align-middle email">david@example.com</td>
                                                    <td class="align-middle age">29</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Sullivan Benton</td>
                                                    <td class="align-middle email">sullivan@example.com</td>
                                                    <td class="align-middle age">23</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Uriah Nunez</td>
                                                    <td class="align-middle email">uriah@example.com</td>
                                                    <td class="align-middle age">32</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Terry Lynch</td>
                                                    <td class="align-middle email">terry@example.com</td>
                                                    <td class="align-middle age">45</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Lailah Green</td>
                                                    <td class="align-middle email">lailah@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Phillip Mack</td>
                                                    <td class="align-middle email">phillip@example.com</td>
                                                    <td class="align-middle age">21</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Whitney Sawyer</td>
                                                    <td class="align-middle email">whitney@example.com</td>
                                                    <td class="align-middle age">12</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jaliyah Ritter</td>
                                                    <td class="align-middle email">jaliyah@example.com</td>
                                                    <td class="align-middle age">12</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clayton Arnold</td>
                                                    <td class="align-middle email">clayton@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jett Donovan</td>
                                                    <td class="align-middle email">jett@example.com</td>
                                                    <td class="align-middle age">31</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Javion Christensen</td>
                                                    <td class="align-middle email">javion@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Brittany Griffin</td>
                                                    <td class="align-middle email">brittany@example.com</td>
                                                    <td class="align-middle age">41</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Dustin Middleton</td>
                                                    <td class="align-middle email">dustin@example.com</td>
                                                    <td class="align-middle age">45</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Janessa Mann</td>
                                                    <td class="align-middle email">janessa@example.com</td>
                                                    <td class="align-middle age">65</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Evangeline Santos</td>
                                                    <td class="align-middle email">evangeline@example.com</td>
                                                    <td class="align-middle age">32</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Parker Todd</td>
                                                    <td class="align-middle email">parker@example.com</td>
                                                    <td class="align-middle age">41</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jaxson Gill</td>
                                                    <td class="align-middle email">jaxson@example.com</td>
                                                    <td class="align-middle age">33</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Lucille</td>
                                                    <td class="align-middle email">lucille@example.com</td>
                                                    <td class="align-middle age">34</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Terrell</td>
                                                    <td class="align-middle email">terrell@example.com</td>
                                                    <td class="align-middle age">35</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Shayna</td>
                                                    <td class="align-middle email">shayna@example.com</td>
                                                    <td class="align-middle age">36</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Alvaro</td>
                                                    <td class="align-middle email">alvaro@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clay</td>
                                                    <td class="align-middle email">clay@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Oscar</td>
                                                    <td class="align-middle email">oscar@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tabitha</td>
                                                    <td class="align-middle email">tabitha@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jordon</td>
                                                    <td class="align-middle email">jordon@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex flex-between-center pt-3">
                                        <div class="pagination d-none"></div>
                                        <p class="mb-0 fs-9">
                                            <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                            <span class="d-none d-sm-inline-block"> &mdash; </span>
                                            <a class="fw-semibold" href="#!" data-list-view="*">
                                                View all
                                                <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                                            </a><a class="fw-semibold d-none" href="#!" data-list-view="less">
                                                View Less
                                                <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                                            </a>
                                        </p>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-primary" type="button"
                                                data-list-pagination="prev"><span>Previous</span></button>
                                            <button class="btn btn-sm btn-primary px-4 ms-2" type="button"
                                                data-list-pagination="next"><span>Next</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Pagination with numbering</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Add <code> pagination </code> class for
                                        enabling number pagination. The following structure will enable number pagination
                                        with next and previous button.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                            href="#pagination-with-numbering-code" role="button"
                                            aria-controls="pagination-with-numbering-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="pagination-with-numbering-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample2&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:{&quot;innerWindow&quot;:2,&quot;left&quot;:1,&quot;right&quot;:1}}'&gt;
  &lt;div class=&quot;table-responsive&quot;&gt;
    &lt;table class=&quot;table table-striped table-sm fs-9 mb-0&quot;&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th class=&quot;sort border-top border-translucent ps-3&quot; data-sort=&quot;name&quot;&gt;Name&lt;/th&gt;
          &lt;th class=&quot;sort border-top&quot; data-sort=&quot;email&quot;&gt;Email&lt;/th&gt;
          &lt;th class=&quot;sort border-top&quot; data-sort=&quot;age&quot;&gt;Age&lt;/th&gt;
          &lt;th class=&quot;sort text-end align-middle pe-0 border-top&quot; scope=&quot;col&quot;&gt;ACTION&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody class=&quot;list&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Anna&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;anna@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;18&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Homer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;homer@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;35&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Oscar&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;oscar@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emily&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emily@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jara&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jara@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clark&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clark@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jennifer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jennifer@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tony&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tony@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tom&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tom@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Michael&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;michael@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Antony&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;antony@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Raymond&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;raymond@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Marie&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;marie@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Cohen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;cohen@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Rowen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;rowen@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;John&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;john@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emily&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emily@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;31&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Alice&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;alice@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;42&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;David&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;david@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;29&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Sullivan Benton&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;sullivan@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;23&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Uriah Nunez&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;uriah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;32&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Terry Lynch&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;terry@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;45&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Lailah Green&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;lailah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Phillip Mack&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;phillip@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;21&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Whitney Sawyer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;whitney@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;12&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jaliyah Ritter&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jaliyah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;12&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clayton Arnold&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clayton@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jett Donovan&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jett@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;31&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Javion Christensen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;javion@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Brittany Griffin&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;brittany@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;41&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Dustin Middleton&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;dustin@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;45&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Janessa Mann&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;janessa@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;65&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Evangeline Santos&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;evangeline@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;32&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Parker Todd&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;parker@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;41&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jaxson Gill&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jaxson@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;33&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Lucille&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;lucille@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;34&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Terrell&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;terrell@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;35&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Shayna&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;shayna@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;36&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Alvaro&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;alvaro@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clay&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clay@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Oscar&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;oscar@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tabitha&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tabitha@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jordon&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jordon@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex justify-content-center mt-3&quot;&gt;&lt;button class=&quot;page-link&quot; data-list-pagination=&quot;prev&quot;&gt;&lt;span class=&quot;fas fa-chevron-left&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;ul class=&quot;mb-0 pagination&quot;&gt;&lt;/ul&gt;&lt;button class=&quot;page-link pe-0&quot; data-list-pagination=&quot;next&quot;&gt;&lt;span class=&quot;fas fa-chevron-right&quot;&gt;&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div id="tableExample2"
                                    data-list='{"valueNames":["name","email","age"],"page":5,"pagination":{"innerWindow":2,"left":1,"right":1}}'>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-sm fs-9 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort border-top border-translucent ps-3"
                                                        data-sort="name">Name</th>
                                                    <th class="sort border-top" data-sort="email">Email</th>
                                                    <th class="sort border-top" data-sort="age">Age</th>
                                                    <th class="sort text-end align-middle pe-0 border-top"
                                                        scope="col">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td class="align-middle ps-3 name">Anna</td>
                                                    <td class="align-middle email">anna@example.com</td>
                                                    <td class="align-middle age">18</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Homer</td>
                                                    <td class="align-middle email">homer@example.com</td>
                                                    <td class="align-middle age">35</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Oscar</td>
                                                    <td class="align-middle email">oscar@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emily</td>
                                                    <td class="align-middle email">emily@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jara</td>
                                                    <td class="align-middle email">jara@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clark</td>
                                                    <td class="align-middle email">clark@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jennifer</td>
                                                    <td class="align-middle email">jennifer@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tony</td>
                                                    <td class="align-middle email">tony@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tom</td>
                                                    <td class="align-middle email">tom@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Michael</td>
                                                    <td class="align-middle email">michael@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Antony</td>
                                                    <td class="align-middle email">antony@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Raymond</td>
                                                    <td class="align-middle email">raymond@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Marie</td>
                                                    <td class="align-middle email">marie@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Cohen</td>
                                                    <td class="align-middle email">cohen@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Rowen</td>
                                                    <td class="align-middle email">rowen@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">John</td>
                                                    <td class="align-middle email">john@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emily</td>
                                                    <td class="align-middle email">emily@example.com</td>
                                                    <td class="align-middle age">31</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Alice</td>
                                                    <td class="align-middle email">alice@example.com</td>
                                                    <td class="align-middle age">42</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">David</td>
                                                    <td class="align-middle email">david@example.com</td>
                                                    <td class="align-middle age">29</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Sullivan Benton</td>
                                                    <td class="align-middle email">sullivan@example.com</td>
                                                    <td class="align-middle age">23</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Uriah Nunez</td>
                                                    <td class="align-middle email">uriah@example.com</td>
                                                    <td class="align-middle age">32</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Terry Lynch</td>
                                                    <td class="align-middle email">terry@example.com</td>
                                                    <td class="align-middle age">45</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Lailah Green</td>
                                                    <td class="align-middle email">lailah@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Phillip Mack</td>
                                                    <td class="align-middle email">phillip@example.com</td>
                                                    <td class="align-middle age">21</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Whitney Sawyer</td>
                                                    <td class="align-middle email">whitney@example.com</td>
                                                    <td class="align-middle age">12</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jaliyah Ritter</td>
                                                    <td class="align-middle email">jaliyah@example.com</td>
                                                    <td class="align-middle age">12</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clayton Arnold</td>
                                                    <td class="align-middle email">clayton@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jett Donovan</td>
                                                    <td class="align-middle email">jett@example.com</td>
                                                    <td class="align-middle age">31</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Javion Christensen</td>
                                                    <td class="align-middle email">javion@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Brittany Griffin</td>
                                                    <td class="align-middle email">brittany@example.com</td>
                                                    <td class="align-middle age">41</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Dustin Middleton</td>
                                                    <td class="align-middle email">dustin@example.com</td>
                                                    <td class="align-middle age">45</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Janessa Mann</td>
                                                    <td class="align-middle email">janessa@example.com</td>
                                                    <td class="align-middle age">65</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Evangeline Santos</td>
                                                    <td class="align-middle email">evangeline@example.com</td>
                                                    <td class="align-middle age">32</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Parker Todd</td>
                                                    <td class="align-middle email">parker@example.com</td>
                                                    <td class="align-middle age">41</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jaxson Gill</td>
                                                    <td class="align-middle email">jaxson@example.com</td>
                                                    <td class="align-middle age">33</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Lucille</td>
                                                    <td class="align-middle email">lucille@example.com</td>
                                                    <td class="align-middle age">34</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Terrell</td>
                                                    <td class="align-middle email">terrell@example.com</td>
                                                    <td class="align-middle age">35</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Shayna</td>
                                                    <td class="align-middle email">shayna@example.com</td>
                                                    <td class="align-middle age">36</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Alvaro</td>
                                                    <td class="align-middle email">alvaro@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clay</td>
                                                    <td class="align-middle email">clay@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Oscar</td>
                                                    <td class="align-middle email">oscar@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tabitha</td>
                                                    <td class="align-middle email">tabitha@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jordon</td>
                                                    <td class="align-middle email">jordon@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3"><button class="page-link"
                                            data-list-pagination="prev"><span
                                                class="fas fa-chevron-left"></span></button>
                                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                            data-list-pagination="next"><span
                                                class="fas fa-chevron-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-end">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Search Example</h4>
                                    <p class="mb-0 mt-2 text-body-secondary">Add <code>search</code> class for enable data
                                        searching. The following structure will enable search feature.</p>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                            data-bs-toggle="collapse" href="#search-example-code" role="button"
                                            aria-controls="search-example-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="search-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample3&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}'&gt;
  &lt;div class=&quot;search-box mb-3 mx-auto&quot;&gt;
    &lt;form class=&quot;position-relative&quot;&gt;&lt;input class=&quot;form-control search-input search form-control-sm&quot; type=&quot;search&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot; /&gt;
      &lt;span class=&quot;fas fa-search search-box-icon&quot;&gt;&lt;/span&gt;
    &lt;/form&gt;
  &lt;/div&gt;
  &lt;div class=&quot;table-responsive&quot;&gt;
    &lt;table class=&quot;table table-striped table-sm fs-9 mb-0&quot;&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th class=&quot;sort border-top border-translucent ps-3&quot; data-sort=&quot;name&quot;&gt;Name&lt;/th&gt;
          &lt;th class=&quot;sort border-top&quot; data-sort=&quot;email&quot;&gt;Email&lt;/th&gt;
          &lt;th class=&quot;sort border-top&quot; data-sort=&quot;age&quot;&gt;Age&lt;/th&gt;
          &lt;th class=&quot;sort text-end align-middle pe-0 border-top&quot; scope=&quot;col&quot;&gt;ACTION&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody class=&quot;list&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Anna&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;anna@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;18&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Homer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;homer@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;35&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Oscar&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;oscar@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emily&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emily@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jara&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jara@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clark&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clark@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jennifer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jennifer@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tony&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tony@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tom&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tom@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Michael&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;michael@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Antony&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;antony@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Raymond&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;raymond@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Marie&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;marie@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;30&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Cohen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;cohen@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Rowen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;rowen@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;39&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;John&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;john@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emily&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emily@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;31&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Alice&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;alice@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;42&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;David&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;david@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;29&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Sullivan Benton&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;sullivan@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;23&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Uriah Nunez&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;uriah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;32&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Terry Lynch&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;terry@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;45&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Lailah Green&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;lailah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Phillip Mack&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;phillip@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;21&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Whitney Sawyer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;whitney@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;12&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jaliyah Ritter&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jaliyah@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;12&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clayton Arnold&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clayton@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;52&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jett Donovan&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jett@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;31&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Javion Christensen&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;javion@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;25&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Brittany Griffin&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;brittany@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;41&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Dustin Middleton&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;dustin@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;45&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Janessa Mann&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;janessa@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;65&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Evangeline Santos&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;evangeline@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;32&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Parker Todd&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;parker@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;41&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jaxson Gill&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jaxson@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;33&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Lucille&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;lucille@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;34&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Terrell&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;terrell@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;35&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Shayna&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;shayna@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;36&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Alvaro&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;alvaro@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Clay&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;clay@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Oscar&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;oscar@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Tabitha&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tabitha@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Jordon&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;jordon@example.com&lt;/td&gt;
          &lt;td class=&quot;align-middle age&quot;&gt;37&lt;/td&gt;
          &lt;td class=&quot;align-middle white-space-nowrap text-end pe-0&quot;&gt;
            &lt;div class=&quot;btn-reveal-trigger position-static&quot;&gt;&lt;button class=&quot;btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-boundary=&quot;window&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h fs-10&quot;&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;div class=&quot;dropdown-menu dropdown-menu-end py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;View&lt;/a&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;Export&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;&lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;Remove&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex justify-content-between mt-3&quot;&gt;&lt;span class=&quot;d-none d-sm-inline-block&quot; data-list-info=&quot;data-list-info&quot;&gt;&lt;/span&gt;
    &lt;div class=&quot;d-flex&quot;&gt;&lt;button class=&quot;page-link&quot; data-list-pagination=&quot;prev&quot;&gt;&lt;span class=&quot;fas fa-chevron-left&quot;&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class=&quot;mb-0 pagination&quot;&gt;&lt;/ul&gt;&lt;button class=&quot;page-link pe-0&quot; data-list-pagination=&quot;next&quot;&gt;&lt;span class=&quot;fas fa-chevron-right&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div id="tableExample3"
                                    data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                    <div class="search-box mb-3 mx-auto">
                                        <form class="position-relative"><input
                                                class="form-control search-input search form-control-sm" type="search"
                                                placeholder="Search" aria-label="Search">
                                            <span class="fas fa-search search-box-icon"></span>
                                        </form>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-sm fs-9 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort border-top border-translucent ps-3"
                                                        data-sort="name">Name</th>
                                                    <th class="sort border-top" data-sort="email">Email</th>
                                                    <th class="sort border-top" data-sort="age">Age</th>
                                                    <th class="sort text-end align-middle pe-0 border-top"
                                                        scope="col">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td class="align-middle ps-3 name">Anna</td>
                                                    <td class="align-middle email">anna@example.com</td>
                                                    <td class="align-middle age">18</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Homer</td>
                                                    <td class="align-middle email">homer@example.com</td>
                                                    <td class="align-middle age">35</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Oscar</td>
                                                    <td class="align-middle email">oscar@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emily</td>
                                                    <td class="align-middle email">emily@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jara</td>
                                                    <td class="align-middle email">jara@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clark</td>
                                                    <td class="align-middle email">clark@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jennifer</td>
                                                    <td class="align-middle email">jennifer@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tony</td>
                                                    <td class="align-middle email">tony@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tom</td>
                                                    <td class="align-middle email">tom@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Michael</td>
                                                    <td class="align-middle email">michael@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Antony</td>
                                                    <td class="align-middle email">antony@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Raymond</td>
                                                    <td class="align-middle email">raymond@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Marie</td>
                                                    <td class="align-middle email">marie@example.com</td>
                                                    <td class="align-middle age">30</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Cohen</td>
                                                    <td class="align-middle email">cohen@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Rowen</td>
                                                    <td class="align-middle email">rowen@example.com</td>
                                                    <td class="align-middle age">39</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">John</td>
                                                    <td class="align-middle email">john@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emily</td>
                                                    <td class="align-middle email">emily@example.com</td>
                                                    <td class="align-middle age">31</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Alice</td>
                                                    <td class="align-middle email">alice@example.com</td>
                                                    <td class="align-middle age">42</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">David</td>
                                                    <td class="align-middle email">david@example.com</td>
                                                    <td class="align-middle age">29</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Sullivan Benton</td>
                                                    <td class="align-middle email">sullivan@example.com</td>
                                                    <td class="align-middle age">23</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Uriah Nunez</td>
                                                    <td class="align-middle email">uriah@example.com</td>
                                                    <td class="align-middle age">32</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Terry Lynch</td>
                                                    <td class="align-middle email">terry@example.com</td>
                                                    <td class="align-middle age">45</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Lailah Green</td>
                                                    <td class="align-middle email">lailah@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Phillip Mack</td>
                                                    <td class="align-middle email">phillip@example.com</td>
                                                    <td class="align-middle age">21</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Whitney Sawyer</td>
                                                    <td class="align-middle email">whitney@example.com</td>
                                                    <td class="align-middle age">12</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jaliyah Ritter</td>
                                                    <td class="align-middle email">jaliyah@example.com</td>
                                                    <td class="align-middle age">12</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clayton Arnold</td>
                                                    <td class="align-middle email">clayton@example.com</td>
                                                    <td class="align-middle age">52</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jett Donovan</td>
                                                    <td class="align-middle email">jett@example.com</td>
                                                    <td class="align-middle age">31</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Javion Christensen</td>
                                                    <td class="align-middle email">javion@example.com</td>
                                                    <td class="align-middle age">25</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Brittany Griffin</td>
                                                    <td class="align-middle email">brittany@example.com</td>
                                                    <td class="align-middle age">41</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Dustin Middleton</td>
                                                    <td class="align-middle email">dustin@example.com</td>
                                                    <td class="align-middle age">45</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Janessa Mann</td>
                                                    <td class="align-middle email">janessa@example.com</td>
                                                    <td class="align-middle age">65</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Evangeline Santos</td>
                                                    <td class="align-middle email">evangeline@example.com</td>
                                                    <td class="align-middle age">32</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Parker Todd</td>
                                                    <td class="align-middle email">parker@example.com</td>
                                                    <td class="align-middle age">41</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jaxson Gill</td>
                                                    <td class="align-middle email">jaxson@example.com</td>
                                                    <td class="align-middle age">33</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Lucille</td>
                                                    <td class="align-middle email">lucille@example.com</td>
                                                    <td class="align-middle age">34</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Terrell</td>
                                                    <td class="align-middle email">terrell@example.com</td>
                                                    <td class="align-middle age">35</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Shayna</td>
                                                    <td class="align-middle email">shayna@example.com</td>
                                                    <td class="align-middle age">36</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Alvaro</td>
                                                    <td class="align-middle email">alvaro@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Clay</td>
                                                    <td class="align-middle email">clay@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Oscar</td>
                                                    <td class="align-middle email">oscar@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Tabitha</td>
                                                    <td class="align-middle email">tabitha@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Jordon</td>
                                                    <td class="align-middle email">jordon@example.com</td>
                                                    <td class="align-middle age">37</td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static"><button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3"><span
                                            class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                        <div class="d-flex"><button class="page-link"
                                                data-list-pagination="prev"><span
                                                    class="fas fa-chevron-left"></span></button>
                                            <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                                data-list-pagination="next"><span
                                                    class="fas fa-chevron-right"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Filter Example</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                            data-bs-toggle="collapse" href="#filter-example-code" role="button"
                                            aria-controls="filter-example-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="filter-example-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample4&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;payment&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true,&quot;filter&quot;:{&quot;key&quot;:&quot;payment&quot;}}'&gt;
  &lt;div class=&quot;row justify-content-end g-0&quot;&gt;
    &lt;div class=&quot;col-auto px-3&quot;&gt;&lt;select class=&quot;form-select form-select-sm mb-3&quot; data-list-filter=&quot;data-list-filter&quot;&gt;
        &lt;option selected=&quot;&quot; value=&quot;&quot;&gt;Select payment status&lt;/option&gt;
        &lt;option value=&quot;Pending&quot;&gt;Pending&lt;/option&gt;
        &lt;option value=&quot;Success&quot;&gt;Success&lt;/option&gt;
        &lt;option value=&quot;Blocked&quot;&gt;Blocked&lt;/option&gt;
      &lt;/select&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;table-responsive&quot;&gt;
    &lt;table class=&quot;table table-sm fs-9 mb-0&quot;&gt;
      &lt;thead&gt;
        &lt;tr class=&quot;bg-body-highlight&quot;&gt;
          &lt;th class=&quot;sort border-top border-translucent ps-3&quot; data-sort=&quot;name&quot;&gt;Customer&lt;/th&gt;
          &lt;th class=&quot;sort border-top border-translucent&quot; data-sort=&quot;email&quot;&gt;Email&lt;/th&gt;
          &lt;th class=&quot;sort border-top border-translucent text-end pe-3&quot; data-sort=&quot;payment&quot;&gt;Payment&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody class=&quot;list&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Sylvia Plath&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;john@gmail.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-success&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Success&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-check&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Homer&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;sylvia@mail.ru&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-warning&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Pending&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-stream&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Edgar Allan Poe&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;edgar@yahoo.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-secondary&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Blocked&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-ban&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;William Butler Yeats&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;william@gmail.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-success&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Success&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-check&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Rabindranath Tagore&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;tagore@twitter.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-warning&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Pending&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-stream&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emily Dickinson&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emily@gmail.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-secondary&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Blocked&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-ban&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Giovanni Boccaccio&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;giovanni@outlook.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-warning&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Pending&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-stream&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Oscar Wilde&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;oscar@hotmail.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-success&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Success&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-check&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;John Doe&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;doe@gmail.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-success&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Success&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-check&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;align-middle ps-3 name&quot;&gt;Emma Watson&lt;/td&gt;
          &lt;td class=&quot;align-middle email&quot;&gt;emma@gmail.com&lt;/td&gt;
          &lt;td class=&quot;align-middle payment text-end py-3 pe-3&quot;&gt;
            &lt;div class=&quot;badge badge-phoenix fs-10 badge-phoenix-warning&quot;&gt;&lt;span class=&quot;fw-bold&quot;&gt;Pending&lt;/span&gt;&lt;span class=&quot;ms-1 fas fa-stream&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex justify-content-between mt-3&quot;&gt;&lt;span class=&quot;d-none d-sm-inline-block&quot; data-list-info=&quot;data-list-info&quot;&gt;&lt;/span&gt;
    &lt;div class=&quot;d-flex&quot;&gt;&lt;button class=&quot;page-link&quot; data-list-pagination=&quot;prev&quot;&gt;&lt;span class=&quot;fas fa-chevron-left&quot;&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class=&quot;mb-0 pagination&quot;&gt;&lt;/ul&gt;&lt;button class=&quot;page-link pe-0&quot; data-list-pagination=&quot;next&quot;&gt;&lt;span class=&quot;fas fa-chevron-right&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div id="tableExample4"
                                    data-list='{"valueNames":["name","email","payment"],"page":5,"pagination":true,"filter":{"key":"payment"}}'>
                                    <div class="row justify-content-end g-0">
                                        <div class="col-auto px-3"><select class="form-select form-select-sm mb-3"
                                                data-list-filter="data-list-filter">
                                                <option selected="" value="">Select payment status</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Success">Success</option>
                                                <option value="Blocked">Blocked</option>
                                            </select></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-sm fs-9 mb-0">
                                            <thead>
                                                <tr class="bg-body-highlight">
                                                    <th class="sort border-top border-translucent ps-3"
                                                        data-sort="name">Customer</th>
                                                    <th class="sort border-top border-translucent" data-sort="email">
                                                        Email</th>
                                                    <th class="sort border-top border-translucent text-end pe-3"
                                                        data-sort="payment">Payment</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td class="align-middle ps-3 name">Sylvia Plath</td>
                                                    <td class="align-middle email">john@gmail.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                                class="fw-bold">Success</span><span
                                                                class="ms-1 fas fa-check"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Homer</td>
                                                    <td class="align-middle email">sylvia@mail.ru</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                                class="fw-bold">Pending</span><span
                                                                class="ms-1 fas fa-stream"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Edgar Allan Poe</td>
                                                    <td class="align-middle email">edgar@yahoo.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-secondary">
                                                            <span class="fw-bold">Blocked</span><span
                                                                class="ms-1 fas fa-ban"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">William Butler Yeats</td>
                                                    <td class="align-middle email">william@gmail.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                                class="fw-bold">Success</span><span
                                                                class="ms-1 fas fa-check"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Rabindranath Tagore</td>
                                                    <td class="align-middle email">tagore@twitter.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                                class="fw-bold">Pending</span><span
                                                                class="ms-1 fas fa-stream"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emily Dickinson</td>
                                                    <td class="align-middle email">emily@gmail.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-secondary">
                                                            <span class="fw-bold">Blocked</span><span
                                                                class="ms-1 fas fa-ban"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Giovanni Boccaccio</td>
                                                    <td class="align-middle email">giovanni@outlook.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                                class="fw-bold">Pending</span><span
                                                                class="ms-1 fas fa-stream"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Oscar Wilde</td>
                                                    <td class="align-middle email">oscar@hotmail.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                                class="fw-bold">Success</span><span
                                                                class="ms-1 fas fa-check"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">John Doe</td>
                                                    <td class="align-middle email">doe@gmail.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                                class="fw-bold">Success</span><span
                                                                class="ms-1 fas fa-check"></span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="align-middle ps-3 name">Emma Watson</td>
                                                    <td class="align-middle email">emma@gmail.com</td>
                                                    <td class="align-middle payment text-end py-3 pe-3">
                                                        <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                                class="fw-bold">Pending</span><span
                                                                class="ms-1 fas fa-stream"></span></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3"><span
                                            class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                        <div class="d-flex"><button class="page-link"
                                                data-list-pagination="prev"><span
                                                    class="fas fa-chevron-left"></span></button>
                                            <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                                data-list-pagination="next"><span
                                                    class="fas fa-chevron-right"></span></button>
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
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Docs</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="docs-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Integrate List in Phoenix by following these easy steps: &lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt;Set unique ID and add &lt;code&gt;data-list &lt;/code&gt;attribute to the wrapper element and list your column in &lt;code&gt;valueNames &lt;/code&gt;property. &lt;pre class=&quot;my-1&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;div id=&amp;quot;tableExample&amp;quot; data-list='{&amp;quot;valueNames&amp;quot;:[&amp;quot;name&amp;quot;,&amp;quot;email&amp;quot;,&amp;quot;age&amp;quot;]}'&amp;gt;
  &amp;lt;!-- Your list content will go here--&amp;gt;
&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/li&gt;
  &lt;li&gt;To enable sorting in your column, add &lt;code&gt;data-sort &lt;/code&gt;attribute and assign column name to the attribute. &lt;pre class=&quot;my-1&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;th class=&amp;quot;sort&amp;quot; data-sort=&amp;quot;name&amp;quot;&amp;gt;Customer&amp;lt;/th&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/li&gt;
  &lt;li&gt;Add &lt;code&gt;list &lt;/code&gt;class to the content wrapper element.&lt;pre class=&quot;my-1&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;tbody class=&amp;quot;list&amp;quot;&amp;gt;
  &amp;lt;!-- Your value will go here--&amp;gt;
&amp;lt;/tbody&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/li&gt;
  &lt;li&gt;Then wrap your value with column name as a class. For example, if your column name is &lt;code&gt;name &lt;/code&gt;then the value will look like this:&lt;pre class=&quot;my-1&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;td class=&amp;quot;name&amp;quot;&amp;gt;John Doe&amp;lt;/td&amp;gt;&lt;/code&gt;&lt;/pre&gt;
  &lt;/li&gt;
  &lt;li&gt;To add pagination add &lt;code&gt;.pagination &lt;/code&gt;class inside your wrapper element&lt;/li&gt;
  &lt;li&gt;To enable button pagination add &lt;code&gt;data-list-pagination='prev' &lt;/code&gt;and &lt;code&gt;data-list-pagination='next' &lt;/code&gt;to the &quot;Prev&quot; and &quot;Next&quot; buttons respectively.&lt;/li&gt;
  &lt;li&gt;To see the list info, add &lt;code&gt;data-list-info&lt;/code&gt; attribute to a DOM element inside your wrapper element.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <p>Integrate List in Phoenix by following these easy steps: </p>
                                <ul>
                                    <li>Set unique ID and add <code>data-list </code>attribute to the wrapper element and
                                        list your column in <code>valueNames </code>property.
                                        <pre class="my-1"><code class="language-html">&lt;div id=&quot;tableExample&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;]}'&gt;
  &lt;!-- Your list content will go here--&gt;
&lt;/div&gt;</code></pre>
                                    </li>
                                    <li>To enable sorting in your column, add <code>data-sort </code>attribute and assign
                                        column name to the attribute.
                                        <pre class="my-1"><code class="language-html">&lt;th class=&quot;sort&quot; data-sort=&quot;name&quot;&gt;Customer&lt;/th&gt;</code></pre>
                                    </li>
                                    <li>Add <code>list </code>class to the content wrapper element.
                                        <pre class="my-1"><code class="language-html">&lt;tbody class=&quot;list&quot;&gt;
  &lt;!-- Your value will go here--&gt;
&lt;/tbody&gt;</code></pre>
                                    </li>
                                    <li>Then wrap your value with column name as a class. For example, if your column name
                                        is <code>name </code>then the value will look like this:
                                        <pre class="my-1"><code class="language-html">&lt;td class=&quot;name&quot;&gt;John Doe&lt;/td&gt;</code></pre>
                                    </li>
                                    <li>To add pagination add <code>.pagination </code>class inside your wrapper element
                                    </li>
                                    <li>To enable button pagination add <code>data-list-pagination='prev' </code>and
                                        <code>data-list-pagination='next' </code>to the "Prev" and "Next" buttons
                                        respectively.</li>
                                    <li>To see the list info, add <code>data-list-info</code> attribute to a DOM element
                                        inside your wrapper element.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Ajax Table</h4>
                                </div>
                                <div class="col col-md-auto">
                                    <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist">
                                        <button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                                class="fas fa-copy me-1"></span>Copy Code</button><a
                                            class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                            data-bs-toggle="collapse" href="#ajax-table-code" role="button"
                                            aria-controls="ajax-table-code" aria-expanded="false"> <span
                                                class="me-2" data-feather="code"></span>View code</a><a
                                            class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                                data-feather="eye"></span>Hide code</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="ajax-table-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-list&quot; id=&quot;advanceAjaxTable&quot;&gt;
  &lt;div class=&quot;table-responsive scrollbar mb-3&quot;&gt;
    &lt;table class=&quot;table table-sm fs-9 mb-0 overflow-hidden&quot;&gt;
      &lt;thead class=&quot;text-body&quot;&gt;
        &lt;tr&gt;
          &lt;th class=&quot;sort ps-3 pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;orderId&quot; style=&quot;min-width: 4.5rem;&quot;&gt;Order&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;customer&quot; style=&quot;min-width: 8.5rem&quot;&gt;Customer&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap pe-7&quot; data-sort=&quot;date&quot;&gt;Date&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;address&quot; style=&quot;min-width: 12.5rem;&quot;&gt;Ship To&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;deliveryType&quot; style=&quot;min-width: 7rem&quot;&gt;Delivery Type&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap text-center&quot; data-sort=&quot;status&quot;&gt;Status&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap text-end&quot; data-sort=&quot;amount&quot;&gt;Amount&lt;/th&gt;
          &lt;th class=&quot;no-sort&quot;&gt;&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody class=&quot;list&quot;&gt;&lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex justify-content-center mt-3&quot;&gt;&lt;button class=&quot;page-link&quot; data-list-pagination=&quot;prev&quot;&gt;&lt;span class=&quot;fas fa-chevron-left&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;ul class=&quot;mb-0 pagination&quot;&gt;&lt;/ul&gt;&lt;button class=&quot;page-link pe-0&quot; data-list-pagination=&quot;next&quot;&gt;&lt;span class=&quot;fas fa-chevron-right&quot;&gt; &lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;p-3&quot;&gt;
  &lt;h4 class=&quot;mb-3&quot;&gt;How to use&lt;/h4&gt;
  &lt;p&gt;If you are using Gulp based workflow, follow these easy steps:&lt;/p&gt;
  &lt;ul&gt;
    &lt;li&gt;Give your table a unique ID.&lt;/li&gt;
    &lt;li&gt;Use the &lt;code&gt;advanceAjaxTableInit() &lt;/code&gt;function from &lt;code&gt;src/js/theme/advance-ajax-table.js &lt;/code&gt;in a new JS file and update the ID.&lt;/li&gt;
    &lt;li&gt;Import and invoke the function in your script file.&lt;/li&gt;
  &lt;/ul&gt;
  &lt;p&gt;If you are not using Gulp based workflow:&lt;/p&gt;
  &lt;ul&gt;
    &lt;li&gt;Give your table a unique ID.&lt;/li&gt;
    &lt;li&gt;Find the &lt;code&gt;advanceAjaxTableInit() &lt;/code&gt;function from &lt;code&gt;public/assets/js/pages/advance-ajax-table.js, &lt;/code&gt;copy the code, and update the ID in a new function.&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="table-list" id="advanceAjaxTable">
                                    <div class="table-responsive scrollbar mb-3">
                                        <table class="table table-sm fs-9 mb-0 overflow-hidden">
                                            <thead class="text-body">
                                                <tr>
                                                    <th class="sort ps-3 pe-1 align-middle white-space-nowrap"
                                                        data-sort="orderId" style="min-width: 4.5rem;">Order</th>
                                                    <th class="sort pe-1 align-middle white-space-nowrap"
                                                        data-sort="customer" style="min-width: 8.5rem">Customer</th>
                                                    <th class="sort pe-1 align-middle white-space-nowrap pe-7"
                                                        data-sort="date">Date</th>
                                                    <th class="sort pe-1 align-middle white-space-nowrap"
                                                        data-sort="address" style="min-width: 12.5rem;">Ship To</th>
                                                    <th class="sort pe-1 align-middle white-space-nowrap"
                                                        data-sort="deliveryType" style="min-width: 7rem">Delivery Type
                                                    </th>
                                                    <th class="sort pe-1 align-middle white-space-nowrap text-center"
                                                        data-sort="status">Status</th>
                                                    <th class="sort pe-1 align-middle white-space-nowrap text-end"
                                                        data-sort="amount">Amount</th>
                                                    <th class="no-sort"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list"></tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3"><button class="page-link"
                                            data-list-pagination="prev"><span
                                                class="fas fa-chevron-left"></span></button>
                                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                            data-list-pagination="next"><span class="fas fa-chevron-right">
                                            </span></button>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h4 class="mb-3">How to use</h4>
                                    <p>If you are using Gulp based workflow, follow these easy steps:</p>
                                    <ul>
                                        <li>Give your table a unique ID.</li>
                                        <li>Use the <code>advanceAjaxTableInit() </code>function from
                                            <code>src/js/theme/advance-ajax-table.js </code>in a new JS file and update the
                                            ID.</li>
                                        <li>Import and invoke the function in your script file.</li>
                                    </ul>
                                    <p>If you are not using Gulp based workflow:</p>
                                    <ul>
                                        <li>Give your table a unique ID.</li>
                                        <li>Find the <code>advanceAjaxTableInit() </code>function from
                                            <code>public/assets/js/pages/advance-ajax-table.js, </code>copy the code, and
                                            update the ID in a new function.</li>
                                    </ul>
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
                        <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#pagination-with-numbering">Pagination with
                                numbering</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#search-example">Search Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#filter-example">Filter Example</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#docs">Docs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('assets/js/pages/advance-ajax-table.js') }}"></script>
@endpush
