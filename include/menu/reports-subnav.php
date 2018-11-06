
                                <ul id="subnav">

                                                <li><a href="rep-main.php"><?php echo $l ['Secondary menu']['General'] ?></a></li>
                                                <li><a href="rep-logs.php"><?php echo $l ['Secondary menu']['Logs'] ?></a></li>
                                                <li><a href="rep-status.php"><?php echo $l ['Secondary menu']['Status'] ?></a></li>
												<li><a href="rep-batch.php"><?php echo $l ['Secondary menu']['Batch Users'] ?></a></li>
												<li><a href="rep-hb.php"><?php echo $l ['Secondary menu']['Dashboard'] ?></a></li>

<div id="logindiv" style="text-align: right;">
                                                <li><?php echo $l ['Operator information top']['Location'] ?>: <b><?php echo $_SESSION['location_name'] ?></b></li><br/>
                                                <li><?php echo $l ['Operator information top']['Salutatory'] ?>: <?php echo $operator; ?></li>
                                                <li><a href="logout.php"><?php echo $l ['Operator information top']['Logout'] ?></a></li>

                                </ul>
                                </ul>
								
                </div>

