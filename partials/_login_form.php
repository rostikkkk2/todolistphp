<section class="form-section" id="authorization">
    <form class="" action="engines/login.php" method="post">
      <h1>Authorization</h1>
      <div class="form-group">
        <label for="login_email">Email</label>
        <input type="text" id="login_email" name="email" placeholder="Enter email">
        <div class="errors">One error</div>
      </div>
      <div class="form-group">
        <label for="login_password">Password</label>
        <input type="password" id="login_password" name="password" placeholder="Enter password">
        <div class="errors">One error</div>
      </div>
      <button type="submit" class="action-button" id="authorization_submit" name="button">Authorize</button>
  </form>
</section>
