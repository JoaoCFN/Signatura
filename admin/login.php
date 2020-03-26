<?php require_once "header.php"; ?>


    <?php require_once "preloader.php"; ?>
    
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <div class="log-div-new">
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="email">Email ou Login</label>
                            <input type="text" id="email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        
                        <div class="submit-btn-area">
                            <button id="submitlogin" onclick="submitLogin()" >Logar <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

<?php require_once "footer.php"; ?>