$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
            Swal.fire({
            title: 'Are you sure?',
            text: "Delete this Product List Price?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        }) 


    });

});

$(function(){
    $(document).on('click','#delete-installment',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
            Swal.fire({
            title: 'Are you sure?',
            text: "Remove All Installment Price?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        }) 


    });

});