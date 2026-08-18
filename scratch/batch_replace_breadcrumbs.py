import os
import re

temp_dir = r"c:\laragon\www\phoneix-template\resources\views\temp"
updated_files = []

# Regex to match <nav ... aria-label="breadcrumb" ...> ... </nav>
nav_regex = re.compile(r'<nav\b([^>]*)aria-label="breadcrumb"([^>]*)>[\s\S]*?</nav>', re.IGNORECASE)

for root, dirs, files in os.walk(temp_dir):
    for file in files:
        if not file.endswith('.blade.php'):
            continue
            
        full_path = os.path.join(root, file)
        
        # Skip documentation component showcase page
        if 'modules\\components\\breadcrumb.blade.php' in full_path or 'modules/components/breadcrumb.blade.php' in full_path:
            continue

        with open(full_path, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()

        matches = list(nav_regex.finditer(content))
        if not matches:
            continue

        new_content = content
        for match in matches:
            nav_attrs = match.group(1) + match.group(2)
            
            # Check class attribute
            class_match = re.search(r'class=["\']([^"\']+)["\']', nav_attrs)
            class_val = class_match.group(1).strip() if class_match else 'mb-3'
            
            if class_val and class_val != 'mb-3':
                replacement = f"@include('layouts.partials.breadcrumb', ['class' => '{class_val}'])"
            else:
                replacement = "@include('layouts.partials.breadcrumb')"

            new_content = new_content.replace(match.group(0), replacement)

        if new_content != content:
            with open(full_path, 'w', encoding='utf-8') as f:
                f.write(new_content)
            rel_path = os.path.relpath(full_path, temp_dir)
            updated_files.append(rel_path)

print(f"Successfully updated {len(updated_files)} files:")
for path in updated_files:
    print(f" - {path}")
