$(document).ready(function() {
	getData();
	function getData() {
		$.ajax({
		type:'ajax',
		url: 'myqueries.php',
		async:true,
		dataType:'json',
		success:function(data) {
			var text = '';
			var temp = '';
			var i, a = 0, counter = 0;
			for(i = 0; i<data.length; i++) {
				counter++;
				a++;
				text += '<tr class="row2" id="'+data[i].data.id+'" ln="'+data[i].data.lastname+'" fn="'+data[i].data.firstname+'" mn="'+data[i].data.midname+'" adr="'+data[i].data.address+'" age="'+data[i].data.age+'" gend="'+data[i].data.gender+'" email="'+data[i].data.email+'"  read_no="'+data[i].data.read_no+'">' +
					'<td>'+a+'</td>'+
					'<td>'+data[i].data.lastname+'</td>'+
					'<td>'+data[i].data.firstname+'</td>'+
					'<td>'+data[i].data.read_no+'</td>'+
				'</tr>';
			}
			$("#displayHere").html(text);
			$("#rows").html('<p>'+a+" "+"Rows"+'</p>');
		},
		error:function(data) {
			alert("ERROR");
		}
	});
	}
	$("#displayHere").on('click','.row2',function() {
		$("#div2, .forLabel").show();
		var id = $(this).attr('id');
		var ln = $(this).attr('ln');
		var fn = $(this).attr('fn');
		var mn = $(this).attr('mn');
		var adr = $(this).attr('adr');
		var age = $(this).attr('age');
		var gend = $(this).attr('gend');
		var email = $(this).attr('email');
		var read_no = $(this).attr('read_no');

		$('input[name=id]').val(id);
		$('input[name=lname]').val(ln);
		$('input[name=fname]').val(fn);
		$('input[name=mname]').val(mn);
		$('input[name=address]').val(adr);
		$('input[name=age]').val(age);
		$('input[name=gender]').val(gend);
		$('input[name=email]').val(email);
		$('input[name=read_no]').val(read_no);

		$(this).addClass('active');
	});

	$("#btonEdit").on('click',function() {
		$(".forLabelEdit, #div3").show();
		$("#div2, .forLabel").hide();
	});

	$(".cancelButton").click(function() {
		$("#div2, .forLabel").hide();
		$(".row2").removeClass('active');
	});

	$(".cancelButtonDiv3").click(function() {
		$("#div3, .forLabelEdit").hide();
	});

	$("#saveChanges").click(function() {
		var dataform = $('#formEdit').serialize();
		$.ajax({
		type:'ajax',
		method:'POST',
		url:'edit.php',
		data:dataform,
		async:true,
		dataType:'json',
		success:function(data) {
			$('#div2').hide();
			$('#div3, .forLabelEdit').hide();
			getData();
		},
		error:function(data) {
			alert("ERROR");
		}
		});
	});

	$("#btonRemove").click(function() {
		var id = $('input[name=id]').val();
		$.ajax({
		type:'ajax',
		method:'get',
		url:'delete.php',
		data:{iddel:id},
		async:true,
		dataType:'json',
		success:function(data) {
			$("#div2").hide();
			$('.forLabel').hide();
			getData();
		},
		error:function(data) {
			alert("ERROR");
		}
		});
	});

	$("#search").keyup(function() {
		var search = $('input[name=search]');
		$.ajax({
		type:'ajax',
		method:'get',
		url:'search.php',
		data:{datasearch:search.val()},
		async:true,
		dataType:'json',
		success:function(data) {
			var text = '';
			var i, a = 0;
			for(i = 0; i<data.length; i++) {
				a++;
				text += '<tr class="row2" id="'+data[i].data.id+'" ln="'+data[i].data.lastname+'" fn="'+data[i].data.firstname+'" mn="'+data[i].data.midname+'" adr="'+data[i].data.address+'" age="'+data[i].data.age+'" gend="'+data[i].data.gender+'" email="'+data[i].data.email+'" read_no="'+data[i].data.read_no+'">' +
					'<td>'+a+'</td>'+
					'<td>'+data[i].data.lastname+'</td>'+
					'<td>'+data[i].data.firstname+'</td>'+
					'<td>'+data[i].data.read_no+'</td>'+
				'</tr>';
			}
			$("#displayHere").html(text);
			$("#rows").html('<h5>'+a+" "+"Rows"+'</h5>');
		},
		error:function(data) {
			alert("ERROR");
		}
		});
	});
});

$(document).mouseup(function(e) {
	var container = $('#div1');
		if(!container.is(e.target) && container.has(e.target).length == 0) {
			container.hide();
			$(".point").hide();
		}

	$(".btn").click(function() {
		$("#div1, .point").toggle();
	});

	$(".submit").click(function() {
		$("div1, .point").hide();
	});
});





