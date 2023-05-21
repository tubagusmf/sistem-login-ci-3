

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                    	<div class="col col-lg-6">

                    		<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>

                    		<?= $this->session->flashdata('message');  ?>

                    		<button type="button" class="btn btn-info btn-sm mb-3" data-toggle="modal" data-target="#newRoleModal">Add Role</button>

                    		<table class="table table-hover">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Role</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i = 1; ?>
							  	<?php foreach($role as $r) : ?>
							    <tr>
							      <th scope="row"><?= $i; ?></th>
							      <td><?= $r['role']; ?></td>
							      <td>
							      	<a href="<?= base_url('admin/roleaccess/')  .$r['id']; ?>" class="badge bg-warning" style="color: #ffffff;">Access</a>
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
			<div id="newRoleModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">			        
			        <h5 class="modal-title">Add New Role</h5>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <form action="<?= base_url('admin/role'); ?>" method="post">
			      <div class="modal-body">
			        <div class="form-group">
					    <input type="text" class="form-control" name="role" id="role" placeholder="Role Name">
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
           

		


            