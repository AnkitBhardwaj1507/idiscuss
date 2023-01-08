
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="signupModalLabel">Signup</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/forum/partials/_handleSignup.php" method = "post">
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
         
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="signupPassword">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">confirm Password</label>
                <input type="password" class="form-control" id="signupCPassword" name="signupCPassword">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>