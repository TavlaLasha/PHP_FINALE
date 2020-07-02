<header class="clearfix">
    <?php
        $link = 'http://localhost:8080/PHP_Final_Lasha_Tavlalashvili/admin.php';
        $link_headers = @get_headers($file);
    ?>
    <div class="logo">
        <a href="index.php">
            <h1 class="logo-text">Vacancy</h1>
        </a>
    </div>
    <nav>
        <ul>
            <?php if(isset($_SESSION['name']) && !$link_headers): ?>
                <li>
                    <a href="#" class="userinfo">
                        <i class="fa fa-user"></i>
                        <?=$_SESSION['name']; ?>
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                    <?php if(isset($_SESSION['name'])): ?>
                        <li><a href="logout.php" class="logout">logout</a></li>
                    <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>