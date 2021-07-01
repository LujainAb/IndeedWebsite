<?php
$host = "localhost";
$user  = "root";
$password = "";
$database1 = "website";

$db1 = mysqli_connect($host, $user, $password, $database1);

session_start();

  if(!isset($_SESSION['user'])){
  header("Location: JSLogin.php?error=Please Sign In again!");}

  else
  {
  // $id=1; // this is just for testing. Later delete it and uncomment the next lines
  $email = $_SESSION['user'];

    $q = "select * from job_seeker WHERE email = '$email'"; // if id is a number remove the qoutes
   $result = mysqli_query($db1, $q);
   $row = mysqli_fetch_array($result);
    //from here
   if ($row == 0 ) {  //In case of error
   printf("Error: %s\n", mysqli_error($db1));
   exit();
    }
      //check if its correct
  //  $_SESSION['jsname']=$row['cust_name'];
  //  $_SESSION['jsid']=$row[id];

}
?>

<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" href="design.css">
<title> edit Job Seeker profile  </title>






<!--sidebar start-->

               <div class="sidebar">
                 <center>
                   <img src="person_grey.png" class="profile_image" alt="">



                 </center>
                 <a href="mainPageJS.php"><i class="far fa-user"></i></i><span>Dashboard</span></a>
                 <a href="the_job_seeker_profile.php"><i class="far fa-user"></i></i><span>Profile</span></a>
                  <a href="searchpage.php"><i class="far fa-bell"></i><span>Search for an employer</span></a>
                 <a href="Search_Page_2.php"><i class="far fa-bell"></i><span>Search for a job</span></a>
                 <a href="JobListApplied.php?id=<?php echo $js_id; ?>" ><i class="fas fa-business-time"></i><span>My Jobs</span></a>
                 <a href="Signout.php"><i class="fas fa-sign-out-alt"></i><span>Sign out</span></a>
               </div>
               <!--sidebar end-->



</head>

<body>
   <div class="nav">
    <img id="logo" src="Logo.png">
        <h1>Edit job seeker profile</h1>
           </div>
