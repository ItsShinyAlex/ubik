<?php
$show_breadcrums = Inwave_Helper::getPostOption('breadcrumbs', 'breadcrumbs');
$show_breadcrums = apply_filters('inwave_show_breadcrumbs', ($show_breadcrums && $show_breadcrums != 'no') ? true : false);
$show_heading = apply_filters('inwave_show_heading', true);
$page_heading_class = array();
$page_heading_class[] = inwave_page_heading_style();
if(!$show_breadcrums){
    $page_heading_class[] = 'not-breadcrumb';
}
if(!$show_heading){
    $page_heading_class[] = 'not-heading';
}
ob_start();
?>
    <div class="page-heading default <?php echo esc_attr(implode(' ', $page_heading_class));?>">
        <div class="container-inner">
            <div class="container">
                <?php
                if ($show_breadcrums) { ?>
                    <div class="breadcrumbs-top" ><?php get_template_part('blocks/breadcrumbs'); ?></div>
                <?php } ?>
                <?php if($show_heading){ ?>
                <div class="page-title">
                    <div class="iw-heading-title">
                        <h1>
                            <?php
                            $text['home']     = esc_html__('Inicio', 'reality'); // text for the 'Home' link
                            $text['category'] = esc_html__('%s', 'reality'); // text for a category page
                            $text['tax'] 	  = esc_html__('Archive for "%s"', 'reality'); // text for a taxonomy page
                            $text['search']   = esc_html__('Search Results for "%s" Query', 'reality'); // text for a search results page
                            $text['tag']      = esc_html__('Posts Tagged "%s"', 'reality'); // text for a tag page
                            $text['author']   = esc_html__('Articles Posted by %s', 'reality'); // text for an author page
                            $text['404']      = esc_html__('Oops! That page can&rsquo;t be found', 'reality'); // text for the 404 page

                            $page_title = '';
                            if(is_home()){
                                $page_id = get_option('page_for_posts', true);
                                if($page_id){
                                    $page_title .= get_the_title($page_id );
                                }
                                else{
                                    $page_title .= get_bloginfo('name');
                                }
                            }elseif ( is_category() ) {
                                $page_title .= sprintf($text['category'], single_cat_title('', false));
                            } elseif( is_tax() ){
                                if(is_tax('cat')){
                                    $page_title .= sprintf($text['tax'], single_cat_title('', false));
                                }elseif(is_tax(get_object_taxonomies( 'iwp_property' ))){
                                    $tax_title = single_cat_title('', false);
                                    if(strpos(strtolower($tax_title), esc_html__('for', 'reality')) !== false){
                                        $page_title .= sprintf(esc_html__('Properties %s', 'reality'), $tax_title);
                                    }else{
                                        $page_title .= sprintf(esc_html__('Propiedades para %s', 'reality'), $tax_title);
                                    }
                                }elseif ( is_tax( get_object_taxonomies( 'iwp_agent' ) ) ) {
                                    $page_title .= sprintf( esc_html__('Agents for %s', 'reality'), single_cat_title('', false) );
                                }else {
                                    $page_title .= sprintf(single_cat_title('', false));
                                }
                            }elseif ( is_search() ) {
                                $page_title .= sprintf($text['search'], get_search_query());
                            } elseif ( is_day() ) {
                                $page_title .= sprintf($text['tax'], get_the_time('F jS, Y'));
                            } elseif ( is_month() ) {
                                $page_title .= sprintf($text['tax'], get_the_time('F, Y'));
                            } elseif ( is_year() ) {
                                $page_title .= sprintf($text['tax'], get_the_time('Y'));
                            } elseif ( is_single()) {
                                if(function_exists('is_product') && is_product()){
                                    $page_title .= get_the_title(wc_get_page_id( 'shop' ));
                                }if(is_attachment()){
                                    $page_title .= __('Media', 'reality');
                                }else{
                                    if(get_option( 'page_for_posts' )){
                                        $page_title .= get_the_title( get_option( 'page_for_posts' ) );
                                    }else{
                                        $page_title .= __('Post', 'reality');
                                    }
                                }
                            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() && !is_author() ) {
                                if(function_exists('is_shop') && is_shop()){
                                    $page_title .= get_the_title(wc_get_page_id( 'shop' ));
                                }
                                else{
                                    $post_type = get_post_type_object(get_post_type());
                                    $page_title .= $post_type->labels->all_items;
                                }
                            } elseif ( is_page()) {
                                $post = get_post();
                                if(function_exists('iwp_get_page_id') && iwp_get_page_id('dashboard') == $post->ID){
                                    $tab_title = IWP_Front::tab_title();
                                    if($tab_title){
                                        $page_title .= $tab_title;
                                    }else{
                                        $page_title .= get_the_title();
                                    }
                                }else{
                                    $page_title .= get_the_title();
                                }
                            }elseif ( is_tag() ) {
                                $page_title .= single_tag_title('', false);
                            } elseif ( is_author() ) {
                                $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
                                if(class_exists('IWP_Class')){
                                    $text['author'] = esc_html__('Properties posted by %s', 'reality');
                                }
                                $page_title .= sprintf($text['author'], $author->display_name);
                            } elseif ( is_404() ) {
                                $page_title .= $text['404'];
                            }

                            echo esc_html($page_title);
                            ?>
                        </h1>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php
$page_heading_html = ob_get_contents();
ob_end_clean();

echo apply_filters('inwave_page_heading', $page_heading_html);
?>