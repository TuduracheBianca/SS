<!-- Topbar Start -->
<header class="app-topbar">
    <div class="page-container topbar-menu">
        <div class="d-flex align-items-center gap-2">

            <!-- Brand Logo -->
            <a href="{SITE_URL}/home" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><img src="{BASE_URL}/assets/images/logo.png" alt="logo"></span>
                    <span class="logo-sm"><img src="{BASE_URL}/assets/images/logo-sm.png" alt="small logo"></span>
                </span>
                    <span class="logo-dark">
                    <span class="logo-lg"><img src="{BASE_URL}/assets/images/logo-dark.png" alt="dark logo"></span>
                    <span class="logo-sm"><img src="{BASE_URL}/assets/images/logo-sm.png" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Menu Toggle Button -->
            <button class="sidenav-toggle-button btn btn-secondary btn-icon">
                <i class="ti ti-menu-deep fs-24"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="topnav-toggle-button" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="ti ti-menu-deep fs-22"></i>
            </button>

            <!-- Button Trigger Search Modal -->
            <div class="topbar-search text-muted d-none d-xl-flex gap-2 align-items-center" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                <i class="ti ti-search fs-18"></i>
                <span class="me-2" data-translate="search">Search something..</span>
                <button type="submit" class="ms-auto btn btn-sm btn-primary shadow-none">⌘K</button>
            </div>

            
        </div>

        <div class="d-flex align-items-center gap-2">

            <!-- Search for small devices -->
            <div class="topbar-item d-flex d-xl-none">
                <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                    <i class="ti ti-search fs-22"></i>
                </button>
            </div>

            <!-- Language Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{BASE_URL}/assets/images/flags/us.svg" alt="user-image" class="w-100 rounded" height="18" id="selected-language-image">
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item translate-lang" data-lang="en">
                            <img src="{BASE_URL}/assets/images/flags/us.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item translate-lang" data-lang="ro">
                            <img src="{BASE_URL}/assets/images/flags/ro.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">Romanian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item translate-lang" data-lang="de">
                            <img src="{BASE_URL}/assets/images/flags/de.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item translate-lang" data-lang="hu">
                            <img src="{BASE_URL}/assets/images/flags/hu.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">Hungarian</span>
                        </a>


                    </div>
                </div>
            </div>

            <!-- Notification Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button class="topbar-link btn btn-outline-primary btn-icon dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-bell animate-ring fs-22"></i>
                        <span class="noti-icon-badge"></span>
                    </button>

                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
                        <div class="p-3 border-bottom border-dashed">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold" data-translate="notifications">Notifications</h6>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none link-dark" data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                            <i class="ti ti-settings fs-22 align-middle"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item" data-translate="mark_read">Mark as Read</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item" data-translate="delete_all">Delete All</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item" data-translate="do_not_disturb">Do not Disturb</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item" data-translate="other_settings">Other Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative z-2 rounded-0" style="max-height: 300px;" data-simplebar>
                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{BASE_URL}/assets/images/users/avatar-2.jpg" class="avatar-md rounded-circle" alt="" />
                                        <span class="position-absolute rounded-pill bg-danger notification-badge">
                                            <i class="ti ti-message-circle"></i>
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Glady Haid</span> <span data-translate="commented">commented</span> on <span class="fw-medium text-body">paces admin status</span>
                                        <br />
                                        <span class="fs-12">25m ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                            <i class="ti ti-x fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{BASE_URL}/assets/images/users/avatar-4.jpg" class="avatar-md rounded-circle" alt="" />
                                        <span class="position-absolute rounded-pill bg-info notification-badge">
                                            <i class="ti ti-currency-dollar"></i>
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Tommy Berry</span> <span data-translate="donated">donated</span> <span class="text-success">$100.00</span> for <span class="fw-medium text-body">Carbon removal program</span>
                                        <br />
                                        <span class="fs-12">58m ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-2">
                                            <i class="ti ti-x fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                <span class="d-flex align-items-center">
                                    <div class="avatar-md flex-shrink-0 me-3">
                                        <span class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                            <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <span class="flex-grow-1 text-muted">
                                        <span data-translate="you_withdraw">You withdraw a</span> <span class="fw-medium text-body">$500</span> by <span class="fw-medium text-body">New York ATM</span>
                                        <br />
                                        <span class="fs-12">2h ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-3">
                                            <i class="ti ti-x fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{BASE_URL}/assets/images/users/avatar-7.jpg" class="avatar-md rounded-circle" alt="" />
                                        <span class="position-absolute rounded-pill bg-secondary notification-badge">
                                            <i class="ti ti-plus"></i>
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Richard Allen</span> <span data-translate="followed_you">followed you in</span> <span class="fw-medium text-body">Facebook</span>
                                        <br />
                                        <span class="fs-12">3h ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-4">
                                            <i class="ti ti-x fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{BASE_URL}/assets/images/users/avatar-10.jpg" class="avatar-md rounded-circle" alt="" />
                                        <span class="position-absolute rounded-pill bg-danger notification-badge">
                                            <i class="ti ti-heart-filled"></i>
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Victor Collier</span> <span data-translate="liked_photo">liked you recent photo in</span> <span class="fw-medium text-body">Instagram</span>
                                        <br />
                                        <span class="fs-12">10h ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-5">
                                            <i class="ti ti-x fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notification-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2" data-translate="view_all">
                            View All
                        </a>
                    </div>
                </div>
            </div>

            <!-- Apps Dropdown -->
            <div class="topbar-item d-none d-sm-flex">
                <div class="dropdown">
                    <button class="topbar-link btn btn-outline-primary btn-icon dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-apps fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0">
                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/slack.svg" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/gitlab.svg" alt="Github">
                                        <span>Gitlab</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/dribbble.svg" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/bitbucket.svg" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/dropbox.svg" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/google-cloud.svg" alt="G Suite">
                                        <span>G Cloud</span>
                                    </a>
                                </div>
                            </div> <!-- end row-->

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/aws.svg" alt="bitbucket">
                                        <span>AWS</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/digital-ocean.svg" alt="dropbox">
                                        <span>Server</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{BASE_URL}/assets/images/brands/bootstrap.svg" alt="G Suite">
                                        <span>Bootstrap</span>
                                    </a>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div>
            </div>

            

            <!-- Light/Dark Mode Button -->
            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link btn btn-outline-primary btn-icon" id="light-dark-mode" type="button">
                    <i class="ti ti-moon fs-22"></i>
                </button>
            </div>

            <!-- User Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <a class="topbar-link btn btn-outline-primary dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,22" type="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{BASE_URL}/assets/images/users/avatar-1.jpg" width="24" class="rounded-circle me-lg-2 d-flex" alt="user-image">
                        <span class="d-lg-flex flex-column gap-1 d-none">
                            Dhanoo K.
                        </span>
                        <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0" data-translate="welcome">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                            <span class="align-middle" data-translate="my_account">My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ti ti-settings me-1 fs-17 align-middle"></i>
                            <span class="align-middle" data-translate="settings">Settings</span>
                        </a>


                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item active fw-semibold text-danger">
                            <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                            <span class="align-middle" data-translate="sign_out">Sign Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent">
            <div class="card mb-0 shadow-none">
                <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                    <i class="ti ti-search fs-22"></i>
                    <input type="search" class="form-control border-0" id="search-modal-input" placeholder="Search for actions, people,">
                    <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Sistem de traducere directă în pagină cu toate elementele pentru toate sidebar-urile
