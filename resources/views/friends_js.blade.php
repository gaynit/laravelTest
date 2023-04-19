
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

</script>
    <script>
        $(document).ready(function(){
            

            //show product value in update form
       

       //update product data --**add suru theke ene nicher code editing hobe


       


            //delete product

     $(document).on('click','.delete_friend', function(e){
                e.preventDefault();
                let friend_id = $(this).data('id');
               // alert(product_id);
                if(confirm('Are you sure to delete friend ??')){

                        $.ajax({
                            url:"{{ route('delete.friend') }}",
                            method: 'post',
                            data:{friend_id:friend_id},
                            success:function(res){
                                if(res.status=='success'){
                                    $('.table').load(location.href+' .table');

                                     //toastr js code

                                     Command: toastr["success"]("friend Deleted", "Success")

                                        toastr.options = {
                                        "closeButton": true,
                                        "debug": false,
                                        "newestOnTop": false,
                                        "progressBar": true,
                                        "positionClass": "toast-top-right",
                                        "preventDuplicates": false,
                                        "onclick": null,
                                        "showDuration": "300",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                        }

                                     //toastr js code end




                                }

                            }
                        });

                }

            })
// end delete part

//pagination part start
$(document).on('click','.pagination a', function(e){
    e.preventDefault();

    let page = $(this).attr('href').split('page=')[1]//3 page a
    friend(page)//2
})

function friend(page){//1
    $.ajax({
        url:"/pagination/paginate-data?page="+page,
        success:function(res){
            $('.table-data').html(res);

        }
    })

}

//pagination part end

//search product
$(document).on('keyup',function(e){
    e.preventDefault();
    let search_string = $('#search').val();
   // console.log(search_string);
    $.ajax({
        url:"{{ route('search.friend')}}",
        method: 'GET',
        data:{search_string:search_string},
        success:function(res){
            $('.table-data').html(res);
            if(res.status=='nothing_found'){
     $('.table-data').html('<span class="text-danger">'+'Nothing Found'+'</span>');
            }
        }

    });

});

//search product end




        });

   </script>
