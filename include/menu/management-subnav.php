
				<ul id="subnav">
						<li><a href="mng-users.php"><?php echo $l ['Secondary menu']['Users'] ?></a></li>
						<li><a href="mng-batch.php"><?php echo $l ['Secondary menu']['Batch Users adding'] ?></a></li>
						<li><a href="mng-hs.php"><?php echo $l ['Secondary menu']['Hotspots Management'] ?></a></li>
						<li><a href="mng-rad-nas.php"><?php echo $l ['Secondary menu']['Nas'] ?></a></li>
                        <li><a href="mng-rad-usergroup.php"><?php echo $l ['Secondary menu']['User-Groups'] ?></a></li>
                         <li><a href="mng-rad-profiles.php"><?php echo $l ['Secondary menu']['Profiles'] ?></a></li>
						<li><a href="mng-rad-hunt.php"><?php echo $l ['Secondary menu']['HuntGroups'] ?></a></li>
						<li><a href="mng-rad-attributes.php"><?php echo $l ['Secondary menu']['Attributes'] ?></a></li>
						<li><a href="mng-rad-realms.php"><?php echo $l ['Secondary menu']['Realms/Proxys'] ?></a></li>
						<li><a href="mng-rad-ippool.php"><?php echo $l ['Secondary menu']['IP-Pool'] ?></a></li>

<div id="logindiv" style="text-align: right;">

                                               <li><?php echo $l ['Operator information top']['Location'] ?>: <b><?php echo $_SESSION['location_name'] ?></b></li><br/>
                                                <li><?php echo $l ['Operator information top']['Salutatory'] ?>: <?php echo $operator; ?></li>
                                                <li><a href="logout.php"><?php echo $l ['Operator information top']['Logout'] ?></a></li>

                                </ul>
		
		</div>
