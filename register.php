<?php include './component/header.php'; ?>
<div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center h-100 p-5 vh-100" style="background-color: rgb(219,219,219);">
            <div class="col-lg-6 col-md-8 col-sm-10 col-10 border-dark rounded-4 bg-white shadow-lg">
                <div class="border-bottom">
                    <h1 class="text-center py-3"> Register </h1>
                </div>
                <br>
                <form>
                    <!-- Bagian Input data -->
                    <div class="mx-3 mx-4"> 
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passwordInput" placeholder="Password" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Confirm Password" required>
                            <input class="form-check-input mt-2" type="checkbox" id="showPassword">
                            <label class="form-check-label mt-1" for="showPassword">Show Password</label>
                        </div>
                        <!-- Tombol register -->
                        <div class="d-flex justify-content-center mt-3"> 
                            <button type="submit" class="btn btn-primary w-50">Register</button>
                        </div>
                    </div>
                    <!-- Bagian log in href -->
                    <div class="align-items-center">
                        <p class="text-center mt-3"> Sudah punya akun?  <a href="Log-In.html">Log In</a> </p>
                    </div>
                    <div class="border-top">
                        <p class="text-center mt-2 py-2"> Copyright by harjo </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include './component/footer.php'; ?>