document.addEventListener('DOMContentLoaded', function() {
    const translations = {
        'en': {
            // Topbar translations
            'search': 'Search something..',
            'notifications': 'Notifications',
            'mark_read': 'Mark as Read',
            'delete_all': 'Delete All',
            'do_not_disturb': 'Do not Disturb',
            'other_settings': 'Other Settings',
            'view_all': 'View All',
            'welcome': 'Welcome !',
            'my_account': 'My Account',
            'settings': 'Settings',
            'sign_out': 'Sign Out',
            'commented': 'commented on',
            'donated': 'donated',
            'you_withdraw': 'You withdraw a',
            'followed_you': 'followed you in',
            'liked_photo': 'liked you recent photo in',
            
            // Sidebar 1 translations (Administrare)
            'home': 'Home',
            'administration': 'Administration',
            'persons': 'Persons',
            'students': 'Students',
            'student_list': 'Student List',
            'add_student': 'Add Student',
            'professors': 'Professors',
            'professor_list': 'Professor List',
            'add_professor': 'Add Professor',
            'years': 'Years',
            'year_list': 'Year List',
            'add_year': 'Add Year',
            'subjects': 'Subjects',
            'subject_list': 'Subject List',
            'add_subject': 'Add Subject',
            'groups': 'Groups',
            'group_list': 'Group List',
            'add_group': 'Add Group',
            'documents': 'Documents',
            'student_documents': 'Student Documents',
            'professor_documents': 'Professor Documents',
            
            // Sidebar 2 translations (Student)
            'catalog': 'Catalog',
            'grades': 'Grades',
            'absences': 'Absences',
            'school_situation': 'School Situation',
            'notes': 'Notes',
            'documents_student': 'Documents',
            'schedule': 'Schedule',
            'course_schedule': 'Course Schedule',
            'exam_schedule': 'Exam Schedule',
            'study_contract': 'Study Contract',
            
            // Sidebar 3 translations (Profesor)
            'exam_scheduling': 'Exam Scheduling',
            'students': 'Students',
            'upload_grades': 'Upload Grades',
            'reviews': 'Reviews'
        },
        'ro': {
            // Topbar translations
            'search': 'Caută ceva..',
            'notifications': 'Notificări',
            'mark_read': 'Marchează ca Citit',
            'delete_all': 'Șterge Tot',
            'do_not_disturb': 'Nu Deranja',
            'other_settings': 'Alte Setări',
            'view_all': 'Vezi Tot',
            'welcome': 'Bine ai venit !',
            'my_account': 'Contul Meu',
            'settings': 'Setări',
            'sign_out': 'Deconectare',
            'commented': 'a comentat la',
            'donated': 'a donat',
            'you_withdraw': 'Ai retras un',
            'followed_you': 'te-a urmărit pe',
            'liked_photo': 'ți-a plăcut recent fotografia pe',
            
            // Sidebar 1 translations (Administrare)
            'home': 'Acasă',
            'administration': 'Administrare',
            'persons': 'Persoane',
            'students': 'Studenți',
            'student_list': 'Listă Studenți',
            'add_student': 'Adăugare Student',
            'professors': 'Profesori',
            'professor_list': 'Listă Profesori',
            'add_professor': 'Adăugare Profesor',
            'years': 'Ani',
            'year_list': 'Listă Ani',
            'add_year': 'Adăugare An',
            'subjects': 'Materii',
            'subject_list': 'Listă Materii',
            'add_subject': 'Adăugare Materie',
            'groups': 'Grupe',
            'group_list': 'Listă Grupe',
            'add_group': 'Adăugare Grupă',
            'documents': 'Documente',
            'student_documents': 'Documente Studenți',
            'professor_documents': 'Documente Profesori',
            
            // Sidebar 2 translations (Student)
            'catalog': 'Catalog',
            'grades': 'Note',
            'absences': 'Absențe',
            'school_situation': 'Situație Școlară',
            'notes': 'Notițe',
            'documents_student': 'Documente',
            'schedule': 'Orar',
            'course_schedule': 'Orar Cursuri',
            'exam_schedule': 'Orar Examene',
            'study_contract': 'Contract Studii',
            
            // Sidebar 3 translations (Profesor)
            'exam_scheduling': 'Programare Examene',
            'students': 'Cursanți',
            'upload_grades': 'Încarcă Note',
            'reviews': 'Recenzii'
        },
        'de': {
            // Topbar translations
            'search': 'Suche etwas..',
            'notifications': 'Benachrichtigungen',
            'mark_read': 'Als gelesen markieren',
            'delete_all': 'Alle löschen',
            'do_not_disturb': 'Nicht stören',
            'other_settings': 'Andere Einstellungen',
            'view_all': 'Alle anzeigen',
            'welcome': 'Willkommen !',
            'my_account': 'Mein Konto',
            'settings': 'Einstellungen',
            'sign_out': 'Abmelden',
            'commented': 'kommentierte zu',
            'donated': 'spendete',
            'you_withdraw': 'Sie haben abgehoben',
            'followed_you': 'folgte Ihnen auf',
            'liked_photo': 'gefiel Ihr aktuelles Foto auf',
            
            // Sidebar 1 translations (Administrare)
            'home': 'Startseite',
            'administration': 'Verwaltung',
            'persons': 'Personen',
            'students': 'Studenten',
            'student_list': 'Studentenliste',
            'add_student': 'Student hinzufügen',
            'professors': 'Professoren',
            'professor_list': 'Professorenliste',
            'add_professor': 'Professor hinzufügen',
            'years': 'Jahre',
            'year_list': 'Jahresliste',
            'add_year': 'Jahr hinzufügen',
            'subjects': 'Fächer',
            'subject_list': 'Fächerliste',
            'add_subject': 'Fach hinzufügen',
            'groups': 'Gruppen',
            'group_list': 'Gruppenliste',
            'add_group': 'Gruppe hinzufügen',
            'documents': 'Dokumente',
            'student_documents': 'Studentendokumente',
            'professor_documents': 'Professorendokumente',
            
            // Sidebar 2 translations (Student)
            'catalog': 'Katalog',
            'grades': 'Noten',
            'absences': 'Abwesenheiten',
            'school_situation': 'Schulsituation',
            'notes': 'Notizen',
            'documents_student': 'Dokumente',
            'schedule': 'Stundenplan',
            'course_schedule': 'Kursplan',
            'exam_schedule': 'Prüfungsplan',
            'study_contract': 'Studienvertrag',
            
            // Sidebar 3 translations (Profesor)
            'exam_scheduling': 'Prüfungsterminplanung',
            'students': 'Studenten',
            'upload_grades': 'Noten hochladen',
            'reviews': 'Bewertungen'
        },
        'hu': {
            // Topbar translations
            'search': 'Keress valamit..',
            'notifications': 'Értesítések',
            'mark_read': 'Olvasottnak jelöl',
            'delete_all': 'Összes törlése',
            'do_not_disturb': 'Ne zavarjanak',
            'other_settings': 'Egyéb beállítások',
            'view_all': 'Összes megtekintése',
            'welcome': 'Üdvözöljük !',
            'my_account': 'Fiókom',
            'settings': 'Beállítások',
            'sign_out': 'Kijelentkezés',
            'commented': 'hozzászólt ehhez',
            'donated': 'adományozott',
            'you_withdraw': 'Ön kivett egy',
            'followed_you': 'követett téged itt',
            'liked_photo': 'kedvelte a legutóbbi fotód itt',
            
            // Sidebar 1 translations (Administrare)
            'home': 'Kezdőlap',
            'administration': 'Adminisztráció',
            'persons': 'Személyek',
            'students': 'Hallgatók',
            'student_list': 'Hallgatói lista',
            'add_student': 'Hallgató hozzáadása',
            'professors': 'Oktatók',
            'professor_list': 'Oktatói lista',
            'add_professor': 'Oktató hozzáadása',
            'years': 'Évek',
            'year_list': 'Év lista',
            'add_year': 'Év hozzáadása',
            'subjects': 'Tárgyak',
            'subject_list': 'Tárgy lista',
            'add_subject': 'Tárgy hozzáadása',
            'groups': 'Csoportok',
            'group_list': 'Csoport lista',
            'add_group': 'Csoport hozzáadása',
            'documents': 'Dokumentumok',
            'student_documents': 'Hallgatói dokumentumok',
            'professor_documents': 'Oktatói dokumentumok',
            
            // Sidebar 2 translations (Student)
            'catalog': 'Katalógus',
            'grades': 'Jegyek',
            'absences': 'Hiányzások',
            'school_situation': 'Iskolai helyzet',
            'notes': 'Jegyzetek',
            'documents_student': 'Dokumentumok',
            'schedule': 'Órarend',
            'course_schedule': 'Kurzus menetrend',
            'exam_schedule': 'Vizsga menetrend',
            'study_contract': 'Tanulmányi szerződés',
            
            // Sidebar 3 translations (Profesor)
            'exam_scheduling': 'Vizsgaidőpont-beosztás',
            'students': 'Hallgatók',
            'upload_grades': 'Jegyek feltöltése',
            'reviews': 'Értékelések'
        }
    };

    // Event listeners pentru butoanele de limbă
    document.querySelectorAll('.translate-lang').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const lang = this.getAttribute('data-lang');
            translatePage(lang);
        });
    });

    function translatePage(lang) {
        // Actualizează steagul
        const flagImage = document.getElementById('selected-language-image');
        const selectedFlag = document.querySelector(`[data-lang="${lang}"] img`);
        if (flagImage && selectedFlag) {
            flagImage.src = selectedFlag.src;
        }

        // Traduce textul din topbar și toate sidebar-urile
        if (translations[lang]) {
            Object.keys(translations[lang]).forEach(key => {
                const elements = document.querySelectorAll(`[data-translate="${key}"]`);
                elements.forEach(element => {
                    if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                        element.placeholder = translations[lang][key];
                    } else {
                        element.textContent = translations[lang][key];
                    }
                });
            });
        }

        // Salvează preferința
        localStorage.setItem('selected-language', lang);
        
        // Afișează mesaj de succes
        showToast(`Language changed to ${getLanguageName(lang)}`);
    }

    function getLanguageName(lang) {
        const names = {
            'en': 'English',
            'ro': 'Romanian', 
            'de': 'German',
            'hu': 'Hungarian'
        };
        return names[lang] || lang;
    }

    function showToast(message) {
        // Creează un toast simplu
        const toast = document.createElement('div');
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            z-index: 10000;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        `;
        toast.textContent = message;
        document.body.appendChild(toast);

        setTimeout(() => {
            document.body.removeChild(toast);
        }, 3000);
    }

    // Încarcă limba salvată la pornire
    const savedLang = localStorage.getItem('selected-language');
    if (savedLang && savedLang !== 'en') {
        translatePage(savedLang);
    }
});
</script>

<style>
/* Sidebar negru - CSS adăugat în topbar */
.sidenav-menu {
    background-color: #1a1a1a !important;
    border-right: 1px solid #2d2d2d !important;
}

.side-nav {
    background-color: #1a1a1a !important;
}

.side-nav-link {
    color: #e9ecef !important;
    border-color: #2d2d2d !important;
}

.side-nav-link:hover,
.side-nav-link:focus {
    background-color: #2d2d2d !important;
    color: #ffffff !important;
}

.side-nav-link[aria-expanded="true"] {
    background-color: #2d2d2d !important;
}

.side-nav-item .menu-icon {
    color: #adb5bd !important;
}

.side-nav-title {
    color: #6c757d !important;
}

.sub-menu {
    background-color: #252525 !important;
}

.sub-menu .side-nav-link {
    background-color: #252525 !important;
    color: #dee2e6 !important;
}

.sub-menu .side-nav-link:hover {
    background-color: #2d2d2d !important;
    color: #ffffff !important;
}

/* Ascunde logo-dark și afișează logo-light */
.logo-dark {
    display: none !important;
}

.logo-light {
    display: block !important;
}

/* Butoane sidebar */
.button-sm-hover,
.button-close-fullsidebar {
    color: #adb5bd !important;
    background-color: #2d2d2d !important;
    border-color: #3d3d3d !important;
}

.button-sm-hover:hover,
.button-close-fullsidebar:hover {
    background-color: #3d3d3d !important;
    color: #ffffff !important;
}
</style>

<script>
// Dark Mode Toggle
document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('light-dark-mode');
    const htmlElement = document.documentElement;
    
    // Verifică dacă utilizatorul are o preferință salvată
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    
    // Aplică modul salvat la încărcare
    if (isDarkMode) {
        enableDarkMode();
    }
    
    // Event listener pentru butonul de dark mode
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', function() {
            toggleDarkMode();
        });
    }
    
    function toggleDarkMode() {
        if (htmlElement.getAttribute('data-bs-theme') === 'dark') {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    }
    
    function enableDarkMode() {
        htmlElement.setAttribute('data-bs-theme', 'dark');
        localStorage.setItem('darkMode', 'true');
        updateDarkModeIcon(true);
    }
    
    function disableDarkMode() {
        htmlElement.removeAttribute('data-bs-theme');
        localStorage.setItem('darkMode', 'false');
        updateDarkModeIcon(false);
    }
    
    function updateDarkModeIcon(isDark) {
        const icon = darkModeToggle.querySelector('i');
        if (icon) {
            if (isDark) {
                icon.className = 'ti ti-sun fs-22';
            } else {
                icon.className = 'ti ti-moon fs-22';
            }
        }
    }
    
    // Verifică preferința sistemului la încărcare
    if (!localStorage.getItem('darkMode')) {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            enableDarkMode();
        }
    }
});

// Ascultă pentru schimbări la nivel de sistem
if (window.matchMedia) {
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (!localStorage.getItem('darkMode')) {
            if (e.matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
            } else {
                document.documentElement.removeAttribute('data-bs-theme');
            }
        }
    });
}
</script>