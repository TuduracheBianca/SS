<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>StudStack - <?php echo isset($TITLE) ? $TITLE : ''; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/images/favicon.ico' : '{BASE_URL}/assets/images/favicon.ico'; ?>">
  <link href="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/css/vendor.min.css' : '{BASE_URL}/assets/css/vendor.min.css'; ?>" rel="stylesheet" />
  <link href="<?php echo isset($BASE_URL) ? rtrim($BASE_URL, '/') . '/assets/css/app.min.css' : '{BASE_URL}/assets/css/app.min.css'; ?>" rel="stylesheet" id="app-style" />
</head>
<body>
  <div class="page-content">
    <div class="page-container">
      <?php echo isset($CONTENT) ? $CONTENT : ''; ?>
    </div>
  </div>
</body>
</html>