<!-- BEGIN .composs-panel -->
<div class="composs-panel">

    <div class="composs-panel-title">
        <strong>Most recent articles</strong>
    </div>

    <div class="composs-panel-inner">

        <div class="composs-blog-list lets-do-1">
		  <?php
		  for($i=1;$i<=6;$i++){
		  ?>
            <div class="item">
                <div class="item-header">
                    <a href="#" class="img-read-later-button">Read later</a>
                    <a href="<?=base_url("post/detail")?>"><img src="<?=ASSET_URL."images/photos/image-11.jpg"?>" alt="" /></a>
                </div>
                <div class="item-content">
                    <h2><a href="<?=base_url("post/detail")?>">4 Shocking Things From Civil War That You Won't See in the Movie</a></h2>
                    <span class="item-meta">
                        <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                        <a href="<?=base_url("post/detail")?>#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                    </span>
                    <p>With the recent trailers and more plot points about Captain America: Civil War being made known, it is becoming more and more likely that Civil War is going to be a different...</p>
                </div>
            </div>
          <?php
		  }
		  ?>

        </div>

    </div>

    <div class="composs-panel-pager">
        <a class="prev page-numbers" href="#"><i class="fa fa-angle-double-left"></i>Previous</a>
        <a class="page-numbers" href="#">1</a>
        <span class="page-numbers current">2</span>
        <a class="page-numbers" href="#">3</a>
        <a class="page-numbers" href="#">4</a>
        <a class="page-numbers" href="#">5</a>
        <a class="next page-numbers" href="#">Next<i class="fa fa-angle-double-right"></i></a>
    </div>

    <div class="composs-panel-pager">
        <a href="#" class="composs-pager-button">View more articles</a>
    </div>

    <div class="composs-panel-pager">
        <a href="#" class="composs-pager-button left"><i class="fa fa-angle-double-left"></i>Newer posts</a>
        <a href="#" class="composs-pager-button right active">Older posts<i class="fa fa-angle-double-right"></i></a>
        <p>3 of 7 pages</p>
    </div>

<!-- END .composs-panel -->
</div>