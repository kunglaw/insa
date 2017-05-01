<!-- BEGIN .content -->
<div class="content">

<!-- BEGIN .wrapper -->
<div class="wrapper">

  <div class="content-wrapper">
  
    <!-- BEGIN .composs-main-content -->
    <div class="composs-main-content composs-main-content-s-1">
  
        <?php
  			// panel 
			
			$this->load->view("template/panel1");
			
			$this->load->view("template/panel2");
			
			$this->load->view("template/panel3");
		?>
  
    <!-- END .composs-main-content -->
    </div>
  
    <!-- BEGIN #sidebar -->
    <aside id="sidebar" >
  
       <?php $this->load->view("template/sidebar") ?>
  
    <!-- END #sidebar -->
    </aside>
  
  </div>
  
  <!-- END .wrapper -->
  </div>

<!-- BEGIN .content -->
</div>