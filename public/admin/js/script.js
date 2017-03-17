            var host = window.location.origin+"/";
            var arr = [];

            if($(".summernote2").length > 0)
                $(".summernote2").summernote(
                    {
                        'width': '98%', 
                        'height': '200px',
                        toolbar: [
                                    ['para', ['ul', 'ol']],
                                  ]
                    });

            /* Button Ajax Login User*/
            $('#btn-login').click(function(event){
                var url = host+"/ajax";
                var id = this.id;
                // this = $(this).attr('id');
                // console.log(id);
                arr.push(id);
                $('form input, form select, form textarea').each(
                    function(index){  
                        var input = $(this);
                        if (input.attr('id') != 'selMenu') {
                            arr.push(input.val()); 
                        };
                    }
                );
                ajax = ajaxPost(url,arr);
                if (ajax == "success") {
                    // location.reload();
                };
                arr = [];
            });

            /* Button Ajax Logout User*/
            $('#btn-logout').click(function(event){
                var url = host+"/ajax";
                var id = this.id;
                arr.push(id);
                ajax = ajaxPost(url,arr);
                if (ajax == "success") {
                    location.reload();
                };
                arr = [];
            });

            // Ajax input Form
            $('.btn-add-ajax,.btn-edit-ajax').click(function(event){
                var url = host+"/ajax";
                var key = this.id;
                
                arr.push(key);
                
                $('#form-input input.form-input-text, #form-input select.form-input-select, #form-input textarea.form-input-textarea').each(
                    function(index){  
                        var input = $(this);
                        arr.push(input.val());
                    }
                );
                if($(".form-summernote").length > 0 ){
                    $(".form-summernote").each(
                        function(index){  
                            var sHTML = $(this).code();
                            arr.push(sHTML);
                        });
                }

                if($(".btn-edit-ajax").length > 0 ){
                    var idEdit = $(this).attr("data-href");
                    arr.push(idEdit);
                }

                ajax = ajaxPost(url,arr);
                if (ajax == "success") {
                    location.reload();
                };
                arr = [];
            });
            
            $('.btn-delete-ajax').click(function(event){
                var url = host+"/ajax";
                var id = this.id;
                var idDel = $(this).attr("data-href");
                arr.push(id);
                arr.push(idDel);
                ajax = ajaxPost(url,arr);
                // console.log(arr);
                if (ajax == "success") {
                    if ($(".table-responsive").length > 0) {
                        $(this).parent().parent().remove();
                    }else if($(".gallery").length > 0){
                        $(this).parent().parent().remove();
                    };
                    
                };
                arr = [];
            });

            /* UPLOAD AND DELETE MEDIA FILES */
            if ($("#input-file-upload").length > 0) {
                var url = host+"/ajax/uploadfile";
                    $("#input-file-upload").fileupload({
                        url:url,
                        autoUpload: false,
                        change: function(e,data){
                            // console.log(e);
                            var file = data.files;
                            var fileInput = data.fileInput;
                            var fileName = file[0]["name"];

                            splitName = fileName.split(".");

                            if (splitName[splitName.length-1] == 'jpg' || splitName[splitName.length-1] == 'jpeg' || splitName[splitName.length-1] == 'png') {
                                if ($("#preview-file img").length > 0) {
                                    $("#preview-file img").attr("src", URL.createObjectURL(data.files[0]));
                                }else{
                                    $("<img>").attr("src", URL.createObjectURL(data.files[0])).appendTo("#preview-file");
                                };
                            }else{
                                if ($("#preview-file img").length > 0) {
                                    $("#preview-file img").attr("src", "https://placehold.it/100?text="+splitName[splitName.length-1]);
                                }else{
                                    $("<img>").attr("src", "https://placehold.it/100?text="+splitName[splitName.length-1]).appendTo("#preview-file");
                                };
                            };
                            console.log(splitName[splitName.length-1]);
                            
                            /*if ($("#preview-file img").length > 0) {
                                $("#preview-file img").attr("src", URL.createObjectURL(data.files[0]));
                            }else{
                                $("<img>").attr("src", URL.createObjectURL(data.files[0])).appendTo("#preview-file");
                            };*/
                        },
                        add: function (e, data) {
                            $("#btn-upload-file").off('click').on('click', function(){
                                data.submit();
                            });
                        },
                        done: function (e, data) {
                            location.reload();
                        }
                    }).bind('fileuploadsubmit', function (e, data){
                        var fileName = $("#input-name-file").val();
                        var fileTag = $("#input-tag-file").val();
                        data.formData = {
                            'name': fileName,
                            'tag': fileTag
                        };
                    });
                };

            /*-------------------- Function jquery ------------------------*/

            function ajaxPost(url,arr){
                $.ajaxSetup({async: false});
                $.post(url,
                {
                    a: arr[0],
                    b: arr[1],
                    c: arr[2],
                    d: arr[3],
                    e: arr[4],
                    f: arr[5],
                    g: arr[6],
                    h: arr[7],
                    i: arr[8],
                    j: arr[9],
                    k: arr[10],
                    l: arr[11],
                    m: arr[12]
                },
                function(data, status){
                    stat = $.trim(data);
                    // alert(data);

                });
                // $.ajaxSetup({async: false});
                return stat;
            }
            /* Function ajaxPost */
