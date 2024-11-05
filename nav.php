<h1 style="font-family: Comic Sans MS;text-align: center;" class="mt-4"><i class="bi bi-arrow-through-heart-fill"></i> tinjao </h1>
<nav class="navbar navbar-expand-lg" style="background-color:#d3d3d3;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><i class="bi bi-house"> Home</i></a>
        <ul class="navbar-nav ms-auto"> <!-- เพิ่ม ms-auto ให้ ul เลื่อนไปด้านขวา -->
            <?php
            if (!isset($_SESSION['id'])) {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='login.php'><i class='bi bi-door-open'> เข้าสู่ระบบ</i></a></li>";
            } else {
                echo "<li class='nav-item dropdown'>";
                echo "<a class='btn btn-outline-secondary btn-sm dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'><i class='bi bi-person-circle'> {$_SESSION['username']}</i></a>";
                echo "<ul class='dropdown-menu dropdown-menu-end'>"; // เพิ่ม dropdown-menu-end ให้ dropdown เลื่อนออกไปด้านขวา
                if ($_SESSION['role'] == "a") {
                    echo "<li><a class='dropdown-item' href='category.php'><i class='bi bi-bookmarks'></i> จัดการหมวดหมู่</a></li>";
                    echo "<li><a class='dropdown-item' href='user.php'><i class='bi bi-person-check'></i> จัดการผู้ใช้งาน</a></li>";
                }
                echo "<li><a class='dropdown-item' href='logout.php'><i class='bi bi-door-closed'> ออกจากระบบ</i></a></li>";
                echo "</ul>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</nav>
