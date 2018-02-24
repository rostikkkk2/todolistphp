<div class="form-section hidden" id="registration">
    <div class="logo-authorize-registr">Registration</div>
    <form class="" action="engines/registration.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
        <div class="errors">One error</div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        <div class="errors">One error</div>
      </div>
      <div class="form-group mb-0">
        <label for="confirm-password">Confirm password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
        <div class="errors">One error</div>
      </div>
      <button type="submit"  class="action-button form-group" id="registration_submit" name="button">Sign up</button>
    </form>
</div>
