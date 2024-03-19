

var number = '+12065550100'


$.ajax({
    method: 'GET',
    url: 'https://api.api-ninjas.com/v1/validatephone?number=' + number,
    headers: { 'X-Api-Key': 'j7x2wGP69csEagPf3WdEKg==0y2wqgOfdkaHd3ke'},
    contentType: 'application/json',
    success: function(result) {
        console.log(result);
    },
    error: function ajaxError(jqXHR) {
        console.error('Error: ', jqXHR.responseText);
    }
});

