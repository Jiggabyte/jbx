<?php include "../../../articler/templates/include/header.php" ?>

<?php
require("../../config.php");

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

<form action="../../admin.php?action=<?php echo $results['formAction']; ?>" method="post" name="formAS" novalidate>
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
    <p><a href="../../admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>

<?php include "../../templates/include/footer.php" ?>

