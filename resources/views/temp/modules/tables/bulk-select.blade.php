@extends('layouts.vertical')

@section('title', 'Bulk Select')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Bulk Select</h2>
    <p class="text-body-tertiary lead mb-2">Bulk select allows users to check multiple checkboxes at once and toggles a UI
        for bulk actions to be performed for the selected items.</p>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;h5&gt;Bulk select consist of this following parts: &lt;/h5&gt;
&lt;ul&gt;
  &lt;li&gt;The main checkbox, which is used for checking all the other checkboxes, the attribute &lt;code&gt;data-bulk-select&lt;/code&gt; is used to define that item.&lt;/li&gt;
  &lt;li&gt;Three(3) elements can be hooked with bulk select: &lt;code&gt;body&lt;/code&gt;, &lt;code&gt;actions&lt;/code&gt;, &lt;code&gt;replacedElement&lt;/code&gt;.&lt;pre&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;input class=&amp;quot;form-check-input&amp;quot; type=&amp;quot;checkbox&amp;quot; data-bulk-select='{&amp;quot;body&amp;quot;:&amp;quot;bulk-select-body&amp;quot;,&amp;quot;actions&amp;quot;:&amp;quot;bulk-select-actions&amp;quot;,&amp;quot;replacedElement&amp;quot;:&amp;quot;bulk-select-replace-element&amp;quot;}' /&amp;gt;&lt;/code&gt;&lt;/pre&gt;
    &lt;p class=&quot;mb-0&quot;&gt;These ids definded in these keys are used to hook the respective elements.&lt;/p&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;code&gt;body:&lt;/code&gt; The target checkboxes are wrapped using a unique id defined in &lt;code&gt;body&lt;/code&gt;. In this example &lt;code&gt;bulk-select-body&lt;/code&gt;. Every targeted checkbox within this wrapper is marked with the data attribute &lt;code&gt;data-bulk-select-row.&lt;/code&gt;You will get the value passed in this attribute as return value of &lt;code&gt;getSelectedRows &lt;/code&gt;method in JS.&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;actions:&lt;/code&gt; The target actions are wrapped using a unique id defined in &lt;code&gt;actions&lt;/code&gt;. The element with this id (in &lt;code&gt;example bulk-select-actions&lt;/code&gt;) will be toggled by checking the main checkbox.&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;replacedElement:&lt;/code&gt; The target replaced element with action are wrapped using a unique id defined in &lt;code&gt;replacedElement&lt;/code&gt;. Bulk select actions will be replaced with the content of this element with this id (in example &lt;code&gt;bulk-select-replace-element&lt;/code&gt;)&lt;/li&gt;
