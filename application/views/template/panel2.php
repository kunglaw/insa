<!-- BEGIN .composs-panel -->
<div class="composs-panel">

    <div class="composs-panel-title composs-panel-title-tabbed">
        <strong class="active">Headlines</strong>
        <strong>Event</strong>
        <strong>Features</strong>
    </div>

    <div class="composs-panel-inner">
        <div class="composs-panel-tab active">

            <div class="composs-article-list lets-do-3 lets-do-slider">
				
                <?php
				for($i=1;$i<=6;$i++){
				?>
                <div class="item">
                    <div class="item-header">
                        <a href="#" class="img-read-later-button">Read later</a>
                        <a href="<?=base_url("post/detail")?>"><img src="<?=ASSET_URL."images/photos/image-8.jpg"?>" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h2><a href="<?=base_url("post/detail")?>">Wagon Train to the Stars: The Story of Star Trek</a></h2>
                        <span class="item-meta">
                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                            <a href="<?=base_url("post/detail")?>#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                        </span>
                        <span class="item-stars"><span class="stars-inner" data-ot-css="width: 80%;"></span></span>
                    </div>
                </div>
                <?php
				}
				?>
            </div>
        </div>
        <div class="composs-panel-tab">

            <div class="composs-article-list lets-do-4 lets-do-slider">
				<?php
				for($i=0; $i<=8; $i++){
				?>
                <div class="item">
                    <div class="item-header">
                        <a href="#" class="img-read-later-button">Read later</a>
                        <a href="<?=base_url("post/detail")?>"><img src="<?=ASSET_URL."images/photos/image-8.jpg"?>" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h2><a href="<?=base_url("post/detail")?>">Wagon Train to the Stars: The Story of Star Trek</a></h2>
                        <span class="item-meta">
                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                            <a href="<?=base_url("post/detail")?>#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                        </span>
                        <span class="item-stars"><span class="stars-inner" data-ot-css="width: 80%;"></span></span>
                    </div>
                </div>
                <?php
				}
				?>

            </div>
        </div>
        <div class="composs-panel-tab">

            <div class="composs-article-list lets-do-3">

			  <?php
			  for($i=1;$i<=5;$i++){
			  ?>
                <div class="item">
                    <div class="item-header">
                        <a href="#" class="img-read-later-button">Read later</a>
                        <a href="<?=base_url("post/detail")?>"><img src="<?=ASSET_URL."images/photos/image-8.jpg"?>" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h2><a href="<?=base_url("post/detail")?>">Wagon Train to the Stars: The Story of Star Trek</a></h2>
                        <span class="item-meta">
                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                            <a href="<?=base_url("post/detail")?>#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                        </span>
                        <span class="item-stars"><span class="stars-inner" data-ot-css="width: 80%;"></span></span>
                    </div>
                </div>
                <?php
			  	}
				?>

            </div>
        </div>
    </div>

<!-- END .composs-panel -->
</div>