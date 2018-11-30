<div id="container" style="opacity:0.8;">

    <img id="imager" alt="Image" src="assets/banner.jpg" style="width:300px;height:250px;border-radius:5px;">

      <h1>Blog Archive</h1>'.

      <ul id="headlines" class="archive">

<?php foreach ( $results['articles'] as $article ) { ?>

        <li>
          <h2>
            <a href="?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>

            <p><span class="pubDate"><?php echo date('j F Y', $article->publicationDate)?></span></p>
        </li>

<?php } ?>

      </ul>

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

    <a href="index.php"><p>Go Back</p></a>


</div>