&lt;/ul&gt;
&lt;h5&gt;Javascript&lt;/h5&gt;
&lt;ul&gt;
  &lt;li&gt;&lt;code&gt;getInstance: &lt;/code&gt;Static method which allows you to get the &lt;strong&gt;BulkSelect &lt;/strong&gt;instance associated to a DOM element, you can use it like this: &lt;code&gt;window.phoenix.BulkSelect.getInstance(element)&lt;/code&gt;&lt;/li&gt;
  &lt;li&gt;&lt;code&gt;getSelectedRows: &lt;/code&gt;Get the selected rows data by invoking &lt;code&gt;getSelectedRows &lt;/code&gt;method on the &lt;code&gt;BulkSelect &lt;/code&gt;instance&lt;div class=&quot;border border-translucent rounded-2 p-3 bg-primary-subtle&quot;&gt;&lt;code&gt;const bulkSelectEl = document.getElementById('bulk-select-example');&lt;/code&gt;&lt;br /&gt;&lt;code&gt;const bulkSelectInstance = window.phoenix.BulkSelect.getInstance(bulkSelectEl);&lt;/code&gt;&lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <h5>Bulk select consist of this following parts: </h5>
                                <ul>
                                    <li>The main checkbox, which is used for checking all the other checkboxes, the
                                        attribute <code>data-bulk-select</code> is used to define that item.</li>
                                    <li>Three(3) elements can be hooked with bulk select: <code>body</code>,
                                        <code>actions</code>, <code>replacedElement</code>.
                                        <pre><code class="language-html">&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select='{&quot;body&quot;:&quot;bulk-select-body&quot;,&quot;actions&quot;:&quot;bulk-select-actions&quot;,&quot;replacedElement&quot;:&quot;bulk-select-replace-element&quot;}' /&gt;</code></pre>
                                        <p class="mb-0">These ids definded in these keys are used to hook the respective
                                            elements.</p>
                                    </li>
                                    <li><code>body:</code> The target checkboxes are wrapped using a unique id defined in
                                        <code>body</code>. In this example <code>bulk-select-body</code>. Every targeted
                                        checkbox within this wrapper is marked with the data attribute
                                        <code>data-bulk-select-row.</code>You will get the value passed in this attribute as
                                        return value of <code>getSelectedRows </code>method in JS.</li>
                                    <li><code>actions:</code> The target actions are wrapped using a unique id defined in
                                        <code>actions</code>. The element with this id (in <code>example
                                            bulk-select-actions</code>) will be toggled by checking the main checkbox.</li>
                                    <li><code>replacedElement:</code> The target replaced element with action are wrapped
                                        using a unique id defined in <code>replacedElement</code>. Bulk select actions will
                                        be replaced with the content of this element with this id (in example
                                        <code>bulk-select-replace-element</code>)</li>
                                </ul>
                                <h5>Javascript</h5>
                                <ul>
                                    <li><code>getInstance: </code>Static method which allows you to get the
                                        <strong>BulkSelect </strong>instance associated to a DOM element, you can use it
                                        like this: <code>window.phoenix.BulkSelect.getInstance(element)</code></li>
                                    <li><code>getSelectedRows: </code>Get the selected rows data by invoking
                                        <code>getSelectedRows </code>method on the <code>BulkSelect </code>instance<div
                                            class="border border-translucent rounded-2 p-3 bg-primary-subtle"><code>const
                                                bulkSelectEl =
                                                document.getElementById('bulk-select-example');</code><br><code>const
                                                bulkSelectInstance =
                                                window.phoenix.BulkSelect.getInstance(bulkSelectEl);</code></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-flex align-items-center justify-content-end my-3&quot;&gt;
  &lt;div id=&quot;bulk-select-replace-element&quot;&gt;&lt;button class=&quot;btn btn-phoenix-success btn-sm&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;fas fa-plus&quot; data-fa-transform=&quot;shrink-3 down-2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;ms-1&quot;&gt;New&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
  &lt;div class=&quot;d-none ms-3&quot; id=&quot;bulk-select-actions&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;&lt;select class=&quot;form-select form-select-sm&quot; aria-label=&quot;Bulk actions&quot;&gt;
        &lt;option selected=&quot;selected&quot;&gt;Bulk actions&lt;/option&gt;
        &lt;option value=&quot;Delete&quot;&gt;Delete&lt;/option&gt;
        &lt;option value=&quot;Archive&quot;&gt;Archive&lt;/option&gt;
      &lt;/select&gt;&lt;button class=&quot;btn btn-phoenix-danger btn-sm ms-2&quot; type=&quot;button&quot;&gt;Apply&lt;/button&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;tableExample&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}'&gt;
  &lt;div class=&quot;table-responsive mx-n1 px-1&quot;&gt;
    &lt;table class=&quot;table table-sm border-top border-translucent fs-9 mb-0&quot;&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th class=&quot;white-space-nowrap fs-9 align-middle ps-0&quot; style=&quot;max-width:20px; width:18px;&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; id=&quot;bulk-select-example&quot; type=&quot;checkbox&quot; data-bulk-select='{&quot;body&quot;:&quot;bulk-select-body&quot;,&quot;actions&quot;:&quot;bulk-select-actions&quot;,&quot;replacedElement&quot;:&quot;bulk-select-replace-element&quot;}' /&gt;&lt;/div&gt;
          &lt;/th&gt;
          &lt;th class=&quot;sort align-middle ps-3&quot; data-sort=&quot;name&quot;&gt;Name&lt;/th&gt;
          &lt;th class=&quot;sort align-middle&quot; data-sort=&quot;email&quot;&gt;Email&lt;/th&gt;
          &lt;th class=&quot;sort align-middle&quot; data-sort=&quot;age&quot;&gt;Age&lt;/th&gt;
          &lt;th class=&quot;sort text-end align-middle pe-0&quot; scope=&quot;col&quot;&gt;ACTION&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody class=&quot;list&quot; id=&quot;bulk-select-body&quot;&gt;
        &lt;tr&gt;
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Anna&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;anna@example.com&amp;quot;,&amp;quot;age&amp;quot;:18}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Homer&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;homer@example.com&amp;quot;,&amp;quot;age&amp;quot;:35}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Oscar&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;oscar@example.com&amp;quot;,&amp;quot;age&amp;quot;:52}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Emily&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;emily@example.com&amp;quot;,&amp;quot;age&amp;quot;:30}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Jara&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;jara@example.com&amp;quot;,&amp;quot;age&amp;quot;:25}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Clark&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;clark@example.com&amp;quot;,&amp;quot;age&amp;quot;:39}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Jennifer&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;jennifer@example.com&amp;quot;,&amp;quot;age&amp;quot;:52}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Tony&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;tony@example.com&amp;quot;,&amp;quot;age&amp;quot;:30}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Tom&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;tom@example.com&amp;quot;,&amp;quot;age&amp;quot;:25}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Michael&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;michael@example.com&amp;quot;,&amp;quot;age&amp;quot;:39}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Antony&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;antony@example.com&amp;quot;,&amp;quot;age&amp;quot;:39}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Raymond&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;raymond@example.com&amp;quot;,&amp;quot;age&amp;quot;:52}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Marie&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;marie@example.com&amp;quot;,&amp;quot;age&amp;quot;:30}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Cohen&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;cohen@example.com&amp;quot;,&amp;quot;age&amp;quot;:25}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
          &lt;td class=&quot;fs-9 align-middle&quot;&gt;
            &lt;div class=&quot;form-check mb-0 fs-8&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-bulk-select-row=&quot;{&amp;quot;name&amp;quot;:&amp;quot;Rowen&amp;quot;,&amp;quot;email&amp;quot;:&amp;quot;rowen@example.com&amp;quot;,&amp;quot;age&amp;quot;:39}&quot; /&gt;&lt;/div&gt;
          &lt;/td&gt;
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
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex flex-between-center pt-3 mb-3&quot;&gt;
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
  &lt;p class=&quot;mb-2&quot;&gt;Click the button to get selected rows&lt;/p&gt;&lt;button class=&quot;btn btn-warning&quot; data-selected-rows=&quot;data-selected-rows&quot;&gt;Get Selected Rows&lt;/button&gt;&lt;pre id=&quot;selectedRows&quot;&gt;&lt;/pre&gt;
