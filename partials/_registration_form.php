<section class="form-section hidden" id="registration">
    <h1>Registration</h1>
    <form class="" action="engines/registration.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter email">
        <div class="errors">One error</div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password">
        <div class="errors">One error</div>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm password</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password">
        <div class="errors">One error</div>
      </div>
      <button type="submit" class="action-button" id="registration_submit" name="button">Sign up</button>
    </form>
</section>
