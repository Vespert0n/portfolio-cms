<? $collection = $portfolioCMS->getCollectionByURL($page); ?>
<div class="jumbotron" style="margin-top: -20px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><?=$collection['colName']?></h1>
				<p><?=$collection['colDescription']?></p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<nav class="col-sm-3 hidden-xs" id="sidebar">
			<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="290">
				<li><a href="#collection-info">Collection info</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li><a href="#new-item">Add new item</a></li>
			</ul>
		</nav>
		<div class="col-sm-9" id="content">
			<div>
				<h2 id="collection-info">Collection info</h2>
				<form class="form-horizontal" name="collection">
					<input type="hidden" name="collection-id" value="<?=$collection['colCollectionID']?>">
					<div class="form-group">
						<label for="collection-name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="collection-name" placeholder="name" value="<?=$collection['colName']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="collection-description" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea name="collection-description" class="form-control"><?=$collection['colDescription']?></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 pull-right">
							<button type="button" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
			</div>
			<div>
				<h2 id="gallery">Gallery</h2>
				<? $items = $portfolioCMS->getCollectionItems($collection['colCollectionID']);
				$i = 0;
				
				foreach($items as $item) {
					if($i == 0) { ?>
						<div class="row">
					<? } ?>
						<div class="col-xs-6 col-md-4">
							<div class="thumbnail">
								<a href="#">
									<img src="<?=IMAGE_URL.'items/thumb/'.$item['itmThumbURL']?>" alt="<?=$item['itmTitle']?>">
								</a>
								<div class="caption">
									<h3><?=$item['itmTitle']?></h3>
									<p><?=$item['itmDescription']?></p>
									<p>
										<a href="#" class="btn btn-primary">Edit</a>
										<a href="#" class="btn btn-danger">Delete</a>
									</p>
								</div>
							</div>
						</div>
					<? if($i == 2) { ?>
						</div>
					<? }
					
					$i++;
					
					if($i == 3)
						$i = 0;
				} ?>
			</div>
			<div>
				<h2 id="new-item">Add new item</h2>
				<form class="form-horizontal" name="new-item">
					<input type="hidden" name="ni-collection-id" value="<?=$collection['colCollectionID']?>">
					<div class="form-group">
						<label for="ni-title" class="col-sm-2 control-label">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="ni-title" placeholder="title">
						</div>
					</div>
					<div class="form-group">
						<label for="ni-description" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea name="ni-description" class="form-control"></textarea>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>