$(document).ready(function(){
	$("#bank-code").keyup(function(){
		$.ajax({
		type: "GET",
		url: "func.autocomplete.php",
		data:'keyword='+$(this).val(),
		success: function(data){
			$("#search-suggestions").show();
			$("#search-suggestions").html(data);
			$("#search-suggestions").css("background","#FFF");
		}
		});
	});

	$("#bank-code").blur(function(){
    	$("#search-suggestions").fadeOut(500);
    })
    .focus(function() {		
        $("#search-suggestions").show();
    });

});

function selectValue(value) {
  $("#bank-code").val(value);
  $("#search-suggestions").hide();
}