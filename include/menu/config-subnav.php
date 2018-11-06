
                                <ul id="subnav">

					<li><a href="config-main.php"><?php echo $l ['Secondary menu']['General'] ?></a></li>
					<li><a href="config-reports.php"><?php echo $l ['Secondary menu']['Reporting'] ?></a></li>
					<li><a href="config-maint.php"><?php echo $l ['Secondary menu']['Maintenance'] ?></a></li>
					<li><a href="config-operators.php"><?php echo $l ['Secondary menu']['Operators'] ?></li>
					<li><a href="config-backup.php"><?php echo $l ['Secondary menu']['Backup'] ?></li>
					
					<div id="logindiv" style="text-align: right;">
                                                <li><?php echo $l ['Operator information top']['Location'] ?>: <b><?php echo $_SESSION['location_name'] ?></b></li><br/>
                                                <li><?php echo $l ['Operator information top']['Salutatory'] ?>: <?php echo $operator; ?></li>
                                                <li><a href="logout.php"><?php echo $l ['Operator information top']['Logout'] ?></a></li>

                                </ul>
								
                </div>

