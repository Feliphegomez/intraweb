
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
		<button class="close" type="button" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">×</span>
		</button>
	  </div>
	  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
	  <div class="modal-footer">
		<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		<a class="btn btn-primary" href="login.html">Logout</a>
	  </div>
	</div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo path_home; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo path_home; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	  
<!-- Core plugin JavaScript-->
<script src="<?php echo path_home; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo path_home; ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo path_home; ?>vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo path_home; ?>vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo path_home; ?>js/sb-admin.min.js"></script>

<?php
$site = new Route();
$routes = $site->getRoutes();
#echo json_encode($routes);

$pageActiveScripts = "cmr/content/modules/{$site->module}/scripts/{$site->section}.php";
if(file_exists($pageActiveScripts)){
	include($pageActiveScripts);
}else{
	include("Scripts no encontrados");
}
?>