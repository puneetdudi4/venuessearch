<table class="table" >		
		<tr>
									
									 <td width="10%"># </td>
										 
									 <td width="10%">
											<strong>Image</strong>
									 </td>
										   
									
									<td width="50%">
											<strong>Menu Name</strong>
									 </td>
								
										
									<td width="30%">
										<strong>Total Price</strong>
									</td>
									</tr>
		
		<?php
									$i=1;
								foreach ($menus	 as $menu)
								{
									
									
												if($menu->discount !='0.00')
												{
													$price=$menu->cost;
													
													
													
													$discount=$price*($menu->discount/100);
													$cost=$price-$discount;
													$total_price=$cost +10;
													
												}
												else
												{
												$total_price=$menu->cost+10;
												}
									?>
									<tr>
									
									  <td>
											<input type="radio"  name="menu_id" onclick="menu_price(<?php echo $total_price ?>,<?php echo $i?>)" style="height:30px">
									  </td>
										 
										<td>
											<div class="food-img">
												
												
													<a href="{{ asset('storage/hotels_sub_entity_menu/'.$menu->doc_file)}}" target="_blank" >
											<img src="{{asset('uploads/pdf.png')}}" alt="{{ $menu->title  }} " alt="Food" width="75px" height="75px"  >
											</a>
												
											</div>
										 </td>
										 <td>
											<div class="food-dec">
												<h4><?php echo $menu->title ?>  </h4>
												
											
												<p class="price"> 
												<?php 
												if($menu->discount !='0.00')
												{
													//$price=$menu->cost;
													echo "Original Price:<del style='color:red'> AED".$price ."</del>";
													
													
													$discount=$price*($menu->discount/100);
													$cost=$price-$discount;
													?>
													<span style="margin-left:20px; color:green">Discount Price:AED<?php echo $total_price?> </span>
													<?php
													
												}
												else
												{
												echo "Price: AED".$total_price;
												}
												?>
												</p>
												
													<p>
												 
												 
												  <a href="{{ asset('storage/hotels_sub_entity_menu/'.$menu->doc_file)}}" target="_blank" > View Menu </a>
												</p>
											</div>
										</td>
									
										<td>
										<input type="text" name="menu_total_price[<?php echo $menu->id?>]"  class="price" id="price<?php echo $i?>" >
										</td>
										
										
									</tr>
						
						 <?php
						     $i++;
								}
						  ?>		
						  
						  </table>

  <input type="hidden" id="menu_count" value="<?php echo $i?>">
