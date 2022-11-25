function getRiders() {
    alert("Data");
    let getRiders = $.ajax({
        url: "./services/get_race_entries.php",
        type: "POST",
        dataType: "json"
    });

    getRiders.fail(function (jqXHR, textStatus) {
        alert("Something went Wrong! (getRiders)" +
            textStatus);
    });

    getRiders.done(function (data) {

        let content = ``;

        $.each(data, function (i, item) {
            let race_entries_id = item.race_entries_id;
            let name_first = item.name_first;
            let name_last = item.name_last;

            content += `<div class="getRider" data-id="${race_entries_id}">Name: ${name_last}, ${name_first}</div>`;

        });

        $("#riders").html(content);

    });

    
}

//Rider code:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
function getRider(id){
    let getRider = $.ajax({
        url: "./services/get_race_entry.php",
        type: "POST",
        data: {
            id:id
        },
        dataType: "json"
    });

    getRider.fail(function (jqXHR, textStatus) {
        alert("Something went Wrong! (getRider)" +
            textStatus);
    });

    getRider.done(function (data) {

        let content = ``;

        $.each(data, function (i, item) {
            let race_entries_id = item.race_entries_id;
            let name_first = item.name_first;
            let name_last = item.name_last;
            let email = item.email;
            let dob = item.dob;
            let gender = item.gender_id;

            content += `<div>Last Name: ${name_last}</div>
                        <div>Last First: ${name_first}</div>
                        <div>Email: ${email}</div>
                        <div>Date of Birth: ${dob}</div>
                        <div>Gender: ${gender}</div>`;

        });

        $("#riders").html(content);

    });
}


$(window).on("load", function () {
    alert("Dingo");
    // getRiders();

    $(document).on("click", "body .getRider", function () {
        let id = $(this).attr("data-id");

        // alert("Rider: "+id);
        getRider(id);
    });

    $("#getRiders").click(
        function () {

            getRiders();
        }
    );


});
