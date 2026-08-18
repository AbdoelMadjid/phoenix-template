@extends('layouts.vertical')

@section('title', 'Chat Widget')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Chat widget</h2>
    <p class="text-body-tertiary lead mb-2">A support chat widget built with CSS and JavaScript</p>
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9"><button class="btn btn-outline-primary btn-support-chat">Toggle chat widget</button>
                    <div class="card shadow-none border mb-4 mt-5" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Structure</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="structure-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;pre class=&quot;scrollbar my-5&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html&amp;gt;

  &amp;lt;head&amp;gt;...&amp;lt;/head&amp;gt;

  &amp;lt;body&amp;gt;
    &amp;lt;main&amp;gt;
      &amp;lt;div class=&amp;quot;container-fluid&amp;quot;&amp;gt;
        &amp;lt;!-- navbar content goes here--&amp;gt;
        &amp;lt;div class=&amp;quot;content&amp;quot;&amp;gt;
          &amp;lt;!-- content goes here--&amp;gt;
        &amp;lt;/div&amp;gt;
      &amp;lt;/div&amp;gt;
      &amp;lt;div class=&amp;quot;support-chat-container&amp;quot;&amp;gt;
        &amp;lt;!-- chat widget content gose here--&amp;gt;
      &amp;lt;/div&amp;gt;
    &amp;lt;/main&amp;gt;
  &amp;lt;/body&amp;gt;

&amp;lt;/html&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <pre class="scrollbar my-5"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;

  &lt;head&gt;...&lt;/head&gt;

  &lt;body&gt;
    &lt;main&gt;
      &lt;div class=&quot;container-fluid&quot;&gt;
        &lt;!-- navbar content goes here--&gt;
        &lt;div class=&quot;content&quot;&gt;
          &lt;!-- content goes here--&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;support-chat-container&quot;&gt;
        &lt;!-- chat widget content gose here--&gt;
      &lt;/div&gt;
    &lt;/main&gt;
  &lt;/body&gt;

