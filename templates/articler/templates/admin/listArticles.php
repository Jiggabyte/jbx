<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
    <link rel="stylesheet" type="text/css" href="../../style.css" />
    <style>
        .finput {margin-left:0px;margin-top:10px;margin-bottom:10px;font-weight:bold;width:250px;height:20px;border-radius:5px;     }
        .finputa {margin-left:0px;margin-top:10px;margin-bottom:10px;font-weight:bold;width:250px;height:200px;border-radius:5px;     }

    </style>
</head>
<body>
<div id="container">

<div id="adminHeader">
        <h2>Widget Admin</h2>

      </div>

      <h1>All Articles</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table>
        <tr>
          <th>Publication Date</th>
          <th>Article</th>
        </tr>

<?php foreach ( $results['articles'] as $article ) { ?>

        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>






</div>
</body>
</html>

