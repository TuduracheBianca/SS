<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>StudStack - <?php echo isset($TITLE) ? html_escape($TITLE) : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

    <!-- vendor / app css -->
    <link href="<?php echo base_url('assets/css/vendor.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/app.min.css'); ?>" rel="stylesheet" id="app-style" />
    <link href="<?php echo base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" />
</head>

<body>
<?php
// provide defaults when controllers don't set them
$CI =& get_instance();
$CI->load->helper('url');
if (! isset($SIDENAV) || empty($SIDENAV)) {
    // choose sidenav by role (fallback to admin-style)
    $CI->load->library('session');
    $role = strtolower((string) ($CI->session->userdata('role') ?? 'guest'));
    switch ($role) {
        case 'student':
        case 'studenti':
            $sidenav_view = 'template/sidenavs';
            break;
        case 'profesor':
        case 'profesori':
            $sidenav_view = 'template/sidenavp';
            break;
        default:
            $sidenav_view = 'template/sidenava';
    }
    if (is_file(APPPATH . 'views/' . $sidenav_view . '.php')) {
        $SIDENAV = $CI->load->view($sidenav_view, [], true);
    } else {
        $SIDENAV = '';
    }
}
if (! isset($TOPBAR) || empty($TOPBAR)) {
    $TOPBAR = is_file(APPPATH . 'views/template/topbara.php') ? $CI->load->view('template/topbara', [], true) : '';
}
if (! isset($FOOTER) || empty($FOOTER)) {
    $FOOTER = is_file(APPPATH . 'views/template/footer.php') ? $CI->load->view('template/footer', [], true) : '';
}

// If CONTENT not provided, try to auto-load view based on controller/method
if (! isset($CONTENT) || $CONTENT === '') {
    $controller = strtolower($CI->router->fetch_class());
    $method     = strtolower($CI->router->fetch_method());
    $cand_paths = [
        $controller . '/' . $method,
        $controller . '/index',
        $controller . '/lista',
        $controller . '/list',
        $controller . '/add'
    ];
    foreach ($cand_paths as $vp) {
        if (is_file(APPPATH . 'views/' . $vp . '.php')) {
            // use parser if loaded and view contains parser tags would be controller responsibility;
            $CONTENT = $CI->load->view($vp, isset($CI->view_data) ? $CI->view_data : [], true);
            break;
        }
    }
    $CONTENT = $CONTENT ?? '';
}

// perform placeholder replacement so legacy views using {BASE_URL}/{SITE_URL} keep working
$__base = rtrim(base_url(), '/');
$__site = rtrim(site_url(), '/');
$__search  = ['{BASE_URL}/', '{SITE_URL}/', '{BASE_URL}', '{SITE_URL}'];
$__replace = [$__base . '/', $__site . '/', $__base, $__site];

$SIDENAV = is_string($SIDENAV) ? str_replace($__search, $__replace, $SIDENAV) : $SIDENAV;
$TOPBAR  = is_string($TOPBAR)  ? str_replace($__search, $__replace, $TOPBAR)  : $TOPBAR;
$CONTENT = is_string($CONTENT) ? str_replace($__search, $__replace, $CONTENT) : $CONTENT;
$FOOTER  = is_string($FOOTER)  ? str_replace($__search, $__replace, $FOOTER)  : $FOOTER;
?>

    <div class="wrapper">

        <!-- SIDENAV (rendered from controller or default) -->
        <?php echo isset($SIDENAV) ? $SIDENAV : ''; ?>

        <!-- MAIN CONTENT -->
        <div class="content-page">
            <!-- TOPBAR -->
            <?php echo isset($TOPBAR) ? $TOPBAR : ''; ?>

            <div class="page-content">
                <div class="container-fluid">
                    <?php echo isset($CONTENT) ? $CONTENT : ''; ?>
                </div>
            </div>

            <!-- FOOTER -->
            <?php echo isset($FOOTER) ? $FOOTER : ''; ?>
        </div>
    </div>

    <!-- vendor / app js -->
    <script src="<?php echo base_url('assets/js/vendor.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</body>
</html>