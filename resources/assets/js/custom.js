/*
SET AJAX HEADERS
 */
$.ajaxSetup({
  headers: {
    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
  }
});

$(document).on('click', '.delete-file',function(e){
  e.preventDefault();
  var id = $(this).parent().attr('data-file-id');
  console.log("delete file", id);
  $.ajax({
    type: "POST",
    url         : '/dashboard/files/'+id,
    data : {_method : 'DELETE'},
    encode          : true,
    beforeSend: function(){
      console.log("Making call");
    },
    error: function(xhr, textStatus, thrownError) {
      console.log("Error");
        // swal({
        //     title: 'ERROR',
        //     text: 'There was an error with your request. If this error persists please contact your webmaster.',
        //     type: "error",
        //     showConfirmButton: true
        // });
    },
    success: function(response) {
      console.log("Success");
      console.log(response);
      location.reload();
        // $('#loading').hide();
        // $('p#'+param).remove();
        //window.location.href = "{{ url('admin/menus/'.str_slug($menu->name).'/edit') }}";
    }
  });
});

$(document).on('click', '.edit-file',function(e){
  e.preventDefault();
  console.log("edit file");
  $.ajax({
    type: "POST",
    url         : '/dashboard/files/'+id,
    data : {_method : 'DELETE'},
    encode          : true,
    beforeSend: function(){
      console.log("Making call");
    },
    error: function(xhr, textStatus, thrownError) {
      console.log("Error");
        // swal({
        //     title: 'ERROR',
        //     text: 'There was an error with your request. If this error persists please contact your webmaster.',
        //     type: "error",
        //     showConfirmButton: true
        // });
    },
    success: function(response) {
      console.log("Success");
      console.log(response);
      location.reload();
        // $('#loading').hide();
        // $('p#'+param).remove();
        //window.location.href = "{{ url('admin/menus/'.str_slug($menu->name).'/edit') }}";
    }
  });
});