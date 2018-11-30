<div id="blogTop" style="position:relative;left:0px;top:0px;height:700px;">

    <h2 style="width: 75%;color:#e83e8c;"><?php echo htmlspecialchars( $results['article']->title )?></h2>
    <div style="width: 75%;font-style: italic;font-size:1.5em;color:#5bc0de;"><?php echo htmlspecialchars( $results['article']->summary )?></div><br />

    <!-- <img id="imager" alt="Image" src="uploads/<?php echo $results['article']->image; ?>" style="width:300px;height:;border-radius:5px;"> -->


    <div class="cont" style="width: 75%;height:300px;overflow: hidden;font-size:1.3em;margin-top:5px;">
          <style>
              .cont,span {
                  color:#012f5c!important;
              }
          </style>
          <?php echo $results['article']->content?>
      </div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>

      <p><a href="blog.php#blogTop">Read More ...</a></p>

    <script type="text/javascript">
        $("title").html("Home | <?php echo $results['article']->title.' : '.$results['article']->summary; ?>");
    </script>

</div>