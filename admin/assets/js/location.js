
    function ajaxCall() {
        this.send = function(data, url, method, success, type) {
          type = type||'json';
          var successRes = function(data) {
              success(data);
          };

          var errorRes = function(e) {
              console.log(e);
              alert("Error found \nError Code: "+e.status+" \nError Message: "+e.statusText);
          };
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: successRes,
                error: errorRes,
                dataType: type,
                timeout: 60000
            });

          }

        }

function locationInfo() {
    var rootUrl = "api.php";
    var call = new ajaxCall();
    this.getCities = function(id) {
        $(".cities option:gt(0)").remove();
        var url = rootUrl+'?type=getCities&stateId=' + id;
        var method = "post";
        var data = {};
        $('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.cities').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                $.each(data['result'], function(key, val) {
                    var option = $('<option />');
                    option.attr('value', key).text(val);
                    $('.cities').append(option);
                });
                $(".cities").prop("disabled",false);
            }
            else{
                 alert(data.msg);
            }
        });
    };
  this.getDistricts = function(id) {
        $(".districts option:gt(0)").remove();
        var url = rootUrl+'?type=getDistricts&stateId=' + id;
        var method = "post";
        var data = {};
        $('.districts').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.districts').find("option:eq(0)").remove();
            if(data.tp == 1){
                $.each(data['result'], function(key, val) {
                    var option = $('<option />');
                    option.attr('value', key).text(val);
                    $('.districts').append(option);
                });
                $(".districts").prop("disabled",false);
            }
            else{
                 alert(data.msg);
            }
        });
    };
	this.getDistricts1 = function(id) {
        $(".districts-d option:gt(0)").remove();
        var url = rootUrl+'?type=getDistricts1&stateId=' + id;
        var method = "post";
        var data = {};
        $('.districts-d').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.districts-d').find("option:eq(0)").remove();
            if(data.tp == 1){
                $.each(data['result'], function(key, val) {
                    var option = $('<option />');
                    option.attr('value', key).text(val);
                    $('.districts-d').append(option);
                });
                $(".districts-d").prop("disabled",false);
            }
            else{
                 alert(data.msg);
            }
        });
    };
	this.getDivisions = function(id) {
        $(".divisions option:gt(0)").remove();
        var url = rootUrl+'?type=getDivisions&stateId=' + id;
        var method = "post";
        var data = {};
        $('.divisions').find("option:eq(0)").html("Please wait..");
		$('#select2-division-container').html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.divisions').find("option:eq(0)").remove();
            if(data.tp == 1){
                $.each(data['result'], function(key, val) {
                    var option = $('<option />');
                    option.attr('value', key).text(val);
                    $('.divisions').append(option);
                });
                $(".divisions").prop("disabled",false);
				
				if($('.divisions option').length>0)
				{
				    $('#select2-division-container').html($('.divisions').find("option:eq(0)").html());
					$(".divisions").trigger('change');
				}
			    else
					$('#select2-division-container').html('No Division Found');
            }
            else{
                 alert(data.msg);
            }
        });
    };
    this.getStates = function(id) {
        $(".states option:gt(0)").remove(); 
        $(".cities option:gt(0)").remove(); 
        var url = rootUrl+'?type=getStates&countryId=' + id;
        var method = "post";
        var data = {};
        $('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.states').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
                $.each(data['result'], function(key, val) {
                    var option = $('<option />');
                    option.attr('value', key).text(val);
                    $('.states').append(option);
                });
                $(".states").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        }); 
    };

    this.getCountries = function() {
        var url = rootUrl+'?type=getCountries';
        var method = "post";
        var data = {};
        $('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.countries').find("option:eq(0)").html("Select Country");
            console.log(data);
            if(data.tp == 1){
                $.each(data['result'], function(key, val) {
                    var option = $('<option />');
                    option.attr('value', key).text(val);
                    $('.countries').append(option);
                });
                $(".countries").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        }); 
    };

}

$(function() {
var loc = new locationInfo();
loc.getCountries();
 $(".countries").on("change", function(ev) {
        var countryId = $(this).val();
        if(countryId != ''){
        loc.getStates(countryId);
        }
        else{
            $(".states option:gt(0)").remove();
        }
    });
 $(".states").on("change", function(ev) {
        var stateId = $(this).val();
        if(stateId != ''){
        loc.getDistricts(stateId);
        }
        else{
            $(".districts option:gt(0)").remove();
        }
    });
 $(".divisions").on("change", function(ev) {
        var stateId = $(this).val();
        if(stateId != ''){
        loc.getDistricts1(stateId);
        }
        else{
            $(".districts-d option:gt(0)").remove();
        }
    });
  $(".states-d").on("change", function(ev) {
        var stateId = $(this).val();
        if(stateId != ''){
        loc.getDivisions(stateId);
        }
        else{
            $(".divisions option:gt(0)").remove();
        }
    });
});


