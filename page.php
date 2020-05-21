<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2014 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

    // meta tag robots
    osc_add_hook('header','osclasswizards_nofollow_construct');

    osclasswizards_add_body_class('page');
    osc_current_web_theme_path('header.php') ;
?>

<div class="title">
  <h1><?php echo osc_static_page_title(); ?></h1>
</div>
<div id="my-search-30045051"></div>
<div>
    <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?30045051&data_platform=code&data_date=2020-05-21" charset="utf-8"></script>
    <script type="text/javascript"> xSearch("id=my-search-30045051"); </script>
</div>
<div class="ec-cart-widget"></div>
<div>
    <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?30045051&data_platform=code&data_date=2020-05-21" charset="utf-8"></script>
    <script type="text/javascript">Ecwid.init();</script>
</div>
<div id="my-categories-30045051"></div>
<div>
    <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?30045051&data_platform=code&data_date=2020-05-21" charset="utf-8"></script>
    <script type="text/javascript"> xCategoriesV2("id=my-categories-30045051"); </script>
</div>
<div id="my-store-30045051"></div>
<div>
    <script data-cfasync="false"
            type="text/javascript"
            src="https://app.ecwid.com/script.js?30045051&data_platform=code&data_date=2020-05-21" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(20,3) list(60) table(60)","categoryView=grid","searchView=list","id=my-store-30045051");</script>
</div>
<?php echo osc_static_page_text(); ?>
<?php osc_current_web_theme_path('footer.php') ; ?>
