<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>StudStack - <?php echo isset($TITLE) ? $TITLE : 'Sign in'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/images/favicon.ico' : '{BASE_URL}/assets/images/favicon.ico'; ?>">
    <link href="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/css/vendor.min.css' : '{BASE_URL}/assets/css/vendor.min.css'; ?>" rel="stylesheet" />
    <link href="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/css/app.min.css' : '{BASE_URL}/assets/css/app.min.css'; ?>" rel="stylesheet" id="app-style" />
    <link href="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/css/icons.min.css' : '{BASE_URL}/assets/css/icons.min.css'; ?>" rel="stylesheet" />
    <style>
        /* center card vertically on page */
        body, html { height: 100%; } /* use main app stylesheet background (match main page) */
        .auth-page { min-height: 100%; display: flex; align-items: center; justify-content: center; padding: 40px 16px; }

        /* logo above the login card */
        .auth-logo { text-align: center; margin-bottom: 20px; }
        .auth-logo img { max-width: 200px; height: auto; display: inline-block; }

        /* password wrapper + icon button */
        .pw-wrapper { position: relative; }
        .pw-wrapper input[type="password"], .pw-wrapper input[type="text"] {
            padding-right: 44px; /* space for the icon button */
            box-sizing: border-box;
        }
        .btn-show-password {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #6c757d;
            cursor: pointer;
            padding: 4px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-show-password img { width: 20px; height: 20px; display: block; }
        .btn-show-password:focus { outline: none; box-shadow: none; }
    </style>
</head>
<body>
    <div class="auth-page">
        <div class="page-container" style="width:100%; max-width:480px;">

            <?php
            // Show an error/notification if set by controller.
            // Controller examples:
            //   // plain PHP session
            //   $_SESSION['error'] = 'Invalid username or password';
            //   // or CodeIgniter
            //   $this->session->set_flashdata('error', 'Invalid username or password');
            //
            $alert = '';
            if (!empty($ERROR)) {
                $alert = $ERROR;
            } elseif (isset($_SESSION) && !empty($_SESSION['error'])) {
                $alert = $_SESSION['error'];
                unset($_SESSION['error']);
            } elseif (function_exists('get_instance')) {
                $CI = get_instance();
                if (isset($CI->session) && method_exists($CI->session, 'flashdata')) {
                    $fd = $CI->session->flashdata('error');
                    if (!empty($fd)) $alert = $fd;
                }
            }

            if (!empty($alert)) : ?>
                <!-- Bottom-center toast (non-blocking popup) -->
                <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3" style="z-index:10800;">
                    <div id="auth-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Notice</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body"><?php echo $alert; ?></div>
                    </div>
                </div>
             <?php endif; ?>

            <!-- Logo above the login form -->
            <div class="auth-logo">
                <img src="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/images/logo.png' : '{BASE_URL}/assets/images/logo.png'; ?>" alt="Site logo">
            </div>

            <?php echo isset($CONTENT) ? $CONTENT : ''; ?>
        </div>
    </div>

    <script src="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/js/vendor.min.js' : '{BASE_URL}/assets/js/vendor.min.js'; ?>"></script>
    <script src="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/js/app.js' : '{BASE_URL}/assets/js/app.js'; ?>"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // show bottom toast if present (5s auto-hide)
        var toastEl = document.getElementById('auth-toast');
        if (toastEl && window.bootstrap && typeof window.bootstrap.Toast === 'function') {
            var toast = new bootstrap.Toast(toastEl, { delay: 5000 });
            toast.show();
        } else if (toastEl) {
            // fallback: show then remove after 5s
            toastEl.classList.add('show');
            setTimeout(function () { if (toastEl.parentNode) toastEl.parentNode.removeChild(toastEl.parentNode); }, 5000);
        }
 
         // URLs for the SVG icons in assets/icons
         var eyeUrl = '<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . "/assets/images/icons/eye.svg" : "{BASE_URL}/assets/icons/eye.svg"; ?>';
         var closeUrl = '<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . "/assets/images/icons/close.svg" : "{BASE_URL}/assets/icons/close.svg"; ?>';

        document.querySelectorAll('input[type="password"]').forEach(function (input) {
            if (input.dataset.showBtnAdded) return;
            input.dataset.showBtnAdded = '1';

            // wrap input to allow absolute-positioned button
            var wrapper = document.createElement('div');
            wrapper.className = 'pw-wrapper';
            input.parentNode.insertBefore(wrapper, input);
            wrapper.appendChild(input);

            var btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'btn-show-password';
            btn.setAttribute('aria-label', 'Show password');

            var img = document.createElement('img');
            img.src = eyeUrl;
            img.alt = '';
            btn.appendChild(img);
            wrapper.appendChild(btn);

            btn.addEventListener('click', function (e) {
                e.preventDefault();
                if (input.type === 'password') {
                    input.type = 'text';
                    img.src = closeUrl;
                    btn.setAttribute('aria-label', 'Hide password');
                } else {
                    input.type = 'password';
                    img.src = eyeUrl;
                    btn.setAttribute('aria-label', 'Show password');
                }
            });
        });
    });
    </script>
</body>
</html>