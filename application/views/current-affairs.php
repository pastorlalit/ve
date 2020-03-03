<h1>current-affairs</h1>

      <div class="row">
                            <?php
                            if (!empty($current_affairs)): foreach ($current_affairs as $current_affair):
                                    $ca_description = word_limiter($current_affair['ca_description'], 40, '&#8230;');
                                    $ca_date= $current_affair['ca_date'];
                                    $posted_on = date("d-m-Y", strtotime($ca_date));
                                    ?>
                                    <div class="col-md-4">
                                        <div class="post-item blog-box">
                                            <div class="post-image main-border bot-4-border">
                                                <a href="<?php echo base_url('resources/post/' . $current_affair['ca_url_slug']); ?>">
                                                    <img height="215" width="100%" src="<?php echo base_url() . substr($current_affair['ca_image'], 2); ?>" alt="<?php echo $current_affair['ca_title']; ?>">
                                                </a>
                                            </div>
                                            <article class="post-content">
                                                <div class="post-info blog-content">
                                                    <h4 class="m-b-1"><a href=""><?php echo $current_affair['ca_title']; ?></a></h4>
                                                    <ul class="post-meta">
                                                        <li class="meta-date"><i class="fa fa-clock-o"></i><?php echo $posted_on; ?></li>
                                                        <li class="meta-category"><i class="fa fa-tag"></i>Posted by : <?php echo $current_affair['ca_date']; ?></li>
                                                    </ul>
                                                    <p><?php echo $ca_description ?></p>
                                                    <a class="blog-detail-link main-color" id="6" href="">Read more</a>
                                                </div>

                                            </article>
                                        </div>
                                    </div>

                                <?php endforeach;
                            else:
                                ?>
                                <p>Post(s) not available.</p>
                               <?php endif; ?>  
                        </div>