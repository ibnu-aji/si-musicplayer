    <?php
        require_once "../env.php";

        $login = new App\Auth();

        if (isset($_POST['submit'])) {
            $login->logout();
        }  
    ?>

<div class="sidebar">
    <div class="app-title">UTS PBWL</div>

    <div class="sidebar-header">
        <div class="name-tag">
            <div class="name">Ibnu</div>
            <div class="status"> 
                <form id="logout-form" method="POST" style="display: inline-block">
                    <button type="submit" style="background-color: transparent; color: white; border: 0px; font-size: 12px !important;" name="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <div class="sidebar-menu-tag">Menu</div>
    <div class="sidebar-content">
        <ul class="sidebar-menu">
            <li>
                <a href="app.php?page=dashboard" class="sidebar-menu-item">
                    <div class="sidebar-text-item">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="app.php?page=artist/index" class="sidebar-menu-item">
                    <div class="sidebar-text-item">Artist</div>
                </a>
            </li>
            <li>
                <a href="app.php?page=album/index" class="sidebar-menu-item">
                    <div class="sidebar-text-item">Album</div>
                </a>
            </li>
            <li>
                <a href="app.php?page=track/index" class="sidebar-menu-item">
                    <div class="sidebar-text-item">Track</div>
                </a>
            </li>
            <li>
                <a href="app.php?page=played/index" class="sidebar-menu-item">
                    <div class="sidebar-text-item">Played</div>
                </a>
            </li>
        </ul>
    </div>
</div>