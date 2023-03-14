@php
$url = url('/') . '/' . config('tabler.dashboard_name');
$menus = 
(object)[
  (object)[
    "name" => "index",
    "title" => "Home",
    "href" => "$url",
    "icon" => "home",
    "new" => false,
    "sub_menu" => false
  ],
  (object)[
    "name" => "interface",
    "title" => "Interface",
    "href" => "#navbar-base",
    "icon" => "package",
    "new" => false,
    "sub_menu" => 
    [
      (object)[
        (object)[
          "name" => "empty",
          "title" => "Empty page",
          "href" => "$url/empty",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "accordion",
          "title" => "Accordion",
          "href" => "$url/accordion",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "blank",
          "title" => "Blank page",
          "href" => "$url/blank",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "buttons",
          "title" => "Buttons",
          "href" => "$url/buttons",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "card",
          "title" => "Card",
          "href" => "#sidebar-cards",
          "new" => true,
          "sub_menu" => [
            (object)[
              "name" => "cards",
              "title" => "Sample cards",
              "href" => "$url/cards",
              "new" => false,
              "sub_menu" => false
            ],
            (object)[
              "name" => "card-actions",
              "title" => "Card actions",
              "href" => "$url/card-actions",
              "new" => true,
              "sub_menu" => false
            ],
            (object)[
              "name" => "cards-masonry",
              "title" => "Cards Masonry",
              "href" => "$url/cards-masonry",
              "new" => false,
              "sub_menu" => false
            ],
          ]
        ],
        (object)[
          "name" => "colors",
          "title" => "Colors",
          "href" => "$url/colors",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "datagrid",
          "title" => "Data grid",
          "href" => "$url/datagrid",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "datatables",
          "title" => "Datatables",
          "href" => "$url/datatables",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "dropdowns",
          "title" => "Dropdowns",
          "href" => "$url/dropdowns",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "modals",
          "title" => "Modals",
          "href" => "$url/modals",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "maps",
          "title" => "Maps",
          "href" => "$url/maps",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "map-fullsize",
          "title" => "Map fullsize",
          "href" => "$url/map-fullsize",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "maps-vector",
          "title" => "Vector maps",
          "href" => "$url/maps-vector",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "navigation",
          "title" => "Navigation",
          "href" => "$url/navigation",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "charts",
          "title" => "Charts",
          "href" => "$url/charts",
          "new" => false,
          "sub_menu" => false
        ],
      ],
      (object)[
        (object)[
          "name" => "pagination",
          "title" => "Pagination pages",
          "href" => "$url/pagination",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "placeholder",
          "title" => "Placeholder",
          "href" => "$url/placeholder",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "tabs",
          "title" => "Tabs",
          "href" => "$url/tabs",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "tables",
          "title" => "Tables",
          "href" => "$url/tables",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "carousel",
          "title" => "Carousel",
          "href" => "$url/carousel",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "lists",
          "title" => "Lists",
          "href" => "$url/lists",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "typography",
          "title" => "Typography",
          "href" => "$url/typography",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "offcanvas",
          "title" => "Offcanvas",
          "href" => "$url/offcanvas",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "markdown",
          "title" => "Markdown",
          "href" => "$url/markdown",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "dropzone",
          "title" => "Dropzone",
          "href" => "$url/dropzone",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "lightbox",
          "title" => "Lightbox",
          "href" => "$url/lightbox",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "tinymce",
          "title" => "TinyMCE",
          "href" => "$url/tinymce",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "inline-player",
          "title" => "Inline player",
          "href" => "$url/inline-player",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "authentication",
          "title" => "Authentication",
          "href" => "#navbar-authentication",
          "new" => false,
          "sub_menu" => [
            (object)[
              "name" => "sign-in",
              "title" => "Sign in",
              "href" => "$url/sign-in",
              "new" => false,
              "sub_menu" => false
            ],
            (object)[
              "name" => "sign-up",
              "title" => "Sign up",
              "href" => "$url/sign-up",
              "new" => false,
              "sub_menu" => false
            ],
            (object)[
              "name" => "forgot-password",
              "title" => "Forgot password",
              "href" => "$url/forgot-password",
              "new" => false,
              "sub_menu" => false
            ],
            (object)[
              "name" => "terms-of-service",
              "title" => "Terms of service",
              "href" => "$url/terms-of-service",
              "new" => false,
              "sub_menu" => false
            ],
            (object)[
              "name" => "auth-lock",
              "title" => "Lock screen",
              "href" => "$url/auth-lock",
              "new" => false,
              "sub_menu" => false
            ],
          ]
        ],
        (object)[
          "name" => "errors",
          "title" => "Error pages",
          "href" => "#navbar-errors",
          "new" => false,
          "sub_menu" => [
            (object)[
              "name" => "error-404",
              "title" => "404 page",
              "href" => "$url/error-404",
              "new" => false,
              "sub_menu" => false
            ],
            (object)[
              "name" => "error-500",
              "title" => "500 page",
              "href" => "$url/error-500",
              "new" => false,
              "sub_menu" => false
            ],
            (object)[
              "name" => "error-maintenance",
              "title" => "Maintenance page",
              "href" => "$url/error-maintenance",
              "new" => false,
              "sub_menu" => false
            ],
          ]
        ],
      ]
    ]
  ],
  (object)[
    "name" => "forms",
    "title" => "Forms",
    "href" => "$url/form-elements",
    "icon" => "checkbox",
    "new" => false,
    "sub_menu" => false
  ],
  (object)[
    "name" => "extra",
    "title" => "Extra",
    "href" => "#navbar-extra",
    "icon" => "star",
    "new" => false,
    "sub_menu" => 
    [
      (object)[
        (object)[
          "name" => "activity",
          "title" => "Activity",
          "href" => "$url/activity",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "gallery",
          "title" => "Gallery",
          "href" => "$url/gallery",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "invoice",
          "title" => "Invoice",
          "href" => "$url/invoice",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "search-results",
          "title" => "Search results",
          "href" => "$url/search-results",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "pricing",
          "title" => "Pricing cards",
          "href" => "$url/pricing",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "pricing-table",
          "title" => "Pricing table",
          "href" => "$url/pricing-table",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "faq",
          "title" => "FAQ",
          "href" => "$url/faq",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "users",
          "title" => "Users",
          "href" => "$url/users",
          "new" => false,
          "sub_menu" => false
        ],
      ],
      (object)[
        (object)[
          "name" => "license",
          "title" => "License",
          "href" => "$url/license",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "music",
          "title" => "Music",
          "href" => "$url/music",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "tasks",
          "title" => "Tasks",
          "href" => "$url/tasks",
          "new" => true,
          "sub_menu" => false
        ],
        (object)[
          "name" => "uptime",
          "title" => "Uptime monitor",
          "href" => "$url/uptime",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "widgets",
          "title" => "Widgets",
          "href" => "$url/widgets",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "wizard",
          "title" => "Wizard",
          "href" => "$url/wizard",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "settings",
          "title" => "Settings",
          "href" => "$url/settings",
          "new" => true,
          "sub_menu" => false
        ],
      ],
    ]
  ],
  (object)[
    "name" => "layout",
    "title" => "Layout",
    "href" => "#navbar-layout",
    "icon" => "layout-2",
    "new" => false,
    "sub_menu" => 
    [
      (object)[
        (object)[
          "name" => "horizontal",
          "title" => "Horizontal",
          "href" => url('/change-layout/horizontal'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "boxed",
          "title" => "Boxed",
          "href" => url('/change-layout/boxed'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "vertical",
          "title" => "Vertical",
          "href" => url('/change-layout/vertical'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "vertical-transparent",
          "title" => "Vertical transparent",
          "href" => url('/change-layout/vertical-transparent'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "vertical-right",
          "title" => "Right vertical",
          "href" => url('/change-layout/vertical-right'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "condensed",
          "title" => "Condensed",
          "href" => url('/change-layout/condensed'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "combo",
          "title" => "Combined",
          "href" => url('/change-layout/combo'),
          "new" => false,
          "sub_menu" => false
        ],
      ],
      (object)[
        (object)[
          "name" => "navbar-dark",
          "title" => "Navbar dark",
          "href" => url('/change-layout/navbar-dark'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "navbar-sticky",
          "title" => "Navbar sticky",
          "href" => url('/change-layout/navbar-sticky'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "navbar-overlap",
          "title" => "Navbar overlap",
          "href" => url('/change-layout/navbar-overlap'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "rtl",
          "title" => "RTL mode",
          "href" => url('/change-layout/rtl'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "fluid",
          "title" => "Fluid",
          "href" => url('/change-layout/fluid'),
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "fluid-vertical",
          "title" => "Fluid vertical",
          "href" => url('/change-layout/fluid-vertical'),
          "new" => false,
          "sub_menu" => false
        ],
      ]
    ]
  ],
  (object)[
    "name" => "icons",
    "title" => "Icons",
    "href" => "$url/icons",
    "icon" => "ghost",
    "new" => false,
    "sub_menu" => false,
  ],
  (object)[
    "name" => "help",
    "title" => "Help",
    "href" => "#navbar-help",
    "icon" => "lifebuoy",
    "new" => false,
    "sub_menu" => 
    [
      (object)[
        (object)[
          "name" => "documentation",
          "title" => "Documentation",
          "href" => "https://tabler.io/docs/getting-started",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "changelog",
          "title" => "Changelog",
          "href" => "https://preview.tabler.io/changelog.html",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "source-code",
          "title" => "Source code",
          "href" => "https://github.com/tabler/tabler",
          "new" => false,
          "sub_menu" => false
        ],
        (object)[
          "name" => "sponsor-project",
          "title" => "Sponsor project",
          "href" => "https://github.com/sponsors/codecalm",
          "new" => false,
          "sub_menu" => false
        ],
      ],
    ]
  ],
];
@endphp

@foreach($menus as $menu)
@if(!$menu->sub_menu)
<li class="nav-item {{ request()->page == $menu->name?'active':'' }}">
  <a class="nav-link" href="{{ $menu->href }}" >
    <span class="nav-link-icon d-md-none d-lg-inline-block">
    @include("tabler::icons.svg.".$menu->icon)
    </span>
    <span class="nav-link-title">
      {{ __($menu->title) }}
    </span>
  </a>
</li>
@else
<li class="nav-item dropdown {{ request()->page == $menu->name?'active':'' }}">
  <a class="nav-link dropdown-toggle" href="{{ $menu->href }}" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
    <span class="nav-link-icon d-md-none d-lg-inline-block">
    @include("tabler::icons.svg.".$menu->icon)
    </span>
    <span class="nav-link-title">
      {{ __($menu->title) }}
    </span>
  </a>
  <div class="dropdown-menu">
    <div class="dropdown-menu-columns">
      @foreach($menu->sub_menu as $column)
      <div class="dropdown-menu-column">
        @foreach($column as $menu2)
        @if(!$menu2->sub_menu)
          <a class="dropdown-item" href="{{ $menu2->href }}">
            {{ __($menu2->title) }}
            @if($menu2->new)
            <span class="badge badge-sm bg-green text-uppercase ms-2">{{ __("New") }}</span>
            @endif
          </a>
        @else
          <div class="dropend">
            <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="{{ $menu2->href }}" data-bs-auto-close="outside" role="button" aria-expanded="false" >
              {{ __($menu2->title) }}
              @if($menu2->new)
              <span class="badge badge-sm bg-green text-uppercase ms-2">{{ __("New") }}</span>
              @endif
            </a>
            <div class="dropdown-menu">
              @foreach($menu2->sub_menu as $menu3)
              <a class="dropdown-item" href="{{ $menu3->href }}">
                {{ __($menu3->title) }}
                @if($menu3->new)
                <span class="badge badge-sm bg-green text-uppercase ms-2">{{ __("New") }}</span>
                @endif
              </a>
              @endforeach
            </div>
          </div>
        @endif
        @endforeach
      </div>
      @endforeach
    </div>
  </div>
</li>
@endif
@endforeach
<li class="nav-item">
  <a class="nav-link" href="{{ url('/change-locale') . '/' . (app()->getLocale() == 'en' ? 'ar' : 'en') }}">
      @include('tabler::icons.svg.language')
      <span class="nav-link-title">
        @if(app()->getLocale() == 'en')
        العربية
        @else
        English
        @endif
      </span>
    </a>
</li>