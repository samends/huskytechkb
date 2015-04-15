<?php
/**
 The template used for displaying article categories
 */

?>        <?php $site_url=get_site_url(); ?>
        
        <section class="rowbottom" id="catagories">
        <h3 id="categorytitle"> Categories </h3>
        <div class="kb-categories mini-layout fluid container-fluid">
        	<div class="categoryrow1 row-fluid">
            	  <div class="category-spot spot8 span2"><a href="<?php echo $site_url.'/uconn-accounts/'; ?>"></a><center><p class="category-title">Accounts</p></center>
                  </div>
                  <div class="category-spot spot1 span2"><a href="<?php echo $site_url.'/macos/'; ?>"></a><center><p class="category-title">Mac OS</p></center>
                  </div>
                   <div class="category-spot spot6 span2"><a href="<?php echo $site_url.'/windowsos/'; ?>"></a><center><p class="category-title">Windows OS</p></center>
                  </div>
                  <div class="category-spot spot2 span2"><a href=" <?php echo $site_url.'/mobileos/'; ?>"></a><center><p class="category-title">Mobile OS</p></center>
                  </div>
              </div>
              
              <div class="categoryrow2 row-fluid">
                   <div class="category-spot spot5 span2"><a href=" <?php echo $site_url.'/network-telecom/'; ?>"></a><center><p class="category-title">Networking/<span class="break"><br></span>Telecom</p></center>
                  </div>
                  <div class="category-spot spot4 span2"><a href="<?php echo $site_url.'/software/'; ?>"></a><center><p class="category-title">Software</p></center>
                  </div>
                  <div class="category-spot spot7 span2"><a href=" <?php echo $site_url.'/uconn-services/'; ?>"></a><center><p class="category-title">UConn Services</p></center>
                  </div>
                  <div class="category-spot spot3 span2"><a href="http://huskytech.uconn.edu/" ></a><center><p class="category-title" >Need assistance?</p></center>
                  </div>
              </div>
              
         <div class="category-dropdown dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            Categories
            <span class="caret"></span>
            </button>
            <ul class="category-dropdown-menu dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li> <a href="<?php echo $site_url.'/uconn-accounts/'; ?>" role="menuitem" tabindex="-1" href="#">Accounts</a></li>
                <li> <a href="<?php echo $site_url.'/macos/'; ?>" role="menuitem" tabindex="-1" href="#">Mac OS</a></li>
                <li> <a  href="<?php echo $site_url.'/windowsos/'; ?>" role="menuitem" tabindex="-1" href="#">Windows OS</a></li>
                <li ><a href=" <?php echo $site_url.'/mobileos/'; ?>" role="menuitem" tabindex="-1" href="#">Mobile OS</a></li>
                <li><a href=" <?php echo $site_url.'/network-telecom/'; ?>" role="menuitem" tabindex="-1" href="#">Networking</a></li>
                <li><a href="<?php echo $site_url.'/software/'; ?>" role="menuitem" tabindex="-1" href="#">Software</a></li>
                <li><a href=" <?php echo $site_url.'/uconn-services/'; ?>" role="menuitem" tabindex="-1" href="#">UConn Services</a></li>
            </ul>
		 </div>
              
            </div>
        </section>