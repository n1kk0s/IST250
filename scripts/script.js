
// JS for tab switching
function switchTabs(evt, tabName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function validate() { // Literally, I have no clue why this won't work. It won't run the else.
    if (document.getElementById("name").value == "") {
        return false;
    }
    else if (document.getElementById("message").value == "") {
        return false;
    }
    else {
        return true;
    }
}

function thanks() {
    // if (validate()) {
    //     alert("One of the required fields is empty!");
    // }
    // else {
        alert("Thanks for the submission!");
        location.reload();
    // }
}
