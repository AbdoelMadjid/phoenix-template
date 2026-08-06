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
