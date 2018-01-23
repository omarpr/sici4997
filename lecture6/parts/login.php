<div>
  <div class="row">
    <div class="col-sm-3">
      &nbsp;
    </div>
    <div class="col-sm-6">
        <form method="post" action="index.php?a=doLogin">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
            <input type="hidden" name="action" value="login">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div>