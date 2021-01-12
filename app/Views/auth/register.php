
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Daftar Akun</h2>
                <div class="underline-title"></div>
            </div>

            <?php if(isset($validation)):?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif;?>

            <form action="/Register/save" method="post" class="form">

                <label for="InputForName" style="padding-top:13px" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-content" id="InputForName" required
                    value="<?= set_value('nama'); ?>">

                <div class="form-border"></div>

                <label for="InputForEmail" style="padding-top:13px" class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-content" id="InputForEmail" required
                    value="<?= set_value('email'); ?>">

                <div class="form-border"></div>

                <label for="InputForPassword" style="padding-top:13px" class="form-label">Password</label>
                <input type="password" name="password" class="form-content" id="InputForPassword" required>

                <div class="form-border"></div>

                <label for="InputForConfPassword" style="padding-top:13px" class="form-label">Confirm Password</label>
                <input type="password" name="confpassword" class="form-content" id="InputForConfPassword" required>

                <div class="form-border"></div>

                <button id="submit-btn" type="submit" class="btn btn-primary">Daftar</button>

                <a href="login" id="signup">Sudah punya Akun</a>

            </form>
        </div>
    </div>
</body>



<!-- batas -->