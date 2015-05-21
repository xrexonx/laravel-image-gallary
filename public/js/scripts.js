
$(function () {

    var postData = function () {

        var routeTo  = arguments[0],
            formdata = arguments[1],
            method   = 'POST';

            $.ajax({
              url        : routeTo,
              type       : method,
              data       : formdata,
              processData: false,
              contentType: false,
              success    : function (res) {
                if (res.success === true) {
                   $('#myModal1').hide();
                   bootbox.alert(res.message);
                }
              }
            });
    }

  	$('#create_album').on('submit', function (e) {
  		e.preventDefault();
          postData('submitFormData', new FormData(this));
  	});

    $('#addImage').on('submit', function (e) {
        e.preventDefault();
        var imageData = new FormData(this);
            imageData.append('album_id', $('button.btn').data('id'));
            postData('addImages', imageData);
    });

    $('button#btnDelete').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        bootbox.confirm('Are you sure you want to delete this?', function(confirm) {

            if (confirm) {
              var postDelete = $.post('deleteAlbum', {id:$this.data('id')}).promise();
                $.when(postDelete.done()).then( function ( response ) {
                   bootbox.alert(response.message);
                });
            }
        });
        
    });


    //image lightbox
    $('a.gallery-img').nivoLightbox({
      effect:'slideDown',
      theme: 'default',
      keyboardNav: true,                          
         clickOverlayToClose: true,                  
         onInit: function(){},                       
         beforeShowLightbox: function(){},           
         afterShowLightbox: function(lightbox){},    
         beforeHideLightbox: function(){},           
         afterHideLightbox: function(){},            
         onPrev: function(element){},               
         onNext: function(element){},                
         errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
     });


    shortcut.add("Ctrl+c",function() {
        $('#createModal').trigger('click');
    });

});




