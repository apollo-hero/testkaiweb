                                <?php echo "<title>" . $NTFY . $site['name'] . " - Activity Log" . "</title>"; ?>
                                <div class="p-3">
                                    <div class="p-3 bg-danger mb-3 text-center">
                                        <b>The time zone is <?php echo $site['datetime']['timezone']; ?></b>
                                    </div>
                                    <div class="card border-0">
                                        <div class="table-responsive p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                            <table class="table text-light border-0" id="dataTable" width="100%" cellspacing="0">
                                                <thead class="bg-black">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Activity</th>
                                                        <th>Time</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
													
													$temp = $con->query('SET search_path TO web;');
                                                    $sql_act_log = $con->select("activitylogweb","*",["log_user_id" => $_SESSION['USER_ID']]);//('SELECT * FROM ' . LOG . ' WHERE ' . LOG_USER_ID . ' = ?');

                                                    $FAKE_ID = 0;

                                                    foreach( $sql_act_log as $LOG){

                                                    	$FAKE_ID++;

														$temp = $con->query('SET search_path TO accounts;');
                                                        $sql_log_username = $con->select("accounts","Name",["Id" => $LOG[LOG_USER_ID]]);//('SELECT "Name" FROM ' . USER . ' WHERE "Id" = ?');

                                                        $LOG_USERNAME = $sql_log_username; ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $FAKE_ID; ?></td>
                                                            <td><?php echo $LOG[LOG_DESCRIPTION]; ?></td>
                                                            <td><?php echo date($site['datetime']['time-format'], strtotime($LOG[LOG_TIME])); ?></td>
                                                            <td><?php echo date($site['datetime']['date-format'], strtotime($LOG[LOG_DATE])); ?></td>
                                                        </tr><?php
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>