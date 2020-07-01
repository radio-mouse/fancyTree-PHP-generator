$(document).ready(() => {
	$("#tree").fancytree({
		source: $.ajax({type: 'GET',
								url: 'library-load.php',
								data: 1,
								success: function(data) {
										return data
								},
								dataType:"json"
						})
	})
})