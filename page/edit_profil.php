<?php $currentPage = 'edit';?>
<?php $title = 'Edit Profil';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

    <main>
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow " style="min-width: 50rem;">
                <div class="card-header fw-bold align-center" ><h4>Edit Profil</h4></div>
                    <div class="card-body">
                        <form action="../process/editProfilProcess.php" method="post">
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input class="form-control" id="nama" name="nama" placeholder="Joe Smith" required>
                            </div>
                            <div class="mb-3">
                                <div class="form-group"> <!-- Date input -->
                                    <label class="control-label" for="date">Tanggal Lahir</label>
                                    <input class="form-control" id="date" name="date" placeholder="DD/MM/YYY" type="date" required/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="control-label" for="radio">Jenis Kelamin</label>
                                <br/>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="genderRadio" id="radioPria" value="0" required>
                                    <label class="form-check-label" for="radioPria">
                                        Pria
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genderRadio" id="radioWanita" value="1" required>
                                    <label class="form-check-label" for="radioWanita">
                                        Wanita
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-2 col-sm-2 col-md-2">
                                    <label for="country_code" class="form-label">Country Code</label>
                                    <select class="form-select align-center" aria-label="Default select example" name="country_code" id="country_code" required>
                                        <option value="+62">Indonesia(+62)</option>
                                        <option value="+60">Malaysia(+60)</option>
                                        <option value="+65">Singapore(+65)</option>
                                        <option value="+63">Filipina(+63)</option>
                                        <option value="+66">Thailand(+66)</option>
                                        <option value="+673">Brunei(+673)</option>
                                        <option value="+856">Laos(+856)</option>
                                        <option value="+855">Kamboja(+855)</option>
                                        <option value="+84">Vietnam(+84)</option>
                                        <option value="+95">Myanmar(+95)</option>
                                    </select>
                                </div>
                                <div class="col-xl-10 col-sm-10 col-md-10 mb-3">
                                    <label for="telp" class="form-label">Phone </label>
                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telpon" required>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="Next">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

    </main>

<?php include('../component/footer.php');?>