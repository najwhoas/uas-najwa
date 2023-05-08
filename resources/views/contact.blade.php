<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.attributes')
  <title>Najwas | Contact</title>
</head>
<body>

  <div class="container py-5 my-5">
    <div class="row justify-content-center pb-5">
      <div class="col-4"></div>
      <div class="col-4">
        <nav id="navbar" class="navbar pt-5 navbar-mobile position-absolute top-0 start-50 translate-middle-x fw-bold">
        <ul>
          <li><a class="nav-link" href="/">Home</a></li>
          <li><a class="nav-link" href="/about">About</a></li>
          <li><a class="nav-link" href="/portfolio">Portfolio</a></li>
          <li><a class="nav-link active" href="/contact">Contact</a></li>
          <li><a class="nav-link" href="/cv">CV</a></li>
        </ul>
        </nav>
        <h1 class="position-absolute top-0 start-50 translate-middle-x fw-bold"style="color:#fff">CONTACT</h1>
      </div>
      <div class="col-4"></div>
    </div>
    <div class="pt-5"></div> <!-- spasi -->
    <hr style="color:gray; height: 2px;">
<div class="pt-3"></div> <!-- spasi -->
    
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label"style="color:#fff">First name</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your first name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label"style="color:#fff">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" placeholder="Enter your last name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label"style="color:#fff">Email</label>
    <input type="email" class="form-control" id="validationCustom03" placeholder="Enter your email address" required/>
        <div class="invalid-feedback">
            Please provide a valid email.
        </div>
    </div>
  <!-- </div> -->
  
  
          
  <div class="mb-3">
    <label for="validationTextarea" class="form-label"style="color:white">Message</label>
    <textarea class="form-control" id="validationTextarea" placeholder="Enter your message" required></textarea>
    <div class="invalid-feedback">
      Your message box should not be empty.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck" style="color:white">
        Let's send this message
      </label>
      <div class="invalid-feedback">
        You must check the box above to send the message.
      </div>
    </div>
  </div>
  <div class="col-12 d-grid gap-2">
    <button class="btn btn-primary" type="submit">
      Send Message
    </button>
  </div>
</form>
    </div>
    <script src="js/validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</body>
</html>