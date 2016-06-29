<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php get_header(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/calendar.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/calendar_print_2.css"/>
    <body <?php body_class(); ?> >
    	<div class="wrapper">
    		<?php get_sidebar(); ?>
            <?php

                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  $args = array(
                    'post_type' => 'calendar'
                  );
                  query_posts($args);
                  $col = 0;
                  ?>

                  <section class="section_t calendar calendarXL">
                        <div class="conteiner section_line_lr calendar_line_lr">
                          <h1>Расписание</h1>
                          <a href="/calendar_print" target="blank" class="print">Версия для печати</a>
                        <div class="card_b">

                        <table cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td></td>
                                <td class="vertMid">Понедельник</td>
                                <td class="vertMid">Вторник</td>
                                <td class="vertMid">Среда</td>
                                <td class="vertMid">Четверг</td>
                                <td class="vertMid">Пятница</td>
                                <td class="vertMid">Суббота</td>
                                <td class="vertMid">Воскресенье</td>
                            </tr>
                            <?php
                  if (have_posts()) :
                    for ($timeTable=6; $timeTable <=23 ; $timeTable++) {
                      global $wpdb;
                      $timeTableText = $timeTable .':00';
                      $valN = $wpdb->get_results("SELECT wp_postmeta.meta_value,wp_calendar.item_content, wp_calendar.item_treiner, wp_calendar.itemday FROM wp_calendar INNER JOIN wp_postmeta ON wp_calendar.item_treiner=wp_postmeta.post_id AND wp_postmeta.meta_key = 'color' AND wp_calendar.item_time = '$timeTableText'");
                      $selLineCLCountN = count($valN);
                        if ($selLineCLCountN != 0){
                          ?>
                          <tr><td class="vertMid"><b><?php echo $timeTableText ?></b></td>

                            <td class="colorList">
                                <ul>
                          <?php
                          for ($iCLV=0; $iCLV < $selLineCLCountN; $iCLV++) {
                            $idday = $valN[$iCLV]->itemday;
                            $idday = $wpdb->get_row("SELECT post_title FROM wp_posts WHERE ID = $idday");
                            if ($idday->post_title == 'Понедельник'){
                              ?>
                                  <li style="background: <?php echo $valN[$iCLV]->meta_value ?>">
                                    <?php echo $valN[$iCLV]->item_content ?>
                                  </li>
                              <?php
                              }
                            }

                            ?>
                                  </ul>
                              </td>
                              <td class="colorList">
                                  <ul>
                            <?php
                            for ($iCLV=0; $iCLV < $selLineCLCountN; $iCLV++) {
                              $idday = $valN[$iCLV]->itemday;
                              $idday  = $wpdb->get_row("SELECT post_title FROM wp_posts WHERE ID = $idday");
                              if ($idday->post_title == 'Вторник'){
                                ?>
                                    <li style="background: <?php echo $valN[$iCLV]->meta_value ?>">
                                      <?php echo $valN[$iCLV]->item_content ?>
                                    </li>
                                <?php
                                }
                              }

                              ?>
                                    </ul>
                                </td>
                                <td class="colorList">
                                    <ul>
                              <?php
                              for ($iCLV=0; $iCLV < $selLineCLCountN; $iCLV++) {
                                $idday = $valN[$iCLV]->itemday;
                                $idday  = $wpdb->get_row("SELECT post_title FROM wp_posts WHERE ID = $idday");
                                if ($idday->post_title == 'Среда'){
                                  ?>
                                      <li style="background: <?php echo $valN[$iCLV]->meta_value ?>">
                                        <?php echo $valN[$iCLV]->item_content ?>
                                      </li>
                                  <?php
                                  }
                                }

                                ?>
                                      </ul>
                                  </td>
                                  <td class="colorList">
                                      <ul>
                                <?php
                                for ($iCLV=0; $iCLV < $selLineCLCountN; $iCLV++) {
                                  $idday = $valN[$iCLV]->itemday;
                                  $idday  = $wpdb->get_row("SELECT post_title FROM wp_posts WHERE ID = $idday");
                                  if ($idday->post_title == 'Четверг'){
                                    ?>
                                        <li style="background: <?php echo $valN[$iCLV]->meta_value ?>">
                                          <?php echo $valN[$iCLV]->item_content ?>
                                        </li>
                                    <?php
                                    }
                                  }

                                  ?>
                                        </ul>
                                    </td>
                                    <td class="colorList">
                                        <ul>
                                  <?php
                                  for ($iCLV=0; $iCLV < $selLineCLCountN; $iCLV++) {
                                    $idday = $valN[$iCLV]->itemday;
                                    $idday  = $wpdb->get_row("SELECT post_title FROM wp_posts WHERE ID = $idday");
                                    if ($idday->post_title == 'Пятница'){
                                      ?>
                                          <li style="background: <?php echo $valN[$iCLV]->meta_value ?>">
                                            <?php echo $valN[$iCLV]->item_content ?>
                                          </li>
                                      <?php
                                      }
                                    }

                                    ?>
                                          </ul>
                                      </td>
                                      <td class="colorList">
                                          <ul>
                                    <?php
                                    for ($iCLV=0; $iCLV < $selLineCLCountN; $iCLV++) {
                                      $idday = $valN[$iCLV]->itemday;
                                      $idday  = $wpdb->get_row("SELECT post_title FROM wp_posts WHERE ID = $idday");
                                      if ($idday->post_title == 'Суббота'){
                                        ?>
                                            <li style="background: <?php echo $valN[$iCLV]->meta_value ?>">
                                              <?php echo $valN[$iCLV]->item_content ?>
                                            </li>
                                        <?php
                                        }
                                      }

                                      ?>
                                            </ul>
                                        </td>
                                        <td class="colorList">
                                            <ul>
                                      <?php
                                      for ($iCLV=0; $iCLV < $selLineCLCountN; $iCLV++) {
                                        $idday = $valN[$iCLV]->itemday;
                                        $idday  = $wpdb->get_row("SELECT post_title FROM wp_posts WHERE ID = $idday");
                                        if ($idday->post_title == 'Воскресенье'){
                                          ?>
                                              <li style="background: <?php echo $valN[$iCLV]->meta_value ?>">
                                                <?php echo $valN[$iCLV]->item_content ?>
                                              </li>
                                          <?php
                                          }
                                        }
                                        ?>
                                              </ul>
                                          </td>
                            </tr>
                            <?php
                        }
                        }
                      endif;

                      ?>

                  </tbody>
          </table>
          </div>
                  </div></section>

                  <section class="calendar section_tb calendarSM">
                    <div class="section_line_lr">
                      <h1>Расписание</h1>


          <?php

                  if (have_posts()) :
                    while (have_posts()) : the_post();
                    $idDay = get_the_ID();
                    $val6 = $wpdb->get_results("SELECT * FROM wp_calendar WHERE itemday= $idDay");
                    $selLineCLCount6 = count($val6);
                    if ($selLineCLCount6 > 0) {
                      ?>
                      <div class="block_float_l p33"><div class="card_t">
                          <div class="card_line_lr card_line_tb">
                              <h4><?php the_title(); ?></h4></div><ul class="card_line_lr">
                      <?php
                      for ($timeTable=6; $timeTable <=23 ; $timeTable++) {
                        global $wpdb;
                        $timeTableText = $timeTable .':00';
                        global $wpdb;
                        $val6 = $wpdb->get_results("SELECT * FROM wp_calendar WHERE itemday= $idDay AND item_time = '$timeTableText'");
                        $selLineCLCount6 = count($val6);

                        if ($selLineCLCount6 != 0){
                            for ($iCLV=0; $iCLV < $selLineCLCount6; $iCLV++) {
                              $trenerIDuse = $val6[$iCLV]->item_treiner;
                              $selLineCLcolorV = $wpdb->get_row("SELECT meta_value FROM wp_postmeta WHERE post_id = $trenerIDuse AND meta_key = 'color'");
                              ?>
                              <li class="card_line_tb time_line"><span style="background: <?php echo $selLineCLcolorV->meta_value ?>" class="marker"></span>
                              <span class="time"><?php echo $timeTableText ?></span>
                              <p class="description"><?php echo $val6[$iCLV]->item_content ?></p></li>
                              <?php
                            }
                          }
                        }
                      ?>

                      </ul></div></div>
                      <?php
                      }
                    endwhile;
                  endif;

            ?>
          </div>

        </section>
        <section class="section_tb info">
          <div class="section_line_lr conteiner">
            <?php
            // Start the loop.
            wp_reset_query();
            while ( have_posts() ) : the_post();
                if ( has_post_thumbnail() ) {
                  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'  );
                  $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), $size, $icon );
                }
                ?>
                <?php if ($image_url[0]){ ?>
                  <img src='<?php echo $image_url[0] ?>' alt="">
                <?php } ?>

                <?php the_content(); ?>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </section>
      </div>
      <?php get_footer(); ?>
      <script type="text/javascript">
        $(document).ready(function() {
          $( "td.colorList" ).each(function( index ) {
            var liLast = $(this).find("li:last");
            if (liLast) {
              var liLastBg = liLast.css("background-color");
              $(this).css("background-color", liLastBg);
            }
          });
        });
      </script>
</body>
</html>
