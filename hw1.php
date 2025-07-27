<!DOCTYPE html>
<html>
<head>
    <title>AIUB</title>
</head>
<body>
    <div class="container">
    <h1> Bank Management System </h1> <br>
<h5>Your trusted Financial Partner</h5>
</div>

<div class="table">
    <table>
       <br><tr><center><h3 style= "color:rgb(16, 16, 15);">Customer Registration Form</h3></center></tr>
          
        <tr>
            <td>Full Name: <br>
                <input type placeholder="Enter your name here..." size= 50%> 
            </td>
            
        </tr>
       
        <tr>
            <td>Date of Birth: <br>
                <input type="date">
            </td>
        </tr>

<br>
        <tr>
            <td>
                Gender: <br>
                <input type="radio" name=gender value=male> Male
                <input type="radio" name=gender value=female>Female
                <input type="radio" name=gender value=other>Other
            </td>
        </tr>
<br>
        <tr>
            <td>
                 Marital status: <br>
                    <select name ="marital status">
                        <option value="single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Devorced">Devorced</option>
            </td>
        </tr>

        <tr>
            <td>
                 Account type: <br>
                    <select name ="Savings">
                        <option >Current</option>
                        <option >Deposite</option>
                       
            </td>
        </tr>

        <tr>
            <td>
                Initial Deposit Amount: <br>
                <input type placeholder="Enter your amount here..."size= 60%>
            </td>
        </tr>

         <tr>
            <td>
                Enter Mobile Number: <br>
                <input type placeholder="01..." size= 30%>
            </td>
        </tr>

         <tr>
            <td>
                Email Adress: <br>
                <input type placeholder="Enter your email here..."size= 60%>
            </td>
        </tr>

         <tr>
            <td>
                Adress: <br>
                <textarea placeholder="Enter your address here..."></textarea>
            </td>
        </tr>

        <tr>
            <td>
                Occupation: <br>
                <input type placeholder="Enter your occupation here..."size= 60%>
            </td>
        </tr>

        <tr>
            <td>
                National ID (NID): <br>
                <input type placeholder=" Enter your NID Number here..."size= 60%>
            </td>
        </tr>

        <tr>
            <td>
                Set Password: <br>
                <input type placeholder="Enter your password here..."size= 60%>
            </td>
        </tr>

        <tr>
            <td>Upload ID Proof: <br>
                <input type="file">
            </td>
        </tr>

        <tr>
            <td>
                <input type="checkbox">  I agree to the terms and conditions
            </td>
        </tr>

        <tr>
            <td>
                <button type="Submit">Submit</button>
                <button type="Reset">Reset</button>
            </td>
        </tr>

    </table>
    </div>
       
   


   
    <style>

        body {
            background-color: #008B8B;
            color: black;
            font-family: Arial, sans-serif;
            text-align: left;
            padding: 20px;
        }

        h1,h2, {
            color: white;
            text-align:center;
            font-size: 2.5rem;
        }
        .table
        {
            background-color: #E0FFFF;
            border: 2px solid #000;
            width: 55%;
            margin: auto;
            padding: 20px;
            border-radius: 10px

        }

        input[type=submit],input[type=reset]
        {
            padding:5px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            color: #E0FFFF;
            text-align: center;
            padding: 20px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 20px; 
            border-radius: 5px;
            border-color: black;
        }
        .box {
            background-color: black;
            padding: 10px;
            border: 5px; 
            border-radius: 5px;
            margin-bottom: 20px;
        }

        

        

        </style>

  


</body>
</html>