
$(document).ready(function () {
    var base_url = $('#base_url').val();

    $("#old_domain_btn").on("click", function ()
    {
        var domain = $("#old_domain").val();
        domain = domain.trim();
        if (domain != "") {
            $.ajax({
                        url: base_url+"test.php",
                        type: "POST",
                        data: {domain: domain},
                        success: function (data)
                        {
                            var result = JSON.parse(data);
                            console.log(result);
                            var response = result['data'];
                            if (response) {

                                var html = "<div>";
                                html += "Id: " + response['Id'];
                                html += "</div>";

                                var ns = response['ns'];
                                if (ns) {
                                    for (var i = 0; i < ns.length; i++) {
                                        html += "<div>";
                                        html += "NS:" + (i + 1) + " " + ns[i];
                                        html += "</div>";
                                    }
                                    $('#result').html(html);
                                }
                                else {
                                    $('#result').html(" No result found");
                                }
                            }
                        },
                        error: function ()
                        {
                            console.log("error");
                        }
                    });
                    return false;
        }
        else {
            alert("Please enter the domain name!");
        }
    });
});
