<div class="row">
  <div class="container">
  	<?php echo form_open('users/update',['class'=>'form']);?>
  	  <?php echo form_hidden('user_id',$user[0]['id']);?>
      <div class="form-group">
	     <label for="name">Name</label>
	     <input  class="form-control" type="text" name="name" value="<?= $user[0]['name'] ?>">
      </div>
      <div class="form-group">
	     <label for="email">Email</label>
	     <input class="form-control" type="text" name="email" value="<?= $user[0]['email'] ?>">
      </div>
      <div class="form-group">
	     <label for="username">username</label>
	     <input class="form-control" type="text" name="username" value="<?= $user[0]['username'] ?>">
      </div>
      <div class="form-group">
	     <label for="password">Password:</label>
	     <input class="form-control" type="password" name="password">
      </div>

      <div class="form-group">
       <label for="cpassword">Confirm Password:</label>
       <input class="form-control" type="password" name="cpassword">
      </div>
      <input class="pull-right" type="submit" name="update" value="update">
   </form>
  </div>
</div>