&lt;/div&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <div class="d-flex align-items-center justify-content-end my-3">
                                    <div id="bulk-select-replace-element"><button class="btn btn-phoenix-success btn-sm"
                                            type="button"><span class="fas fa-plus"
                                                data-fa-transform="shrink-3 down-2"></span><span
                                                class="ms-1">New</span></button></div>
                                    <div class="d-none ms-3" id="bulk-select-actions">
                                        <div class="d-flex"><select class="form-select form-select-sm"
                                                aria-label="Bulk actions">
                                                <option selected="selected">Bulk actions</option>
                                                <option value="Delete">Delete</option>
                                                <option value="Archive">Archive</option>
                                            </select><button class="btn btn-phoenix-danger btn-sm ms-2"
                                                type="button">Apply</button></div>
                                    </div>
                                </div>
                                <div id="tableExample"
                                    data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                    <div class="table-responsive mx-n1 px-1">
                                        <table class="table table-sm border-top border-translucent fs-9 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="white-space-nowrap fs-9 align-middle ps-0"
                                                        style="max-width:20px; width:18px;">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                id="bulk-select-example" type="checkbox"
                                                                data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}'>
                                                        </div>
                                                    </th>
                                                    <th class="sort align-middle ps-3" data-sort="name">Name</th>
                                                    <th class="sort align-middle" data-sort="email">Email</th>
                                                    <th class="sort align-middle" data-sort="age">Age</th>
                                                    <th class="sort text-end align-middle pe-0" scope="col">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="bulk-select-body">
                                                <tr>
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Anna&quot;,&quot;email&quot;:&quot;anna@example.com&quot;,&quot;age&quot;:18}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Homer&quot;,&quot;email&quot;:&quot;homer@example.com&quot;,&quot;age&quot;:35}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Oscar&quot;,&quot;email&quot;:&quot;oscar@example.com&quot;,&quot;age&quot;:52}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Emily&quot;,&quot;email&quot;:&quot;emily@example.com&quot;,&quot;age&quot;:30}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Jara&quot;,&quot;email&quot;:&quot;jara@example.com&quot;,&quot;age&quot;:25}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Clark&quot;,&quot;email&quot;:&quot;clark@example.com&quot;,&quot;age&quot;:39}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Jennifer&quot;,&quot;email&quot;:&quot;jennifer@example.com&quot;,&quot;age&quot;:52}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Tony&quot;,&quot;email&quot;:&quot;tony@example.com&quot;,&quot;age&quot;:30}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Tom&quot;,&quot;email&quot;:&quot;tom@example.com&quot;,&quot;age&quot;:25}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Michael&quot;,&quot;email&quot;:&quot;michael@example.com&quot;,&quot;age&quot;:39}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Antony&quot;,&quot;email&quot;:&quot;antony@example.com&quot;,&quot;age&quot;:39}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Raymond&quot;,&quot;email&quot;:&quot;raymond@example.com&quot;,&quot;age&quot;:52}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Marie&quot;,&quot;email&quot;:&quot;marie@example.com&quot;,&quot;age&quot;:30}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Cohen&quot;,&quot;email&quot;:&quot;cohen@example.com&quot;,&quot;age&quot;:25}">
                                                        </div>
                                                    </td>
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
                                                    <td class="fs-9 align-middle">
                                                        <div class="form-check mb-0 fs-8"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select-row="{&quot;name&quot;:&quot;Rowen&quot;,&quot;email&quot;:&quot;rowen@example.com&quot;,&quot;age&quot;:39}">
                                                        </div>
                                                    </td>
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
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex flex-between-center pt-3 mb-3">
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
                                    <p class="mb-2">Click the button to get selected rows</p><button
                                        class="btn btn-warning" data-selected-rows="data-selected-rows">Get Selected
                                        Rows</button>
                                    <pre id="selectedRows"></pre>
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
                        <li class="nav-item"> <a class="nav-link" href="#docs">Docs</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#example">Example</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
