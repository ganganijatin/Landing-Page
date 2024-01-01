<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process user input
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = $_POST['name'];
  $contno = $_POST['contno'];
  $age = $_POST['age'];
  $weight = $_POST['weight'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $whatyourgoal = $_POST['whatyourgoal'];
  $date = $_POST['date'];
  
    // SQL to insert data
    $sql = "INSERT INTO tbl_form (name,contno,age,weight,email,gender,whatyourgoal,date)VALUES ('$name','$contno','$age','$weight','$email','$gender','$whatyourgoal',$date)";

    if ($conn->query($sql) === TRUE) 
    {
      echo '<script type="text/javascript">

      window.onload = function () { alert("SucessFully Booked"); }

</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
            <div class="grid md:grid-cols-2 container space-y-10">
                <div class="md:pt-48 md:pl-10">
                    <h1 class="md:text-6xl text-lime-600 text-center text-4xl font-sans font-semibold">
                    Elevate Your Fitness
                    </h1>
                    <h1 class="md:text-6xl text-lime-600 text-center text-4xl font-sans font-semibold">
                    Journey with field’s</h1>
                    <h1 class="md:text-6xl text-lime-600 text-center text-4xl font-sans font-semibold">  
                    Leading Health experts</h1>

                    <h2 class="pt-10 text-center text-lg text-gray-400">Healthx is India's top-rated personalised wellness platform.</h2>
                </div> 


                    <div class="rounded-3xl	border-2 md:w-4/6 md:p-6 md:pt-10 mx-12">
                    <form class="w-full max-w-lg" method="post" action="#">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  px-6 pt-2">
      <label class="block uppercase tracking-wide  text-xs font-bold mb-2" for="name">
        Name
      </label>
      <input class="appearance-none block w-full bg-white  border  rounded py-3 px-4 mb-3 leading-tight" id="name" name="name" type="text" placeholder="Jane" required>
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3 px-6 pt-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contno.">
        Contact Number
      </label>
      <input name="contno" required class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="contno." type="number" placeholder="Contact Number">
    </div>

    <div class="w-full md:w-1/2 px-3 px-6 pt-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="age">
        Age
      </label>
      <input name="age" required class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="age" type="number" placeholder="1">
    </div>

    <div class="w-full md:w-1/2 px-3 px-6 pt-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="weight">
        Weight (In Kg)
      </label>
      <input  name="weight" required class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="weight" type="floatval" placeholder="Enter Weight In Kg">
    </div>

    <div class="w-full md:w-1/2 px-3 px-6 pt-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
        Email
      </label>
      <input name="email" required class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="John@gmail.com">
    </div>

    <div class="w-full md:w-1/2 px-3 px-6 pt-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">
        Gender
      </label>
      <div class="dropdown">
      <select id="gender" required name="gender" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      <option value="">Select Gender</option>
      <option value="Male">Male</option>
       <option value="Female">Female</option>
       <option value="Other">Other</option>
 </select>
<span id="home_page_gender_error" style="color:red;"></span>
</div>
    </div>

    <div class="w-full md:w-1/2 px-3 px-6 pt-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="whatyourgoal">
        What's Your Goal?
      </label>
      <div class="dropdown">
      <select id="whatyourgoal" required name="whatyourgoal" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      <option value="">Select your Goal</option>
      <option value="Weight Loss">Weight Loss</option>
        <option value="Weight Gain">Weight Gain</option>
       <option value="Diabetes">Diabetes</option>
         <option value="Thyroid">Thyroid</option>
       <option value="PCOD/PCOS">PCOD/PCOS</option>
         <option value="Other Health conditions">Other Health conditions
        </option>
        <option value="Achieving Optimum Health">Achieving Optimum
         Health
      </option>
 </select>
<span id="home_page_gender_error" style="color:red;"></span>
</div>
    </div>

<div class="w-full md:w-1/2 px-3 px-6 pt-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Select Date
      </label>
      
<div class="relative max-w-sm">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
    </svg>
  </div>
  <input datepicker type="date" required name="date" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
</div>
</div>

    <div class="flex justify-between pt-6 ml-6">
        <div>
            <button class="bg-lime-500 text-white px-4 py-2 rounded-lg hover:bg-lime-700" name="submit" type="submit">Subscribe Now or Book Now</button>
        </div>
    </div>


</div>  
</form>
</div>
</body>
</html>
