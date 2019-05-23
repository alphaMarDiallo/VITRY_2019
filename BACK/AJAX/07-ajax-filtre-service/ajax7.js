$(document).ready(function(){
    $('#service').change(function(){
        //alert('test');
        ajax();
    });

    function ajax()
    {
        var service = $('#service').val();
        console.log(service);

        var parameters = "service="+service;
        console.log(parameters);

        $.post("ajax7.php", parameters, function(data){
            $('#resultat').html(data.resultat);
        }, 'json');
    }
});