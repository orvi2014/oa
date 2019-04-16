$(document).on('scroll', function() {
    $( "a" ).removeClass( "active" );
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {       
        $( "header #fh5co-main-nav ul >li:nth-child(4)  a" ).addClass( "active" );
    }else if($(this).scrollTop() < $('#fh5co-services-section').position().top){      
        
        $( "header #fh5co-main-nav ul> li:nth-child(1) a" ).addClass( "active" );
    } else if($(this).scrollTop()>=$('#fh5co-services-section').position().top && $(this).scrollTop()< $('#fh5co-work-section').position().top ){      
        
        $( "header #fh5co-main-nav ul >li:nth-child(2)  a" ).addClass( "active" );
    }else if($(this).scrollTop()>=$('#fh5co-work-section').position().top && $(this).scrollTop() < $('#fh5co-contact-section').position().top){      
       
        $( "header #fh5co-main-nav ul >li:nth-child(3)  a" ).addClass( "active" );
    } 

})