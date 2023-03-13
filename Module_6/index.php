<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module 6 Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <section class="vh-100" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Create an HTML Form</h1>

            <div class="card" style="border-radius: 15px;">
            <form action="Process_save_file.php" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Name:</h6>

                </div>
                <div class="col-md-9 pe-5">

                    <input type="text" name="name" class="form-control form-control-lg" required placeholder="Write your full name"/>

                </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Email:</h6>

                </div>
                <div class="col-md-9 pe-5">

                    <input type="email" class="form-control form-control-lg" required name="email" placeholder="example@example.com" />

                </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Password:</h6>

                </div>
                <div class="col-md-9 pe-5">

                    <input type="password" name="password" required id="" class="form-control form-control-lg">

                </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Profile Picture</h6>

                </div>
                <div class="col-md-9 pe-5">

                    <input class="form-control form-control-lg" name="file" required id="formFileLg" type="file" />
                    <div class="small text-muted mt-2">Upload your Profile Picture. Max file
                    size 5 MB</div>

                </div>
                </div>

                <hr class="mx-n3">

                <div class="px-5 py-4">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>

            </div>
          </form>
        </div>

      </div>
    </div>  
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>