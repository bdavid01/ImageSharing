<div class="container">
    <div class="modal" id="modal_modify" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white font-weight-light"><?php echo $modifyTitle ?></h5>
                    <button type="button" class="close text-white" data-dismiss="modal" id="close-icon" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modify-buttons">
                        <button class="btn btn-dark mb-4" id="profil-datas-modify"><?php echo $modifyProfilLink ?></button>
                        <button class="btn btn-dark mb-4" id="password-datas-modify"><?php echo $modifyPwdLink ?></button>
                    </div>

                    <div id="modal-content-profile">
                        <div class="form-group">
                            <label class="ml-1" for="confirm"><?php echo $usernameLabel ?></label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['username'] ?>" disabled />
                            <small class="text-muted ml-2"><?php echo $cannotBeModified ?></small>
                        </div>

                        <div class="form-group">
                            <label class="ml-1" for="email"><?php echo $emailLabel ?></label>
                            <input type="email" id="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" />
                            <small class="text-muted ml-2"><?php echo $emailFormatRequired ?></small>
                            <div class="invalid-feedback email-error ml-2"><?php echo $fieldIsRequired ?></div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="ml-1" for="confirm"><?php echo $currentPwdLabel ?></label>
                            <input type="password" id="confirm" class="form-control" />
                            <small class="text-muted ml-2"><?php echo $requiredForModify ?></small>
                            <div class="invalid-feedback confirm-error ml-2"><?php echo $fieldIsRequired ?></div>
                        </div>

                        <div class="modify-btn-div">
                            <button class="btn btn-dark text-white mb-3" id="modify-profile-btn"><?php echo $modifyBtn ?></button>
                        </div>
                    </div>

                    <div id="modal-content-password" hidden>
                        <div class="form-group">
                            <label class="ml-1" for="password"><?php echo $newPwdLabel ?></label>
                            <input type="password" id="password" class="form-control" />
                            <small class="text-muted ml-2"><?php echo $min6Char ?></small>
                            <div class="invalid-feedback password-error ml-2"><?php echo $fieldIsRequired ?></div>
                        </div>

                        <div class="form-group">
                            <label class="ml-1" for="newPassConfirm"><?php echo $confirmNewPwdLabel ?></label>
                            <input type="password" id="newPassConfirm" class="form-control" />
                            <small class="text-muted ml-2"><?php echo $requiredField ?></small>
                            <div class="invalid-feedback newPassConfirm-error ml-2"><?php echo $fieldIsRequired ?></div>
                        </div>

                        <div class="form-group">
                            <label class="ml-1" for="currentPass"><?php echo $currentPwdLabel ?></label>
                            <input type="password" id="currentPass" class="form-control" />
                            <small class="text-muted ml-2 mb-1"><?php echo $requiredForModify ?></small> <br />
                            <div class="invalid-feedback currentPass-error ml-2"><?php echo $fieldIsRequired ?></div>
                        </div>

                        <div class="modify-btn-div">
                            <button class="btn btn-dark text-white mb-3" id="modify-password-btn"><?php echo $modifyBtn ?></button>
                        </div>
                    </div>
                </div>
                <div class="text-center" id="modify-footer">
                    <div class="alert alert-success alert-lg text-center border ml-4 mr-4" hidden id="successedModify" role="alert">
                        <?php echo $successedModifyMsg ?>
                    </div>

                    <div class="alert alert-danger alert-lg text-center border ml-4 mr-4" hidden id="failedModify" role="alert">
                        <?php echo $failedModifyMsg ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/regex.js"></script>
    <script src="/assets/js/modify.js"></script>
</div>