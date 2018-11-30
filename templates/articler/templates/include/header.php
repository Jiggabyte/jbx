<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
    <link rel="stylesheet" type="text/css" href="../../style.css" />
      <style>
          .finput {margin-left:0px;margin-top:10px;margin-bottom:10px;font-weight:bold;width:250px;height:20px;border-radius:5px;     }
          .finputa {margin-left:0px;margin-top:10px;margin-bottom:10px;font-weight:bold;width:250px;height:200px;border-radius:5px;     }

      </style>

      <script type="text/javascript" src="../../../../assets/tinymce/js/tinymce/tinymce.min.js"></script>
      <script type="text/javascript">
          tinymce.init({
              selector: "#content",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste imagetools wordcount"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

              // enable title field in the Image dialog
              image_title: true,
              // enable automatic uploads of images represented by blob or data URIs
              automatic_uploads: true,
              // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
              // images_upload_url: 'postAcceptor.php',
              // here we add custom filepicker only to Image dialog
              file_picker_types: 'image',
              // and here's our custom image picker
              file_picker_callback: function(cb, value, meta) {
                  var input = document.createElement('input');
                  input.setAttribute('type', 'file');
                  input.setAttribute('accept', 'image/*');

                  // Note: In modern browsers input[type="file"] is functional without
                  // even adding it to the DOM, but that might not be the case in some older
                  // or quirky browsers like IE, so you might want to add it to the DOM
                  // just in case, and visually hide it. And do not forget do remove it
                  // once you do not need it anymore.

                  input.onchange = function() {
                      var file = this.files[0];

                      var reader = new FileReader();
                      reader.onload = function () {
                          // Note: Now we need to register the blob in TinyMCEs image blob
                          // registry. In the next release this part hopefully won't be
                          // necessary, as we are looking to handle it internally.
                          var id = 'blobid' + (new Date()).getTime();
                          var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                          var base64 = reader.result.split(',')[1];
                          var blobInfo = blobCache.create(id, file, base64);
                          blobCache.add(blobInfo);

                          // call the callback and populate the Title field with the file name
                          cb(blobInfo.blobUri(), { title: file.name });
                      };
                      reader.readAsDataURL(file);
                  };

                  input.click();
              }


          });
      </script>
  </head>
  <body>
    <div id="container">




