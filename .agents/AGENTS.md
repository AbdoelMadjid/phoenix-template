# Workspace Rules & Guidelines

### Phoenix Template Modification Rules
- **No Inline Scripts or Styles in Blade Views**: Never add new `<style>` or `<script>` tags inside `.blade.php` view files for UI styling or event behavior.
- **Modify Existing Assets Directly**: Always implement or fix UI styles and event handlers by directly editing the existing built-in Phoenix asset files:
  - JavaScript events: `public/assets/js/phoenix.js`
  - CSS styles & theme overrides: `public/assets/css/theme.min.css` or `public/assets/css/user.min.css`
