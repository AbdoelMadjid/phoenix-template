<?php

return [
    "label" => "Apps",
    "items" => [
        [
            "name" => "Home",
            "id" => "nv-home",
            "icon" => "pie-chart",
            "icon_type" => "feather",
            "path" => "apps/home*",
            "children" => [
                [
                    "name" => "E-commerce",
                    "url" => "apps/home/e-commerce"
                ],
                [
                    "name" => "Project management",
                    "url" => "apps/home/project-management"
                ],
                [
                    "name" => "CRM",
                    "url" => "apps/home/crm"
                ],
                [
                    "name" => "Travel agency",
                    "url" => "apps/home/travel-agency"
                ],
                [
                    "name" => "Stock",
                    "url" => "apps/home/stock",
                    "badge" => [
                        "text" => "new",
                        "class" => "badge ms-2 badge badge-phoenix badge-phoenix-warning"
                    ]
                ],
                [
                    "name" => "Social feed",
                    "url" => "apps/home/social-feed"
                ]
            ]
        ],
        [
            "name" => "E commerce",
            "id" => "nv-e-commerce",
            "icon" => "shopping-cart",
            "icon_type" => "feather",
            "path" => "apps/e-commerce*",
            "children" => [
                [
                    "name" => "Admin",
                    "id" => "nv-admin",
                    "path" => "apps/e-commerce/admin*",
                    "children" => [
                        [
                            "name" => "Add product",
                            "url" => "apps/e-commerce/admin/add-product"
                        ],
                        [
                            "name" => "Products",
                            "url" => "apps/e-commerce/admin/products"
                        ],
                        [
                            "name" => "Customers",
                            "url" => "apps/e-commerce/admin/customers"
                        ],
                        [
                            "name" => "Customer details",
                            "url" => "apps/e-commerce/admin/customer-details"
                        ],
                        [
                            "name" => "Orders",
                            "url" => "apps/e-commerce/admin/orders"
                        ],
                        [
                            "name" => "Order details",
                            "url" => "apps/e-commerce/admin/order-details"
                        ],
                        [
                            "name" => "Refund",
                            "url" => "apps/e-commerce/admin/refund"
                        ]
                    ]
                ],
                [
                    "name" => "Homepage",
                    "url" => "apps/e-commerce/homepage",
                    "target" => "_blank"
                ],
            ]
        ],
        [
            "name" => "CRM",
            "id" => "nv-CRM",
            "icon" => "phone",
            "icon_type" => "feather",
            "path" => "apps/crm*",
            "children" => [
                [
                    "name" => "Analytics",
                    "url" => "apps/crm/analytics"
                ],
                [
                    "name" => "Deals",
                    "url" => "apps/crm/deals"
                ],
                [
                    "name" => "Deal details",
                    "url" => "apps/crm/deal-details"
                ],
                [
                    "name" => "Leads",
                    "url" => "apps/crm/leads"
                ],
                [
                    "name" => "Lead details",
                    "url" => "apps/crm/lead-details"
                ],
                [
                    "name" => "Reports",
                    "url" => "apps/crm/reports"
                ],
                [
                    "name" => "Report details",
                    "url" => "apps/crm/report-details"
                ],
                [
                    "name" => "Add contact",
                    "url" => "apps/crm/add-contact"
                ]
            ]
        ],
        [
            "name" => "Project management",
            "id" => "nv-project-management",
            "icon" => "clipboard",
            "icon_type" => "feather",
            "path" => "apps/project-management*",
            "children" => [
                [
                    "name" => "Create new",
                    "url" => "apps/project-management/create-new"
                ],
                [
                    "name" => "Project list view",
                    "url" => "apps/project-management/project-list-view"
                ],
                [
                    "name" => "Project card view",
                    "url" => "apps/project-management/project-card-view"
                ],
                [
                    "name" => "Project board view",
                    "url" => "apps/project-management/project-board-view"
                ],
                [
                    "name" => "Todo list",
                    "url" => "apps/project-management/todo-list"
                ],
                [
                    "name" => "Project details",
                    "url" => "apps/project-management/project-details"
                ]
            ]
        ],
        [
            "name" => "Travel agency",
            "id" => "nv-travel-agency",
            "icon" => "briefcase",
            "icon_type" => "feather",
            "path" => "apps/travel-agency*",
            "children" => [
                [
                    "name" => "Landing",
                    "url" => "apps/travel-agency/landing",
                    "target" => "_blank"
                ],
                [
                    "name" => "Admin",
                    "id" => "nv-hotel-admin",
                    "path" => "apps/travel-agency/admin*",
                    "children" => [
                        [
                            "name" => "Add property",
                            "url" => "apps/travel-agency/admin/add-property"
                        ],
                        [
                            "name" => "Add room",
                            "url" => "apps/travel-agency/admin/add-room"
                        ],
                        [
                            "name" => "Room listing",
                            "url" => "apps/travel-agency/admin/room-listing"
                        ],
                        [
                            "name" => "Search room",
                            "url" => "apps/travel-agency/admin/room-search"
                        ]
                    ]
                ],
            ]
        ],
        [
            "name" => "Stock",
            "id" => "nv-stock",
            "icon" => "dollar-sign",
            "icon_type" => "feather",
            "path" => "apps/stock*",
            "badge" => [
                "text" => "new",
                "class" => "badge ms-2 badge badge-phoenix badge-phoenix-warning nav-link-badge"
            ],
            "children" => [
                [
                    "name" => "Stock details",
                    "url" => "apps/stock/stock-details"
                ],
                [
                    "name" => "Portfolio",
                    "url" => "apps/stock/portfolio"
                ],
                [
                    "name" => "Watchlist",
                    "url" => "apps/stock/watchlist"
                ]
            ]
        ],
        [
            "name" => "Chat",
            "icon" => "message-square",
            "icon_type" => "feather",
            "url" => "apps/chat"
        ],
        [
            "name" => "Email",
            "id" => "nv-email",
            "icon" => "mail",
            "icon_type" => "feather",
            "path" => "apps/email*",
            "children" => [
                [
                    "name" => "Inbox",
                    "url" => "apps/email/inbox"
                ],
                [
                    "name" => "Email detail",
                    "url" => "apps/email/email-detail"
                ],
                [
                    "name" => "Compose",
                    "url" => "apps/email/compose"
                ]
            ]
        ],
        [
            "name" => "Events",
            "id" => "nv-events",
            "icon" => "bookmark",
            "icon_type" => "feather",
            "path" => "apps/events*",
            "children" => [
                [
                    "name" => "Create an event",
                    "url" => "apps/events/create-an-event"
                ],
                [
                    "name" => "Event detail",
                    "url" => "apps/events/event-detail"
                ]
            ]
        ],
        [
            "name" => "Kanban",
            "id" => "nv-kanban",
            "icon" => "trello",
            "icon_type" => "feather",
            "path" => "apps/kanban*",
            "children" => [
                [
                    "name" => "Kanban",
                    "url" => "apps/kanban/kanban"
                ],
                [
                    "name" => "Boards",
                    "url" => "apps/kanban/boards"
                ],
                [
                    "name" => "Create board",
                    "url" => "apps/kanban/create-kanban-board"
                ]
            ]
        ],
        [
            "name" => "Gantt chart",
            "icon" => "fa-solid fa-chart-gantt ",
            "icon_type" => "font-awesome",
            "url" => "apps/gantt-chart",
            "badge" => [
                "text" => "new",
                "class" => "badge ms-2 badge badge-phoenix badge-phoenix-warning nav-link-badge"
            ]
        ],
        [
            "name" => "Social",
            "id" => "nv-social",
            "icon" => "share-2",
            "icon_type" => "feather",
            "path" => "apps/social*",
            "children" => [
                [
                    "name" => "Profile",
                    "url" => "apps/social/profile"
                ],
                [
                    "name" => "Settings",
                    "url" => "apps/social/settings"
                ]
            ]
        ],
        [
            "name" => "Gallery",
            "id" => "nv-gallery",
            "icon" => "image",
            "icon_type" => "feather",
            "path" => "apps/gallery*",
            "children" => [
                [
                    "name" => "Album",
                    "url" => "apps/gallery/album"
                ],
                [
                    "name" => "Gallery column",
                    "url" => "apps/gallery/gallery-column"
                ],
                [
                    "name" => "Gallery grid",
                    "url" => "apps/gallery/gallery-grid"
                ],
                [
                    "name" => "Grid with title",
                    "url" => "apps/gallery/grid-with-title"
                ],
                [
                    "name" => "Gallery masonry",
                    "url" => "apps/gallery/gallery-masonry"
                ],
                [
                    "name" => "Gallery slider",
                    "url" => "apps/gallery/gallery-slider"
                ]
            ]
        ],
        [
            "name" => "File manager",
            "id" => "nv-file-manager",
            "icon" => "folder",
            "icon_type" => "feather",
            "path" => "apps/file-manager*",
            "children" => [
                [
                    "name" => "Grid view",
                    "url" => "apps/file-manager/grid-view"
                ],
                [
                    "name" => "List view",
                    "url" => "apps/file-manager/list-view"
                ]
            ]
        ],
        [
            "name" => "Calendar",
            "icon" => "calendar",
            "icon_type" => "feather",
            "url" => "apps/calendar"
        ]
    ]
];
