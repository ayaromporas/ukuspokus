<div class="panel panel-default col-6">
  <div class="panel-heading">
    <h3 class="panel-title">Register User</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Name</label>
    		<input type="text" name="name" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Email</label>
    		<input type="text" name="email" class="form-control" />
    	</div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" />
        </div>
    	<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control" />
    	</div>

        <label>Status</label><br>
          <input type="radio" name="status" value="1"> Super admin<br>
          <input type="radio" name="status" value="2"> Admin<br>
          <input type="radio" name="status" value="3" checked> Editor<br><br>
    	<input class="btn btn-primary" name="submit" type="submit" value="Add" />
    </form>
  </div>
</div>