<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <div class="d-flex align-items-center">
                <img src="assets/logo.jpg" alt="Logo" class="me-2" style="height: 100px;">
                <!-- <span class="fw-bold">JCI DAGUPAN</span> -->
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="index.php">Dagupan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'antipolo') ? 'active' : ''; ?>" href="">Antipolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'caloocan') ? 'active' : ''; ?>" href="">Caloocan</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Learning Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">E-Books</a></li>
                        <li><a class="dropdown-item" href="#">Entrep Media Library</a></li>
                        <li><a class="dropdown-item" href="#">AI Resources</a></li>
                    </ul>
                </li> -->
                <style>
                    .nav-item.dropdown:hover .dropdown-menu {
                        display: block;
                    }
                </style>
            </ul>
        </div>
    </div>
</nav>
