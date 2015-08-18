<html>
<head>
	<title>Portfolio CMS</title>
	<meta name="description" content="The most creatively named content management system on the internet.">
	
	<script src="../dist/jquery-2.1.4.min.js"></script>
	
	<link rel="stylesheet" href="../dist/bootstrap-3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="./united-bootstrap.css">
	<script src="../dist/bootstrap-3.3.5/js/bootstrap.js"></script>
	
	<style>
		.jumbotron { margin-top: -20px; }
		.container-flow { padding-bottom: 15px; }
		.container-flow.alt { background-color: #eee; }
		footer { padding: 15px 0; }
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Portfolio CMS</a>
			</div>
			<div class="collapse navbar-collapse" id="navigation">
				<ul class="nav navbar-nav">
					<li><a href="#">Video</a></li>
					<li><a href="#">Photography</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Portfolio CMS</h1>
					<p>A powerful CMS backend to make building portfolio websites quick and painless</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-flow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Welcome</h1>
					<p class="lead">How many simple portfolios have you made in your lifetime? Probably dozens.<br>It's a saturated market with every Tom, Dick and Harry wanting to showcase their work.</p>
					<p>If you've even made only a handful of these websites you will understand how tiresome and repetitive it can get. Sure each one looks different but they all function the same way. It's not worth your time or your clients money to be developing the same website over and over again but there aren't many other options out there. You could use Wordpress or something similar but the majority of CMSs out there cater more for blogs than anything else. Sure there are plugins and galleries you can put in but it's all a bit hacked together and never as elegant as it could be.</p>
					<p>This framework provides a pre-packaged user backend so that you don't have to mess around hooking up a database and writing scripts to upload, edit and retrieve content.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-flow alt">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Dependencies</h2>
					<p>So like many things in the modern age of the internet, this little CMS has a handful of dependencies. Don't worry though, they are definitely worth it and are quite robust.</p>
					<p>One day I might remove these dependencies and make the whole thing self sustainable but these will make development a lot faster and pain free (not to mention they are awesome).</p>
					<h3>Bootstrap <small><a href="http://getbootstrap.com/">getbootstrap.com</a></small></h3>
					<p>Ah, Bootstrap. The <em>"most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web"</em>.</p>
					<p>It's both a gift and a curse. So many websites these days look identical thanks to the popularity of Bootstrap and, although it is worth its weight in gold in terms of speeding up the development process, you lose some creativity and freedom that comes from building from the ground up. Nevertheless I've used Bootstrap for the layout of the CMS because it is so simple and easy to use (and I'm lazy).</p>
					<h3>jQuery <small><a href="http://jquery.com/">jquery.com</a></small></h3>
					<p>Writing Javascript without jQuery has been identified by scientists as one of the leading causes of mental breakdown amongst the web development community. So for the sake of my own well being, I've used jQuery.</p>
					<h3>CKEditor <small><a href="http://ckeditor.com/">ckeditor.com</a></small></h3>
					<p>Content editing online can be a pain in the ass. CKEditor is super flexible and super easy to use which makes it an obvious choice when looking for a text editor. As well as being really functional, you can theme it to make it fit your website which is a huge plus.</p>
					<h3>KCFinder <small><a href="http://kcfinder.sunhater.com/">kcfinder.sunhater.com</a></small></h3>
					<p>So the file management sibling of CKEditor is CKFinder but money is a thing and I'm a cheap uni student so rather than paying for the official CKEditor companion, I usually go for the open-source, freely available KCFinder. It does the same things but without as much flair and is a great way to allow users to manage files on their site.</p>
				</div>
			</div>
		</div>
	</div>
	<footer class="container-flow text-right">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					Developed with love and coffee by <a href="http://drewcollins.me/">Drew Collins</a>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>