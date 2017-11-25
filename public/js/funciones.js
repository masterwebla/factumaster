		function mostrarFacturas(){
			var idcliente = $('#clientes').val();
			$.ajax({
				url: "{{url('selectfacturas')}}",
				data: {idcliente:idcliente},
				type: "get",
				success:function(data){
					$('#facturas').empty();
					$.each(data,function(index,facturaObj){
						$('#facturas').append('<option value="'+facturaObj.id+'">'+facturaObj.numero+'</option>');
					});
				}
			});
		}