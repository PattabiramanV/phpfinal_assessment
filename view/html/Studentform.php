<!-- component -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body> -->
    <!--  Application Details Start -->
    <div class="w-full bg-grey-500">
        <div class="container mx-auto py-8">
            <div class="w-96 mx-auto bg-white rounded shadow">

                <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">Student Application
                </div>

                <form name="student_application" id="student_application" action=""  >
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2">Student ID:</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" value="<?php echo $editStudent['student_id'] ?>" type="number"
                                name="student_id" id="student_id" value="" placeholder="Enter Your ID">
                     
                        </div>


                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2">Student Name</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker"  value="<?php echo $editStudent['name'] ?>" type="text"
                                name="student_name" id="student_name" value="" placeholder="Enter Your Name">
                      
                        </div>

                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2">Email:</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="email" value="<?php echo $editStudent['email'] ?>" 
                                name="course_name" id="email" value="" placeholder="Enter Your email">
                            <p id=error_creater_id></p>
                        </div>


                             <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2">Addmission Date:</label>
                            <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="date"
                                name="addmission_date" id="addmission_date" value="<?php echo $editStudent['admission'] ?>" >
                            <p id=error_intake_year></p>
                        </div>
                        <div class="mb-4">
                            <button onclick="studentDataStoreFun(event)"
                                class="mb-2 mx-16 rounded-full py-1 px-24 bg-gradient-to-r from-green-400 to-blue-500 ">
                                Save
                            </button>
                            <!-- <button 
                                class="mb-2 mx-16 rounded-full py-1 px-24 bg-gradient-to-r from-green-400 to-blue-500 ">
                                Update
                            </button> -->
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!--  Application Details End -->


   
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!-- Student Visa End -->




<!-- </body>

</html> -->

