<?php get_header(); ?>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
								<?php 
                        
                            $gorsel_alani = get_field('gorsel_alani');
                        
                        
                        ?>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $gorsel_alani['1_fotograf'];?>" class="img-fluid" alt="">
                                    </div>

                                   
                                    </div>
                                </div>
                            </div>
<?php 
                        
                            $gorsel_yazisi_alani = get_field('gorsel_yazisi_alani');
                        
                        
                        ?>
                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    <?php echo $gorsel_yazisi_alani['1_baslik'];         ?>
                                    <div class="animated-info">
                                        <span class="animated-item"><?php echo $gorsel_yazisi_alani['2_baslik'];         ?></span>
                                        <span class="animated-item"><?php echo $gorsel_yazisi_alani['3_baslik'];         ?></span>
                                        <span class="animated-item"><?php echo $gorsel_yazisi_alani['4_baslik'];         ?></span>
                                    </div>
                                </h1>

                                <p class="mb-4"><?php echo $gorsel_yazisi_alani['paragraf'];         ?></p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="#about" data-hover="<?php echo $gorsel_yazisi_alani['buton_yazisi'];?>"><?php echo $gorsel_yazisi_alani['buton_yazisi'];?></a>

                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Slider -->
           <div class="container">
             <div class="our-works">
                <h2 class="our-works-title">Our Works</h2>
                <div class="our-works-feature">
                    <div class="our-works-feature-card">
                        <h3 class="our-works-feature-card-title">Demo Başlık</h3>
                        <p class="our-works-feature-card-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, excepturi nobis earum harum aperiam expedita dolorem. Excepturi, nulla provident. Blanditiis?
                        </p>
                    </div>
                    <div class="our-works-feature-keywords">
                        <div class="our-works-keyword">
                        <i class="fab fa-instagram"></i>
                            <p>Lorem ipsum dolor sit lore amet.</p>
                        </div>
                        <div class="our-works-keyword">
                        <i class="fa-fa instagram"></i>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="our-works-keyword">
                            <i>i</i>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div class="slider-items">
                    <div class="slider-item active"  id="1">
                                <div class="slider-img-box">
                                    <img src="<?php bloginfo('template_url'); ?>/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" alt="">
                                </div>
                                <div class="slider-content-box">
                                    <p class="slider-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eaque culpa quasi soluta laboriosam, alias blanditiis! Delectus alias beatae rem quos molestias ut laboriosam, et, consequatur corrupti ipsum aut atque.</p>
                                </div>
                        </div>

                        <div class="slider-item" id="2">
                                <div class="slider-img-box">
                                    <img  src="<?php bloginfo('template_url'); ?>/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" alt="">
                                </div>
                                <div class="slider-content-box">
                                    <p class="slider-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eaque culpa quasi soluta laboriosam, alias blanditiis! Delectus alias beatae rem quos molestias ut laboriosam, et, consequatur corrupti ipsum aut atque.</p>
                                </div>
                        </div>

                        <div class="slider-item" id="3">
                                <div class="slider-img-box">
                                    <img  src="<?php bloginfo('template_url'); ?>/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" alt="">
                                </div>
                                <div class="slider-content-box">
                                    <p class="slider-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eaque culpa quasi soluta laboriosam, alias blanditiis! Delectus alias beatae rem quos molestias ut laboriosam, et, consequatur corrupti ipsum aut atque.</p>
                                </div>
                        </div>



                        <div class="slider-item" id="4">
                                <div class="slider-img-box">
                                    <img src="<?php bloginfo('template_url'); ?>/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" alt="">
                                </div>
                                <div class="slider-content-box">
                                    <p class="slider-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eaque culpa quasi soluta laboriosam, alias blanditiis! Delectus alias beatae rem quos molestias ut laboriosam, et, consequatur corrupti ipsum aut atque.</p>
                                </div>
                        </div>

                        <div class="slider-item" id="5">
                                <div class="slider-img-box">
                                    <img  src="<?php bloginfo('template_url'); ?>/images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" alt="">
                                </div>
                                <div class="slider-content-box">
                                    <p class="slider-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eaque culpa quasi soluta laboriosam, alias blanditiis! Delectus alias beatae rem quos molestias ut laboriosam, et, consequatur corrupti ipsum aut atque.</p>
                                </div>
                        </div>
                        
                    </div>
                    <div class="slider-pagenation">
                        <div class="pagenation-buttons"></div>
                    </div>
                </div>
            </div>
           </div>

            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <!-- partial:index.partial.html -->
                    <h1>UL timeline cards</h1>
                    <ul class="time-line">
                        <li style="--accent-color:#1e7685">
                            <div class="date">2002</div>
                            <div class="title">Title 1</div>
                            <div class="descr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas itaque hic quibusdam fugiat est numquam harum, accusamus suscipit consequatur laboriosam!</div>
                        </li>
                        <li style="--accent-color:#fd8952">
                            <div class="date">2007</div>
                            <div class="title">Title 2</div>
                            <div class="descr">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos adipisci nobis nostrum vero nihil veniam.</div>
                        </li>
                        <li style="--accent-color:#00313C">
                            <div class="date">2012</div>
                            <div class="title">Title 3</div>
                            <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga minima consequuntur soluta placeat iure totam commodi repellendus ea delectus, libero fugit quod reprehenderit, sequi quo, et dolorum saepe nulla hic.</div>
                        </li>
                        <li style="--accent-color:#a85b36">
                            <div class="date">2017</div>
                            <div class="title">Title 4</div>
                            <div class="descr">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, cumque.</div>
                        </li>
                        <li style="--accent-color:#101820">
                            <div class="date">2022</div>
                            <div class="title">Title 5</div>
                            <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, non.</div>
                        </li>
                    </ul>
                    
                    <!-- partial -->
                </div>
            </section>
          

            <!-- Hakkımızda -->
            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">
							<?php $hakkinda = get_field('hakkinda');?>
                        <div class="col-6">
                            <h2 class="mb-lg-3 mb-3"><?php echo $hakkinda['baslik'];?></h2>

                            <p><?php echo $hakkinda['metin'];?></p>                            
                        </div>

                        <div class="col-6 mx-auto gallery-flex">
                                <?php $hakkinda_gorselleri = get_field('hakkinda_gorselleri');?>

                                <div class="col-12">
                                    <img src="<?php echo $hakkinda_gorselleri['1_gorsel'];?>" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                                </div>

                                <div class="col-12">
                                    <img src="<?php echo $hakkinda_gorselleri['2_gorsel'];?>" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                                </div>
                        </div>
                    </div>


                </div>
            </section>

  <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">
					<?php 
                        
                            $sunum_alani = get_field('sunum_alani');
                        
                        
                        ?>
 <section class="grid-card" id="reviews">
        <div class="card-left">
            <div class="scard">
                <h2 class="card-title"><?php echo $sunum_alani['sunum_metin_basligi'];?></h2>
                <p class="card-description"><?php echo $sunum_alani['sunum_metni'];?></p>
            </div>
          
        </div>
        <div class="card-right">
            <div class="scard">
                <div class="card-img-box">
                    <img src="<?php echo $sunum_alani['sunum_gorseli'];?>" alt="card image" class="card-image">
                    <button class="download-btn">
						<a href="<?php echo $sunum_alani['indirme_linki'];?>" class="download-link"> 
                        Sunumu İndirin  </a>
                    </button>
                </div>
                
            </div>
        </div>
</section>
					</div>
	  </div>
</section>

            
        </main>
      <?php get_footer(); ?>