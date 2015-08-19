
$(document).ready(function () {
    var base_url = $('#base_url').val();

    $("#old_domain_btn").on("click", function ()
    {
        var domain = $("#old_domain").val();
        domain = domain.trim();
        if (domain != "") {
            $.ajax({
                url: base_url + "test.php",
                type: "POST",
                data: {domain: domain},
                success: function (data)
                {
                    var response = JSON.parse(data);
                    console.log(response);
                    if (response) {
                        if (response['status'] == true) {
                            var html = "<div>";
                            html += "Id: " + response['data']['Id'];
                            html += "</div>";

                            var ns = response['data']['ns'];
                            for (var i = 0; i < ns.length; i++) {
                                html += "<div>";
                                html += "NS:" + (i + 1) + " " + ns[i];
                                html += "</div>";
                            }
                            $('#result').html(html);
                        }
                        else {
                            $('#result').html(response['msg']);
                        }
                    }
                    else {
                        $('#result').html("Something went wrong. :(");
                    }
                },
                error: function (xhr)
                {
                    console.log("error");
                    console.log(xhr);
                },
                async: true
            });
            return false;
        }
        else {
            alert("Please enter the domain name!");
        }
    });
});
