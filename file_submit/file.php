<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Registation</title>
</head>

<body>
  

    <section class="vh-100" style="background-color: #2779e2;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 class="text-white mb-4">Submit Contact Info</h1>

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                        <form action="submit.php" method="POST" enctype="multipart/form-data">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Full name</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="name" class="form-control form-control-lg" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Email address</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="example@example.com" />

                                    </div>
                                </div>
                            
                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Upload Picture</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="file"/>
                                        <div class="small text-muted mt-2">Upload your Picture. Max file
                                            size 10 MB</div>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4 float-end">
                                    <button type="submit" name="save" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>