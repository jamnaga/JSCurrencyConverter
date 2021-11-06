var from_curr = "";
var to_curr = "";

var asd;
var fetchCurrencies = () => {

    $.ajax({
        url: "https://api.frankfurter.app/currencies",
        success: function (result) {
            //var data = JSON.parse(result);
            window.asd = result;
            var keys = Object.keys(result);


            keys.forEach((key) => {
                $(".dropdown-menu").append('<a class="dropdown-item" name="' + key + '">' + key + '</a>');
            })
        }
    });
}
var doConversion = () => {
    
    if (window.from_curr == "" || window.to_curr == "") {
        $("#result").val("Select currency and amount first");
        $("#result").slideDown();
    } else if (window.from_curr == window.to_curr) {
        $("#result").val("You cannot convert the same currency");
        $("#result").slideDown();

    } else {
        $.ajax({
            url: "https://api.frankfurter.app/latest?amount=" + $("#amount").val() + "&from=" +
                window.from_curr + "&to=" + window.to_curr,
            success: function (result) {
                //var data = JSON.parse(result);
                
                $("#result").val(result.rates[to_curr] + " " + to_curr);
                $("#result").slideDown();
            }
        });
    }
    
}

$(() => {
    fetchCurrencies();

    $("body").delegate('#search1', 'keyup', (e) => {
        

        if ($("#search1").val() == "" || $("#search1").val().includes(" ")) {
            $(".dropdown-item").show();
            
        } else {
            $(".dropdown-item").hide();
            $(".dropdown-item:contains('" + $("#search1").val().toUpperCase() + "')").show();
        }
        
        /*$(".dropdown-item").each((element) => {
            if ($(element).text().includes($("#search").val())) {
                $(element).show();
            } else {
                $(element).hide();
            }
        });*/

        
    });

    $("body").delegate('#search2', 'keyup', (e) => {

        if ($("#search2").val() == "" || $("#search2").val().includes(" ")) {
            $(".dropdown-item").show();
            
        } else {
            $(".dropdown-item").hide();
            $(".dropdown-item:contains('" + $("#search2").val().toUpperCase() + "')").show();
        }
        
        /*$(".dropdown-item").each((element) => {
            if ($(element).text().includes($("#search").val())) {
                $(element).show();
            } else {
                $(element).hide();
            }
        });*/

        
    });


    $(".curr").click(() => {
        $("#search1").val("");
        $("#search2").val("");
        $(".dropdown-item").show();
    });

    $("body").on('click', '.dropdown-item', (e) => {
        $(e.target).parent().parent().find('button').text($(e.target).text());
        if ($(e.target).parent().parent().find('button').attr("id") == "from_curr") {
            window.from_curr = $(e.target).text();
        } else {
            window.to_curr = $(e.target).text();
        }

    });

    $('body').on('keypress', 'input', (e) => {
        if ((e.keyCode || e.which) == 13) {
            doConversion();
        }
    });
    $("#go_btn").click(doConversion)
});