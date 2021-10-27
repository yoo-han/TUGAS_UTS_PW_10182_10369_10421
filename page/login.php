<?php $currentPage = 'login';?>
<?php $title = 'Masuk Akun';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

    <main>
        <div class="container min-vh-100 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold align-center"><h4>Masuk</h4></div>
                <div class="card-body">
                    <form action="../process/loginProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                        </div>   
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                        </div>
                    </form>
                    <p class="mt-2 mb-0">Belum punya akun ? <a href="./register.php" class="textprimary">Daftar!</a></p>
                </div>
                </div>
            </div>  
        </div>
    </main>
<?php include('../component/footer.php');?>