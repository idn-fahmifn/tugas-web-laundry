<ul>
    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="logo-ionic"></ion-icon>
            </span>
            <span class="title">Laundry</span>
        </a>
    </li>

    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Dashboard</span>
        </a>
    </li>

    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Customers</span>
        </a>
    </li>

    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="chatbubble-outline"></ion-icon>
            </span>
            <span class="title">Price List</span>
        </a>
    </li>

    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="help-outline"></ion-icon>
            </span>
            <span class="title">Order</span>
        </a>
    </li>

    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="settings-outline"></ion-icon>
            </span>
            <span class="title">Settings</span>
        </a>
    </li>

    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
            </span>
            <span class="title">Password</span>
        </a>
    </li>

    <li>
        <a href="#">
            <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="title">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </span>
        </a>
    </li>
</ul>
