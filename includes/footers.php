
                <footer style="<?php echo "background-color: " . $site['style']['color-foot'] . "; color: " . $site['style']['text-foot'] ?>" id="footer">
                    <div class="row text-center m-0 p-3" style="<?php echo "background-color: " . $site['style']['color-bar'] ?>" id="SecondaryFooter">
                        <div class="col-md-8">
                            <div class="text-center text-muted small">
                                <?php echo $site['name']; ?> is a non-profit independent server developed by programmers in this branch. We are not associated with GameForge or Entwell, we are independent.
                            </div>
                            <div class="py-2">
                                <a href="#PrivacyPolicyModal" data-toggle="modal" data-target="#PrivacyPolicyModal" class="small">Privacy Policy</a>
                                &middot;
                                <!-- Privacy Policy Modal-->
                                <div class="modal fade bd-example-modal-lg" id="PrivacyPolicyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                            <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                <h5 class="modal-title font-roboto" id="exampleModalLabel">Privacy Policy</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-justify">
                                                <?php include "includes/PrivacyPolicy.php"; ?>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button class="btn <?php echo $site['style']['btn-p']; ?>" type="button" data-dismiss="modal">I Agree</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#TermsAndConditionsModal" data-toggle="modal" data-target="#TermsAndConditionsModal" class="small">Terms &amp; Conditions</a>
                                &middot;
                                <!-- Terms And Conditions Modal-->
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="TermsAndConditionsModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                            <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                <h5 class="modal-title font-roboto" id="exampleModalLabel">Terms And Conditions</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-justify">
                                                <?php include "includes/TermsAndConditions.php"; ?>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button class="btn <?php echo $site['style']['btn-p']; ?>" type="button" data-dismiss="modal">I Agree</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if($site['mail']['status'] == 1){ ?>
                                <!--<a href="#ContactModal" data-toggle="modal" data-target="#ContactModal" class="small">Contact</a>-->
                               <!-- &middot;<!--
                                <!-- Contact Modal-->
                                <div class="modal fade text-light" id="ContactModal" tabindex="-1" role="dialog" aria-labelledby="ContactModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                            <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . "; color: " . $site['style']['text-h-m'] ?>">
                                                <h5 class="modal-title font-roboto" id="exampleModalLabel">Contact</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form name="FormContact" id="FormContact" method="POST" action="consult?from=mail">
                                                <div class="modal-body text-left">  
                                                    <?php if(!isset($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == NULL){?>                   
                                                    <div class="form-group">
                                                        <label for="InputContactName">Name:</label>
                                                        <input type="text" class="form-control" name="InputContactName" id="InputContactName" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="InputContactEmail">E-mail:</label>
                                                        <input type="email" class="form-control" name="InputContactEmail" id="InputContactEmail" required>
                                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                    </div>
                                                    <?php } else { ?>
                                                    <div class="form-group">
                                                        <label for="InputContactName">Name:</label>
                                                        <input type="text" class="form-control" name="InputContactName" id="InputContactName" required value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="InputContactEmail">E-mail:</label>
                                                        <input type="email" class="form-control" name="InputContactEmail" id="InputContactEmail" value="<?php echo $_SESSION['USER_EMAIL']; ?>" required>
                                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <label for="InputContactSubject">Subject:</label>
                                                        <select class="form-control" name="InputContactSubject" id="InputContactSubject" required>
                                                            <option value="" disabled selected>Choose</option>
                                                            <option>General contact</option>
                                                            <option>Difficulties with the website</option>
                                                            <option>Difficulties with my account</option>
                                                            <option>Complaints / claims</option>
                                                            <option>Prices / billing / payments</option>
                                                            <option>Suggestions</option>
                                                            <option>Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="TextareaContactBody">Message:</label>
                                                        <textarea class="form-control" name="TextareaContactBody" id="TextareaContactBody"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Enviar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
								<a href ="" class="small" target="_blank">Elitepvpers</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="container-fluid py-3">
                        <div class="d-flex align-items-center justify-content-between small row text-center">
                            <div class="col-md-12 text-muted">
                                <span>Copyright &copy; <?php echo $site['name']; ?> 2022 All rights reserved</span>
                            </div>
							<div class="col-md-12 text-muted">
								<span class="mt-2">Website Developed by Kalosto<span>
								</div>
                        </div>
                    </div>
                </footer>
