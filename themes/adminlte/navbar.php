<style>
.profile {
    position: relative;
}

.profile img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
}

.profile-menu {
    position: absolute;
    right: 0;
    top: 100%;
    background-color: #fff;
    border: 1px solid #ddd;
    display: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 200px;
    border-radius: 5px;
    overflow: hidden;
}

.profile-menu a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: #333;
    transition: background 0.3s;
}

.profile-menu a:hover {
    background-color: #f4f4f4;
}

.profile-info {
    display: flex;
    align-items: center;
    padding: 10px;
    background-color: #f8f9fa;
}

.profile-info img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

.profile-info div {
    display: flex;
    flex-direction: column;
}

.profile-info div span {
    font-size: 0.9em;
    color: #666;
}
</style>

<script>
function toggleProfileMenu() {
    const profileMenu = document.getElementById('profile-menu');
    profileMenu.style.display = profileMenu.style.display === 'block' ? 'none' : 'block';
}

document.addEventListener('click', function(event) {
    const profileMenu = document.getElementById('profile-menu');
    const profileButton = document.getElementById('profile-button');
    if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
        profileMenu.style.display = 'none';
    }
});
</script>


<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item">

            <div class="navbar-search-block" bis_skin_checked="1">
                <form class="form-inline">
                    <div class="input-group input-group-sm" bis_skin_checked="1">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append" bis_skin_checked="1">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <li class="nav-item dropdown profile ml-3">
            <img id="profile-button" src="assets/dist/img/elriot-logo.jpg" alt="Profile Picture"
                onclick="toggleProfileMenu()">
            <div id="profile-menu" class="profile-menu">
                <div class="profile-info">
                    <img src="assets/dist/img/elriot-logo.jpg" alt="Profile Picture">
                    <div>
                        <strong>Faiz Muktafi</strong>
                        <span>faizmuktafii@gmail.com</span>
                    </div>
                </div>
                <a href="#">My Profile</a>
                <a href="#">Ubah Password</a>
                <a href="#">Sign Out</a>
            </div>
        </li>


    </ul>
</nav>