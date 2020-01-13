
$(document).ready(function(){
       
 $('.rooms-availability').click(function(e){
           
    $.ajax({
        method: 'POST',
        url: '/hotelroomslist',
        data: {'id' : $(this).data("id"),'_token':$('input[name=_token]').val()}, 
        success: function(response){ 
        console.log(response);    
        var trHTML="";
        //console.log(response.hotel_rooms)
        $.each(response,function(index,value){
            var price= value.base_price;
            var btax = parseFloat(value.taxes / 100);
            var total= parseFloat(price) + parseFloat((btax * price));

        var tblRow="<tr>"
            +"<td class='text-uppercase'><strong>"+value.hotel_rooms+"</strong></td>"
            +"<td class='text-uppercase'><strong>"+value.type_of_availability+"</strong></td>"
            +"<td class='text-uppercase'><a href='#collapseRooms"+ value.id +"' data-toggle='collapse' aria-expanded='false'>"+'Details'+"</td>"
            +"<td class=font-weight-bold>"+value.base_price+'&nbsp;<span class="text-muted">USD</span>'+"</td>"
            +"<td class='text-uppercase'>"+'request'+"</td>"
            +"</tr>";

            tblRow=tblRow+"<tr id='collapseRooms"+value.id+"' class='collapse'><td colspan='5'>"
            +"<div class='row'><div class='col-sm-4'><button type='button' class='btn btn-secondary btn-xs'>King</button><button type='button' class='btn btn-secondary btn-xs'>Day Bed</button></div><div class='col-sm-4'><i class='fa fa-user usrcl' aria-hidden='true'></i>&nbsp;&nbsp;<i class='fa fa-user usrcl' aria-hidden='true'></i>&nbsp;&nbsp;<i class='fa fa-user usrcl' aria-hidden='true'></i></div></div>"
            +"<div class='row'>"
            +"<div class='col-md-6'>"
            +"<ul class='list'>Conditions & Offers<li>"+value.promotions+"</li>Cancellation Policy<li>"+value.cancellation_policy+"</li></ul></div>"
            +"<div class='col-md-6'><div class='pull-right'><div><div class='left-align'>Price:</div><div class='left-align'>"+value.base_price+"</div>"
            +"<br> <div class='left-align'>Taxes %:</div><div class='left-align'>"+value.taxes+"</div>"
            +"<br> <div class='left-align'>Fees:</div><div class='left-align'>0.00</div>"
            +"<br> <div class='left-align'>Total:</div><div class='left-align'>"+total+"</div>"
            +"</div></div></div></div>"
           
            +'</td></tr>';

            trHTML=trHTML+tblRow;
            $('.trew'+value.hotel_id).empty();
            $('.trew'+value.hotel_id).append(trHTML);
        });
                    
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
        });
          
        });

});// End Of Doc
 