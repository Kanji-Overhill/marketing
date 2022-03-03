$(document).ready(function() {
    $('.download_img').click(function(e) {
        e.preventDefault();
        var files = $("#presentacion_firma").attr('src');
         window.open(files);
    });
    $(".copy_img").click(function(e) {
	    e.preventDefault();
        var files = $("#presentacion_firma").attr('src');
	    navigator.clipboard.writeText(files).then(() => {
      
	    }, () => {
	      
	    });
	});
    $('.download_img_2').click(function(e) {
        e.preventDefault();
        var files = $("#presentacion_firma_2").attr('src');
         window.open(files);
    });
    $(".copy_img_2").click(function(e) {
	    e.preventDefault();
        var files = $("#presentacion_firma_2").attr('src');
	    navigator.clipboard.writeText(files).then(() => {
      
	    }, () => {
	      
	    });
	});
});
