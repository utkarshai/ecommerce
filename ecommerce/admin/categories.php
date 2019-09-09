
<?php

require_once('db_connect.php');

require_once('header.php');


if($_POST){
	$cat_name=$_POST['cat_name'];     
	$cat_description=$_POST['cat_desc'];
	$cat_img=$_FILES['cat_image']['name'];
	move_uploaded_file($_FILES['cat_image']['tmp_name'],'../images/'.$cat_img);
	
	echo $ins="insert into categories (cat_name,cat_description,cat_image)
	values('$cat_name','$cat_description','$cat_img')";
	$query=mysqli_query($con,$ins);
	
}
?>   
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">  
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php require_once('sidebar.php');?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

					<div class="center-box">	
					<div class="row">
					<form method="post" name="add category" action="" enctype="multipart/form-data">
					<div class="admin-txt-heading"><h2>ADD CATEGORIES</h2></div>
					<div class="col-md-6">Parent category</div>
					<div class="col-md-6">
					<select name="parent_id">
						<option value="0">parent category</option>
					<?php 
						$sel="select * from categories";
						$cat_query=mysqli_query($con,$sel);
						while($rows=mysqli_fetch_array($cat_query)){
						?>
						<option value="<?php echo $rows['cat_id']?>"><?php echo $rows['cat_name']?></option>
					</div>
					<?php
						}
						?>
						</select>
						</div>
					<div class="row">	
					<div class="col-md-6">Category Name</div>
					<div class="col-md-6"><input type="text" name="cat_name"></div>
					
					
					
					<div class="col-md-6">Category Description</div>
					<div class="col-md-6"><textarea name="cat_desc"></textarea></div>
					
					
					<div class="col-md-6">Category image </div>
					<div class="col-md-6"><input type="file" name="cat_image"></div>
					</div>
					
					<div class="col-md-6"><input type="Submit" name="submit" value="Add Category" class="btn-success btn-lg "></div>
					</form>
					</div>
					</div>
					
					
<?php
require_once('footer.php');
?>					

											

										

										

										

									

																

																
																

			