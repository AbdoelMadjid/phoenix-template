<?php

return [
    "label" => "Documentation",
    "items" => [
        [
            "name" => "Developer Guide",
            "icon" => "book-open",
            "icon_type" => "feather",
            "url" => "documentation/developer-guide"
        ],
        [
            "name" => "Getting started",
            "icon" => "life-buoy",
            "icon_type" => "feather",
            "url" => "documentation/getting-started"
        ],
        [
            "name" => "Customization",
            "id" => "nv-customization",
            "icon" => "settings",
            "icon_type" => "feather",
            "path" => "documentation/customization*",
            "children" => [
                [
                    "name" => "Configuration",
                    "url" => "documentation/customization/configuration"
                ],
                [
                    "name" => "Styling",
                    "url" => "documentation/customization/styling"
                ],
                [
                    "name" => "Color",
                    "url" => "documentation/customization/color"
                ],
                [
                    "name" => "Dark mode",
                    "url" => "documentation/customization/dark-mode"
                ],
                [
                    "name" => "Plugin",
                    "url" => "documentation/customization/plugin"
                ]
            ]
        ],
        [
            "name" => "Layouts doc",
            "id" => "nv-layouts-doc",
            "icon" => "table",
            "icon_type" => "feather",
            "path" => "documentation/layouts*",
            "children" => [
                [
                    "name" => "Vertical navbar",
                    "url" => "documentation/layouts/vertical-navbar"
                ],
                [
                    "name" => "Horizontal navbar",
                    "url" => "documentation/layouts/horizontal-navbar"
                ],
                [
                    "name" => "Combo navbar",
                    "url" => "documentation/layouts/combo-navbar"
                ],
                [
                    "name" => "Dual nav",
                    "url" => "documentation/layouts/dual-nav"
                ]
            ]
        ],
        [
            "name" => "Gulp",
            "icon" => "fa-brands fa-gulp ms-1 me-1 fa-lg",
            "icon_type" => "font-awesome",
            "url" => "documentation/gulp"
        ],
        [
            "name" => "Design file",
            "icon" => "figma",
            "icon_type" => "feather",
            "url" => "documentation/design-file"
        ],
        [
            "name" => "Changelog",
            "icon" => "git-merge",
            "icon_type" => "feather",
            "url" => "documentation/changelog"
        ],
        [
            "name" => "Showcase",
            "icon" => "monitor",
            "icon_type" => "feather",
            "url" => "documentation/showcase"
        ]
    ]
];
