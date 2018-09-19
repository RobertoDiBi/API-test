<style>
    .header{
        font-size: 40px;
        color: lightskyblue;
        font-weight: bold;
    }

    #map {
        height: 500px;
        width: 100%;
    }
</style>
<section class="clean-block clean-form">
    <div class="container">
        <div class=" row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="block-heading">
                    <h2 class="header">Contact Us</h2>
                    <p>Send us your questions or suggestions to help us better improve your review experience.</p>
                </div>
                <form name="contactform" method="post" action="index.php?content=send_email_form">
                    <div class="form-group"><label>Name</label><input class="form-control" type="text" name="name" id="name" placeholder="First Name & Last Name" required=""></div>
                    <div class="form-group"><label>Subject</label><input class="form-control" type="text" name="subject" id="subject" required=""></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email" id="email" required=""></div>
                    <div class="form-group"><label>Message</label><textarea class="form-control" name="message" id="message" required=""></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name='sendemail' id="email">Send</button></div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="block-heading">
                    <h2 class="header"><i class="far fa-compass"></i> Locate Us</h2>
                    <p>977 Saint-Catherine St W, Montreal, QC H3B 4W3</p><br/>
                </div>
                <div id="map">
                    <script>
                        function initMap() {
                            var myLatLng = {lat: 45.501291, lng: -73.572446};

                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 12,
                                center: myLatLng
                            });

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title: 'Hello World!'
                            });
                        }
                    </script>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFc5bfeU0mkgOTJaup5InmKPTVPkvtu6E&callback=initMap">
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

