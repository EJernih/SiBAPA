<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12"
                >User Interface Settings</span
            >
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a
                    href="javascript:void(0);"
                    class="btn btn-outline-primary header-white active"
                    >White</a
                >
                <a
                    href="javascript:void(0);"
                    class="btn btn-outline-primary header-dark"
                    >Dark</a
                >
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a
                    href="javascript:void(0);"
                    class="btn btn-outline-primary sidebar-light active"
                    >White</a
                >
                <a
                    href="javascript:void(0);"
                    class="btn btn-outline-primary sidebar-dark"
                    >Dark</a
                >
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebaricon-1"
                        name="menu-dropdown-icon"
                        class="custom-control-input"
                        value="icon-style-1"
                        checked=""
                    />
                    <label class="custom-control-label" for="sidebaricon-1"
                        ><i class="fa fa-angle-down"></i
                    ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebaricon-2"
                        name="menu-dropdown-icon"
                        class="custom-control-input"
                        value="icon-style-2"
                    />
                    <label class="custom-control-label" for="sidebaricon-2"
                        ><i class="ion-plus-round"></i
                    ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebaricon-3"
                        name="menu-dropdown-icon"
                        class="custom-control-input"
                        value="icon-style-3"
                    />
                    <label class="custom-control-label" for="sidebaricon-3"
                        ><i class="fa fa-angle-double-right"></i
                    ></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebariconlist-1"
                        name="menu-list-icon"
                        class="custom-control-input"
                        value="icon-list-style-1"
                        checked=""
                    />
                    <label class="custom-control-label" for="sidebariconlist-1"
                        ><i class="ion-minus-round"></i
                    ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebariconlist-2"
                        name="menu-list-icon"
                        class="custom-control-input"
                        value="icon-list-style-2"
                    />
                    <label class="custom-control-label" for="sidebariconlist-2"
                        ><i class="fa fa-circle-o" aria-hidden="true"></i
                    ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebariconlist-3"
                        name="menu-list-icon"
                        class="custom-control-input"
                        value="icon-list-style-3"
                    />
                    <label class="custom-control-label" for="sidebariconlist-3"
                        ><i class="dw dw-check"></i
                    ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebariconlist-4"
                        name="menu-list-icon"
                        class="custom-control-input"
                        value="icon-list-style-4"
                        checked=""
                    />
                    <label class="custom-control-label" for="sidebariconlist-4"
                        ><i class="icon-copy dw dw-next-2"></i
                    ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebariconlist-5"
                        name="menu-list-icon"
                        class="custom-control-input"
                        value="icon-list-style-5"
                    />
                    <label class="custom-control-label" for="sidebariconlist-5"
                        ><i class="dw dw-fast-forward-1"></i
                    ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                        type="radio"
                        id="sidebariconlist-6"
                        name="menu-list-icon"
                        class="custom-control-input"
                        value="icon-list-style-6"
                    />
                    <label class="custom-control-label" for="sidebariconlist-6"
                        ><i class="dw dw-next"></i
                    ></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">
                    Reset Settings
                </button>
            </div>
        </div>
    </div>
</div>

{{-- //file logo --}}
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('back/vendors/images/logo_sibapa.png')}}" alt="" class="dark-logo" /> ini file logo
            <img
                src="{{ asset('back/vendors/images/deskapp-logo-white.svg')}}"
                alt=""
                class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown {{ request()->is('dashboard')? 'active' : '' }}">
                    <a href="/dashboard" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                    </a>

                </li>


                <li class="dropdown {{ request()->is('forms*')? 'show' : '' }}">
                    <a href="javascript:;" class="dropdown-toggle {{ request()->is('forms*')? 'active' : '' }}">
                        <span class="micon bi bi-textarea-resize"></span
                        ><span class="mtext">Master</span>
                    </a>
                    <ul class="submenu" class="{{ request()->is('forms*')? 'display:block;' : '' }}">
                        {{-- <li><a href="/coba">Master</a></li> --}}
                        <li><a href="/bhps">BHP</a></li>
                        <li><a href="/units">SATUAN</a></li>
                        <li><a href="/prodis">PRODI</a></li>
                        <li><a href="/labs">LAB</a></li>
                    </ul>
                </li>

                
                {{-- <li class="dropdown {{ request()->is('tables*')? 'show' : '' }}">
                    <a href="javascript:;" class="dropdown-toggle {{ request()->is('tables*')? 'active' : '' }}">
                        <span class="micon bi bi-table"></span
                        ><span class="mtext">Tables</span>
                    </a>
                    <ul class="submenu" style="{{ request()->is('tables*')? 'display:block;' : '' }}">
                        <li><a href="#">Basic Tables</a></li>
                        <li><a href="#">DataTables</a></li>
                    </ul>
                </li>


                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span
                        ><span class="mtext">?</span>
                    </a>
                </li>

                
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-archive"></span
                        ><span class="mtext"> UI Elements </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li>
                            <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                        </li>
                        <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                        <li><a href="ui-notification.html">Notification</a></li>
                        <li><a href="ui-timeline.html">Timeline</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-list-group.html">List group</a></li>
                        <li><a href="ui-range-slider.html">Range slider</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                    </ul>
                </li> --}}
<li class="dropdown {{ request()->is('bhps*') || request()->is('units*') ? 'active' : '' }}">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon bi bi-command"></span>
        <span class="mtext">BHP</span>
    </a>
    <ul class="submenu">
        <li class="{{ request()->is('bhps*') ? 'active' : '' }}">
            <a href="{{ route('bhps.index') }}">Data BHP</a>
        </li>
    </ul>
</li>

                <li class="dropdown" {{ request()->is('requests*')? 'show' : '' }}>
                    <a href="javascript:;" class="dropdown-toggle {{ request()->is('requests*')? 'active' : '' }}">
                        <span class="micon bi bi-calendar4-week"></span
                        ><span class="mtext">Pengajuan</span>
                    </a>
                    <ul class="submenu" style="{{ request()->is('requests*', 'details*') ? 'display:block;' : '' }}">
                        <li><a href="/bhpRequests">Data Pengajuan</a></li>
                        <li><a href="/detailRequests">Detail Pengajuan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-earmark-text"></span
                        ><span class="mtext">Form</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/inTransactions">Kartu Stok</a></li>
                        <li><a href="/outTransactions">Penggunaan BHP</a></li>
                    </ul>
                </li>
                {{-- <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-bug"></span
                        ><span class="mtext">Error Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="400.html">400</a></li>
                        <li><a href="403.html">403</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="500.html">500</a></li>
                        <li><a href="503.html">503</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-back"></span
                        ><span class="mtext">Extra Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="blank.html">Blank</a></li>
                        <li><a href="contact-directory.html">Contact Directory</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="product-detail.html">Product Detail</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="pricing-table.html">Pricing Tables</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-hdd-stack"></span
                        ><span class="mtext">Multi Level Menu</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon fa fa-plug"></span
                                ><span class="mtext">Level 2</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="javascript:;">Level 2</a></li>
                                <li><a href="javascript:;">Level 2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-diagram-3"></span
                        ><span class="mtext">Sitemap</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-chat-right-dots"></span
                        ><span class="mtext">Chat</span>
                    </a>
                </li> --}}
                <li>
                    <a href="invoice.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span
                        ><span class="mtext">Invoice</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-pdf"></span
                        ><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a
                        href="https://dropways.github.io/deskapp-free-single-page-website-template/"
                        target="_blank"
                        class="dropdown-toggle no-arrow"
                    >
                        <span class="micon bi bi-layout-text-window-reverse"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>