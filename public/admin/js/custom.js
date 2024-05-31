$(document).ready(function(){
    // Check Admin Password Is currect or not.
    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        // alert(current_pwd);
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            type:'post',
            url:'/admin/check-current-password',
            data:{current_pwd:current_pwd},
            success:function(resp){
                if(resp=="false"){
                    $("#verifyCurrentPwd").html("Current password is Incurrect!").css("color","red");
                }else if(resp=="true"){
                    $("#verifyCurrentPwd").html("Current password is Currect").css("color","green");
                }

            },error:function(){
                alert("Error");
            }
        })
    });

    //update CMS page Status
    
    $(document).on("click",".updateCmsPageStatus",function(){
        var status =$(this).children("i").attr("status");
        // alert(status);
        var page_id = $(this).attr("page_id");
        // alert(page_id);
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },                                                           
            type:'post',
            url:'/admin/update-cms-page-status',
            data:{status:status,page_id:page_id},
            success:function(resp){
                if(resp['status']==0){
                    $("#page-"+page_id).html("<i class='fas fa-toggle-off' status='Inactive'></i>");
                }else if(resp['status']==1){
                    $("#page-"+page_id).html("<i class='fas fa-toggle-on' status='Inactive'></i>");
                }
            },error:function(){
                alert("Error");
            }
        }) 
    });

        //update Slide Status

    $(document).on("click",".updateSlideStatus",function(){
        var status =$(this).children("i").attr("status");
        // alert(status);
        var page_id = $(this).attr("page_id");
        // alert(page_id);
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },                                                           
            type:'post',
            url:'/admin/update-slide-status',
            data:{status:status,page_id:page_id},
            success:function(resp){
                if(resp['status']==0){
                    $("#page-"+page_id).html("<i class='fas fa-toggle-off' status='Inactive'></i>");
                }else if(resp['status']==1){
                    $("#page-"+page_id).html("<i class='fas fa-toggle-on' status='Inactive'></i>");
                }
            },error:function(){
                alert("Error");
            }
        }) 
    })

            //update Service Status

            $(document).on("click",".updateMemoryStatus",function(){
                var status =$(this).children("i").attr("status");
                // alert(status);
                var page_id = $(this).attr("page_id");
                // alert(page_id);
                $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },                                                           
                    type:'post',
                    url:'/admin/update-service-status',
                    data:{status:status,page_id:page_id},
                    success:function(resp){
                        if(resp['status']==0){
                            $("#page-"+page_id).html("<i class='fas fa-toggle-off' status='Inactive'></i>");
                        }else if(resp['status']==1){
                            $("#page-"+page_id).html("<i class='fas fa-toggle-on' status='Inactive'></i>");
                        }
                    },error:function(){
                        alert("Error");
                    }
                }) 
            })

                        //update Memory Status

            $(document).on("click",".updateserviceStatus",function(){
                var status =$(this).children("i").attr("status");
                 // alert(status);
                var page_id = $(this).attr("page_id");
                // alert(page_id);
                $.ajax({
                     headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },                                                           
                    type:'post',
                    url:'/admin/update-memory-status',
                    data:{status:status,page_id:page_id},
                    success:function(resp){
                        if(resp['status']==0){
                            $("#page-"+page_id).html("<i class='fas fa-toggle-off' status='Inactive'></i>");
                        }else if(resp['status']==1){
                            $("#page-"+page_id).html("<i class='fas fa-toggle-on' status='Inactive'></i>");
                        }
                    },error:function(){
                        alert("Error");
                    }
                     }) 
                })



});