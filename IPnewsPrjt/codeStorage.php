<!-- this is the bottom php code for the four articles -->
<?php
                                    foreach($bottomStories as $bottomStory){
                                    ?>
                                    <h3><a href="url"><?= $bottomStory ->headline ?> </h3>
                                    <h5><a href="url"><?= $bottomStory ->time ?> <?= $bottomStory ->date ?></a> </h5>
                                    <p><a href="url"><?= $bottomStory ->summary ?> </p>
                                   <hr>
                                 <?php
                                    }
                                     ?>
 

<!-- top story -->
 <?php
                                    foreach($topStories as $topStory){
                                    ?>
                                    <h1><a href="url"><?= $topStory ->headline ?> </h1>
                                    <h5><a href="url"><span><?= $topStory ->time ?></span> <?= $topStory ->date ?></a> </h5>
                                    <h6 class="summary bottom"><a href="url"><?= $topStory ->summary ?></h6>
                                    <p class="pfont"><a href="url"><?= $topStory ->article ?> </p>
                                 <?php
                                    }
                                     ?>