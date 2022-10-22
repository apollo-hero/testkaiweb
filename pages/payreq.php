								<?php echo "<title>" . $NTFY . $site['name'] . " - Payment Requests" . "</title>"; ?>
                                <div class="p-3">
                                    <div class="p-3 bg-danger mb-3 text-center">
                                        <b>The time zone is <?php echo $site['datetime']['timezone']; ?></b>
                                    </div>
                                    <div class="card border-0">
                                        <div class="table-responsive p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                        	<div class="row mb-3 text-center">
                                        		<div class="col-md-4">
                                        			<span class="text-warning">
														<i class="fad fa-exclamation-circle"></i>
													</span>
													Pending
                                        		</div>
                                        		<div class="col-md-4">
													<span class="text-success">
														<i class="fad fa-check-circle"></i>
													</span>
													Approved
                                        		</div>
                                        		<div class="col-md-4">
                                        			<span class="text-danger">
														<i class="fad fa-times-circle"></i>
													</span>
													Declined
                                        		</div>
                                        	</div>
                                        	<hr>
                                            <table class="table text-light border-0" id="dataTable" width="100%" cellspacing="0">
                                                <thead class="bg-black">
                                                    <tr>
                                                    	<th>ID</th>
                                                        <th>Order ID</th>
                                                        <th>Method</th>
                                                        <th>Code</th>
                                                        <th></th>
                                                        <th>Price</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
													$temp = $con->query('SET search_path TO web;');
													$sql_pay_req = $con->select("PaymentWeb","*",["PayerID" => $_SESSION['USER_ID']]);

                                                    $FAKE_ID = 0;

                                                    foreach($sql_pay_req as $PAY ){

                                                    	$FAKE_ID++;
														

                                                        $ID_MODAL = strval($PAY[PAY_REQ_ID]); ?>
                                                        <tr>
                                                        	<td class="text-center"><?php echo $FAKE_ID; ?></td>
                                                            <td class="text-center"><?php echo $PAY[PAY_REQ_ID]; ?></td>
                                                            <td><?php echo $PAY[PAY_REQ_METHOD]; ?></td>
                                                            <td>
	                                                            <a data-toggle="modal" class="btn <?php echo $site['style']['btn-p']; ?>" href="<?php echo '#PAY-REQ-ID-' . $ID_MODAL; ?>">
	                                                                Show code
	                                                            </a>
	                                                            <!-- Payment request code Modal-->
	                                                            <div class="modal fade" id="<?php echo 'PAY-REQ-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                                                <div class="modal-dialog" role="document">
	                                                                    <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
	                                                                        <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
	                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">Code for <?php echo $PAY['Method'] ?></h5>
	                                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	                                                                                <span aria-hidden="true">×</span>
	                                                                            </button>
	                                                                        </div>
	                                                                        <div class="modal-body text-white text-center">
	                                                                        	<h3><?php echo $PAY['TransactionID']; ?></h3>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
                                                            </td>
															<td><?php echo $PAY['Amount'] . " EUR"; ?></td>
                                                            <td><?php echo date($site['datetime']['date-format'], strtotime($PAY[PAY_REQ_DATE])); ?></td>
                                                            <td><?php echo date($site['datetime']['time-format'], strtotime($PAY[PAY_REQ_TIME])); ?></td>
                                                            <td class="text-center">
	                                                            	<span class="text-success">
	                                                            		<i class="fad fa-check-circle"></i>
	                                                            	</span>
                                                            </td>
                                                        </tr><?php
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>