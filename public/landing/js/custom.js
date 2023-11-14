$(document).ready(function(){

	"use strict";

    

        /*==================================

* Author        : "ThemeSine"

* Template Name : Travel HTML Template

* Version       : 1.0

==================================== */


        /*=========== TABLE OF CONTENTS ===========

1. Scroll To Top
2. Range js
3. Countdown timer
4. owl carousel
5. datepicker
6. Smooth Scroll spy
7. Animation support
======================================*/
    

    // 1. Scroll To Top 

		$(window).on('scroll',function () {

			if ($(this).scrollTop() > 600) {

				$('.return-to-top').fadeIn();

			} else {

				$('.return-to-top').fadeOut();

			}

		});

		$('.return-to-top').on('click',function(){

				$('html, body').animate({

				scrollTop: 0

			}, 1500);

			return false;

		});

    // 2. range js
        
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 12000,
            values: [ 2677, 9241 ],
            slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        
        
        // Quantity Buttons Shop
    
        $(".qtyplus").on("click", function(){
        var b = $(this).parents(".quantity-form").find("input.qty"),
                c = parseInt(b.val(), 10) + 1,
                d = parseInt(b.attr("max"), 10);
            d || (d = 9999999999), c <= d && (b.val(c), b.change())
        });
        $(".qtyminus").on("click", function(){
            var b = $(this).parents(".quantity-form").find("input.qty"),
                c = parseInt(b.val(), 10) - 1,
                d = parseInt(b.attr("min"), 10);
            d || (d = 1), c >= d && (b.val(c), b.change())
        });


    // 3.Countdown timer 
        
        function makeTimer() {

                var endTime = new Date("March 7, 2019 12:00:00 PDT");            
                var endTime = (Date.parse(endTime)) / 1000;

                var now = new Date();
                var now = (Date.parse(now) / 1000);

                var timeLeft = endTime - now;

                var days = Math.floor(timeLeft / 86400); 
                var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
                var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
                var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

                if (hours < "10") { hours = "0" + hours; }
                if (minutes < "10") { minutes = "0" + minutes; }
                if (seconds < "10") { seconds = "0" + seconds; }

                $("#days").html(days + '<span class="camp">Days</span>');
                $("#hours").html(hours + '<span class="camp">Hour</span>');
                $("#minutes").html(minutes + '<span class="camp">Minute</span>');
                $("#seconds").html(seconds + '<span class="camp">Second</span>');       

        }
        
        setInterval(function() { makeTimer(); }, 1000);

    // 4. owl carousel
    
        // i. #testimonial-carousel
    
        
        var owl=$('#testemonial-carousel');
        owl.owlCarousel({
            items:3,
            margin:0,
            
            loop:true,
            autoplay:true,
            smartSpeed:1000,
            
            //nav:false,
            //navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            
            dots:true,
            autoplayHoverPause:true,
        
            responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    640:{
                        items:1
                    },
                    767:{
                        items:2
                    },
                    992:{
                        items:3
                    }
                }
            
            
        });

    // 5. datepicker
            $('[data-toggle="datepicker"]').datepicker();

    // 6. Smooth Scroll spy
        
        $('.header-area').sticky({
           topSpacing:0
        });
        
        //=============

        $('li.smooth-menu a').bind("click", function(event) {
            event.preventDefault();
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - -1
            }, 1200,'easeInOutExpo');
        });
        
        $('body').scrollspy({
            target:'.navbar-collapse',
            offset:0
        });

    // 7.animation support

        $(window).load(function(){

            $(".about-us-txt h2").removeClass("animated fadeInUp").css({'opacity':'0'});
            $(".about-us-txt button").removeClass("animated fadeInDown").css({'opacity':'0'});
        });

        $(window).load(function(){

            $(".about-us-txt h2").addClass("animated fadeInUp").css({'opacity':'0'});
            $(".about-us-txt button").addClass("animated fadeInDown").css({'opacity':'0'});

        });
	// 8. Change Map
	var newSource = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31647.07045412017!2d110.80557886140005!3d-7.478081287987942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a11af04c5df6f%3A0x5027a76e356bc40!2sDayu%2C%20Kec.%20Gondangrejo%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1685965694499!5m2!1sid!2sid";
	var ketSource = "Dayu adalah desa di kecamatan Gondangrejo, Karanganyar, Jawa Tengah, Indonesia. <br>Provinsi: Jawa Tengah <br>Jumlah penduduk: 7568<br>Kabupaten: Karanganyar<br>Kecamatan: Gondangrejo<br>Kodepos: 57188<br>Luas: 12 km2.";
	
	changeMapSource(newSource,ketSource);
	function changeMapSource(newSource,ketSource) {
      var iframe = document.createElement("iframe");
      iframe.src = newSource;
      iframe.width = "100%";
      iframe.height = "600";
      iframe.frameborder = "0";
		iframe.loading = "lazy";
      iframe.allowfullscreen = true;

	var paragraf = document.createElement("p");
		paragraf.textContent = ketSource;
		
		var penjelasan = document.getElementById("penjelasan");
		
		penjelasan.innerHTML = "";
		penjelasan.appendChild(paragraf);
      var mapContainer = document.getElementById("mapContainer");
      mapContainer.innerHTML = ""; // Menghapus konten sebelumnya (jika ada)
      mapContainer.appendChild(iframe);
    }
		$(".change-maps").on("click",function(){
			var valuesloct = event.target.value;

			var newSource;
			var ketSource;
			if( valuesloct == "pcp"){
				ketSource = "Puncak Cemara Pitu merupakan salah satu destinasi wisata yang berada di Desa Dayu, Gondangrejo, Karanganyar, Jawa Tengah. Puncak Cemara Pitu menyajikan pemandangan seluruh Desa Dayu yang dapat disaksikan dari puncak bukit ini. Di depan puncak bukit ini terdapat lapangan luas yang biasa digunakan warga untuk menyelenggarakan berbagai acara seperti lomba memperingati hari kemerdekaan, malam tirakatan, dan sebagainya. Puncak Cemara Pitu tidak menerapkan sistem tiket. Pengunjung bisa langsung menuju ke menara di puncak bukit untuk melihat keindahan alam Desa Dayu dari atas bukit..";
				newSource = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.812642799916!2d110.84453487589823!3d-7.485929473822563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a11b3d3023473%3A0x5615571ea4a89bec!2sPuncak%20cemoro%20pitu!5e0!3m2!1sid!2sid!4v1685769311743!5m2!1sid!2sid";
			} else if(valuesloct == "dd"){
				ketSource = "Dayu adalah desa di kecamatan Gondangrejo, Karanganyar, Jawa Tengah, Indonesia. <br>Provinsi: Jawa Tengah <br>Jumlah penduduk: 7568<br>Kabupaten: Karanganyar<br>Kecamatan: Gondangrejo<br>Kodepos: 57188<br>Luas: 12 km2";
				newSource = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31647.07045412017!2d110.80557886140005!3d-7.478081287987942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a11af04c5df6f%3A0x5027a76e356bc40!2sDayu%2C%20Kec.%20Gondangrejo%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1685965694499!5m2!1sid!2sid";
			}else if(valuesloct == "mp"){
				ketSource = "Museum Manusia Purba Sangiran Klaster Dayu berada di Desa Dayu, Kecamatan Gondangrejo, Kabupaten Karanganyar, Jawa Tengah. Museum ini adalah satu-satunya museum Sangiran yang berada di wilayah Karanganyar.";
				newSource = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.9187752199223!2d110.84112648493753!3d-7.474221854431339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a11b031945ef7%3A0x8acc182ce6280d8c!2sMuseum%20Manusia%20Purba%20Sangiran%20Klaster%20Dayu!5e0!3m2!1sid!2sid!4v1685965841327!5m2!1sid!2sid";
			} else if (valuesloct == "se"){
				ketSource = "Sumur Emas Grenjeng adalah salah satu tempat yang dapat dikunjungi ketika berkunjung ke Desa Dayu. Sumur Emas Grenjeng menjadi salah satu sumber mata air yang sangat bermanfaat dan biasa digunakan oleh masyarakat sekitar untuk kebutuhan rumah tangga. Untuk masuk ke Sumur Emas Grenjeng tidak perlu membayar sepeserpun. Bahkan untuk menikmati airnyapun tidak dikenakan biaya. Masyarakat sekitar biasa mengambil sumber mata air menggunakan jerigen, dan ketika mengambil menggunakan jerigen/galon maka akan dikenakan biaya Rp. 1.000 - Rp. 2.000/galonnya. Ada beberapa larangan di Sumur Emas Grenjeng ini salah satunya adalah dilarang mandi dan dilarang mencuci kendaraan, demi menjaga kemurnian airnya.";
				newSource = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.9056113180022!2d110.83083017589786!3d-7.475674973707477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a117298c71ff5%3A0x4945949c75aa1c46!2sLembah%20Sumur%20Emas!5e0!3m2!1sid!2sid!4v1685965886262!5m2!1sid!2sid";
			}else if (valuesloct == "sa"){
				ketSource = "Sumur Api Purba menjadi salah satu tempat yang dapat dikunjungi juga selain Sumur Emas Grenjeng. Berbeda dengan Sumur Emas Grenjeng yang menyuguhkan air dingin dan segar, Sumur Api Purba menyajikan sumber mata air panas yang tercipta dari lapisan tanah dibawahnya. Masyarakat sekitar memanfaatkan sumber mata air panas ini dengan cara modern yaitu melalui pipa dan telah disambungkan ke berbagai saluran air yang tersedia.";
				newSource = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.992307898106!2d110.83835168493701!3d-7.466099654360807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1181e67e9691%3A0xc855d08e90080b4e!2sSumur%20Api!5e0!3m2!1sid!2sid!4v1685965927718!5m2!1sid!2sid";
			}
			changeMapSource(newSource,ketSource);
		});
		

});	

	