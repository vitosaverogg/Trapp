
						<div id="myCarousel" class="carousel" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<?php
							$i=0;
							foreach($this->paket_model->get_featured_pic()->result() as $row){
								if($i==0){?>
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<?php}else{?>
								
								<li data-target="#myCarousel" data-slide-to="<?php$i;?>"></li>
							<?php }$i++;}?>
						  </ol>

						  <!-- Wrapper for slides -->
						  
						  <div class="carousel-inner" role="listbox">
						  <?php
							$i=0;
							foreach($this->paket_model->get_featured_pic()->result() as $row){
							if($i==0){
						  ?>
							<div class="item active">
							  <img id="img_jumbo" src=<?php echo "'".base_url().$row->link_gambar."'";?> alt="Chania">
							  <div class="carousel-caption">
								<h3><?php echo $row->nama; ?></h3>
								
							  </div>
							</div>

							<?php
							}else{?>
							<div class="item">
							  <img id="img_jumbo" src=<?php echo "'".base_url().$row->link_gambar."'";?> alt="Chania">
							  <div class="carousel-caption">
								<h3><?php echo $row->nama; ?></h3>
								
							  </div>
							</div>
							<?php
							};
							$i++;}
							?>

						  <!-- Left and right controls -->						  
						  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div><BR>
