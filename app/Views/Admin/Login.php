<!-- membuat class dengan baris dan menjadi center dengan tinggi 100 -->
<div class="row justify-content-center h-100">
    <!-- lebar 25 dan membuat form otomatis ditengah -->
    <div class="card w-25 my-auto">
        <!-- text pada header -->
        <div class="card-header text-center">
        <!-- isi teks -->
            <h4>Admin Login Form</h4>
        </div>
        <!-- class body -->
        <div class="card-body">
            <!-- form login untuk admin-->
            <form action="<?base_url('Admin/Login'); ?>" method="post">
                 <!-- textbox pengisian email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="" />
                </div>
                <!-- textbox pengisian password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="" />
                </div>
                <!-- button Login -->
                <input type="submit" class="btn btn-primary w-50" value="Login" name="" style="float: left;">
                <!-- button Daftar -->
                <input type="submit" class="btn btn-primary w-400" value="Daftar" name="" style="float: right;">
            </form>
        </div>
        <!-- footer -->
        <div class="card-footer">
            <small>&copy; Budi </small>
        </div>
    </div>
</div>