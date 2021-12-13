   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <a class="navbar-brand ps-4" style="color: black;" href="#!"><img height="50%" src="<?= base_url('assets-user/img/logo.png') ?>" alt="Logo Creative World"></a>
        <button class="navbar-toggler btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon btn btn-outline-dark"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" style="color: black;" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: black;" href="#!">aaaaa</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" style="color: black;" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" style="color: black;" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" style="color: black;" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" style="color: black;" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul> -->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-outline-dark my-2 my-sm-0" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi bi-basket-fill"></i>
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>

                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a style="color: black;" class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?= $_SESSION['logged_user']['name']; ?></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>index.php/Login_User">Login</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>index.php/Login_User/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
    </nav>