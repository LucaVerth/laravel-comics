<header>
    <div class="head-wrapper">
        <div class="head-logo">
            <img src="/img/dc-logo.png" alt="Logo Header" />
        </div>
        <nav class="header-nav">
            <ul>
                @foreach ($links as $link)
                    <li class="nav-item ">
                        <a class="nav-link" href="#">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
