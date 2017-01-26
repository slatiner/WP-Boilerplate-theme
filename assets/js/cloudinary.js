jQuery(document).ready( function ($) {
  
  $('#upload_widget').click( function(e) {
    
    e.preventDefault();
    
    cloudinary.openUploadWidget({ 
      cloud_name: 'orthodox-union',
      upload_preset: 'pc1gdrhn', 
      cropping: 'server',
      cropping_aspect_ratio: 1,
      form: '.upload_holder',
      thumbnails: '.upload_holder',
      field_name: 'cover_image'
    }, function (error, result) {
      if (result && result.length == 1) $('input[name="cover_image"]').val(result[0].public_id);
    });
    
  });   
  
});