var token = $("meta[name=csrf-token]").attr("content");
var url_subscribe_user = '{!! url("/subscribe_user") !!}';
var url_clase_reserva  = '{!! url("//clase_reserva") !!}';
var current_class=0;
var reserva_class=0;

function test(){
    console.log(document.getElementById('date1').value);
}

function open_users_modal(class_id){
    current_class = class_id;
    $('#modal1').modal('open');
}
function open_reservas_modal(class_id){
    reserva_class=0;
    $('#modal2').modal('open');
}

function add_user(user_id){
    $.ajax({
		method: "POST",
		url: url_subscribe_user,
		data: {'class_id':current_class, 'user_id':user_id, '_token': token},
		dataType: "json",
		success:function(data){
            console.log(data);
			alert('success');
            document.getElementById('cupos_clase_'+current_class).innerHTML = data.cupos;
		},
		error:function(error){
            alert(error);
		}
	});
}
function add_reserva(reserva_id){
    $.ajax({
		method: "POST",
		url: url_clase_reserva,
		data: {'class_id':reserva_class, 'clase_id':clase_id, '_token': token},
		dataType: "json",
		success:function(data){
            console.log(data);
			alert('success');
            document.getElementById('cupos_clase_'+reserva_class).innerHTML = data.cupos;
		},
		error:function(error){
            alert(error);
		}
	});
}
