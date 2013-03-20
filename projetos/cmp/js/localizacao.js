var endereco;
var map, destino;
var localAtual = 1;

$(document).ready(function () {

    carregaMapa('Rua Alagoas, 212 - La Salle');

    // Mostra dados
    $('#tracarRota').click(function(){
    	mostra_evento();
    });
});

function carregaMapa(cidade){

    endereco = cidade;

    var geocoder = new google.maps.Geocoder();
    var geo_options = {
        address: endereco
    };

    geocoder.geocode(geo_options, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            destino = results[0].geometry.location;
            var myOptions = {
                zoom: 16,
                center: results[0].geometry.location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById('mapa_evento'), myOptions);

            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
                title: 'Local do Show'
            });
        } else {
            alert("Dados passados inválidos: " + status);
        }
    });

}

function mostra_evento() {

        $('#rota_evento').html('');

        var geo_opt = {
            address: document.getElementById('suaCidade').value
        };

        var geocoder = new google.maps.Geocoder();
        var geo_options = {
            address: endereco
        };

        geocoder.geocode(geo_opt, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var origem = results[0].geometry.location;
                var request = {
                    origin: origem,
                    destination: destino,
                    travelMode: google.maps.DirectionsTravelMode.DRIVING
                };

                var directionsService = new google.maps.DirectionsService();
                var directionsDisplay = new google.maps.DirectionsRenderer();
                directionsDisplay.setMap(map);

                directionsService.route(request, function (response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);

                        var rota = document.getElementById('rota_evento');

                        var cidade_origem = document.createElement('p');
                        cidade_origem.className = 'cidade_origem';
                        cidade_origem.appendChild(document.createTextNode(response.routes[0].legs[0].start_address));
                        var duracao = document.createElement('p');
                        duracao.className = 'duracao';
                        duracao.appendChild(document.createTextNode(response.routes[0].legs[0].distance.text));
                        duracao.innerHTML = duracao.innerHTML + ' (aprox. ';
                        duracao.appendChild(document.createTextNode(response.routes[0].legs[0].duration.text));
                        duracao.innerHTML = duracao.innerHTML + ')';
                        rota.appendChild(cidade_origem);
                        rota.appendChild(duracao);

                        var directions = document.createElement('ol');
                        directions.id = 'percurso';
                        // console.log(response.routes);
                        for (var i = 0; i < response.routes[0].legs[0].steps.length; i++) {
                            var subroute = document.createElement('li');
                            var distance = document.createElement('span');
                            distance.className = 'distancia';
                            $(distance).html(response.routes[0].legs[0].steps[i].distance.text);

                            $(subroute).append('<span class="instr">' + response.routes[0].legs[0].steps[i].instructions + '</span>');
                            subroute.appendChild(distance);
                            directions.appendChild(subroute);
                        }
                        rota.appendChild(directions);

                        var cidade_final = document.createElement('p');
                        cidade_final.className = 'cidade_destino';
                        cidade_final.appendChild(document.createTextNode(response.routes[0].legs[0].end_address));
                        rota.appendChild(cidade_final);

                    }
                });

            } else {
                if (status == 'ZERO_RESULTS') alert("Cidade não encontrada!\nVerifique se o nome estão correto.");
                else alert("Ocorreu um erro ao traçar rota: " + status);
            }
        });
}