/* 
 * Bu dosya Eldem ÖZTÜRK (eldemozturk.com) tarafından hazırlanmıştır.
 */

$(document).ready(function() {
    $("#tckn").keydown(nc);
    $("#pa").keydown(nc);
    $("#pn").keydown(nc);
});

$('a.dropdown-item').click(function(){
	var setLang = $(this).attr("value");
	var post = 'setLang='+setLang;
	$.ajax({
		type:'POST',
		url:'system.php',
		data:post,
		success:function(status){
			location.reload();
		}
	});
});