<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>User detail servay form</title>
</head>

<body>
    <h1>PLEASE ENTER YOUR DETAILS!!</h1>
    <form action="" method="POST">
        <div class="centerd_element">
            <div>
                <input type="text" id="fname" placeholder="First name">
            </div>
            <br>
            <div>
                <input type="text" id="lname" placeholder="Last name">
            </div>
            <br>
            <div>
                <input type="password" id="pwd" placeholder="Password">
            </div>
            <br>
            <div>
                <input type="email" id="email" placeholder="Email">
            </div>
            <br>
            <div>
                <input type="tel" id="pNum" placeholder="Phone number">
            </div>
            <br>
            <div>
                <input type="date" id="bDay" placeholder="Birthday">
            </div>
            <br>
            <div>
                <label for="gender">Gender:</label>
                <label> Male:</label>
                <input type="radio" id="male" name="gender" value="male">
                <label> Female:</label>
                <input type="radio" id="female" name="gender" value="female">
            </div>
            <br>
            <div>
                <label for="title">Title:</label>
                <label> Mr:</label>
                <input type="radio" id="Mr" name="title" value="Mr">
                <label> Mrs:</label>
                <input type="radio" id="Mrs" name="title" value="Mrs">
                <label> Miss:</label>
                <input type="radio" id="Miss" name="title" value="Miss">
            </div>
            <br>
            <div>
                <select name="country" id="dropdown" class="countrySelection">
                    <option value disabled selected>Select yout country</option>
                    <option value="sri lanka">Sri lanka</option>
                    <option value="india">India</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="bangladesh">Bangladesh</option>
                    <option value="nepal">Nepal</option>
                    <option value="maldives">Maldives</option>
                    <option value="bhutan">Bhutan</option>
                    <option value="afghanistan">Afghanistan</option>
                    <option value="iran">Iran</option>
                    <option value="iraq">Iraq</option>
                    <option value="kuwait">Kuwait</option>
                    <option value="oman">Oman</option>
                    <option value="qatar">Qatar</option>
                    <option value="saudi arabia">Saudi Arabia</option>
                    <option value="syria">Syria</option>
                    <option value="turkey">Turkey</option>
                    <option value="united arab emirates">United Arab Emirates</option>
                    <option value="egipt">Egipt</option>
                    <option value="australiya">Australiya</option>
                    <option value="armenia">Armenia</option>
                    <option value="georgia">Georgia</option>
                    <option value="uk">Unaited kingdom</option>
                    <option value="usa">USA</option>
                </select>
            </div>
            <br>
            <div>
                <input type="text" id="address" placeholder="Address">
            </div>
            <br>
            <div>
                <select name="education" id="education" class="eduSelection">
                    <option value disabled selected>Select your education</option>
                    <option value="primary">Primary</option>
                    <option value="secondary">Secondary</option>
                    <option value="high school">High school</option>
                    <option value="diploma">Diploma</option>
                    <option value="degree">Degree</option>
                    <option value="master">Master</option>
                    <option value="phd">PhD</option>
                </select>
            </div>
            <br>
            <div>
                <label for="job">Job:</label>
                <label> Student:</label>
                <input type="radio" id="student" name="job" value="student">
                <label> Employee:</label>
                <input type="radio" id="employee" name="job" value="employee">
                <label> Unemployed:</label>
                <input type="radio" id="unemployed" name="job" value="unemployed">
            </div>
            <br>
            <div class="hobbies">
                <label for="hobbies">Hobbies:</label>
                <label> Reading:</label>
                <input type="checkbox" id="reading" name="hobbies" value="reading">
                <label> Writing:</label>
                <input type="checkbox" id="writing" name="hobbies" value="writing">
                <label> Playing:</label>
                <input type="checkbox" id="playing" name="hobbies" value="playing">
                <label> Watching:</label>
                <input type="checkbox" id="watching" name="hobbies" value="watching">
            </div>
            <br>
            <div class="username">
                <label for="username">Enter your user name</label>
                <input type="text" id="facebook" placeholder="Facebook">
                <input type="text" id="github" placeholder="Github">
                <input type="text" id="instagram" placeholder="Instagram">
            </div>
        </div>
    </form>
    <br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</body>

</html>