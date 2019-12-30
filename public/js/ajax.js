$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    $('.edit').click(function(){
        $('.error').hide();
        let id = $(this).data('id');
        // alert(id);
        // Edit
        $.ajax({
            url : '/admin/category/'+id+'/edit',
            dataType : 'json',
            type   : 'get',
            success : function($result){
                // console.log($result);
                $('.name').val($result.name);
                $('.title').text($result.name);
                if($result.status==1){
                    $('show').attr('selected','selected');
                }
                else
                {
                    $('hide').attr('selected','selected');
                }
            }
        });
        $('.update').click(function(){
            let name = $('.name').val();
            let status = $('.status').val();
            $.ajax({
               url : '/admin/category/'+id,
               data : {
                   name : name,
                   status : status,
                   id : id
               },
               type : 'PUT',
               dataType : 'json',
               success : function($result)
                {
                    toastr.success($result.success, 'Thông báo', {timeOut: 5000});
                    $('#edit').modal('hide');
                    location.reload();
                  },
                  error : function(error)
                  {
                    console.log(error);
                    var errors = JSON.parse(error.responseText);
                    // console.log(errors);
                    $('.error').show();
                    $('.error').text(errors.errors.name);
                  }


            });
        });
    });
    // Delete Category
    $('.delete').click(function(){
        let id = $(this).data('id');
        $('.del').click(function(){
            $.ajax({
                url : 'admin/category/'+id,
                dataType : 'json',
                type : 'delete',
                success : function($result){
                    // console.log($result)
                    {
                    toastr.success($result.success, 'Thông báo', {timeOut: 5000});
                    $('#edit').modal('hide');
                    location.reload();
                    }
                }


             });

        });

    });

    // Edit Type BDS
    $('.editType').click(function(){
        $('errors').hide();
        let id = $(this).data('id');
        $.ajax({
            url : 'admin/typeBDS/'+id+'/edit',
            dataType : 'json',
            type : 'GET',
            success : function($result){
                console.log($result);
                $('.name').val($result.type.name);
                $('.title').text($result.type.name);
                var html = '';
                $.each($result.category, function($key,$value){

                    if($value['id']==$result.type.idCategory){
                        html += '<option value ='+$value['id']+' selected>';
                        html += $value['name'];
                        html += '</option>';
                    }
                    else{
                        html += '<option value ='+$value['id']+'>';
                        html += $value['name'];
                        html += '</option>';
                    }

                });
                $('.idCategory').html(html); // truyền name select vào
                if($result.type.status == 1){
					$('.show').attr('selected','selected');
				}else{
					$('.hide').attr('selected','selected');
				}
			}



        });
        $('.updateType').click(function(){
			let idCategory = $('.idCategory').val();
			let name = $('.name').val();
			let status = $('.status').val();
			$.ajax({
				url : 'admin/typeBDS/'+id,
				dataType : 'json',
				data : {
					idCategory : idCategory,
					name : name,
					status : status,
				},
				method : 'PUT',
				success : function($data){
                    console.log($data);
					if($data.errors == 'true'){
						$('.errors').show();
						$('.errors').text($data.message.name[0]);
					}else{
						toastr.success($data.result, 'Thông báo', {timeOut: 5000});
						$('#editType').modal('hide');
						location.reload();
					}
				}
			});
		});
    });
    $('.deleteType').click(function(){
        let id = $(this).data('id');
        $('.del').click(function(){
            $.ajax({
                url : 'admin/typeBDS/'+id,
                dataType : 'json',
                method : 'DELETE',
                success : function($del)
                {
                    toastr.success($del.success, 'Thông báo',{timeOut:5000});
                    $('#deleteType').modal('hide');
					location.reload();
                }
            });
        });
    });
    $('.cateBDS').change(function(){
        let idCategory = $(this).val();
    //    alert(idCategory);
        $.ajax({
            url : 'getbuytype',
            data : {
                idCategory : idCategory
            },
            type : 'GET',
            dataType : 'json',
            success : function($data)

            {
                console.log($data);
                let html = '';

                $.each($data, function($key,$value){
                    html += '<option value='+$value['id']+'>';
                        html += $value['name'];
                        html += '</option>';
                });
                $('.typeBDS').html(html);
            }
        });
    });
    // Delete BDS
    $('.deleteBuy').click(function(){
        let id = $(this).data('id');
       $('.delete').click(function(){
        $.ajax({
            url : 'admin/buy/'+id,
            type : "DELETE",
            dataType : 'json',
            success : function($data)
            {
                toastr.success($data.result, 'Thông báo',{timeOut:5000});
                    $('#deletebuy').modal('hide');
					location.reload();
            }
        });
       });
    });
    // Edit BDS
    $('.editBuy').click(function(){
        $('.errorTitle').hide();
        $('.errorPrice').hide();
        $('.errorImage').hide();
        $('.errorDesc').hide();
        $('.errorDt').hide();
        $('.errorAddress').hide();
        let id =  $(this).data('id');
        $('.idBuy').val(id);
        $.ajax({
            url : 'admin/buy/'+id+'/edit',
            type : "GET",
            dataType : 'json',
            success : function(data)
            {
                // console.log($data);
                $('.title').val(data.buy.title);
                $('.address').val(data.buy.address);
                $('.price').val(data.buy.price);
                $('.dt').val(data.buy.dt);
                $('.imgThumb').attr('src','img/upload/buy/'+data.buy.image);
                if(data.buy.status == 1)
                {
                    $('.show').attr('selected','selected');
                }
                else
                {
                    $('.hide').attr('selected','selected');
                }
                CKEDITOR.instances['demo'].setData(data.buy.desc);

                let html1 = '';
				$.each(data.category,function(key,value){
					if(data.buy.idCategory == value['id']){
						html1 += '<option value="'+value['id']+'" selected>';
							html1 += value['name'];
						html1 += '</option>';
					}else{
						html1 += '<option value="'+value['id']+'">';
							html1 += value['name'];
						html1 += '</option>';
					}
				});
				$('.cateBDS').html(html1);
				let html2 = '';
				$.each(data.type,function(key,value){
					if(data.type.idProductType == value['id']){
						html2 += '<option value="'+value['id']+'" selected>';
							html2 += value['name'];
						html2 += '</option>';
					}else{
						html2 += '<option value="'+value['id']+'">';
							html2 += value['name'];
						html2 += '</option>';
					}
				});
				$('.typeBDS').html(html2);
            }


    });
    $('#updateBuy').on('submit',function(event){
        //chặn form submit
        event.preventDefault();
        $.ajax({
            url : 'admin/updatebds/'+id,
            data : new FormData(this),
            contentType : false,
            processData : false,
            cache : false,
            type : 'POST',
            success : function(data){
                toastr.success(data.result, 'Thông báo', {timeOut: 5000});
                $('#editBuy').modal('hide');
                location.reload();
            },
            error : function(error)
            {
                var errors = JSON.parse(error.responseText);
                if(errors.errors.title !='')
                {
                    $('.errorTitle').show();
                    $('.errorTitle').text(errors.errors.title);
                }
                if(errors.errors.address !='')
                {
                    $('.errorAdress').show();
                    $('.errorAddress').text(errors.errors.address);
                }
                if(errors.errors.desc !='')
                {
                    $('.errorDesc').show();
                    $('.errorDesc').text(errors.errors.desc);
                }
                if(errors.errors.dt !='')
                {
                    $('.errorDt').show();
                    $('.errorDt').text(errors.errors.dt);
                }
                if(errors.errors.price !='')
                {
                    $('.errorPrice').show();
                    $('.errorPrice').text(errors.errors.price);
                }
                if(errors.errors.image !='')
                {
                    $('.errorImage').show();
                    $('.errorImage').text(errors.errors.image);
                }
            }
        });
    });

});
});
