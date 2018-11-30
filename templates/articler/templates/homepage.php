<div id="container" style="opacity:0.8;">

    <img id="imager" alt="Image" src="wpimages/medtabs.jpg" style="width:300px;height:250px;border-radius:5px;">


    <ul id="headlines">

        <?php foreach ( $results['articles'] as $article ) { ?>

            <li>
                <h2>
                    <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span><a href="?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
                </h2>
                <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
            </li>

        <?php } ?>

    </ul>

    <p style="text-decoration:underline;"><a href="?action=archive">Article Archive</a></p>

</div>
