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
			$("#postedJobs").html('<div class="spinner-border "></div> Processing ...');
		},
		success:function(data){
			$("#postedJobs").html(data);
		}
	})
}
getPostedJobs();

// global variables ===========
var titleLabel = document.getElementById('titleLabel');
var LatestBtn = document.getElementById('LatestBtn');

function searchKeyWord(value){
	var postedJobs = value;
	if(postedJobs == ""){
		getPostedJobs();
	}else{
		$.ajax({
			url:"includes/searchKeyWord",
			method:"POST",
			data:{postedJobs:postedJobs},
			beforeload:function(){
				$("#postedJobs").html('<div class="spinner-border "></div> Processing ...');
			},
			success:function(data){
				$("#postedJobs").html(data);
			}
		})
	}
}


function getCategoryResults(value){
	var postedJobs = value;
	titleLabel.innerText =  `${postedJobs} Jobs`;
	var keyword = document.getElementById('keyword').value;
	$.ajax({
		url:"includes/getCategoryResults",
		method:"POST",
		data:{postedJobs:postedJobs, keyword:keyword},
		beforeload:function(){
			$("#postedJobs").html('<div class="spinner-border "></div> Processing ...');
		},
		success:function(data){
			$("#postedJobs").html(data);
			LatestBtn.style.display = "block";
		}
	})
}


$(document).on("click", ".job_btn", function(e){
	e.preventDefault();
	var fetchJobsByCategory = $(this).attr("href");
	titleLabel.innerText =  `${fetchJobsByCategory} Jobs`;
	if($(this).attr("id")){
		$(this).hide("slow");
	}
	$.ajax({
		url:"includes/fetchJobsByCategory",
		method:"POST",
		data:{fetchJobsByCategory:fetchJobsByCategory},
		beforeload:function(){
			$("#postedJobs").html('<div class="spinner-border "></div> Processing ...');
		},
		success:function(data){
			$("#postedJobs").html(data);
			LatestBtn.style.display = "block";
		}
	})
})

$(function(){
	$("#subscribersForm").submit(function(e){
		e.preventDefault();
		$.ajax({
			url:"includes/subscribe",
			method:"POST",
			data:$(this).serialize(),
			beforeload:function(){
				$("#subscriberBtn").html("<span class='spinner-border'></span> Please Wait ...");
			},
			success:function(data){
				$("#subscriberBtn").html('Send me Job Alerts');
				$("#subscribersForm")[0].reset();
				successNow(data);
			}
		})
	})
})	