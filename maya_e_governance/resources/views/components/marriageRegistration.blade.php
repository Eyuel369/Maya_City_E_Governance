<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center my-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <!-- <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
              <img src="assets/img/logo.png" alt="">
              <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
          </div>End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Marriage Registration Form</h5>
                <!-- <p class="text-center small">Enter your personal details to create account</p> -->
              </div>

              <form class="row g-3 needs-validation" novalidate>

                <h6 class="ms-2"><strong>Wife's Info</strong></h6>

                <div class="col-lg-6 col-12">
                  <label for="wifePicture" class="form-label">Wife's Picture</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="wifePicture" aria-describedby="wifePictureHelp">
                    <label for="wifePicture" class="custom-file-label">Choose file...</label>
                    <small id="wifePictureHelp" class="form-text text-muted">Please upload a picture of the wife.</small>
                  </div>
                  <div class="invalid-feedback">Please select a picture!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Wife's Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the name!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Father's Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Father's name!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Grandfather's Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Grandfather's name!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="dateOfBirth" class="form-label">Date of Birth</label>
                  <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" required>
                  <div class="invalid-feedback">Please, select the date of birth!</div>
                </div>

                

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Place/Country of Birth</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Place/Country of Birth!</div>
                </div>

                
                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Nationality</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Nationality!</div>
                </div>

                <h6 class="ms-2"><strong>Husband's Info</strong></h6>

                <div class="col-lg-6 col-12">
                  <label for="husbandPicture" class="form-label">Husband's Picture</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="husbandPicture" aria-describedby="husbandPictureHelp" required>
                    <label for="husbandPicture" class="custom-file-label">Choose file...</label>
                    <small id="husbandPictureHelp" class="form-text text-muted">Please upload a picture of the husband.</small>
                  </div>
                  <div class="invalid-feedback">Please select a picture!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Husband's Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the name!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Father's Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Father's name!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Grandfather's Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Grandfather's name!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="dateOfBirth" class="form-label">Date of Birth</label>
                  <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" required>
                  <div class="invalid-feedback">Please, select the date of birth!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Place/Country of Birth</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Place/Country of Birth!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Nationality</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Nationality!</div>
                </div>

                <h6 class="ms-2"><strong>Marriage's Date and Place Info</strong></h6>

                <div class="col-lg-6 col-12">
                  <label for="dateOfBirth" class="form-label">Date of Marriage</label>
                  <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" required>
                  <div class="invalid-feedback">Please, select the date of marriage!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Place of Marriage Registration</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Place Divorce Dissolved!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Region/City Administration</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Region/City Administration!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Zone/City Administration</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Zone/City Administration!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">City</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the City!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Sub City</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Sub City!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Woreda/Special Woreda</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Woreda/Special Woreda!</div>
                </div>

                <div class="col-lg-6 col-12">
                  <label for="yourName" class="form-label">Kebele</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter the Kebele!</div>
                </div>

                <div class="col-12 d-flex align-items-center justify-content-center">
                  <div class="col-6">
                    <button class="btn btn-primary w-100" type="submit">Register</button>
                  </div>
              </div>
                
              </form>

            </div>
          </div>

          

        </div>
      </div>
    </div>

  </section>