<html>
	<head>
		<title>Minecraft Database</title>
		<link rel="shortcut icon" href="http://localhost/minecraft_interface/files/grass.ico" type="image/x-icon"/>
	</head>
	<body>
		<style>
			body {
				background-image: url(/minecraft_interface/files/dirt.png);
				background-size: 64px 64px;
				background-repeat: repeat;
				cursor: url(/minecraft_interface/files/mcmouse.png), default;
				image-rendering: pixelated;
			}
			table {
				background-image: url(/minecraft_interface/files/quartz_block_bottom.png);
				background-size: 64px 64px;
				background-repeat: repeat;
				image-rendering: pixelated;
			}
		</style>
		<table cellpadding="20">
			<tr>
				<td>
					<h1><b>Function List</b></h1>
				</td>
				<td>
					<h1><b>Input</b></h1>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<h2>Items</h2>
					<a href="listitems.php">List All Items</a><br />
					<a href="iteminfo.php">Item Info</a><br />
					<a href="itemswithmostdurability.php">Items with Most Durability</a><br />
					<a href="itemswithleastdurability.php">Items with Least Durability</a><br />
					<a href="itemswithspecificdurability.php">Items with Specific Durability</a><br />
					<a href="renewableitems.php">Renewable Items</a><br />
					<a href="nonrenewableitems.php">Nonrenewable Items</a><br />
					<br />
					<h2>Blocks</h2>
					<a href="listblocks.php">List All Blocks</a><br />
					<a href="blockinfo.php">Block Info</a><br />
					<a href="blocksdrops.php">Block's Drops</a><br />
					<a href="flammableblocks.php">Flammable Blocks</a><br />
					<a href="fireproofblocks.php">Fireproof Blocks</a><br />
					<a href="tileentities.php">Tile Entities</a><br />
					<a href="tooltoharvestblock.php">Tool to Harvest Block</a><br />
					<a href="blockswithinventories.php">Blocks with Inventories</a><br />
					<a href="blocksaffectedbyfortune.php">Blocks Affected by Fortune</a><br />
					<a href="blocksaffectedbysilktouch.php">Blocks Affected by Silk Touch</a><br />
					<br />
					<h2>Entities</h2>
					<a href="listentities.php">List All Entities</a><br />
					<a href="livingentities.php">Living Entities</a><br />
					<a href="nonlivingentities.php">Nonliving Entities</a><br />
					<a href="hostileentities.php">Hostile Entities</a><br />
					<a href="passiveentities.php">Passive Entities</a><br />
					<a href="entityinfo.php">Entity Info</a><br />
					<a href="mobsdrops.php">Mob's Drops</a><br />
					<a href="entityequipment.php">Entity Equipment</a><br />
					<a href="strongestentities.php">Strongest Entities</a><br />
					<a href="weakestentities.php">Weakest Entities</a><br />
					<a href="entitieswithspecificttack.php">Entities with Specific Attack</a><br />
					<a href="entitieswithmosthp.php">Entities with Most HP</a><br />
					<a href="entitieswithleasthp.php">Entities with Least HP</a><br />
					<a href="entitieswithspecifichp.php">Entities with Specific HP</a><br />
					<a href="itemtobreedmob.php">Item to Breed Mob</a><br />
					<br />
					<h2>Enchantments</h2>
					<a href="listenchantments.php">List All Enchantments</a><br />
					<a href="findenchantsforitem.php">Find Enchants for Item</a><br />
					<a href="finditemsforenchant.php">Find Items for Enchant</a><br />
					<a href="mobsthatuseenchantment.php">Mobs that use Enchantment</a><br />
					<br />
					<h2>Status Effects</h2>
					<a href="liststatuseffects.php">List All Status Effects</a><br />
					<a href="effectorigin.php">Effect Origin</a><br />
					<a href="itemsthatgiveeffects.php">Items that give Effects</a><br />
					<a href="blocksthatgiveeffects.php">Blocks that give Effects</a><br />
					<a href="entitiesthatgiveeffects.php">Entities that give Effects</a><br />
					<br />
					<h2>Recipes</h2>
					<a href="listrecipes.php">List All Recipes</a><br />
					<a href="itemrecipes.php">Item Recipes</a><br />
					<a href="recipesthatuseitem.php">Recipes that use Item</a><br />
					<a href="tbtrecipes.php">2x2 Recipes</a><br />
					<a href="shapedrecipes.php">Shaped Recipes</a><br />
					<a href="shapelessrecipes.php">Shapeless Recipes</a><br />
					<br />
					<h2>Modify</h2>
					<h3>Insert</h3>
					<a href="insertitem.php">Insert Item into Database</a><br />
					<a href="insertblock.php">Insert Block into Database</a><br />
					<a href="insertentity.php">Insert Entity into Database</a><br />
					<a href="insertenchantment.php">Insert Enchantment into Database</a><br />
					<a href="insertstatuseffect.php">Insert Status Effect into Database</a><br />
					<a href="insertcraftingrecipe.php">Insert Crafting Recipe into Database</a><br />
					<a href="insertsmeltingrecipe.php">Insert Smelting Recipe into Database</a><br />
					<a href="insertbrewingrecipe.php">Insert Brewing Recipe into Database</a><br />
					<a href="insertitemenchant.php">Insert Item Enchant into Database</a><br />
					<a href="insertblockdrop.php">Insert Block Drop into Database</a><br />
					<a href="insertharvesttool.php">Insert Harvest Tool into Database</a><br />
					<a href="insertitemeffect.php">Insert Item Effect into Database</a><br />
					<a href="insertblockeffect.php">Insert Block Effect into Database</a><br />
					<a href="insertentityeffect.php">Insert Entity Effect into Database</a><br />
					<a href="insertentitydrop.php">Insert Entity Drop into Database</a><br />
					<a href="insertitementitycanequip.php">Insert Item Entity Can Equip into Database</a><br />
					<a href="insertitementitybreedswith.php">Insert Item Entity Breeds With into Database</a><br />
					<h3>Delete</h3>
					<a href="deleteitem.php">Delete Item from Database</a><br />
					<a href="deleteblock.php">Delete Block from Database</a><br />
					<a href="deleteentity.php">Delete Entity from Database</a><br />
					<a href="deleteenchantment.php">Delete Enchantment from Database</a><br />
					<a href="deletestatuseffect.php">Delete Status Effect from Database</a><br />
					<a href="deletecraftingrecipe.php">Delete Crafting Recipe from Database</a><br />
					<a href="deletesmeltingrecipe.php">Delete Smelting Recipe from Database</a><br />
					<a href="deletebrewingrecipe.php">Delete Brewing Recipe from Database</a><br />
					<a href="deleteitemenchant.php">Delete Item Enchant from Database</a><br />
					<a href="deleteblockdrop.php">Delete Block Drop from Database</a><br />
					<a href="deleteharvesttool.php">Delete Harvest Tool from Database</a><br />
					<a href="deleteitemeffect.php">Delete Item Effect from Database</a><br />
					<a href="deleteblockeffect.php">Delete Block Effect from Database</a><br />
					<a href="deleteentityeffect.php">Delete Entity Effect from Database</a><br />
					<a href="deleteentitydrop.php">Delete Entity Drop from Database</a><br />
					<a href="deleteitementitycanequip.php">Delete Item Entity Can Equip from Database</a><br />
					<a href="deleteitementitybreedswith.php">Delete Item Entity Breeds With from Database</a><br />
				</td>
				<td valign="top">
					<form action="http://localhost/minecraft_interface/files/insertblockdrop.php" method="post">
						<b>Insert Block Drop</b>
						<p>Item ID:
							<input type="text" name="bd_iid" size="30" value="" />
						</p>
						<p>Block ID:
							<input type="text" name="bd_bid" size="30" value="" />
						</p>
						<p>Affected by Fortune:
							<input type="text" name="bd_ft" size="30" value="" />
						</p>
						<p>Affected by Silk Touch:
							<input type="text" name="bd_st" size="30" value="" />
						</p>
						<p>Minimum Drop Amount:
							<input type="text" name="bd_min" size="30" value="" />
						</p>
						<p>Maximum Drop Amount:
							<input type="text" name="bd_max" size="30" value="" />
						</p>
						<p>
							<input type="submit" name="submit" value="Insert" />
						</p>
					</form>
					<?php
					if(isset($_POST['submit'])){
						$errors = array();
						if(empty(trim($_POST['bd_iid']))){
							$errors[] = 'Missing Item ID';
						} else {
							$iid = trim($_POST['bd_iid']);
						}
						if(empty(trim($_POST['bd_bid']))){
							$errors[] = 'Missing Block ID';
						} else {
							$bid = trim($_POST['bd_bid']);
						}
						if(empty(trim($_POST['bd_ft']))){
							$ft = '0';
						} else {
							$ft = trim($_POST['bd_ft']);
							if($ft != '0' && $ft != '1'){
								$errors[] = 'Affected by Fortune Must be 0/1';
							}
						}
						if(empty(trim($_POST['bd_st']))){
							$st = '0';
						} else {
							$st = trim($_POST['bd_st']);
							if($st != '0' && $st != '1'){
								$errors[] = 'Affected by Silk Touch Must be 0/1';
							}
						}
						if(empty(trim($_POST['bd_min']))){
							$min = '0';
						} else {
							$min = trim($_POST['bd_min']);
							if($min < '0'){
								$errors[] = 'Min Drop Amount Cannot be Negative';
							}
						}
						if(empty(trim($_POST['bd_max']))){
							$max = '1';
						} else {
							$max = trim($_POST['bd_max']);
							if($max <= '0'){
								$errors[] = 'Max Drop Amount Must be Greater than 0';
							}
						}
						if($max < $min){
							$errors[] = 'Max Drop Amount Must be Greater than Min';
						}
						
						if(empty($errors)){
							require_once('../mysqli_connect.php');
							$query = "INSERT INTO block_drop (IID, BID, Ft, ST, MinAmnt, MaxAmnt)
										VALUES (?,?,?,?,?,?)";
							$stmt = mysqli_prepare($dbc, $query);
							
							mysqli_stmt_bind_param($stmt, "ssiiii", $iid, $bid, $ft, $st, $min, $max);
							mysqli_stmt_execute($stmt);
							$affected_rows = mysqli_stmt_affected_rows($stmt);
							if($affected_rows == 1) {
								echo 'Block Drop Inserted Successfully';
								mysqli_stmt_close($stmt);
								mysqli_close($dbc);
							} else {
								echo 'ERROR<br />';
								echo mysqli_error($dbc);
								mysqli_stmt_close($stmt);
								mysqli_close($dbc);
							}
						} else {
							echo 'ERROR<br />';
							foreach($errors as $missing) {
								echo "$missing<br />";
							}
						}
					}
					?>
				</td>
			</tr>
		</table>
	</body>
</html>