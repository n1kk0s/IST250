<?php
if(isset($_POST['submit'])){
    $to = "nweld568@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Sense8 Form";
    $comments = $_POST['comments'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $namename . ".";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sense8</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/responsive.css" />
    <link rel="stylesheet" type="text/css" href="styles/tabs.css" />
    <!-- <link rel="stylesheet" type="text/css" href="styles/modal.css" /> -->
    <link rel="icon" type="image/x-icon" href="icons/8.ico"/>
</head>
<body>

    <script src="scripts/script.js"></script> <!-- Enables switching between tabs -->
    <!-- <script src="scripts/modal.js"></script> Enables modal on form submission. MODAL ISN'T WORKING -->

    <img  class="sideImage" src="images/sense8.jpg" alt="Sense8 Cover Art"> <!-- Side Image -->

    <div class="nav"> <!-- Navigation Links -->
        <ul>
            <li><a href="index.html" class="active">Home</a> | </li>
            <li><a href="will.html">Will</a> | </li>
            <li><a href="riley.html">Riley</a> | </li>
            <li><a href="lito.html">Lito</a> | </li>
            <li><a href="nomi.html">Nomi</a> | </li>
            <li><a href="capheus.html">Capheus</a> | </li>
            <li><a href="sun.html">Sun</a> | </li>
            <li><a href="wolfgang.html">Wolfgang</a> | </li>
            <li><a href="kala.html">Kala</a></li>
        </ul>
    </div>

    <div class="page">

        <div class="content"> <!-- Content wrapper that holds most content -->
            <h1 class="header">Sense8</h1>

            <div class="tab"> <!-- Start of the tabbed content -->
                <button class="tablinks active" onclick="switchTabs(event, 'Description')">Description</button>
                <button class="tablinks" onclick="switchTabs(event, 'Copyright')">Copyright</button>
                <button class="tablinks" onclick="switchTabs(event, 'Form')">Contact</button>
            </div>

            <div id='Description' class="tabcontent">
                <h2>Description</h2>
                <p>Eight strangers around the globe find themselves connected -- first by a violent vision, then by their shared ability to connect with one another's thoughts and actions, and finally by the urgent need to find out what happened and why. Their need to know goes beyond simple curiosity -- as they pursue answers, a mysterious organization hunts them down, intent on destroying them.</p>
            </div>

            <div id='Copyright' class="tabcontent" style="display: none;">
                <h2>Copyright - Sense8</h2>
                <p>Sense8 is a Netflix original series released in 2015 directed by the Wachowski sisters. I claim no ownership of any content on this site. All images and information are the sole property of Netflix. Information found here is only being used for educational purposes.</p>
            </div>

            <div id='Form' class="tabcontent" style="display: none;">
                <h2>Submit Some Stuff</h2>
                <p>Questions or comments? Submit them here!</p>
                <div class="form">
                 <form action="" method="post">
                    <input class="name" type="text" name="name" id="name" placeholder="Name">
                    <br>
                    <input class="emai" type="text" name="email" id="email" placeholder="Email Address">
                    <br>
                    <textarea class="message" name="comments" id="comments" placeholder="Comments"></textarea>
                    <br>
                    <input type="submit" name="submit" value="Submit" class="button" id="myBtn"> <!-- Form validation doesn't work as well as my PHP. I'm having trouble -->
                  </form>
                </div>

                <!-- Modal stuff  (this will also not work for some reason. Might be because of nested JS or something.)-->
                <!-- <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Thanks for your submission!</p>
                    </div>
                </div> -->

            </div>
        </div>
    </div>

</body>
</html>
