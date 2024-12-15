<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovely</title>
    <link rel="icon" type="image/x-icon" href="/images/logo-zoom.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        .background {
          background-image: url('images/bg-bubble.jpg'); 
          height: fit-content;
        }
        .button {
          background-color: #d6e4f5;
          color: #1a457d;
          border:1px solid #1e3463;
        }
        .button:hover{
          background-color: #1a457d;
          color: white;
        }
    </style>
</head>
<body>
  <section class="d-flex justify-content-center align-items-center background">
    
    <div class="container py-3 h-75">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-12 col-xl-11">
          <div class="card mt-5 text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #1a457d;">Register</p>
                  @if(session('message'))
                  <div class="alert alert-success">
                      {{session('message')}}
                  </div>
                  @endif
                  @if(session('error'))
                  <div class="alert alert-danger">
                      {{session('error')}}
                  </div>
                  @endif
                  <form action="{{url('actionregister')}}" method="post" class="mx-1 mx-md-4">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" class="form-control" name="name" required/>
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>
                    
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" class="form-control" name="email" required/>
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>
                    
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example3c" class="form-control" name="noHp" required/>
                        <label class="form-label" for="form3Example3c">Phone Number</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-location-dot fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <textarea name="address" id="form3Example3c" class="form-control" style="resize:none;" required></textarea>
                        <label class="form-label" for="form3Example3c">Address</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" class="form-control" name="password" required/>
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" class="form-control" name="verifPassword" required/>
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>
  
                    <div class="text-center my-4">
                      <a href="{{ url('login') }}" style="text-decoration: none;">Sudah punya akun?</a>
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn rounded-pill btn-lg button">Register</button>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="{{ asset('images/laundry.png') }}"
                    class="img-fluid rounded-2" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>