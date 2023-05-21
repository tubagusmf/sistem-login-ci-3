

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                    	<div class="col col-lg">

                    		<?php if (validation_errors()) : ?> 
                    			<div class="alert alert-danger" role="alert">
                    				<?= validation_errors(); ?>
                    			</div>
                    		<?php endif; ?>

                    		<?= $this->session->flashdata('message');  ?>

                    		<button type="button" class="btn btn-info btn-sm mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add Submenu</button>

                    		<table class="table table-hover">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Title</th>
							      <th scope="col">Menu</th>
							      <th scope="col">URL</th>
							      <th scope="col">Icon</th>
							      <th scope="col">Active</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i = 1; ?>
							  	<?php foreach($subMenu as $sm) : ?>
							    <tr>
							      <th scope="row"><?= $i; ?></th>
							      <td><?= $sm['title']; ?></td>
							      <td><?= $sm['menu']; ?></td>
							      <td><?= $sm['url']; ?></td>
							      <td><?= $sm['icon']; ?></td>
							      <td><?= $sm['is_active']; ?></td>
							      <td>
							      	<a href="" class="badge bg-success" style="color: #ffffff;">Edit</a>
							      	<a href="" class="badge bg-danger" style="color: #ffffff;">Delete</a>
							      </td>
							    </tr>	
							    <?php $i++; ?>
							    <?php endforeach; ?>						    
							  </tbody>
							</table>
                    		
                    	</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
			<div id="newSubMenuModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">			        
			        <h5 class="modal-title">Add New Submenu</h5>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <form action="submenu" method="post">
			      <div class="modal-body">
			        <div class="form-group">
					    <input type="text" class="form-control" name="title" id="title" placeholder="Submenu Title">
					</div>
					<div class="form-group">
					    <select name="menu_id" id="menu_id" class="form-control">
					    	<option value="">Select Menu</option>
					    	<?php foreach ($menu as $m) : ?>
					    	<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
					    <?php endforeach; ?>
					    </select>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" name="url" id="url" placeholder="Submenu url"> 
					</div>	
					<div class="form-group">
					    <input type="text" class="form-control" name="icon" id="icon" placeholder="Submenu icon"> 
					</div>
					<div class="form-group">
					      <div class="checkbox">
					        <label for="is_active"><input type="checkbox" name="is_active" id="is_active" value="1" checked> Active?</label>
					      </div>
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary btn-sm">Add</button>
			      </div>
			  	</form>
			    </div>

			  </div>
			</div>
           

		


            