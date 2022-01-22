<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/adminLte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--                <div class="image">--}}
{{--                    <img src="{{ auth()->user()->avatar }}"--}}
{{--                         class="img-circle elevation-2" alt="User Image">--}}
{{--                </div>--}}
                <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview {{ isActiveOrOpen(['admin.sliders.index','admin.sliders.create'],'menu-open') }}">
                        <a href="#" class="nav-link {{ isActiveOrOpen(['admin.users.sliders','admin.sliders.create']) }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                              مدیریت اسلاید ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.sliders.index') }}" class="nav-link {{ isActiveOrOpen(['admin.sliders.index']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست اسلاید ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.sliders.create') }}" class="nav-link {{ isActiveOrOpen(['admin.sliders.create']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن اسلاید</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ isActiveOrOpen(['admin.categories.index','admin.categories.create'],'menu-open') }}">
                        <a href="#" class="nav-link {{ isActiveOrOpen(['admin.categories.index','admin.categories.create']) }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت دسته بندی ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.index') }}" class="nav-link {{ isActiveOrOpen(['admin.categories.index']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست دسته بندی ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.create') }}" class="nav-link {{ isActiveOrOpen(['admin.categories.create']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن دسته بندی</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ isActiveOrOpen(['admin.articles.index','admin.articles.create'],'menu-open') }}">
                        <a href="#" class="nav-link {{ isActiveOrOpen(['admin.articles.index','admin.articles.create']) }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت مقالات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.articles.index') }}" class="nav-link {{ isActiveOrOpen(['admin.articles.index']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست مقالات </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.articles.create') }}" class="nav-link {{ isActiveOrOpen(['admin.articles.create']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن مقاله</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ isActiveOrOpen(['admin.projects.index','admin.projects.create'],'menu-open') }}">
                        <a href="#" class="nav-link {{ isActiveOrOpen(['admin.projects.index','admin.projects.create']) }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت پروژه ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.projects.index') }}" class="nav-link {{ isActiveOrOpen(['admin.projects.index']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست پروژه ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.projects.create') }}" class="nav-link {{ isActiveOrOpen(['admin.projects.create']) }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن پروژه</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ isActiveOrOpen(['admin.contacts.index']) }}">
                            <i class="nav-icon fa fa-circle-o"></i>
                            <p>پیام های کاربران</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.contacts.socials') }}" class="nav-link {{ isActiveOrOpen(['admin.contacts.socials']) }}">
                            <i class="nav-icon fa fa-circle-o"></i>
                            <p>تنظیمات شبکه های اجتماعی</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.abouts.index') }}" class="nav-link {{ isActiveOrOpen(['admin.abouts.index']) }}">
                            <i class="nav-icon fa fa-circle-o"></i>
                            <p>درباره ما</p>
                        </a>
                    </li>



                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
