$(document).ready(function(){
	$(document).on("click", "#partnerBtn", function(e){
		e.preventDefault();
		$("#partnerModal").modal("show");
	});

	$(document).on("click", ".jobData", function(e){
		e.preventDefault();
		var link = $(this).attr("href");
		var id = $(this).attr('id');
		setCookie('jobIDCookie', id, 30);
		window.location = link;
	})
})

// Set a Cookie
function setCookie(cName, cValue, expDays) {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

function getPostedJobs(){
	var postedJobs = "getPostedJobs";
	$.ajax({
		url:"includes/getPostedJobs",
		method:"POST",
		data:{postedJobs:postedJobs},
		beforeload:function(){

		},
		success:function(data){
			$("#postedJobs").html(data);
		}
	})
}
getPostedJobs();


function searchKeyWord(value){
	var postedJobs = value;
	$.ajax({
		url:"includes/searchKeyWord",
		method:"POST",
		data:{postedJobs:postedJobs},
		beforeload:function(){

		},
		success:function(data){
			$("#postedJobs").html(data);
		}
	})
}


function getCategoryResults(value){
	var postedJobs = value;
	var titleLabel = document.getElementById('titleLabel');
	titleLabel.innerText =  `${postedJobs} Jobs`;
	var keyword = document.getElementById('keyword').value;
	$.ajax({
		url:"includes/getCategoryResults",
		method:"POST",
		data:{postedJobs:postedJobs, keyword:keyword},
		beforeload:function(){

		},
		success:function(data){
			$("#postedJobs").html(data);
		}
	})
}	