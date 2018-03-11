<div class="row">
  	<div class="container">
  		<table class="table">
  			<thead class="thead-dark">
  				<th>Name:</th>
  				<th>username:</th>
  				<th>Email:</th>
  				<th>Action</th>
  			</thead>
  			<tbody>
                <?php 
			       foreach ($users as $user):
			  	?>
	  				<tr>
	  					<td>
	  						<?= $user['name'] ?>
	  					</td>
	  					<td>
	  					   <?= $user['username'] ?>
	  					</td>
	  					<td>
	  					   <?= $user['email'] ?>
	  					</td>
	  					<td>
	  						<a href="<?php echo base_url('users/edit/'.$user['id']) ?>" class="btn btn-success btn-sm">edit</a>
	  						<a href="<?php echo base_url('users/delete/'.$user['id']) ?>" class="btn btn-danger btn-sm">delete</a>
	  						<a href="" class="btn btn-primary btn-sm">show</a>
	  					</td>
	  				</tr>
  			    <?php endforeach ?>
  			</tbody>
  		</table>
  	</div>
</div>
