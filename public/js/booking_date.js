$(document).ready(function () {
    
    var default_date = $('#reserve_date').val();
    show(default_date);

    $('#reserve_date').change(function(){
        var date = $(this).val();
        show(date);
    })


    function show(date) {

        var url = 'http://cycle.tw/booking/json?date=' + date;
        $.getJSON(
                url,
                {},
                function (data) {
                    str = ''
                    $.each(data['data'], function (key, list) {
                        car = list.name;
                        customer = list.customer;
                        str += '<tr><td>' + car + '</td><td>' + customer + '</td></tr>';
                    })

                    $('#booking').empty().append(str);
                });

    }
})



