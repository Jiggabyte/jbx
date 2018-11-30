<?php
//session_start();
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

    <script type="text/javascript" src="../../assets/tinymce/js/tinymce/tinymce.min.js"></script>
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

<?php include "templates/include/header.php" ?>

<?php
require_once("config.php");

$_SESSION['username'] = ADMIN_USERNAME;


$results = array();
$results['pageTitle'] = "New Article";
$results['formAction'] = "newArticle";

if (isset($_GET["articleId"])){ 
$results['article'] = Article::getById( (int)$_GET["articleId"] );
$results['pageTitle'] = $results['article']->title;
$results['formAction'] = "editArticle";
}

if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the article edit form: save the new article
    $article = new Article;
    $article->storeFormValues( $_POST );
    if (isset($_POST["articleId"])){ 
    $article->update();
    } else {
    $article->insert();
    }
    header( "Location: ../admin.php?status=changesSaved" );

} elseif ( isset( $_POST['cancel'] ) ) {

    // User has cancelled their edits: return to the article list
    header( "Location: admin.php" );
} else {

// User has not posted the article edit form yet: display the form
    $results['article'] = new Article;
}

?>
      <h1><?php echo $results['pageTitle']; ?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']; ?>" method="post" name="formAS" novalidate>
        <input type="hidden" name="articleId" value="<?php $results['article'] = Article::getById( (int)$_GET["articleId"] ); echo $results['article']->id; ?>
        "/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage']; ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="title"><b>Article Title</b></label><br />
            <input type="text" name="title" id="title" class="finput" placeholder="Name of the article" required autofocus maxlength="255" value="<?php if ( isset( $results['article'] ) ) { echo htmlspecialchars( $results['article']->title ); } ?>" />
          </li>

          <li>
            <label for="summary"><b>Article Summary</b></label><br />
            <textarea name="summary" id="summary" class="finput" placeholder="Brief description of the article" required maxlength="1000" style="height: 5em;"><?php if ( isset( $results['article'] ) ) { echo htmlspecialchars( $results['article']->summary ); } ?></textarea>
          </li>

          <li>
            <label for="content"><b>Article Content</b></label><br />
            <textarea name="content" id="content" class="finput" placeholder="The HTML content of the article" required maxlength="100000" style="height: 30em;"><?php if ( isset( $results['article'] ) ) { echo htmlspecialchars( $results['article']->content ); } ?></textarea>
          </li>

          <li>
            <label for="publicationDate"><b>Publication Date</b></label><br />
            <input type="date" name="publicationDate" id="publicationDate" class="finput" placeholder="DD-MM-YYYY" required maxlength="10" value="<?php if ( isset( $results['article'] ) ) { echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : ""; } ?>" />
          </li>


        </ul>

        <div class="buttons">
          <input type="submit" class="finput" name="saveChanges" value="Save Changes" />
          <input type="submit" class="finput" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

<?php if (isset( $results['article']->id )) { ?>
      <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>

