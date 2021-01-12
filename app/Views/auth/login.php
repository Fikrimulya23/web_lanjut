<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>

            <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>

            <form action="/login/auth" method="post" class="form">

                <br>
                <label for="InputForEmail" style="padding-top:13px" class="form-label">Email address</label>
                <input type="email" name="email" class="form-content" id="InputForEmail" autocomplete="on" required
                    value="<?= set_value('email') ?>" />

                <div class="form-border"></div>

                <label for="InputForPassword" style="padding-top:22px" class="form-label">Password</label>
                <input type="password" name="password" class="form-content" id="InputForPassword" required />

                <div class="form-border"></div>

                <br>
                <button id="submit-btn" type="submit" class="btn btn-primary">Login</button>
                <a href="register" id="signup">Buat Akun</a>

            </form>
        </div>
    </div>
</body>