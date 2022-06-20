<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width: 600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;width:720px">

<table border="0" cellpadding="0" cellspacing="0" width="720px">
    <!-- LOGO -->
    <tr>
        <td bgcolor="#b8860b" align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" >
                <tr>
                    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#b8860b" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top"
                        style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                         <img
                            src="http://hotelsvenues.com/front_assets/images/hotelvenueslogo.png" width="125"
                            height="120" style="display: block; border: 0px;"/>
                            
                            
                    </td>
                </tr>
            </table>
			
			
			
			<h3>Bookings</h3>
	  
	    <h5 class="m-auto">
                                    Hotel Name:{{ $booking->hname }} 
                                </h5>
								 <h5 class="m-auto">
                                    Venue Name:{{ $booking->vname }} 
                                </h5>
	     
                            <table class="table table-bordered table-checkable" id="hotelKeyList"  border="1"  width="100%" style="max-width: 600px;">
                                <thead>
                                <tr>
                                    <th>Event Title</th>
                                    <th>Venue Name</th>
									  <th>Start Date</th>
									    <th>End  Date</th>
                                    
                                    <th>Menu Price</th>
									<th>Venue Price</th>
									<th>Total Price</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td class="text-center">{{$booking->event_title}}</td>
										<td class="text-center">{{$booking->vname}}</td>
										<td class="text-center">{{$booking->start_time}}</td>
										<td class="text-center">{{$booking->end_time}}</td>
										
										
										<td class="text-center">{{$booking->menu_price}}</td>
										
										<td class="text-center">{{$booking->venue_price}}</td>
										
										<td class="text-center">{{$booking->total_price}}</td>
										
										
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							
							<?php
							if($menus!='')
							{
								?>
							<h3> Menu Details </h3>
							
							    <table class="table table-bordered table-checkable"  border="1" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Menu Name</th>
                                    <th>Menu Category</th>
									 <th>Menu Type</th>
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >{{$menus->menu_name}}</td>
										<td >{{$menus->menu_category}}</td>
										<td >{{$menus->menu_type}}</td>
									
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							<?php 
							}
							?>
							
							
							<table class="table table-bordered table-checkable"  border="1" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Capacities</th>
                                    <td>{{$booking->capacities}}</td>
									 
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >Facilities</td>
										<td>{{$booking->facilities}}</td>
										
									
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							
							<?php
							if($type=='hotel' || $type=='admin')
							{
								?>
							
							<h3> Customer Details </h3>
							
							<table class="table table-bordered table-checkable" border="1" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$booking->cname}}</td>
									 
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >Address</td>
										<td>{{$booking->area}}</td>
										
									
										
                                    
                                    </tr>
									
									  <tr>
                                        
                                        <td >Email</td>
										<td>{{$booking->email}}</td>
										
									
										
                                    
                                    </tr>
                               <tr>
                                        
                                        <td >Mobile No</td>
										<td>{{$booking->mobile}}</td>
										
									
										
                                    
                                    </tr>
                                </tbody>
                            </table>
			
			
			        <?php 
							}
							if($type=='customer' || $type=='admin')
							{
								?>
								<h3> Hotel Details </h3>
							
							<table class="table table-bordered table-checkable" border="1" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$booking->mname}}</td>
									 
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >Address</td>
										<td>{{$booking->mlocation}}</td>
										
									
										
                                    
                                    </tr>
									
									  <tr>
                                        
                                        <td >Email</td>
										<td>{{$booking->memail}}</td>
										
									
										
                                    
                                    </tr>
                               <tr>
                                        
                                        <td >Mobile No</td>
										<td>{{$booking->mmobile}}</td>
										
									
										
                                    
                                    </tr>
                                </tbody>
                            </table>
								<?php
							}
							?>
			
        </td>
    </tr>


 <tr>
                    <td bgcolor="#ffffff" align="left"
                    >
                        <p style="margin: 0;">
                            <img
                                src="http://hotelsvenues.com/front_assets/images/hotelsvenues_signature.jpg"
                                height="150" style="display: block; border: 0px; width:720px"/>
                        </p>
                    </td>
                </tr>

           
           
            </table>
        </td>
    </tr>
	
	  
	
	

</table>
</body>

</html>
