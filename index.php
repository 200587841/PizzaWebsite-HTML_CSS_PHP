<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>NSD Pizza</title>
		<meta name="author" content="Natalia Selestrini Dias" />
		<meta name="description" content="HTML, CSS, and JS Fundamentals - Assignment 1 - Pizza website">
		<link rel="shortcut icon" href="favicon.png" type="x-icon" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
		<!-- Page-level header --> 
		<header>
			<h1 id="h1header">Build Your Own Pizza</h1>
			<h2 id="h2header">Release your imagination and enjoy it!</h2>
		</header>


		<!-- Page-level main content -->
		<main>
			
			<!-- FORM beginning -->
			<form action="order.php" method="get">
				
				<article>
					<h3>1. NUMBER OF PIZZAS</h3>
					<input type="number" id="quantity" name="quantity" min="1" required> 
				</article>

				<article>
					<h3>2. SIZE</h3>
					<input type="radio" id="size1" name="size" value="Small - 10in">
					<label for="size1"> Small - 10in</label>
					<input type="radio" id="size2" name="size" value="Medium - 12in">
					<label for="size2"> Medium - 12in</label>
					<input type="radio" id="size3" name="size" value="Large - 14in">
					<label for="size3"> Large - 14in</label>
					<input type="radio" id="size4" name="size" value="X-Large - 16in">
					<label for="size4"> X-Large - 16in</label>
				</article>

				<article>
					<h3>3. SHAPE</h3>
					<input type="radio" id="shape1" name="shape" value="Square">
					<label for="shape1"> Square</label>
					<input type="radio" id="shape2" name="shape" value="Round">
					<label for="shape2"> Round</label>
				</article>

				<article>
					<h3>4. CRUST</h3>
					<input type="radio" id="crust1" name="crust" value="Deep Dish">
					<label for="crust1"> Deep dish</label>
					<input type="radio" id="crust2" name="crust" value="Thin Crust">
					<label for="crust2"> Thin Crust</label>
					<input type="radio" id="crust3" name="crust" value="Hand Tossed">
					<label for="crust3"> Hand Tossed</label>
				</article>

				<article>
					<h3>5. SAUCE</h3>
					<input type="radio" id="sauce1" name="sauce" value="Traditional (Tomatoes)">
					<label for="sauce1"> Traditional (Tomatoes)</label>
					<input type="radio" id="sauce2" name="sauce" value="BBQ Sauce">
					<label for="sauce2"> BBQ Sauce</label>
					<input type="radio" id="sauce3" name="sauce" value="White Pizza (No Sauce)">
					<label for="sauce3"> White Pizza (No Sauce)</label>
				</article>

				<article>
					<h3>6. TOPPINGS</h3>
					<legend>Choose Meats</legend><br>
						<input type="checkbox" id="topping1" name="topping1" value="Pepperoni">
  						<label for="topping1"> Pepperoni</label>
 						<input type="checkbox" id="topping2" name="topping2" value="Sausage">
  						<label for="topping2"> Sausage</label>
  						<input type="checkbox" id="topping3" name="topping3" value="Ham">
  						<label for="topping3"> Ham</label>
						<input type="checkbox" id="topping4" name="topping4" value="Bacon">
  						<label for="topping4"> Bacon</label>
						<input type="checkbox" id="topping5" name="topping5" value="Chicken">
  						<label for="topping5"> Chicken</label>
					<legend>Choose Others</legend><br>
						<input type="checkbox" id="topping6" name="topping6" value="Black Olives">
  						<label for="topping6"> Black Olives</label>
 						<input type="checkbox" id="topping7" name="topping7" value="Green Olives">
  						<label for="topping7"> Green Olives</label>
  						<input type="checkbox" id="topping8" name="topping8" value="Mushroom">
  						<label for="topping8"> Mushroom</label>
						<input type="checkbox" id="topping9" name="topping9" value="Pineapple">
  						<label for="topping9"> Pineapple</label>
						<input type="checkbox" id="topping10" name="topping10" value="Tomatoes">
  						<label for="topping10"> Tomatoes</label>
						<input type="checkbox" id="topping11" name="topping11" value="Onion">
  						<label for="topping11"> Onion</label>
						<br><br>
										
						<label for="instruct">Special Instructions:</label><br>
						<input type="text" id="instruct" name="instruct" placeholder="cut type, add utensils, add napkins, etc"><br>
				</article>

				<article>
					<h3>7. ORDER DETAILS</h3>
					<input type="radio" id="orderType1" name="orderType" value="Take Out">
					<label for="orderType1"> Take Out</label>
					<input type="radio" id="orderType2" name="orderType" value="Delivery">
					<label for="orderType2"> Delivery</label>
					<input type="radio" id="orderType3" name="orderType" value="Eat-in">
					<label for="orderType3"> Eat-in</label>
				</article>
						
				<article>
					<h3>8. MORE INFORMATION</h3>
					<fieldset>
					<legend>Personal:</legend>
						<label for="fname">First name:</label>
						<input type="text" id="fname" name="fname" required>
						<label for="lname">Last name:</label>
						<input type="text" id="lname" name="lname" required>
						<br>

						<label for="phone">Phone Number: </label>
						<input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
						<label for="emailAddress">Email Address: </label>
						<input type="email" name="emailAddress" id="emailAddress" placeholder="usuario@email.com" required>
						<br>

						<label for="birthday">Birthday:</label required>
						<input type="date" id="birthday" name="birthday">
						<br><br>
					</fieldset>
						
					<fieldset>
					<legend>Full Address:</legend>
						<label for="number">Number:</label>
						<input type="number" id="number" name="number" required> 
						<label for="streetName">Street Name:</label>
						<input type="text" id="streetName" name="streetName" required>
						<label for="city">City:</label>
						<input type="text" id="city" name="city" required>
						<br>

						<label for="province">Province:</label>
						<select>
							<option value="AB">AB</option>
							<option value="BC">BC</option>
							<option value="MB">MB</option>
							<option value="NB">NB</option>
							<option value="NL">NL</option>
							<option value="NS">NS</option>
							<option value="ON">ON</option>
							<option value="PE">PE</option>
							<option value="QC">QC</option>
							<option value="SK">SK</option>
							<option value="NT">NT</option>
							<option value="NU">NU</option>
							<option value="YT">YT</option>
						</select>
						<label for="postalCode">Postal Code:</label>
						<input type="text" id="postalCode" name="postalCode" required>													
					</fieldset><br><br>
				
					<!-- Reset Button -->
					<input type="reset" name="reset" value="Start Over">

					<!-- Submit Button -->
					<input type="submit" name="submit" value="Order">				

				</article>

			</form>
		</main>
		
		
		<!-- Page-level footer -->
		<footer>
			<p><small>© Natalia Selestrini Dias</small></p>
		</footer>
	</body>
</html>
