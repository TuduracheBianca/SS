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


            <li class="side-nav-title mt-2" data-translate="administration">Administrare</li>
            
            <!-- Buton Persoane -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPersoane" aria-expanded="false" aria-controls="sidebarPersoane" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-users"></i></span>
                    <span class="menu-text" data-translate="persons">Persoane</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPersoane">
                    <ul class="sub-menu">
                        <!-- Studenți -->
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarStudenti" aria-expanded="false" aria-controls="sidebarStudenti" class="side-nav-link">
                                <span class="menu-text" data-translate="students">Studenți</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarStudenti">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{SITE_URL}/studenti" class="side-nav-link">
                                            <span class="menu-text" data-translate="student_list">Listă Studenți</span>
                                        </a>
                                    </li>
                                    
                                    <li class="side-nav-item">
                                        <a href="{SITE_URL}/studenti/add" class="side-nav-link">
                                            <span class="menu-text" data-translate="add_student">Adăugare Student</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Profesori -->
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarProfesori" aria-expanded="false" aria-controls="sidebarProfesori" class="side-nav-link">
                                <span class="menu-text" data-translate="professors">Profesori</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProfesori">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{SITE_URL}/profesori" class="side-nav-link">
                                            <span class="menu-text" data-translate="professor_list">Listă Profesori</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{SITE_URL}/profesori/add" class="side-nav-link">
                                            <span class="menu-text" data-translate="add_professor">Adăugare Profesor</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Buton Ani -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarAni" aria-expanded="false" aria-controls="sidebarAni" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-calendar"></i></span>
                    <span class="menu-text" data-translate="years">Ani</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarAni">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/ani" class="side-nav-link">
                                <span class="menu-text" data-translate="year_list">Listă Ani</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/ani/add" class="side-nav-link">
                                <span class="menu-text" data-translate="add_year">Adăugare An</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Buton Materii -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMaterii" aria-expanded="false" aria-controls="sidebarMaterii" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-book"></i></span>
                    <span class="menu-text" data-translate="subjects">Materii</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaterii">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/materii" class="side-nav-link">
                                <span class="menu-text" data-translate="subject_list">Listă Materii</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/materii/add" class="side-nav-link">
                                <span class="menu-text" data-translate="add_subject">Adăugare Materie</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Buton Grupe -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarGrupe" aria-expanded="false" aria-controls="sidebarGrupe" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layers-linked"></i></span>
                    <span class="menu-text" data-translate="groups">Grupe</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarGrupe">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/grupe" class="side-nav-link">
                                <span class="menu-text" data-translate="group_list">Listă Grupe</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/grupe/add" class="side-nav-link">
                                <span class="menu-text" data-translate="add_group">Adăugare Grupă</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Secțiunea Documente -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDocumente" aria-expanded="false" aria-controls="sidebarDocumente" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-files"></i></span>
                    <span class="menu-text" data-translate="documents">Documente</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarDocumente">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/documente/studenti" class="side-nav-link">
                                <span class="menu-text" data-translate="student_documents">Documente Studenți</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{SITE_URL}/documente/profesori" class="side-nav-link">
                                <span class="menu-text" data-translate="professor_documents">Documente Profesori</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Sidenav Menu End -->