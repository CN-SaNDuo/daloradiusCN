
                                <ul id="subnav">

                                                <li><a href="bill-pos.php"><?php echo $l ['Secondary menu']['POS'] ?></a></li>
                                                <li><a href="bill-plans.php"><?php echo $l ['Secondary menu']['Plans'] ?></a></li>
                                                <li><a href="bill-rates.php"><?php echo $l ['Secondary menu']['Rates'] ?></a></li>
                                                <li><a href="bill-merchant.php"><?php echo $l ['Secondary menu']['Merchant-Transactions'] ?></a></li>
                                                <li><a href="bill-history.php"><?php echo $l ['Secondary menu']['Billing-History'] ?></a></li>
                                                <li><a href="bill-invoice.php"><?php echo $l ['Secondary menu']['Invoices'] ?></a></li>
                                                <li><a href="bill-payments.php"><?php echo $l ['Secondary menu']['Payments'] ?></a></li>
						<div id="logindiv" style="text-align: right;">

                                                <li><?php echo $l ['Operator information top']['Location'] ?>: <b><?php echo $_SESSION['location_name'] ?></b></li><br/>
                                                <li><?php echo $l ['Operator information top']['Salutatory'] ?>: <?php echo $operator; ?></li>
                                                <li><a href="logout.php"><?php echo $l ['Operator information top']['Logout'] ?></a></li>

                                </ul>
								
                </div>

