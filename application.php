<?php session_start();
 ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application page</title>

    <!--application stylesheet-->
    <link rel="stylesheet" href="styles/application_style.css">

    <!--dropzone stylesheet-->
    <link rel="stylesheet" href="styles/upload.css">

    <!--dropzone js file-->
    <script src="script/upload.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- header beginning -->
    <header>
        <?php include "nheader.php"; ?>
    </header>
    <!-- header ending -->

    <form action="signup.inc.php" method="post" id="">
        <div class="all">
            <div class="first-two">
                <div class="form">

                    <input type="text" placeholder="First Name" name="FName">

                </div>

                <div class="right">
                    <input type="text" placeholder="Last Name" name="LName">
                </div>
            </div>
            <div class="addd">

                <input type="text" placeholder="Address" name="Add">

            </div>
            <div class="left-right">
                <div class="email">
                    <input type="email" placeholder="Email" name="Mail">
                </div>

                <div class="right-birthday">
                    <input type="date" placeholder="Birthday" name="DoB">
                </div>
            </div>


            <div class="phone">
                <input type="text" placeholder="Phone Number" class="phone-number" name="Pno">


            </div>

            <div class="pass">
                <input type="password" placeholder="Password" name="Pwd">
            </div>

            <div class="re-pass">
                <input type="password" placeholder="Re-Password">
            </div>


            <hr class="hr">

            <div class="heading">
                <h1>Experience & Skills</h1>
            </div>

            <div class="left-dropdown">

                <div class="select">
                    <select name="Experience">
                        <option value="Experience in Field"> Expernice in Field</option>
                        <option value="Photojurnalis"> Photojurnalis</option>
                        <option value="Industrial"> Industrial</option>
                        <option value="Portrait">Portrait </option>
                        <option value="Wildlife"> Wildlife</option>
                        <option value="Fine art">Fine art</option>

                    </select>
                </div>

                <div class="right-discription">
                    <textarea name="Description" placeholder="Description" id="" cols="30" rows="10"></textarea>

                </div>
            </div>

            <div class="cover">
                <input type="text" placeholder="No of events covered" name="NoEvents">
            </div>

            <div class="both-left-right">
                <div class="dron">
                    <input type="checkbox" id="Drone">
                </div>


                <div class="right-aa">
                    <div class="dron-title">Drone <input type="text" placeholder="Drone Model" name="Model"></div>


                </div>
            </div>
            <div class="arial">
                <input type="text" placeholder="Experience in Arial Photography" name="Arial">
            </div>

            <div class="buttons">
                <button type="reset" name="reset" id="reset">
                    <div id="but-text">Reset </div>
                </button>
                <button type="submit" name="submit" id="submit">
                    <div id="but-text">Apply </div>
                </button>
            </div>

            <div class="upload">
                <h2>Upload your work</h2>

                <div id="upzone">
                    <div id="zoneText">Drag and drop file here to upload</div>
                    <i class="fa fa-cloud-upload"
                        style="font-size:35px;color:#9b9bbd; padding-left:60px; padding-top:8px"></i>
                    <!--change upload icon-->
                </div>

                <div id="upstat"></div>

                <!-- <form id="upform" action="upload.php" method="post" enctype="multipart/form-data"></form> -->

            </div>
    </form>

    <div id="open">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <br><br>
            <div id="up"><button type="submit" name="submit">Upload</button></div>
        </form>
    </div>

    </div>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

</body>

</html>