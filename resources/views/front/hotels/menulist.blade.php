<div style="margin-top:20px">

<h3 style="margin-bottom:20px; color:#888181"> {{ $name}}</h3>


				
									<div class="row" >
									<?php
								
									
									if(count($menus) >0)
									{
								foreach ($menus	 as $menu)
								{
									?>
									<div class="row" style="margin-bottom:15px; border-bottom:solid 1px #ccc; width:100%">
										<div class="col-lg-2">
											<div class="food-img">
												<!--<img src="{{ asset('storage/hotels_sub_entity_menu/'.$menu->image)}}" alt="{{ $menu->title  }} " alt="Food"  >-->
												<a href="{{ asset('storage/hotels_sub_entity_menu/'.$menu->doc_file)}}" target="_blank" >
											<img src="{{asset('uploads/pdf.png')}}" alt="{{ $menu->title  }} " alt="Food" width="75px" height="75px"  >
											</a>
											
											</div>
										 </div>
										 <div class="col-lg-8">
											<div class="food-dec">
												<h4><?php echo $menu->title ?>  </h4>
											
												<p class="price" style="color:red;display:none"> <?php if($menu->discount !='0.00' ) { echo $menu->discount ."%"; }?></p>
												<p class="price"> 
												<?php 
												if($menu->discount !='0.00')
												{
													$price=$menu->cost;
													echo "Original Price:<del style='color:red'> AED".$price ."</del>";
													
													
													$discount=$price*($menu->discount/100);
													$cost=$price-$discount;
													?>
													<span style="margin-left:20px; color:green">Discount Price:AED<?php echo $cost +10?> </span>
													<?php
													
												}
												else
												{
												echo "Price: AED".$menu->cost;
												}?>
												</p>
												<p>
												 
												 
										
												</p>
											</div>
										</div>
									</div>
						
						 <?php
								}
									}
									else
									{
										?>
										<p style="margin-left:20px"> No Menu lists </p>
								    <?php
									}
						  ?>		
						
					
					
						
						
					</div>
											
							
</div>							