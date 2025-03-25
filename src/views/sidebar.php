<aside class="sidebar">
    <div class="profile">
        <div class="avatar">
            <img src="../../public/img/profile.png" alt="Profile" class="profile-img">
        </div>
        <div class="profile-name"><?php echo $_SESSION['librarian_name']; ?>!</div>
    </div>
    
    <nav class="nav-menu">
        <ul>
            <li class="<?= (!isset($_GET['page']) || $_GET['page'] == 'dashboard') ? 'active' : ''; ?>">
                <a href="?page=dashboard"><i class="fa fa-file-text"></i> Dashboard</a>
            </li>
            <li class="<?= ($_GET['page'] ?? '') == 'users' ? 'active' : ''; ?>">
                <a href="?page=users"><i class="fa fa-user"></i> Users</a>
            </li>
            <li class="<?= ($_GET['page'] ?? '') == 'books' ? 'active' : ''; ?>">
                <a href="?page=books"><i class="fa fa-list-alt"></i> Books</a>
            </li>
            <li class="<?= ($_GET['page'] ?? '') == 'borrow' ? 'active' : ''; ?>">
                <a href="?page=borrow"><i class="fa fa-address-book"></i> Borrow Book</a>
            </li>
            <li>
                <a href="logoutController"><i class="fa fa-exclamation-circle"></i> Log out</a>
            </li>
        </ul>
    </nav>
</aside>
