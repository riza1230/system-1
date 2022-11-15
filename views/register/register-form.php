<h1 class="text-center"><b> Sign Up</b></h1>

<form action="" method="post" class="needs-validation" novalidate>

   <div><b><h2>Name</h2></b></div>

   <input pattern="[a-zA-Z\s]+" type="text" class="form-control mb-4" name="firstname" placeholder="First Name" 
      value="<?php if (isset($_POST['submit'])){ echo $firstname;} ?>" required>
   <input pattern="[a-zA-Z\s]+" type="text" class="form-control mb-4" name="middlename" placeholder="Middle Name" 
      value="<?php if (isset($_POST['submit'])){ echo $middlename;} ?>" required>
   <input pattern="[a-zA-Z\s]+" type="text" class="form-control mb-3" name="lastname" placeholder="Last Name" 
      value="<?php if (isset($_POST['submit'])){ echo $lastname;} ?>" required>

   <label for="suffix" style="color:#6c757d;">Suffix</label>
   <select name="suffix" class="form-control mb-5 ">
      <option  selected  >N/A </option>
      <option value="">Senior</option>
      <option value="">Junior</option>
      <option value="">III</option>
      <option value="">IV</option>
      <option value="">V</option>
   </select>
   
   <div><b><h2>Personal Information</h2></b></div>

   <input type="text" name="birthday"  class="form-control mb-4" placeholder="Birthday"  onfocusin="(this.type='date')"
      value="<?php if (isset($_POST['submit'])){ echo $birthday;} ?>"  required>
   <input type="number" class="no-spin form-control mb-4" name="schoolID" placeholder="Student ID" 
      value="<?php if (isset($_POST['submit'])){ echo $schoolID;} ?>" required>
   <input type="email" class="form-control mb-4" name="email" placeholder="Email" 
      value="<?php if (isset($_POST['submit'])){echo $email;} ?>" required>
   <input type="text" class="form-control mb-4" name="ethnicity" placeholder="Ethnicity" 
      value="<?php if (isset($_POST['submit'])){ echo $ethnicity;} ?>" required>
   <input type="text" class="form-control mb-4" name="nationality" placeholder="Nationality" 
      value="<?php if (isset($_POST['submit'])){ echo $nationality;} ?>" required>

   <label for="religion" style="color:#6c757d;">Religion</label>
   <select name="religion"  class="form-control mb-5"  required>
      <option disabled="disabled" selected hidden></option>
      <option value="Roman Catholic">Roman Catholic</option>
      <option value="Seventh Day Adventist">Seventh Day Adventist</option>
      <option value="Islam ">Islam</option>
      <option value="Evangelicals">Evangelicals</option>
      <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
      <option value="Aglipay">Aglipay</option>
      <option value="Bible Baptist Church">Bible Baptist Church</option>
      <option value="Jehovah's Witness">Jehovah's Witness</option>
      <option value="Buddhist">Buddhist</option>
      <option value="Church of Crist">Church of Crist</option>
      <option value="Tribal Religion">Tribal Religion</option>
   </select>

   <div><b><h2>School Information</h2></b></div>

   <label for="yearlevel" style="color:#6c757d;" > Year level</label>
   <select name="yearlevel"  class="form-control mb-3" required>
      <option disabled="disabled" selected hidden></option>
      <option value="1st Year ">1st Year</option>
      <option value="2nd Year ">2nd Year</option>
      <option value="3rd Year ">3rd Year</option>
      <option value="4th Year">4th Year</option>
   </select>

   <label for="department" style="color:#6c757d;" > College Department</label>
   <select name="department" id="slct1" onchange="populate(this.id,'slct2')" class="form-control mb-3" required>
      <option disabled="disabled" selected hidden></option>
      <option value="COB">College of Business</option>
      <option value="COE">College of Education</option>
      <option value="CAS">College of Art and Sciences</option>
      <option value="COA">College of Administration</option>
      <option value="COT">College of Technology</option>
      <option value="CON">College of Nursing</option>
   </select>

   <label for="course" style="color:#6c757d;"> Course</label>
   <select name="course" id="slct2" class="form-control mb-4"  value="<?php if (isset($_POST['submit'])){ echo $course;} ?>" required>
      <option disabled="disabled" selected hidden></option>
   </select>

   <div><b><h2>Address</h2></b></div>

   <input type="text" class="form-control mb-4" name="province" placeholder="Province" 
      value="<?php if (isset($_POST['submit'])){ echo $province;} ?>" required>
   <input type="text" class="form-control mb-4" name="municipality" placeholder="Municipality" 
      value="<?php if (isset($_POST['submit'])){ echo $municipality;} ?>" required>
   <input type="text" class="form-control mb-4" name="barangay" placeholder="Barangay" 
      value="<?php if (isset($_POST['submit'])){ echo $barangay;} ?>" required>
   <input type="text" class="form-control mb-5" name="street" placeholder="Street" 
      value="<?php if (isset($_POST['submit'])){ echo $street;} ?>" required>

   <div><b><h2>Password</h2></b></div>
   <input type="password" class="form-control mb-4" name="password" placeholder="Password" required>
   <input type="password" class="form-control mb-5" name="confirm-password" placeholder="Confirm Password" required>
   <div class="d-flex justify-content-center">
      <button name="submit" class="btn btn-primary mb-4" type="submit"><strong> Register</strong></button>
   </div>
