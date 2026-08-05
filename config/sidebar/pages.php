<?php

return [
    "label" => "Pages",
    "items" => [
        [
            "name" => "Starter",
            "icon" => "compass",
            "icon_type" => "feather",
            "url" => "pages/starter"
        ],
        [
            "name" => "Faq",
            "id" => "nv-faq",
            "icon" => "help-circle",
            "icon_type" => "feather",
            "path" => "pages/faq*",
            "children" => [
                [
                    "name" => "Faq accordion",
                    "url" => "pages/faq/faq-accordion"
                ],
                [
                    "name" => "Faq tab",
                    "url" => "pages/faq/faq-tab"
                ]
            ]
        ],
        [
            "name" => "Landing",
            "id" => "nv-landing",
            "icon" => "globe",
            "icon_type" => "feather",
            "path" => "pages/landing*",
            "children" => [
                [
                    "name" => "Default",
                    "url" => "pages/landing/default"
                ],
                [
                    "name" => "Alternate",
                    "url" => "pages/landing/alternate"
                ]
            ]
        ],
        [
            "name" => "Pricing",
            "id" => "nv-pricing",
            "icon" => "tag",
            "icon_type" => "feather",
            "path" => "pages/pricing*",
            "children" => [
                [
                    "name" => "Pricing column",
                    "url" => "pages/pricing/pricing-column"
                ],
                [
                    "name" => "Pricing grid",
                    "url" => "pages/pricing/pricing-grid"
                ]
            ]
        ],
        [
            "name" => "Notifications",
            "icon" => "bell",
            "icon_type" => "feather",
            "url" => "pages/notifications"
        ],
        [
            "name" => "Members",
            "icon" => "users",
            "icon_type" => "feather",
            "url" => "pages/members"
        ],
        [
            "name" => "Timeline",
            "icon" => "clock",
            "icon_type" => "feather",
            "url" => "pages/timeline"
        ],
        [
            "name" => "Errors",
            "id" => "nv-errors",
            "icon" => "alert-triangle",
            "icon_type" => "feather",
            "path" => "pages/errors*",
            "children" => [
                [
                    "name" => "404",
                    "url" => "pages/errors/404"
                ],
                [
                    "name" => "403",
                    "url" => "pages/errors/403"
                ],
                [
                    "name" => "500",
                    "url" => "pages/errors/500"
                ]
            ]
        ],
        [
            "name" => "Authentication",
            "id" => "nv-authentication",
            "icon" => "lock",
            "icon_type" => "feather",
            "path" => "pages/authentication*",
            "children" => [
                [
                    "name" => "Simple",
                    "id" => "nv-simple",
                    "path" => "pages/authentication/simple*",
                    "children" => [
                        [
                            "name" => "Sign in",
                            "url" => "pages/authentication/simple/sign-in"
                        ],
                        [
                            "name" => "Sign up",
                            "url" => "pages/authentication/simple/sign-up"
                        ],
                        [
                            "name" => "Sign out",
                            "url" => "pages/authentication/simple/sign-out"
                        ],
                        [
                            "name" => "Forgot password",
                            "url" => "pages/authentication/simple/forgot-password"
                        ],
                        [
                            "name" => "Reset password",
                            "url" => "pages/authentication/simple/reset-password"
                        ],
                        [
                            "name" => "Lock screen",
                            "url" => "pages/authentication/simple/lock-screen"
                        ],
                        [
                            "name" => "2FA",
                            "url" => "pages/authentication/simple/2FA"
                        ]
                    ]
                ],
                [
                    "name" => "Split",
                    "id" => "nv-split",
                    "path" => "pages/authentication/split*",
                    "children" => [
                        [
                            "name" => "Sign in",
                            "url" => "pages/authentication/split/sign-in"
                        ],
                        [
                            "name" => "Sign up",
                            "url" => "pages/authentication/split/sign-up"
                        ],
                        [
                            "name" => "Sign out",
                            "url" => "pages/authentication/split/sign-out"
                        ],
                        [
                            "name" => "Forgot password",
                            "url" => "pages/authentication/split/forgot-password"
                        ],
                        [
                            "name" => "Reset password",
                            "url" => "pages/authentication/split/reset-password"
                        ],
                        [
                            "name" => "Lock screen",
                            "url" => "pages/authentication/split/lock-screen"
                        ],
                        [
                            "name" => "2FA",
                            "url" => "pages/authentication/split/2FA"
                        ]
                    ]
                ],
                [
                    "name" => "Card",
                    "id" => "nv-Card",
                    "path" => "pages/authentication/card*",
                    "children" => [
                        [
                            "name" => "Sign in",
                            "url" => "pages/authentication/card/sign-in"
                        ],
                        [
                            "name" => "Sign up",
                            "url" => "pages/authentication/card/sign-up"
                        ],
                        [
                            "name" => "Sign out",
                            "url" => "pages/authentication/card/sign-out"
                        ],
                        [
                            "name" => "Forgot password",
                            "url" => "pages/authentication/card/forgot-password"
                        ],
                        [
                            "name" => "Reset password",
                            "url" => "pages/authentication/card/reset-password"
                        ],
                        [
                            "name" => "Lock screen",
                            "url" => "pages/authentication/card/lock-screen"
                        ],
                        [
                            "name" => "2FA",
                            "url" => "pages/authentication/card/2FA"
                        ]
                    ]
                ]
            ]
        ],
        [
            "name" => "Layouts",
            "id" => "nv-layouts",
            "icon" => "layout",
            "icon_type" => "feather",
            "path" => "demo*",
            "children" => [
                [
                    "name" => "Vertical sidenav",
                    "url" => "demo/vertical-sidenav"
                ],
                [
                    "name" => "Dark mode",
                    "url" => "demo/dark-mode"
                ],
                [
                    "name" => "Sidenav collapse",
                    "url" => "demo/sidenav-collapse"
                ],
                [
                    "name" => "Darknav",
                    "url" => "demo/darknav"
                ],
                [
                    "name" => "Topnav slim",
                    "url" => "demo/topnav-slim"
                ],
                [
                    "name" => "Navbar horizontal",
                    "url" => "demo/navbar-horizontal"
                ],
                [
                    "name" => "Horizontal slim",
                    "url" => "demo/horizontal-slim"
                ],
                [
                    "name" => "Combo nav",
                    "url" => "demo/combo-nav"
                ],
                [
                    "name" => "Combo nav slim",
                    "url" => "demo/combo-nav-slim"
                ],
                [
                    "name" => "Dual nav",
                    "url" => "demo/dual-nav"
                ]
            ]
        ]
    ]
];
