# Workspace Rules & Guidelines

### Phoenix Template Modification Rules
- **No Inline Scripts or Styles in Blade Views**: Never add new `<style>` or `<script>` tags inside `.blade.php` view files for UI styling or event behavior.
- **Modify Existing Assets Directly**: Always implement or fix UI styles and event handlers by directly editing the existing built-in Phoenix asset files:
  - JavaScript events: `public/assets/js/phoenix.js`
  - CSS styles & theme overrides: `public/assets/css/theme.min.css` or `public/assets/css/user.min.css`
- **Asset Load Order Hierarchies**: Always preserve the exact loading order from original HTML template files:
  - Vendor CSS stylesheets MUST be loaded BEFORE `theme.min.css` (via `@stack('styles')` placed before `theme.min.css` in `layouts/vertical.blade.php`) so theme CSS overrides take precedence natively.
  - Vendor JS scripts MUST be loaded BEFORE `phoenix.js` (via `@push('scripts')`) so Phoenix initialization functions (`phoenix.js`) execute cleanly.
- **Preserve Pure HTML Attributes & Elements**: Never alter original HTML attributes (`data-*`), layout structures, or CSS class names in Blade views to patch UI issues. Always resolve issues by ensuring complete vendor script/style references are included.

### 4-Step Page Refactoring Workflow (SOP)
When converting or fixing an original static HTML template page into a Blade view:
1. **Inspect Original HTML Structure**: Check the exact attributes and class names on `<div class="content ...">` from the original HTML file (e.g. `pt-0` or `px-0 pt-navbar`) and pass them natively via `@section('content_class', '...')`.
2. **Include Page-Specific Vendor CSS & JS**: Check page-specific `<link>` and `<script>` references in the original HTML. Include missing vendor assets via `@push('styles')` and `@push('scripts')`.
3. **Copy Pure Content & Page-Specific Modals**: Copy HTML inside `<div class="content">`. Retain modals unique to that page while removing global duplicates already present in the master layout (`searchBoxModal`, `supportChatContainer`, `settingsOffcanvas`).
4. **Strict `<div>` Tag Balance**: Ensure exact `<div>` depth balance (depth = 0) so `<div class="content">` never closes prematurely, keeping footer and sidebar positioning 100% intact.

