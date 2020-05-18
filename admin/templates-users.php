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
?>

<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.'); ?>
<?php if ( !OC_ADMIN ) exit('User access is not allowed.'); ?>
<?php $listings_per_row = osc_get_preference('listings_per_row', 'osclasswizards_theme');?>
<h2 class="render-title"><?php _e('Users settings', OSCLASSWIZARDS_THEME_FOLDER); ?></h2>
<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/'.OSCLASSWIZARDS_THEME_FOLDER.'/admin/settings.php'); ?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="templates_users" />
    <fieldset>
        <div class="form-horizontal">
            <div class="form-row">
                <div class="form-label"><?php _e('Enable facebook login', OSCLASSWIZARDS_THEME_FOLDER); ?></div>
                <div class="form-controls">
                    <div class="form-label-checkbox">
                        <input type="checkbox" class="switch" name="facebook_login" value="1" <?php echo (osc_esc_html( osc_get_preference('facebook_login', 'osclasswizards_theme') ) == "1")? "checked": ""; ?>>
                    </div>
                </div>
            </div>
		</div>
    </fieldset>

	<div class="form-actions">
		<input type="submit" value="<?php echo osc_esc_html(__('Save changes', OSCLASSWIZARDS_THEME_FOLDER)); ?>" class="btn btn-submit">
	</div>
</form>