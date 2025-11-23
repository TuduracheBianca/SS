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
                    <span class="menu-text" data-translate="home">Acasă</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCatalog" aria-expanded="false" aria-controls="sidebarCatalog" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-user"></i></span>
                    <span class="menu-text" data-translate="catalog">Catalog</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCatalog">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/rezultate" class="side-nav-link">
                                <span class="menu-text" data-translate="grades">Note</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/catalog/absente" class="side-nav-link">
                                <span class="menu-text" data-translate="absences">Absențe</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/catalog/situatie-scolara" class="side-nav-link">
                                <span class="menu-text" data-translate="school_situation">Situație Școlară</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{SITE_URL}/notite" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-notes"></i></span>
                    <span class="menu-text" data-translate="notes">Notițe</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{SITE_URL}/documente" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-files"></i></span>
                    <span class="menu-text" data-translate="documents_student">Documente</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarOrar" aria-expanded="false" aria-controls="sidebarOrar" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-calendar"></i></span>
                    <span class="menu-text" data-translate="schedule">Orar</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarOrar">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/orar/cursuri" class="side-nav-link">
                                <span class="menu-text" data-translate="course_schedule">Orar Cursuri</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/orar/examene" class="side-nav-link">
                                <span class="menu-text" data-translate="exam_schedule">Orar Examene</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{SITE_URL}/contract-studii" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-file-text"></i></span>
                    <span class="menu-text" data-translate="study_contract">Contract Studii</span>
                </a>
            </li>

        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Sidenav Menu End -->