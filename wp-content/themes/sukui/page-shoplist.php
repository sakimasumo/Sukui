<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>"><span>Top</span></a></li>
            <li class="breadcrumb__item"><?php wp_title(); ?></li>
        </ul>
    </section>
    <!-- タイトルエリア -->
    <div class="container pagetop start">
        <div class="pagetop__logo"><img src="<?= get_template_directory_uri(); ?>/images/shoplist-logo.png" alt=""></div>
    </div>
    <!-- メインエリア -->
    <main>
        <section class="container shopbox start">
            <div class="accbox">
                <!--ラベル1-->
                  <input type="checkbox" id="label1" class="cssacc" />
                  <label for="label1">北海道</label>
                  <div class="accshow">
                    <ul class="shopbox__list">
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                    </ul>
                  </div>
                  <!--//ラベル1-->
                <!--ラベル2-->
                  <input type="checkbox" id="label2" class="cssacc" />
                  <label for="label2">東北・北陸</label>
                  <div class="accshow">
                    <ul class="shopbox__list">
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                    </ul>
                  </div>
                  <!--//ラベル2-->
                <!--ラベル3-->
                  <input type="checkbox" id="label3" class="cssacc" />
                  <label for="label3">関東</label>
                  <div class="accshow">
                    <ul class="shopbox__list">
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                    </ul>
                    
                  </div>
                  <!--//ラベル3-->
                <!--ラベル4-->
                  <input type="checkbox" id="label4" class="cssacc" />
                  <label for="label4">東海</label>
                  <div class="accshow">
                    <ul class="shopbox__list">
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                    </ul>
                  </div>
                  <!--//ラベル4-->  
                <!--ラベル5-->
                  <input type="checkbox" id="label5" class="cssacc" />
                  <label for="label5">関西</label>
                  <div class="accshow">
                    <ul class="shopbox__list">
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                    </ul>
                  </div>
                  <!--//ラベル5-->
                <!--ラベル6-->
                  <input type="checkbox" id="label6" class="cssacc" />
                  <label for="label6">中国・四国</label>
                  <div class="accshow">
                    <ul class="shopbox__list">
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                    </ul>
                  </div>
                  <!--//ラベル5-->
                <!--ラベル7-->
                  <input type="checkbox" id="label7" class="cssacc" />
                  <label for="label7">九州・沖縄</label>
                  <div class="accshow">
                    <ul class="shopbox__list">
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                        <li class="shopbox__item">
                            <dl>
                                <dt class="shopbox__item__name">〇〇店</dt>
                                <dd class="shopbox__item__address">〒000-0000　〇〇・・・・・</dd>
                                <dd class="shopbox__item__tel">00-0000-0000</dd>
                            </dl>
                        </li>
                    </ul>
                  </div>
                  <!--//ラベル5-->
              </div><!--//.accbox-->
    </section>
    </main>
<?php get_footer(); ?>