</form>

<div class="text-center">Already have an account? <a href="./../../index.php"><u>Login here</u></a></div>

<script>
   function populate(s1, s2) {
       var s1 = document.getElementById(s1);
       var s2 = document.getElementById(s2);
       s2.innerHTML = "";
       if (s1.value == "COB") {
           var optionArray = ["|", "BSBA|Bachelor of Science in Business Administration", "BSHM|Bachelor of Science in Hospitality Management", "BSA|Bachelor of Science in Accountancy"];
       } else if (s1.value == "COE") {
           var optionArray = ["|",
               "BSSEM|Bachelor of Secondary Education Major in Mathematics",
               "BSSEF|Bachelor of Secondary Education Major in Filipino",
               "BSSESS|Bachelor of Secondary Education Major in Social Studies",
               "BSSEE|Bachelor of Secondary Education Major in English",
               "BSSES|Bachelor of Secondary Education Major in Science",
               "BSED|Bachelor of Elementary Education"
           ];
       } else if (s1.value == "CAS") {
           var optionArray = ["|",
               "BSB|Bachelor of Science in Biology Major in Biotechnology",
               "BSES|Bachelor of Science in Environmental Science Major in Environmental Heritage",
               "BAEL|Bachelor of Arts in English Language",
               "BAE|Bachelor of Arts in Economics",
               "BAS|Bachelor of Arts in Sociology",
               "BAP|Bachelor of Arts in Philosophy",
               "BASC|Bachelor of Arts in Social Science",
               "BSM|Bachelor of Science in Mathematics",
               "BACD|Bachelor of Arts in Community Development",
               "BADC|Bachelor of Arts in Development Communication"
           ];
       } else if (s1.value == "COT") {
           var optionArray = ["|",
               "BSAT|Bachelor of Science in Automotive Technology",
               "BSET|Bachelor of Science in Electronics Technology",
               "BSFT|Bachelor of Science in Food Technology",
               "BSIT|Bachelor of Science in Information Technology",
               "BSEMC|Bachelor of Science in Entertainment and Multimedia Computing Major in Digital Animation Technology",
               "BSEMC|Bachelor of Science in Entertainment and Multimedia Computing Major in  Game Development Technology"
           ];
       } else if (s1.value == "COA") {
           var optionArray = ["|",
               "BSPA|Bachelor of Science in Public Administration Major in Local Governance"
           ];
       } else if (s1.value == "CON") {
           var optionArray = ["|",
               "BSPA|Bachelor of Science in Nursing"
           ];
       }

       for (var option in optionArray) {
           var pair = optionArray[option].split("|");
           var newOption = document.createElement("option");
           newOption.value = pair[0];
           newOption.innerHTML = pair[1];
           s2.options.add(newOption);
       }
   }
</script>

<script>
   (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
   })()
</script>