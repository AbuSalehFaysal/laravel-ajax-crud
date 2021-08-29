<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        .parsley-errors-list li {
            list-style: none;
            color: red;
        }
    </style>

    <title>Register</title>
  </head>
  <body>
    
  <section>
      <div class="container">
          <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="card">
                      <div class="card-header">
                          Register
                      </div>
                      <div class="card-body">
                          <form action="{{route('register.submit')}}" id="registrationForm" method="POST">
                              @csrf 
                              <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" name="name" id="name" class="form-control" required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" /> 
                              </div>
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" name="email" id="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" /> 
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" name="password" id="password" class="form-control" data-parsley-length="[6,12]" required data-parsley-trigger="keyup" /> 
                              </div>
                              <div class="form-group">
                                  <label for="cpassword">Confirm Password</label>
                                  <input type="password" name="cpassword" id="cpassword" class="form-control" data-parsley-length="[6,12]"data-parsley-equalto="#password" required data-parsley-trigger="keyup" /> 
                              </div>
                              <div class="form-group">
                                  <label for="phone">Phone</label>
                                  <input type="text" name="phone" id="phone" class="form-control" required data-parsley-length="[6,12]" data-parsley-pattern="[0-9]+$" data-parsley-trigger="keyup" /> 
                              </div>
                              <button type="submit" class="btn btn-primary mt-2">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Parsley JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.0.0/parsley.min.js" integrity="sha512-83WT9hUVM+iU1MUFfipwr7JcCGriOEmzijo1EiHf30IXsMyMKRTy33uTl1prtJNGc2AlJJxEFVTTIQhai7az3A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(function(){
            $("#registrationForm").parsley();
        });
    </script>

    
  </body>
</html>