&lt;/html&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Appearance</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="appearance-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;You can control the chat widget appearance by clicking the toggle button on the settings panel.&lt;/p&gt;
&lt;h5 class=&quot;mb-3&quot;&gt;Gulp based workflow&lt;/h5&gt;
&lt;p class=&quot;mb-2&quot;&gt;To hide the chat widget, open &lt;code&gt;src/js/config.js &lt;/code&gt;in your project directory and set &lt;code&gt;phoenixSupportChat: false &lt;/code&gt;of &lt;code&gt;initialConfig &lt;/code&gt;object.&lt;/p&gt;&lt;pre class=&quot;scrollbar mb-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const initialConfig = {
  phoenixSupportChat: true || false,
  ...
};&lt;/code&gt;&lt;/pre&gt;
&lt;h5 class=&quot;mb-3&quot;&gt;Without gulp based workflow&lt;/h5&gt;
&lt;p class=&quot;mb-2&quot;&gt;To hide the chat widget, open &lt;code&gt;public/assets/js/config.js &lt;/code&gt;in your project directory and set &lt;code&gt;phoenixSupportChat: false &lt;/code&gt;of &lt;code&gt;initialConfig &lt;/code&gt;object.&lt;/p&gt;&lt;pre class=&quot;scrollbar mb-5&quot;&gt;&lt;code class=&quot;lang-html&quot;&gt;const initialConfig = {
  phoenixSupportChat: true || false,
  ...
};
&lt;/code&gt;&lt;/pre&gt;
&lt;p&gt;At the bottom right corner, you will find the widget button. By clicking the button, the &lt;code&gt;.show-chat &lt;/code&gt;class will toggle and the chat will be shown or hidden.&lt;/p&gt;&lt;pre class=&quot;scrollbar mt-3&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;div class=&amp;quot;container-fluid support-chat show-chat&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <p>You can control the chat widget appearance by clicking the toggle button on the settings
                                    panel.</p>
                                <h5 class="mb-3">Gulp based workflow</h5>
                                <p class="mb-2">To hide the chat widget, open <code>src/js/config.js </code>in your
                                    project directory and set <code>phoenixSupportChat: false </code>of <code>initialConfig
                                    </code>object.</p>
                                <pre class="scrollbar mb-5"><code class="lang-html">const initialConfig = {
  phoenixSupportChat: true || false,
  ...
};</code></pre>
                                <h5 class="mb-3">Without gulp based workflow</h5>
                                <p class="mb-2">To hide the chat widget, open <code>public/assets/js/config.js </code>in
                                    your project directory and set <code>phoenixSupportChat: false </code>of
                                    <code>initialConfig </code>object.</p>
                                <pre class="scrollbar mb-5"><code class="lang-html">const initialConfig = {
  phoenixSupportChat: true || false,
  ...
};
</code></pre>
                                <p>At the bottom right corner, you will find the widget button. By clicking the button, the
                                    <code>.show-chat </code>class will toggle and the chat will be shown or hidden.</p>
                                <pre class="scrollbar mt-3"><code class="language-html">&lt;div class=&quot;container-fluid support-chat show-chat&quot;&gt;&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none border my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom bg-body">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-body mb-0" data-anchor="data-anchor">Position</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="collapse code-collapse" id="position-code">
                                <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p&gt;Initially, the chat widget will appear at the bottom right corner, you can add &lt;code&gt;.support-chat-start &lt;/code&gt;class to take it to the bottom left corner.&lt;/p&gt;&lt;pre class=&quot;scrollbar mt-3&quot;&gt;&lt;code class=&quot;language-html&quot;&gt;&amp;lt;div class=&amp;quot;support-chat-container support-chat-start&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;&lt;/code&gt;&lt;/pre&gt;</code></pre>
                            </div>
                            <div class="p-4 code-to-copy">
                                <p>Initially, the chat widget will appear at the bottom right corner, you can add
                                    <code>.support-chat-start </code>class to take it to the bottom left corner.</p>
                                <pre class="scrollbar mt-3"><code class="language-html">&lt;div class=&quot;support-chat-container support-chat-start&quot;&gt;&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-2">
                <div class="position-sticky mt-xl-4" style="top: 80px;">
                    <h5 class="lh-1">On this page </h5>
                    <hr>
                    <ul class="nav nav-vertical flex-column doc-nav" data-doc-nav="">
                        <li class="nav-item"> <a class="nav-link" href="#structure">Structure</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#appearance">Appearance</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#position">Position</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="support-chat-container">
        <div class="container-fluid support-chat">
            <div class="card bg-body-emphasis">
                <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
                    <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                            class="fa-solid fa-circle text-success fs-11"></span></h5>
                    <div class="btn-reveal-trigger"><button
                            class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex"
                            type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window"
                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h text-body"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                                class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item"
                                href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show
                                history</a><a class="dropdown-item" href="#!">Report to Admin</a><a
                                class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
                    </div>
                </div>
                <div class="card-body chat p-0">
                    <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                        <div class="text-end mt-6"><a
                                class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">I need help with something</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a><a
                                class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a><a
                                class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a><a
                                class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a></div>
                        <div class="text-center mt-auto">
                            <div class="avatar avatar-3xl status-online"><img
                                    class="rounded-circle border border-3 border-light-subtle"
                                    src="{{ asset('assets/img/team/30.webp') }}" alt=""></div>
                            <h5 class="mt-2 mb-3">Eric</h5>
                            <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or
                                by email within 24 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
                    <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input
                            class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text"
                            placeholder="Write message"><label
                            class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                            for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none"
                            type="file" accept="image/*" id="supportChatPhotos"><label
                            class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                            for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input
                            class="d-none" type="file" id="supportChatAttachment"></div><button
                        class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
                </div>
            </div>
        </div>
        <button class="btn btn-support-chat p-0 border border-translucent"><span
                class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span
                class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span
                    class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span
                class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span
                class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
