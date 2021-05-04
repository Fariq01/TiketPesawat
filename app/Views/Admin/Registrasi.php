<!-- membuat class dengan baris dan menjadi center dengan tinggi 100 dan margin top -5 dari atas-->
<div class="row justify-content-center h-100 mt-5">
    <!-- lebar 25 dan membuat form otomatis ditengah -->
    <div class="card w-25 my-auto">
        <div class="card-header text-center">
            <h4>Admin Regis Form</h4>
        </div>
        <div class="card-body">
            <!-- form body -->
            <form action="<?= base_url('Admin/Registrasi'); ?>" method="post">
             <!-- textbox untuk pengisian email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="" />
                </div>
                <!-- textbox untuk pengisian password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="nama" id="nama" class="form-control" name="" />
                    </div>
                    <!-- button -->
                    </label><br>
                    <input type="submit" class="btn btn-primary w-50" value="Daftar" name="" style="float: left;">
            </form>
        </div>
    </div>
</div>