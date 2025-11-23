<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="{SITE_URL}/home" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{BASE_URL}/assets/images/logo.png" alt="logo"></span>
            <span class="logo-sm text-center"><img src="{BASE_URL}/assets/images/logo-sm.png" alt="small logo"></span>
        </span>
        <span class="logo-dark">
            <span class="logo-lg"><img src="{BASE_URL}/assets/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm text-center"><img src="{BASE_URL}/assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>

        <!--- Sidenav Menu -->
        <ul class="side-nav">
        <li class="side-nav-item">
            <a href="{SITE_URL}/home" class="side-nav-link">
                <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                <span class="menu-text" data-translate="home">Acasa</span>
            </a>
        </li>

            <!-- Programare Examene -->
            <li class="side-nav-item">
                <a href="{SITE_URL}/programare-examene" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-calendar"></i></span>
                    <span class="menu-text" data-translate="exam_scheduling">Programare Examene</span>
                </a>
            </li>
    
    <!-- Buton Cursanți (fără sub-meniu) -->
    <li class="side-nav-item">
            <a href="{SITE_URL}/cursanti" class="side-nav-link">
                <span class="menu-icon"><i class="ti ti-users"></i></span>
                <span class="menu-text" data-translate="students">Cursanti</span>
            </a>
    </li>


            <!-- Orar (cu submeniu) -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarOrar" aria-expanded="false" aria-controls="sidebarOrar" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-clock"></i></span>
                    <span class="menu-text" data-translate="schedule">Orar</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarOrar">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/orar" class="side-nav-link">
                                <span class="menu-text" data-translate="course_schedule">Orar Cursuri</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/orar-examene" class="side-nav-link">
                                <span class="menu-text" data-translate="exam_schedule">Orar Examene</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Documente -->
            <li class="side-nav-item">
                <a href="{SITE_URL}/documente" class="side-nav-link">
                   <span class="menu-icon"><i class="ti ti-files"></i></span>
                    <span class="menu-text" data-translate="documents_student">Documente</span>
                </a>
            </li>

            <!-- Incarca Note -->
            <li class="side-nav-item">
                <a href="{SITE_URL}/incarca-note" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-upload"></i></span>
                    <span class="menu-text" data-translate="upload_grades">Incarca Note</span>
                </a>
            </li>

            <!-- Recenzii -->
            <li class="side-nav-item">
                <a href="{SITE_URL}/recenzii" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-star"></i></span>
                    <span class="menu-text" data-translate="reviews">Recenzii</span>
                </a>
            </li>

        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Sidenav Menu End -->