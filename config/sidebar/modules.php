<?php

return [
    "label" => "Modules",
    "items" => [
        [
            "name" => "Forms",
            "id" => "nv-forms",
            "icon" => "file-text",
            "icon_type" => "feather",
            "path" => "modules/forms*",
            "children" => [
                [
                    "name" => "Basic",
                    "id" => "nv-basic",
                    "path" => "modules/forms/basic*",
                    "children" => [
                        [
                            "name" => "Form control",
                            "url" => "modules/forms/basic/form-control"
                        ],
                        [
                            "name" => "Input group",
                            "url" => "modules/forms/basic/input-group"
                        ],
                        [
                            "name" => "Select",
                            "url" => "modules/forms/basic/select"
                        ],
                        [
                            "name" => "Checks",
                            "url" => "modules/forms/basic/checks"
                        ],
                        [
                            "name" => "Range",
                            "url" => "modules/forms/basic/range"
                        ],
                        [
                            "name" => "Floating labels",
                            "url" => "modules/forms/basic/floating-labels"
                        ],
                        [
                            "name" => "Layout",
                            "url" => "modules/forms/basic/layout"
                        ]
                    ]
                ],
                [
                    "name" => "Advance",
                    "id" => "nv-advance",
                    "path" => "modules/forms/advance*",
                    "children" => [
                        [
                            "name" => "Advance select",
                            "url" => "modules/forms/advance/advance-select"
                        ],
                        [
                            "name" => "Date picker",
                            "url" => "modules/forms/advance/date-picker"
                        ],
                        [
                            "name" => "Editor",
                            "url" => "modules/forms/advance/editor"
                        ],
                        [
                            "name" => "File uploader",
                            "url" => "modules/forms/advance/file-uploader"
                        ],
                        [
                            "name" => "Range",
                            "url" => "modules/forms/advance/range"
                        ],
                        [
                            "name" => "Rating",
                            "url" => "modules/forms/advance/rating"
                        ],
                        [
                            "name" => "Emoji button",
                            "url" => "modules/forms/advance/emoji-button"
                        ]
                    ]
                ],
                [
                    "name" => "Validation",
                    "url" => "modules/forms/validation"
                ],
                [
                    "name" => "Wizard",
                    "url" => "modules/forms/wizard"
                ]
            ]
        ],
        [
            "name" => "Icons",
            "id" => "nv-icons",
            "icon" => "grid",
            "icon_type" => "feather",
            "path" => "modules/icons*",
            "children" => [
                [
                    "name" => "Feather",
                    "url" => "modules/icons/feather"
                ],
                [
                    "name" => "Font awesome",
                    "url" => "modules/icons/font-awesome"
                ],
                [
                    "name" => "Unicons",
                    "url" => "modules/icons/unicons"
                ]
            ]
        ],
        [
            "name" => "Tables",
            "id" => "nv-tables",
            "icon" => "columns",
            "icon_type" => "feather",
            "path" => "modules/tables*",
            "children" => [
                [
                    "name" => "Basic tables",
                    "url" => "modules/tables/basic-tables"
                ],
                [
                    "name" => "Advance tables",
                    "url" => "modules/tables/advance-tables"
                ],
                [
                    "name" => "Bulk Select",
                    "url" => "modules/tables/bulk-select"
                ]
            ]
        ],
        [
            "name" => "ECharts",
            "id" => "nv-ECharts",
            "icon" => "bar-chart-2",
            "icon_type" => "feather",
            "path" => "modules/echarts*",
            "children" => [
                [
                    "name" => "Line charts",
                    "url" => "modules/echarts/line-charts"
                ],
                [
                    "name" => "Bar charts",
                    "url" => "modules/echarts/bar-charts"
                ],
                [
                    "name" => "Candlestick charts",
                    "url" => "modules/echarts/candlestick-charts"
                ],
                [
                    "name" => "Geo map",
                    "url" => "modules/echarts/geo-map"
                ],
                [
                    "name" => "Scatter charts",
                    "url" => "modules/echarts/scatter-charts"
                ],
                [
                    "name" => "Pie charts",
                    "url" => "modules/echarts/pie-charts"
                ],
                [
                    "name" => "Gauge chart",
                    "url" => "modules/echarts/gauge-chart"
                ],
                [
                    "name" => "Radar charts",
                    "url" => "modules/echarts/radar-charts"
                ],
                [
                    "name" => "Heatmap charts",
                    "url" => "modules/echarts/heatmap-charts"
                ],
                [
                    "name" => "How to use",
                    "url" => "modules/echarts/how-to-use"
                ]
            ]
        ],
        [
            "name" => "Components",
            "id" => "nv-components",
            "icon" => "package",
            "icon_type" => "feather",
            "path" => "modules/components*",
            "indicator" => [
                "class" => "fa-solid fa-circle text-info ms-1 new-page-indicator",
                "style" => "font-size: 6px"
            ],
            "children" => [
                [
                    "name" => "Accordion",
                    "url" => "modules/components/accordion"
                ],
                [
                    "name" => "Avatar",
                    "url" => "modules/components/avatar"
                ],
                [
                    "name" => "Alerts",
                    "url" => "modules/components/alerts"
                ],
                [
                    "name" => "Badge",
                    "url" => "modules/components/badge"
                ],
                [
                    "name" => "Breadcrumb",
                    "url" => "modules/components/breadcrumb"
                ],
                [
                    "name" => "Buttons",
                    "url" => "modules/components/button"
                ],
                [
                    "name" => "Calendar",
                    "url" => "modules/components/calendar"
                ],
                [
                    "name" => "Card",
                    "url" => "modules/components/card"
                ],
                [
                    "name" => "Carousel",
                    "id" => "nv-carousel",
                    "path" => "modules/components/carousel*",
                    "children" => [
                        [
                            "name" => "Bootstrap",
                            "url" => "modules/components/carousel/bootstrap"
                        ],
                        [
                            "name" => "Swiper",
                            "url" => "modules/components/carousel/swiper"
                        ]
                    ]
                ],
                [
                    "name" => "Collapse",
                    "url" => "modules/components/collapse"
                ],
                [
                    "name" => "Dropdown",
                    "url" => "modules/components/dropdown"
                ],
                [
                    "name" => "Dhtmlx gantt",
                    "url" => "modules/components/dhtmlx-gantt",
                    "badge" => [
                        "text" => "new",
                        "class" => "badge ms-2 badge badge-phoenix badge-phoenix-warning"
                    ]
                ],
                [
                    "name" => "List group",
                    "url" => "modules/components/list-group"
                ],
                [
                    "name" => "Modals",
                    "url" => "modules/components/modal"
                ],
                [
                    "name" => "Navs & Tabs",
                    "id" => "nv-navs-_and_-Tabs",
                    "path" => "modules/components/navs-and-tabs*",
                    "children" => [
                        [
                            "name" => "Navs",
                            "url" => "modules/components/navs-and-tabs/navs"
                        ],
                        [
                            "name" => "Navbar",
                            "url" => "modules/components/navs-and-tabs/navbar"
                        ],
                        [
                            "name" => "Tabs",
                            "url" => "modules/components/navs-and-tabs/tabs"
                        ]
                    ]
                ],
                [
                    "name" => "Offcanvas",
                    "url" => "modules/components/offcanvas"
                ],
                [
                    "name" => "Progress bar",
                    "url" => "modules/components/progress-bar"
                ],
                [
                    "name" => "Placeholder",
                    "url" => "modules/components/placeholder"
                ],
                [
                    "name" => "Pagination",
                    "url" => "modules/components/pagination"
                ],
                [
                    "name" => "Popovers",
                    "url" => "modules/components/popovers"
                ],
                [
                    "name" => "Scrollspy",
                    "url" => "modules/components/scrollspy"
                ],
                [
                    "name" => "Sortable",
                    "url" => "modules/components/sortable"
                ],
                [
                    "name" => "Spinners",
                    "url" => "modules/components/spinners"
                ],
                [
                    "name" => "Toast",
                    "url" => "modules/components/toast"
                ],
                [
                    "name" => "Tooltips",
                    "url" => "modules/components/tooltips"
                ],
                [
                    "name" => "Typed text",
                    "url" => "modules/components/typed-text"
                ],
                [
                    "name" => "Chat widget",
                    "url" => "modules/components/chat-widget"
                ]
            ]
        ],
        [
            "name" => "Utilities",
            "id" => "nv-utilities",
            "icon" => "tool",
            "icon_type" => "feather",
            "path" => "modules/utilities*",
            "children" => [
                [
                    "name" => "Background",
                    "url" => "modules/utilities/background"
                ],
                [
                    "name" => "Borders",
                    "url" => "modules/utilities/borders"
                ],
                [
                    "name" => "Colors",
                    "url" => "modules/utilities/colors"
                ],
                [
                    "name" => "Display",
                    "url" => "modules/utilities/display"
                ],
                [
                    "name" => "Flex",
                    "url" => "modules/utilities/flex"
                ],
                [
                    "name" => "Stacks",
                    "url" => "modules/utilities/stacks"
                ],
                [
                    "name" => "Float",
                    "url" => "modules/utilities/float"
                ],
                [
                    "name" => "Grid",
                    "url" => "modules/utilities/grid"
                ],
                [
                    "name" => "Interactions",
                    "url" => "modules/utilities/interactions"
                ],
                [
                    "name" => "Opacity",
                    "url" => "modules/utilities/opacity"
                ],
                [
                    "name" => "Overflow",
                    "url" => "modules/utilities/overflow"
                ],
                [
                    "name" => "Position",
                    "url" => "modules/utilities/position"
                ],
                [
                    "name" => "Shadows",
                    "url" => "modules/utilities/shadows"
                ],
                [
                    "name" => "Sizing",
                    "url" => "modules/utilities/sizing"
                ],
                [
                    "name" => "Spacing",
                    "url" => "modules/utilities/spacing"
                ],
                [
                    "name" => "Typography",
                    "url" => "modules/utilities/typography"
                ],
                [
                    "name" => "Vertical align",
                    "url" => "modules/utilities/vertical-align"
                ],
                [
                    "name" => "Visibility",
                    "url" => "modules/utilities/visibility"
                ]
            ]
        ],
        [
            "name" => "Widgets",
            "icon" => "server",
            "icon_type" => "feather",
            "url" => "modules/widgets"
        ],
        [
            "name" => "Multi level",
            "id" => "nv-multi-level",
            "icon" => "layers",
            "icon_type" => "feather",
            "children" => [
                [
                    "name" => "Level two",
                    "id" => "nv-level-two",
                    "children" => [
                        [
                            "name" => "Item 1",
                            "url" => "#!.html"
                        ],
                        [
                            "name" => "Item 2",
                            "url" => "#!.html"
                        ]
                    ]
                ],
                [
                    "name" => "Level three",
                    "id" => "nv-level-three",
                    "children" => [
                        [
                            "name" => "Item 3",
                            "url" => "#!.html"
                        ],
                        [
                            "name" => "Item 4",
                            "id" => "nv-item-4",
                            "children" => [
                                [
                                    "name" => "Item 5",
                                    "url" => "#!.html"
                                ],
                                [
                                    "name" => "Item 6",
                                    "url" => "#!.html"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "name" => "Level four",
                    "id" => "nv-level-four",
                    "children" => [
                        [
                            "name" => "Item 6",
                            "url" => "#!.html"
                        ],
                        [
                            "name" => "Item 7",
                            "id" => "nv-item-7",
                            "children" => [
                                [
                                    "name" => "Item 8",
                                    "url" => "#!.html"
                                ],
                                [
                                    "name" => "Item 9",
                                    "id" => "nv-item-9",
                                    "children" => [
                                        [
                                            "name" => "Item 10",
                                            "url" => "#!.html"
                                        ],
                                        [
                                            "name" => "Item 11",
                                            "url" => "#!.html"
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
