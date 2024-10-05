<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Valid Example</title>
    <style>
        span {
            color: red;
        }
    </style>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var address = document.getElementById("address").value;
            var email = document.getElementById("email").value;
            var isValid = true;

            // MEKEN KALIN THIBBA MESSAGES RESET WENAWA
            document.getElementById("nameError").innerHTML = "";
            document.getElementById("addressError").innerHTML = "";
            document.getElementById("emailError").innerHTML = "";

            // HIS THIYENA EWWA CHECK KARANAWA
            if (name == "") {
                isValid = false;
                document.getElementById("nameError").innerHTML = " Missing";
            }
            if (address == "") {
                isValid = false;
                document.getElementById("addressError").innerHTML = " Missing";
            }
            if (email == "") {
                isValid = false;
                document.getElementById("emailError").innerHTML = " Missing";
            }

            // OKKOMA PIRILANAM RESULT EKA PENNANAWA
            if (isValid) {
                var result = "Entered Details:<br>";
                result += "Name: " + name + "<br>";
                result += "Address: " + address + "<br>";
                result += "Email: " + email;
                document.getElementById("result").innerHTML = result;
            }

            return false; // MEKEN THAMAY HISWA THIYENAWANAM FORM SUBMIT KARANNA NODII BLOCK KARANNE
        }
    </script>

</head>

<body>
    <h1>Form Valid Example</h1>
    <form id="myForm" onsubmit="return validateForm()">
        Name: <input type="text" id="name"><span id="nameError"></span><br><br>
        Address: <input type="text" id="address"><span id="addressError"></span><br><br>
        Email: <input type="text" id="email"><span id="emailError"></span><br><br>
        <input type="submit" value="Submit">
    </form>

    <br><br>
    <div id="result"></div>
</body>

</html>