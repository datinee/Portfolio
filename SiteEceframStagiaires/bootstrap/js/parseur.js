$(document).ready(function () {
    
   $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
    $.ajax({
        type: "GET",
		//url: "http://192.168.43.92/TP_Velib/carto.xml",
        url: "carto.xml",
        dataType: "xml",
        success: xmlParser
    });
});

function xmlParser(xml) {
    
    
    var latlng = new google.maps.LatLng(28.000027, 2.9999825);
				//objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
				//de définir des options d'affichage de notre carte
				var options = {
					center: latlng,
					zoom: 5,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				
				//constructeur de la carte qui prend en paramêtre le conteneur HTML
				//dans lequel la carte doit s'afficher et les options
				var carte = new google.maps.Map(document.getElementById("carte"),options);
                                 
                                
                                  
   
    $(xml).find("marker").each(
	function () {
		
		var latitude= $(this).attr('lat');
		var longitude= $(this).attr('lng');
                var nom = $(this).attr('name');
		
                    
                
                 var marqueur = new google.maps.Marker({
                                    
                                    
				position: new google.maps.LatLng(latitude, longitude) ,
                                        
                                map: carte, 
                                
                                title: nom
	
				});
                
                
         });   
         }
         
       
 $("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});
			
		
function affich(nom) {
    
  
   $(".container1").hide();
   $("#"+nom).show();
}


function modale() {
jQuery.noConflict();
  $('.modal').modal("show") ;


}

