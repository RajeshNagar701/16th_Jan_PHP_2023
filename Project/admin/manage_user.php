<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Manage User</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Profile</th>
                                            <th>User ID</th>
											<th>Name</th>
                                            <th>User Name</th>
											<th>Gender</th>
											<th>Lag</th>
											<th>Countries</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
									if(!empty($customer_arr))
									{
										foreach($customer_arr as $data)
										{
										?>
											<tr class="odd gradeX">
												<td><img src="../web/upload/customer/<?php echo $data->file;?>" width="50px"></td>
												<td><?php echo $data->uid;?></td>
												<td><?php echo $data->name;?></td>
												<td><?php echo $data->unm;?></td>
												<td><?php echo $data->gen;?></td>
												<td><?php echo $data->lag;?></td>
												<td><?php echo $data->cid;?></td>
												
												<td>
													<a href="#" class="btn btn-primary">Edit</a>
													<a href="#" class="btn btn-danger">Delete</a>
													<a href="#" class="btn btn-success"><?php echo $data->status;?></a>
												</td>        
											</tr>
										<?php
										}
									}
									?>    
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
           
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
