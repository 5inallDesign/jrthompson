@if(!isset($active_page))
<?php $active_page = ''; ?>
@endif
<header class="header">
	<nav class="navbar">
	  	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="{{url('/')}}"><span class="hidden-xs">Matt Crandell - </span>J.R. Thompson Project</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="mainNav">
			    <ul id="menu-menu" class="nav navbar-nav">
			    	<li><a href="http://www.5inalldesign.com/portfolio">Matt Crandell's Portfolio</a></li>
			    	<li><a href="https://github.com/5inallDesign">Matt Crandell's GitHub</a></li>
				</ul>				
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</header>
<div class="page container-fluid">