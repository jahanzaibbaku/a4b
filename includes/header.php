<header class="main_header desktop">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="/">
                        <img src="../assets/images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="search_bar">     
                    <span>               
                        <form action="leads" method="POST">
                            <input type="text" name="name" placeholder="Search Here">
                            <input type="submit">
                        </form>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-user"></i>
                    </span>
                </div>
                <div class="menu_wraper">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="about/">About Us</a></li>
                        <li><a href="features/">Features</a></li>
                        <li><a href="blogs/">Blog</a></li>
                    </ul>
                    <a href="contact/"><button type="button" class="btn btn-dark">Contact Us</button></a>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="header-main mobile">
    <div class="nav-area-full">
        <div class="container">
            <div class="row">
                <div class="col-md-2 logo-area">
                    <div class="logo">
                        <a href="/"> 
                            <img src="../assets/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-10">                    
                    <div class="menu_wraper">                        
                        <button id="menuBtn" class="open-btn" onclick="openMenu()">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div id="overlay" class="overlay"></div>
                        <div id="closeWrap" class="close_wraper" onclick="closeMenu()">&times;</div>
                        <ul id="sideMenu" class="side-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="about/">About Us</a></li>
                            <li><a href="features/">Features</a></li>
                            <li><a href="blogs/">Blog</a></li>
                            <a href="contact/"><button type="button" class="btn btn-dark">Contact Us</button></a>
                        </ul>
                    </div>                                       
                </div>                
            </div>
        </div>
    </div>
</header>

<script>
function openMenu() {
    document.getElementById("sideMenu").style.right = "0";
    document.getElementById("overlay").style.width = "100%";
    document.getElementById("menuBtn").classList.add("hide");
    document.getElementById("closeWrap").style.display = "block";
}

function closeMenu() {
    document.getElementById("sideMenu").style.right = "-420px";
    document.getElementById("overlay").style.width = "0";
    document.getElementById("menuBtn").classList.remove("hide");
    document.getElementById("closeWrap").style.display = "none";
}

// ✅ Dropdown toggle fix
document.querySelectorAll(".toggle").forEach(toggle => {
    toggle.addEventListener("click", function () {
        const dropdown = this.nextElementSibling;

        // Close other open dropdowns (optional)
        document.querySelectorAll(".dropdown").forEach(menu => {
            if (menu !== dropdown) {
                menu.style.display = "none";
            }
        });

        // Toggle current dropdown
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "block";
        }
    });
});
</script>