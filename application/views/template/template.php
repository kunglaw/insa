<div class="boxed">

  <?php 
  	
	$this->load->view("template/header"); 
  
  	$this->load->view("template/slider");
	
	$this->load->view("template/content");
	
	$this->load->view("template/footer");
  ?>
  
  
  <div class="ot-follow-share">
    <a href="#" class="ot-color-facebook" data-h-title="Facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="ot-color-twitter" data-h-title="Twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="ot-color-google-plus" data-h-title="Google+"><i class="fa fa-google-plus"></i></a>
    <a href="#" class="ot-color-rss" data-h-title="RSS Feed"><i class="fa fa-rss"></i></a>
  </div>
  
  <div class="ot-responsive-menu-header">
    <a href="#" class="ot-responsive-menu-header-burger"><i class="material-icons">menu</i></a>
    <a href="index-2.html" class="ot-responsive-menu-header-logo"><img src="<?=ASSET."images/logo.png"?>" alt="" /></a>
  </div>
  
  <!-- END .boxed -->
  </div>
  
  <div class="ot-responsive-menu-content-c-header">
  <a href="#" class="ot-responsive-menu-header-burger"><i class="material-icons">menu</i></a>
  </div>
  
  <div class="ot-responsive-menu-content">
  <div class="ot-responsive-menu-content-inner has-search">
    <form action="http://composs.orange-themes.com/html/blog.html" method="get">
        <input type="text" value="" placeholder="Search" />
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <ul id="responsive-menu-holder"></ul>
  </div>
  </div>
  
  <div class="ot-responsive-menu-background"></div>
