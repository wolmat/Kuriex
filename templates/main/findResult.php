<div class="container">
        

    <div class="four columns offset-by-two">
        <?php if(isset($data['delivery'])):
                $delivery = $data['delivery']; ?>
                <div class="info"> Znaleziono przesyłkę!</div>
				<h5>Przesyłka numer <?php echo $delivery['id_przesylki']; ?></h5>
        
                <table class="order-table">
                <tr>
                    <td><b>Opis</b></td>
                    <td><?php echo $delivery['opis']; ?></td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td><?php echo $delivery['status']; ?></td>
                </tr>
                <tr>
                    <td><b>Odbiorca</b></td>
                    <td><?php echo $delivery['odbiorca']; ?></td>
                </tr>
                <tr>
                    <td><b>Nadawca</b></td>
                    <td><?php echo $delivery['nadawca']; ?></td>
                </tr>
                <tr>
                    <td><b>Kurier</b></td>
                    <td><?php echo $delivery['kurier']; ?></td>
                </tr>
                </table>
        
    </div>  
    <?php if(isset($data['from']) && isset($data['to'])): ?>
    <div class="four columns offset-by-two">    
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBZRH8wbvbxkjwRdzdyx372PZHmvSLKRj0&sensor=false&extension=.js'>  </script> 

            <script> 
                google.maps.event.addDomListener(window, 'load', init);
                var map;
                function init() {
                    var mapOptions = {
                        center: new google.maps.LatLng(51.901494,19.282664),
                        zoom: 5,
                        zoomControl: false,
                        disableDoubleClickZoom: false,
                        mapTypeControl: false,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                        },
                        scaleControl: false,
                        scrollwheel: true,
                        panControl: false,
                        streetViewControl: false,
                        draggable : true,
                        overviewMapControl: false,
                        overviewMapControlOptions: {
                            opened: false,
                        },
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                    }
                    var mapElement = document.getElementById('Przesylki');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    var locations = [
            ['Przesylka 1', 'Opis pierwszej przesylki', 'undefined', 'undefined', 'undefined',
            <?php echo $data['from']; ?>, 'https://mapbuildr.com/assets/img/markers/default.png'],['Przesylka 2', 'Opis drugiej przesylki', 'undefined', 'undefined', 'undefined',
            <?php echo $data['to']; ?>, 'https://mapbuildr.com/assets/img/markers/default.png']
                    ];
                    for (i = 0; i < locations.length; i++) {
                        if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                        if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                        if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                       if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                       if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
                        marker = new google.maps.Marker({
                            icon: markericon,
                            position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                            map: map,
                            title: locations[i][0],
                            desc: description,
                            tel: telephone,
                            email: email,
                            web: web
                        });
            link = '';     }

            }
            </script>
        <style>
            #Przesylki {
                height:250px;
                width:250px;
            }
            .gm-style-iw * {
                display: block;
                width: 100%;
            }
            .gm-style-iw h4, .gm-style-iw p {
                margin: 0;
                padding: 0;
            }
            .gm-style-iw a {
                color: #4272db;
            }
        </style>

        <div id='Przesylki'></div>
        <?php endif; ?>
    </div>
    <?php else: ?>
        <dif class="message error">Nie znaleziono paczki!</h5>
    <?php endif; ?>
</div>
