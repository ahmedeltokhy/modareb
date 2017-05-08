 </div>
        <!-- end .layout -->
        <!-- javascripts -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCeu4xRYNoGAKj6mJsCrTY285UO9W_vGhM"></script>
        <script type="text/javascript" src="assets/jslib/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="assets/jslib/jquery.ba-bbq.js"></script>
        <script type="text/javascript" src="assets/jslib/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="assets/jslib/bootstrap-transition.js"></script>
        <script type="text/javascript" src="assets/jslib/bootstrap-collapse.js"></script>
        <script type="text/javascript" src="assets/jslib/jquery.easypiechart.js"></script>
        <script type="text/javascript" src="assets/jslib/jquery.raty.js"></script>
        <script type="text/javascript" src="assets/jslib/jquery.sharrre.js"></script>
        <script type="text/javascript" src="assets/jslib/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="assets/js/Template.js"></script>
        <!-- end javascripts -->
        <!--AAA Modification-->
        <script type="text/javascript">
            Template.googleMapConfig = {
		// change map marker location here
		markerLocation:{
			lat:<?=(isset($data->lat))?$data->lat:-34.397?>,
			lng:<?=(isset($data->lng))?$data->lng:150.644?>
		},
		// uncomment line below if you want use image or svg file as a marker
		//markerIcon:{ url:'assets/svg/map-marker.svg' },
		zoom:8 // change map zoom value
	};
            
 
    
        </script>
        <style>
            .lang a img{
                width: 25px;
            }
        </style>
        <!--End AAA Modification-->
        <!-- .style-panel -->
        <div class="style-panel" style="display:none">
            <div class="style-panel__button">
                <i class="fa fa-paint-brush"></i>
            </div>
            <div class="style-panel__title">Choose a color:</div>
            <div class="style-panel__colors">
                <a data-value="style1" href="index.html#" class="style-panel__color style-panel__color--style1"></a>
                <a data-value="style2" href="index.html#" class="style-panel__color style-panel__color--style2"></a>
                <a data-value="style3" href="index.html#" class="style-panel__color style-panel__color--style3"></a>
                <a data-value="style4" href="index.html#" class="style-panel__color style-panel__color--style4"></a>
                <a data-value="style5" href="index.html#" class="style-panel__color style-panel__color--style5"></a>
                <a data-value="style6" href="index.html#" class="style-panel__color style-panel__color--style6"></a>
            </div>
            <div class="style-panel__info">and many more...</div>
            <div class="style-panel__reset">
                <button class="btn-reset btn btn-xs btn--style1">reset</button>
            </div>
        </div>
        <!-- end .style-panel -->
        <!-- style panel assets -->
        <script type="text/javascript" src="assets/jslib/jquery.cookie.js"></script>
        <script type="text/javascript" src="assets/js/StylePanel.js"></script>
        <!-- end style panel assets -->
    </body>
</html>