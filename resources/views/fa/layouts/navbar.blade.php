<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.jpg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            وب سایت عمرانی
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ isActive('home') }}" aria-current="page" href="/">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isActive('categories') }}" href="{{ route('categories') }}">نمونه پروژه های اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isActive('articles') }}" href="{{ route('articles') }}">مقالات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isActive('abouts.us') }}" href="{{ route('abouts.us') }}">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isActive('contact.us') }}" href="{{ route('contact.us') }}">ارتباط با ما</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        انتخاب زبان
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?lang=fa">فارسی</a>
                        <a class="dropdown-item" href="?lang=en">انگلیسی</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>


