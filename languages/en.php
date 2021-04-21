<?php

function language($lang)
{
	$arr[' '] = " ";
	$arr[':'] = " : ";
	$arr['/'] = " / ";
	$arr['-'] = " - ";
	$arr['*'] = " * ";
	
	$arr['edit'] = "Edit";
	$arr['delete'] = "Delete";
	$arr['en'] = "English";
	$arr['ar'] = "Arabic";
	$arr['first'] = "First";
	$arr['next'] = "Next";
	$arr['previous'] = "Previous";
	$arr['last'] = "Last";
	$arr['comment'] = "Comment";
	$arr['share'] = "Share";
	$arr['dealer'] = "Dealer";
	$arr['myaccount'] = "My Account";
	
	//	Messages
	$arr['m01'] = "Success";
	$arr['m1'] = "Success";
	$arr['m2'] = "Something Wrong";
	$arr['m3'] = "Check file type";
	$arr['m4'] = "Add Your Advertisement URL Correctly";
	$arr['m5'] = "All inputs are required";
	$arr['m6'] = "Two password must be equals";
	$arr['m7'] = "Password must be more than or equal 8 characters";
	$arr['m8'] = "From input text must be smaller than or equal To input text";
	$arr['m9'] = "Username is invalid";
	$arr['m10'] = "The Balance is transfered to you Successfully";
	$arr['m11'] = "Your message was sent";
	$arr['m12'] = "Fill all fields correctly";
	$arr['m13'] = "Username or Email is invalid";
	$arr['m14'] = "Wrong Email or Password";
	$arr['m15'] = "ِAccount not Activate Yet";
	$arr['m16'] = "ِAccount already Active";
	
	// Ourteam
	$arr['more'] = "More";
	$arr['job'] = "Job";
	$arr['team'] = "Team";
	$arr['ourteam'] = "Our Team";
	$arr['newourteam'] = "New Team Member";
	$arr['noourteam'] = "There Are No Team Members";
	$arr['deleteourteammodal'] = "Are You Sure You Want To Delete This Team Member ?";
	$arr['description'] = "Description";
	
	// Wish
	$arr['wish'] = "Wish";
	$arr['wait'] = "Wait ...";
	
	// 
	$arr['slogan'] = "Extraordinary Is Our Ordinary";
	$arr['copyright'] = "All rights reserved. Designed and developed by";
	$arr['contactslogan'] = "Feel free to contact us";
	$arr['form'] = "Form";
	$arr['home'] = "Home";
	$arr['about'] = "About";
	$arr['address'] = "Address";
	$arr['message'] = "Message";
	$arr['send'] = "Send";
	$arr['email'] = "Email";
	$arr['name'] = "Name";
	
	//  Menu
	$arr['googleanalytics'] = "Google Analytics";
	$arr['cities'] = "Cities";
	$arr['system'] = "System";
	$arr['advertisements'] = "Advertisements";
	$arr['services'] = "Services";
	$arr['portfolio'] = "Portfolio";
	$arr['contact'] = "Contact";
	$arr['register'] = "Register";
	$arr['login'] = "Login";
	$arr['admins'] = "Admins";
	$arr['dealers'] = "Dealers";
	$arr['users'] = "Users";
	$arr['account'] = "Account";
	$arr['administrator'] = "Administrator";
	$arr['orders'] = "Orders";
	
	// Advertisements
	$arr['top'] = "Top";
	$arr['left'] = "Left";
	
	// Users
	$arr['deleteausermodal'] = "Are You Sure You Want To Delete This User ?";
	$arr['user'] = "User";
	
	
	// Admins
	$arr['active'] = "Active";
	$arr['admin'] = "Admin";
	$arr['newadmin'] = "New Admin";
	$arr['noadmins'] = "There are no Admins";
	$arr['deleteadminmodal'] = "Are You Sure You Want To Delete This Admin ?";
	$arr['productstype'] = "Products Type";
	$arr['productssample'] = "Products Sample";
	$arr['images'] = "Images";
	
	// System
	$arr['websitename'] = "Website Name";
	$arr['slogan'] = "Slogan";
	$arr['currency'] = "Currency";
	$arr['logo'] = "Logo";
	$arr['nodata'] = "No Data";
	$arr['paiementemail'] = "Paiement Process Email";
	
	// Homepage
	$arr['newimage'] = "New Image";
	$arr['changeimage'] = "Change Image";
	$arr['shopnew'] = "Shop Now";
	$arr['fastlook'] = "Fast Look";
	$arr['descount20'] = "Descount 20%";
	$arr['fasdirect'] = "Fashion Direct";
	$arr['newestfasdirect'] = "Newest Fashion Direct";
	
	// GoogleAnalytics
	$arr['code'] = "Code";
	
	// Cities
	$arr['deletecitymodal'] = "Are You Sure You Want To Delete This City ?";
	$arr['shipping'] = "Shipping";
	
	// About
	$arr['body'] = "Who We Are";
	$arr['vision'] = "Our Vision";
	$arr['mission'] = "Our Mission";
	$arr['values'] = "Our Values";
	$arr['logostory'] = "Logo Story";
	
	// Pages
	$arr['pageurl'] = "Page URL";
	$arr['pages'] = "Pages";
	$arr['newpage'] = "New Page";
	$arr['page'] = "Page";
	$arr['nopages'] = "There are no Pages";
	$arr['deletepagemodal'] = "Are You Sure You Want To Delete This Page ?";
	$arr['keywords'] = "Keywords";
	
	// Contact
	$arr['phone'] = "Phone";
	$arr['sphone'] = "Sales No.";
	$arr['facebook'] = "Facebook";
	$arr['twitter'] = "Twitter";
	$arr['googleplus'] = "Google Plus";
	$arr['linkedin'] = "Linked IN";
	$arr['skype'] = "Skype";
	$arr['instagram'] = "Instagram";
	$arr['pinterest'] = "Pinterest";
	$arr['youtube'] = "Youtube";
	
	// Testimonials
	$arr['job'] = "Job";
	$arr['company'] = "Company";
	$arr['website'] = "website";
	$arr['testimonials'] = "Testimonials";
	$arr['notestimonials'] = "There Are No Testimonials";
	$arr['newtestimonial'] = "New Testimonial";
	$arr['deletetestimonialmodal'] = "Are You Sure You Want To Delete This Testimonial ?";
	
	// Categories
	$arr['all'] = "All";
	$arr['icon'] = "Icon";
	$arr['title'] = "Title";
	$arr['nocategories'] = "There Are No categories";
	$arr['categories'] = "Categories";
	$arr['currectcategories'] = "Currect Categories";
	$arr['newcategory'] = "New Category";	
	$arr['deletecategorymodal'] = "Are You Sure You Want To Delete This Category ?";
	
	// Sizes
	$arr['sizes'] = "Sizes";
	$arr['currentsizes'] = "Current Sizes";
	$arr['newsize'] = "New Size";
	$arr['size'] = "Size";
	$arr['nosizes'] = "There are no Sizes";
	$arr['deletesizemodal'] = "Are You Sure You Want To Delete This Size ?";
	
	// Colors
	$arr['colors'] = "Colors";
	$arr['currentcolors'] = "Current Colors";
	$arr['newcolor'] = "New Color";
	$arr['color'] = "Color";
	$arr['nocolors'] = "There are no Colors";
	$arr['deletecolormodal'] = "Are You Sure You Want To Delete This Color ?";
	
	// Products	
	$arr['details'] = "Details";
	$arr['noproducts'] = "There Are No Products";
	$arr['product'] = "Product";
	$arr['products'] = "Products";
	$arr['newproduct'] = "New Product";	
	$arr['deleteproductmodal'] = "Are You Sure You Want To Delete This Product ?";
	$arr['oldprice'] = "Old Price";
	$arr['price'] = "Price";
	$arr['quantity'] = "Quantity";
	$arr['inputmatch'] = "Must Be Filled Out";
	$arr['selectmatch'] = "Must Be Sellected";	
	$arr['oldpricematch'] = "Input Must Be Like 00.00";
	$arr['pricematch'] = "Input Must Be Like 00.00";
	$arr['quantitymatch'] = "Input Must Be Number";
	$arr['views'] = "Views";
	$arr['view'] = "View";
	
	// Sales
	$arr['sale'] = "Sale";
	$arr['sales'] = "Sales";
	$arr['nosales'] = "There Are No Sales";
	$arr['delivered'] = "Delivered";
	$arr['nondelivered'] = "Non Delivered";
	$arr['deletesalemodal'] = "Are You Sure You Want To Delete This Sale ?";
	$arr['time'] = "Time";
	$arr['dtime'] = "Delivery Time";
	$arr['number'] = "Number";
	
	
	//	FrontEnd
	
	// Orders
	$arr['noorders'] = "There are no Orders";
	$arr['notarrived'] = "Not Arrived Yet";
	$arr['arrived'] = "Arrived";
	
	//	Product
	$arr['addtocart'] = "Add To Cart";
	$arr['unitprice'] = "Unit Price";
	$arr['total'] = "Total";
	$arr['mycartproducts'] = "My Shopping Bag";
	$arr['checkout'] = "Checkout";
	$arr['emptycart'] = "Empty Cart";
	$arr['yourcartisempty'] = "Your Cart Is Empty";
	$arr['paymessage'] = "Pay Message";
	$arr['paycancel'] = "You Cancel Paiment Method";
	$arr['paysuccess'] = "Your Paiment was Success and the Sale ID is : ";
	$arr['search'] = "Search";
	$arr['followus'] = "Follow Us";
	$arr['links'] = "Links";
	$arr['paymethod'] = "Pay Method";
	$arr['select'] = "Select";
	$arr['paypal'] = "PayPal";
	$arr['ondelivery'] = "On Delivery";
	$arr['cantbuy'] = "Cant Buy Becouse You have 3 items should delivered";
	$arr['city'] = "City";
	
	// Categories
	$arr['men'] = "Men";
	$arr['kids'] = "Kids";
	$arr['underwear'] = "Underwear";
	$arr['homewear'] = "Homewear";
	$arr['socks'] = "Socks";
	$arr['boxer'] = "Boxer";
	$arr['undershirt'] = "Undershirt";
	$arr['longunderwear'] = "Long Underwear";
	$arr['pajama'] = "Pajama";
	$arr['sweatpant'] = "Sweatpant";
	$arr['towel'] = "Towel";
	$arr['robe'] = "Robe";	
	
	// Offers
	$arr['offers'] = "Offers";
	$arr['newoffer'] = "New Offer";
	$arr['offer'] = "Offer";
	$arr['nooffer'] = "There are no Offers";
	$arr['deleteoffermodal'] = "Are You Sure You Want To Delete This Offer ?";
	$arr['hurryoffer'] = "HURRY UP AND CALL US NOW";
	
	// Portfolio
	$arr['noprojects'] = "There Are No Projects";
	$arr['newproject'] = "New Project";
	
	$arr['reset'] = "Reset";
	$arr['accept'] = "Accept";
	$arr['year'] = "Years";
	$arr['members'] = "Members";
	$arr['appearto'] = "Appear To";
	
	// Clients	
	$arr['newclient'] = "New Client";
	$arr['clients'] = "Clients";
	$arr['noclients'] = "There Are No Clients";
	$arr['deleteclientmodal'] = "Are You Sure You Want To Delete This Client ?";
	
	// admin
	$arr['countries'] = "Countries";
	$arr['hello'] = "Hello";
	$arr['image'] = "Image";
	$arr['agree'] = "AGREE";
	$arr['no'] = "NO";	
	
	//	designs/forms/login.php
	$arr['nowuser'] = "Current User";
	$arr['username'] = "Username";
	$arr['mobile'] = "Mobile No.";
	$arr['password'] = "Password";
	$arr['cmfpassword'] = "Password Confirmation";
	$arr['remember'] = "Remember Me";
	$arr['close'] = "Close";
	$arr['login'] = "LogIn";
	$arr['logout'] = "LogOut";
	$arr['forgotpass'] = "Forgot Password";
	$arr['wronglogin'] = "Enter the right Username and Password";
	$arr['type'] = "Type";
	$arr['person'] = "Person";
	$arr['company'] = "Company";
	
	echo $arr[$lang];
}

?>