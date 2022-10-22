                                <?php echo "<title>" . $NTFY . $site['name'] . " - Family" . "</title>"; ?>
                                <div class="row m-0 p-3">
                                    <?php 
										
										$temp = $con->query('SET search_path TO families;')->fetchAll();
                                        $SQL_FAMILY = $con->select("families","*");//('SELECT ' . FAMILY_ID . ', ' . FAMILY_NAME . ', ' . FAMILY_LVL . ' FROM ' . FAMILY);

                                        foreach($SQL_FAMILY as $FAM){

											$temp = $con->query('SET search_path TO families;')->fetchAll();
                                            $SQL_FAMILY_INFO = $con->select("families_memberships","*",["FamilyId" => $FAM['Id']]);//('SELECT * FROM ' . FAM_CH . ' WHERE ' . FAM_FAM_ID . ' = ?');
                                            $FAM_CH = $SQL_FAMILY_INFO;

                                            $SQL_FAM = $con->select("families_memberships","CharacterId",["FamilyId" => $FAM['Id'],"Authority" => 0]);//('SELECT '. FAM_CH_CH_ID .    ' FROM ' . FAM_CH .          ' WHERE ' . FAM_FAM_ID .      ' = ? AND ' . FAM_AUTH .        ' = ?');
                                    ?>
                                    <div class="col-md-6 mb-3"> 
                                        <div class="p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                            <div class="row">
                                                <div class="col-md-9 h3 font-roboto text-center">
                                                    <div class="btn-light text-dark p-2 rounded">
                                                        <img src="<?php echo $site['assets']['images']; ?>/10505.png" class="mr-3">
                                                        <?php echo $FAM['Name']; ?>        
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <h6>RANK:</h6>
                                                    <?php

                                                    if($FAM['Level'] <= 4)
                                                        echo "
                                                        <div class='text-warning'>
                                                            <i class='fas fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                        </div>";

                                                    if($FAM['Level'] > 4 && $FAM['Level'] <= 8)
                                                        echo "
                                                        <div class='text-warning'>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                        </div>";

                                                    if($FAM['Level'] > 8 && $FAM['Level'] <= 12)
                                                        echo "
                                                        <div class='text-warning'>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                        </div>";

                                                    if($FAM['Level'] > 12 && $FAM['Level'] <= 19)
                                                        echo "
                                                        <div class='text-warning'>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='far fa-star'></i>
                                                        </div>";

                                                    if($FAM['Level'] == 20)
                                                        echo "
                                                        <div class='text-warning'>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                            <i class='fas fa-star'></i>
                                                        </div>";  
                                                    ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6>HEAD:</h6>    
                                                        </div>
                                                        <div class="col-md-8">
                                                            <?php 

                                                            $FAM_HEAD = $SQL_FAM;

                                                                echo "
                                                                <span class='badge badge-light'>
                                                                    <i class='fas fa-crown'></i> " . strtoupper(CharacterNameById($FAM_HEAD[0])) . "
                                                                </span>";
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6>DEPUTY:</h6>    
                                                        </div>
                                                        <div class="col-md-8">
                                                            <?php 
															
															$temp = $con->query('SET search_path TO families;')->fetchAll();
                                                            $SQL_FAM = $con->select("families_memberships","CharacterId",["FamilyId" => $FAM['Id'],"Authority" => 1]);
                                                            foreach($SQL_FAM as $FAM_DEPUTY)

                                                                echo "
                                                                <span class='badge badge-light'>
                                                                    <i class='fas fa-star'></i> " . strtoupper(CharacterNameById($FAM_DEPUTY)) . "
                                                                </span>";
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6>KEEPER:</h6>    
                                                        </div>
                                                        <div class="col-md-8">
                                                            <?php 
															$temp = $con->query('SET search_path TO families;')->fetchAll();
                                                            $SQL_FAM = $con->select("families_memberships","CharacterId",["FamilyId" => $FAM['Id'],"Authority" => 2]);
                                                            
                                                            foreach($SQL_FAM as $FAM_KEEPER)

                                                                echo "
                                                                <span class='badge badge-light'>
                                                                    <i class='fas fa-swords'></i> " . strtoupper(CharacterNameById($FAM_KEEPER)) . "
                                                                </span>";
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6>MEMBERS:</h6>    
                                                        </div>
                                                        <div class="col-md-8">
                                                            <?php 

                                                            $temp = $con->query('SET search_path TO families;')->fetchAll();
                                                            $SQL_FAM_MEM = $con->select("families_memberships","CharacterId",["FamilyId" => $FAM['Id'],"Authority" => 3]);
                                                            
                                                            $i = 0;

                                                            foreach($SQL_FAM_MEM as $FAM_MEMBERS){
                                                            
                                                                $i++;

                                                                echo "
                                                                <span class='badge badge-light'>
                                                                    <i class='fas fa-user'></i> " . strtoupper(CharacterNameById($FAM_MEMBERS)) . "
                                                                </span>";

                                                                if ($i == 3) {
                                                                    echo "
                                                                    <a class='badge badge-light text-dark' href='#MoreMembersModal-" . $FAM[0] . "' data-toggle='modal' data-target='#MoreMembersModal-" . $FAM['Id'] . "'>
                                                                        <i class='fad fa-plus-circle'></i>
                                                                    </a>";
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                            <!-- More members Modal-->
                                                            <div class="modal fade" id="<?php echo 'MoreMembersModal-' . $FAM[0] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                        <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">Members</h5>
                                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?php

                                                                                $temp = $con->query('SET search_path TO families;')->fetchAll();
																				$SQL_FAM_MEM = $con->select("families_memberships","CharacterId",["FamilyId" => $FAM['Id'],"Authority" => 3]);

                                                                                foreach($SQL_FAM_MEM as $FAM_MEMBERS)

                                                                                    echo "
                                                                                    <span class='badge badge-light'>
                                                                                        <i class='fas fa-user'></i> " . strtoupper(CharacterNameById($FAM_MEMBERS)) . "
                                                                                    </span>";
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <h6>LEVEL:</h6>
                                                    <div class="display-4 w-100 badge-light text-dark p-2 rounded">
                                                        <b><?php echo $FAM['Level']; ?></b>        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>