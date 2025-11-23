<div class="card mx-auto" style="max-width:420px; margin-top:40px;">
  <div class="card-header"><h4>Sign in</h4></div>
  <div class="card-body">
    <form method="post" action="<?= site_url('auth/login') ?>">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input class="form-control" name="username" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <div class="d-grid">
        <button class="btn btn-primary" type="submit">Sign in</button>
      </div>
    </form>
  </div>
</div>