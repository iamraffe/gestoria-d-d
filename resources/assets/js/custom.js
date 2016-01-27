/*
SET AJAX HEADERS
 */
$.ajaxSetup({
  headers: {
    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
  }
});
/*

FILES

 */

//ADD
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

//EDIT
$(document).on('click', '.edit-file',function(e){
  var id = $(this).parent().attr('data-file-id');
  var file_name = $(this).parent().attr('data-file-name');
  $('#edit-file-modal').modal('show');
  $('#edit-file input[name="file_name"]').val(file_name);
  $('#edit-file').attr('action', '/dashboard/files/'+id);
});

$(document).on('submit', '#edit-file',function(e){
  e.preventDefault();
  var that = $(this);
  var data = that.serializeArray();
  console.log("edit file");
  $.ajax({
    type: that.attr('method'),
    url         : that.attr('action'),
    data : data,
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
      $('#edit-file-modal').modal('hide');
      location.reload();
        // $('#loading').hide();
        // $('p#'+param).remove();
        //window.location.href = "{{ url('admin/menus/'.str_slug($menu->name).'/edit') }}";
    }
  });
});

/*

FOLDERS

 */

//ADD
$(document).on('submit', '#add-folder',function(e){
  e.preventDefault();
  var that = $(this);
  var data = that.serializeArray();
  console.log("add-folder", data);
  $.ajax({
    type: that.attr('method'),
    url         : that.attr('action'),
    data : data,
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

//EDIT
$(document).on('click', '.edit-folder',function(e){
  var id = $(this).parent().attr('data-folder-id');
  var folder_name = $(this).parent().attr('data-folder-name');
  $('#edit-folder-modal').modal('show');
  $('#edit-folder input[name="folder_name"]').val(folder_name);
  $('#edit-folder').attr('action', '/dashboard/folders/'+id);
});

$(document).on('submit', '#edit-folder',function(e){
  e.preventDefault();
  var that = $(this);
  var data = that.serializeArray();
  console.log("edit folder");
  $.ajax({
    type: that.attr('method'),
    url         : that.attr('action'),
    data : data,
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
      $('#edit-folder-modal').modal('hide');
      location.reload();
        // $('#loading').hide();
        // $('p#'+param).remove();
        //window.location.href = "{{ url('admin/menus/'.str_slug($menu->name).'/edit') }}";
    }
  });
});

//DELETE
$(document).on('click', '.delete-folder',function(e){
  e.preventDefault();
  var id = $(this).parent().attr('data-folder-id');
  console.log("delete folder", id);
  $.ajax({
    type: "POST",
    url         : '/dashboard/folders/'+id,
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

Dropzone.autoDiscover = false;
var ready;

ready = function() {
 $("#my-awesome-dropzone").dropzone({ // The camelized version of the ID of the form element

    // The configuration we've talked about above
    // autoProcessQueue: false,
    // previewsContainer: '.upload-preview',
    // uploadMultiple: false,
    // parallelUploads: 100,
    // maxFiles: 1,
    // paramName: "image[media]",
    // addRemoveLinks: true,
    // clickable: ".file-upload-button", // Define the element that should be used as click trigger to select files.
    // createImageThumbnails: false,
    // The setting up of the dropzone
    init: function() {
      var myDropzone = this;
      // this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
      //   e.preventDefault();
      //   e.stopPropagation();
      //   myDropzone.processQueue();
      //   // if(formIsReady()){
      //   //   myDropzone.processQueue();
      //   // }
      // });
      this.on("addedfile", function(file) {
        // $('.upload-wrap').hide();
        //     console.log(file);

        //  var FR= new FileReader();
        //  FR.onload = function(e) {
        //      console.log( e.target.result); //This is the base64 data of file(gif) dropped
        //      //if you want to display it somewhere in your previewTemplate
        //      $('.upload-preview img').attr('src',e.target.result); //setting as src of some img tag with class 'my-preview'
        //  };
        //  FR.readAsDataURL( file );
      });
      this.on("removedfile", function(file) {
        // $('.upload-wrap').show();
        // $('.upload-preview img').attr('src','');
      });
      this.on("sending", function() {
      });
      this.on("success", function(file, response) {
        // location.reload();
      });
      this.on("complete", function(file, response) {

        // window.location.href = "/";
      });
      this.on("error", function(file, response) {
        console.log(response);
      });
      this.on("removedfile", function(file) {
        // var id = $(file.previewTemplate).find('.dz-remove').attr('id');
        // console.log(id);
      });
    }
  });
};
function formIsReady(){
  var x = $('input[name=title]').val();
  if (x == null || x == "") {
    alert("Name must be filled out");
    return false;
  }
  else{
    return true;
  }
}

$(document).ready(ready);
$(document).on('page:load', ready);

$('#file-upload-modal').on('hidden.bs.modal', function (e) {
  console.log(e);
  if($('#my-awesome-dropzone .dz-preview').length > 0){
    location.reload();
  }
})

$('#edit-folder-modal').on('hide.bs.modal', function (e) {
  $('#edit-folder').attr('action','');
});
$('#edit-file-modal').on('hide.bs.modal', function (e) {
  $('#edit-file').attr('action','');
});