<div  class="container">
    <div class="singup" id="first">
        <h2>Personal information </h2>
       <form METHOD="post" ACTION="process_updatejobseekerprofile.php" enctype="multipart/form-data" class="form-horizontal">
   <p>first name:</p> <input type="text" name="fname" placeholder=" first name" value=<?php echo $row['first_name']; ?>>
   <p>last name:</p> <input type="text" name="lname" placeholder=" last name" value=<?php echo $row['last_name']; ?>>
 <p>email:</p>   <input type="email" name="email" placeholder="email" value=<?php echo $row['email']; ?>>
 <p>password:</p>   <input type="password" name=" password" value=<?php echo $row['password']; ?>>
  <p>birth date:</p> <input type="date"name="birth_date" value=<?php echo $row['birth_date']; ?>>
    <p>gender:</p>
        <div class="gender">

            <label for="one">

                <input type="radio" id="one" name="gender" value="0" <?= $row['gender'] == 0 ? 'checked' : '' ?> >
                Female
                </label>
                <label for="two">
                    <input type="radio" id="two" name="gender" value="1" <?= $row['gender'] == 1 ? 'checked' : '' ?>   >
                    Male


                    </label>
                    <br>
                    <p>nationality:</p>
                </div>
        <select id="nationality" name="nationality" class="Selectbox" value =<?php echo $row['nationality']; ?>>
                <option value="">nationality</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
                <option value="american">American</option>
                <option value="andorran">Andorran</option>
                <option value="angolan">Angolan</option>
                <option value="antiguans">Antiguans</option>
                <option value="argentinean">Argentinean</option>
                <option value="armenian">Armenian</option>
                <option value="australian">Australian</option>
                <option value="austrian">Austrian</option>
                <option value="azerbaijani">Azerbaijani</option>
                <option value="bahamian">Bahamian</option>
                <option value="bahraini">Bahraini</option>
                <option value="bangladeshi">Bangladeshi</option>
                <option value="barbadian">Barbadian</option>
                <option value="barbudans">Barbudans</option>
                <option value="batswana">Batswana</option>
                <option value="belarusian">Belarusian</option>
                <option value="belgian">Belgian</option>
                <option value="belizean">Belizean</option>
                <option value="beninese">Beninese</option>
                <option value="bhutanese">Bhutanese</option>
                <option value="bolivian">Bolivian</option>
                <option value="bosnian">Bosnian</option>
                <option value="brazilian">Brazilian</option>
                <option value="british">British</option>
                <option value="bruneian">Bruneian</option>
                <option value="bulgarian">Bulgarian</option>
                <option value="burkinabe">Burkinabe</option>
                <option value="burmese">Burmese</option>
                <option value="burundian">Burundian</option>
                <option value="cambodian">Cambodian</option>
                <option value="cameroonian">Cameroonian</option>
                <option value="canadian">Canadian</option>
                <option value="cape verdean">Cape Verdean</option>
                <option value="central african">Central African</option>
                <option value="chadian">Chadian</option>
                <option value="chilean">Chilean</option>
                <option value="chinese">Chinese</option>
                <option value="colombian">Colombian</option>
                <option value="comoran">Comoran</option>
                <option value="congolese">Congolese</option>
                <option value="costa rican">Costa Rican</option>
                <option value="croatian">Croatian</option>
                <option value="cuban">Cuban</option>
                <option value="cypriot">Cypriot</option>
                <option value="czech">Czech</option>
                <option value="danish">Danish</option>
                <option value="djibouti">Djibouti</option>
                <option value="dominican">Dominican</option>
                <option value="dutch">Dutch</option>
                <option value="east timorese">East Timorese</option>
                <option value="ecuadorean">Ecuadorean</option>
                <option value="egyptian">Egyptian</option>
                <option value="emirian">Emirian</option>
                <option value="equatorial guinean">Equatorial Guinean</option>
                <option value="eritrean">Eritrean</option>
                <option value="estonian">Estonian</option>
                <option value="ethiopian">Ethiopian</option>
                <option value="fijian">Fijian</option>
                <option value="filipino">Filipino</option>
                <option value="finnish">Finnish</option>
                <option value="french">French</option>
                <option value="gabonese">Gabonese</option>
                <option value="gambian">Gambian</option>
                <option value="georgian">Georgian</option>
                <option value="german">German</option>
                <option value="ghanaian">Ghanaian</option>
                <option value="greek">Greek</option>
                <option value="grenadian">Grenadian</option>
                <option value="guatemalan">Guatemalan</option>
                <option value="guinea-bissauan">Guinea-Bissauan</option>
                <option value="guinean">Guinean</option>
                <option value="guyanese">Guyanese</option>
                <option value="haitian">Haitian</option>
                <option value="herzegovinian">Herzegovinian</option>
                <option value="honduran">Honduran</option>
                <option value="hungarian">Hungarian</option>
                <option value="icelander">Icelander</option>
                <option value="indian">Indian</option>
                <option value="indonesian">Indonesian</option>
                <option value="iranian">Iranian</option>
                <option value="iraqi">Iraqi</option>
                <option value="irish">Irish</option>
                <option value="israeli">Israeli</option>
                <option value="italian">Italian</option>
                <option value="ivorian">Ivorian</option>
                <option value="jamaican">Jamaican</option>
                <option value="japanese">Japanese</option>
                <option value="jordanian">Jordanian</option>
                <option value="kazakhstani">Kazakhstani</option>
                <option value="kenyan">Kenyan</option>
                <option value="kittian and nevisian">Kittian and Nevisian</option>
                <option value="kuwaiti">Kuwaiti</option>
                <option value="kyrgyz">Kyrgyz</option>
                <option value="laotian">Laotian</option>
                <option value="latvian">Latvian</option>
                <option value="lebanese">Lebanese</option>
                <option value="liberian">Liberian</option>
                <option value="libyan">Libyan</option>
                <option value="liechtensteiner">Liechtensteiner</option>
                <option value="lithuanian">Lithuanian</option>
                <option value="luxembourger">Luxembourger</option>
                <option value="macedonian">Macedonian</option>
                <option value="malagasy">Malagasy</option>
                <option value="malawian">Malawian</option>
                <option value="malaysian">Malaysian</option>
                <option value="maldivan">Maldivan</option>
                <option value="malian">Malian</option>
                <option value="maltese">Maltese</option>
                <option value="marshallese">Marshallese</option>
                <option value="mauritanian">Mauritanian</option>
                <option value="mauritian">Mauritian</option>
                <option value="mexican">Mexican</option>
                <option value="micronesian">Micronesian</option>
                <option value="moldovan">Moldovan</option>
                <option value="monacan">Monacan</option>
                <option value="mongolian">Mongolian</option>
                <option value="moroccan">Moroccan</option>
                <option value="mosotho">Mosotho</option>
                <option value="motswana">Motswana</option>
                <option value="mozambican">Mozambican</option>
                <option value="namibian">Namibian</option>
                <option value="nauruan">Nauruan</option>
                <option value="nepalese">Nepalese</option>
                <option value="new zealander">New Zealander</option>
                <option value="ni-vanuatu">Ni-Vanuatu</option>
                <option value="nicaraguan">Nicaraguan</option>
                <option value="nigerien">Nigerien</option>
                <option value="north korean">North Korean</option>
                <option value="northern irish">Northern Irish</option>
                <option value="norwegian">Norwegian</option>
                <option value="omani">Omani</option>
                <option value="pakistani">Pakistani</option>
                <option value="palauan">Palauan</option>
                <option value="panamanian">Panamanian</option>
                <option value="papua new guinean">Papua New Guinean</option>
                <option value="paraguayan">Paraguayan</option>
                <option value="peruvian">Peruvian</option>
                <option value="polish">Polish</option>
                <option value="portuguese">Portuguese</option>
                <option value="qatari">Qatari</option>
                <option value="romanian">Romanian</option>
                <option value="russian">Russian</option>
                <option value="rwandan">Rwandan</option>
                <option value="saint lucian">Saint Lucian</option>
                <option value="salvadoran">Salvadoran</option>
                <option value="samoan">Samoan</option>
                <option value="san marinese">San Marinese</option>
                <option value="sao tomean">Sao Tomean</option>
                <option value="saudi">Saudi</option>
                <option value="scottish">Scottish</option>
                <option value="senegalese">Senegalese</option>
                <option value="serbian">Serbian</option>
                <option value="seychellois">Seychellois</option>
                <option value="sierra leonean">Sierra Leonean</option>
                <option value="singaporean">Singaporean</option>
                <option value="slovakian">Slovakian</option>
                <option value="slovenian">Slovenian</option>
                <option value="solomon islander">Solomon Islander</option>
                <option value="somali">Somali</option>
                <option value="south african">South African</option>
                <option value="south korean">South Korean</option>
                <option value="spanish">Spanish</option>
                <option value="sri lankan">Sri Lankan</option>
                <option value="sudanese">Sudanese</option>
                <option value="surinamer">Surinamer</option>
                <option value="swazi">Swazi</option>
                <option value="swedish">Swedish</option>
                <option value="swiss">Swiss</option>
                <option value="syrian">Syrian</option>
                <option value="taiwanese">Taiwanese</option>
                <option value="tajik">Tajik</option>
                <option value="tanzanian">Tanzanian</option>
                <option value="thai">Thai</option>
                <option value="togolese">Togolese</option>
                <option value="tongan">Tongan</option>
                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                <option value="tunisian">Tunisian</option>
                <option value="turkish">Turkish</option>
                <option value="tuvaluan">Tuvaluan</option>
                <option value="ugandan">Ugandan</option>
                <option value="ukrainian">Ukrainian</option>
                <option value="uruguayan">Uruguayan</option>
                <option value="uzbekistani">Uzbekistani</option>
                <option value="venezuelan">Venezuelan</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="welsh">Welsh</option>
                <option value="yemenite">Yemenite</option>
                <option value="zambian">Zambian</option>
                <option value="zimbabwean">Zimbabwean</option>
         </select>
          <script>
              var sel = document.getElementById('nationality');
              var val = "<?php echo "welsh"; ?>";
              for(var i = 0, j = sel.options.length; i < j; ++i) {
                  if(sel.options[i].value == '<?php echo $row["nationality"]; ?>') {
                     sel.selectedIndex = i;
                     break;
                  }
              }
          </script>


    </div>
    <div class="singup" id="second">


    <p>city:</p> <input type="text"  name="city" value =<?php echo $row['city']; ?>>
 <p>phone number:</p>  <input type="number" name="phone_number" value =<?php echo $row['phone_number']; ?>>
  <p>current job:</p>   <input type="text" name="current_job" value =<?php echo $row['current_job']; ?>>
   <p>major:</p>  <input type="text" name="major"value =<?php echo $row['major']; ?>>


  <p>experience:</p>   <textarea  name="experience" cols="57" rows="4"><?php echo $row['experience']; ?></textarea>
   <p>skills:</p> <textarea  name="skills" cols="57" rows="4" ><?php echo $row['skills']; ?></textarea>



<button><a type="button" href="delete_jobseeker.php" onClick="return confirm('Delete This profile?')">delete profile</a> </button>
<h5><button><a type="button" href="the_job_seeker_profile.php">Cancel</a></button>

<button><a type="submit" >Done</a></button></h5>

</form>
</div>

</body>
</html>
