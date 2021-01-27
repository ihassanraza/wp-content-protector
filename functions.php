<?php
/**
 * This is the main functions file 
 * 
 *  * PHP version        7.2
 * 
 * @category Content
 * 
 * @package Content
 * 
 * @author Hassan Raza <ihaxxanraza@gmail.com>
 * 
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GPL v2 or later
 * 
 * @link https://www.sigmasqr.com/
 */

/**
 * Setting  started here.
 * 
 * @return void
 */
function Setting_function()
{

    add_settings_section( 
        'section_id',
        'All Data',
        'WCP', 
        null
    );
    
    add_settings_field(
        'rightclick', 
        '', 
        'Rightclick_fun', 
        'rightclick', 
        'section_id'
    );


    add_settings_field(
        'dragcontent', 
        '', 
        'Dragcont_fun', 
        'dragcontent', 
        'section_id'
    );

    add_settings_field(
        'copypaste', 
        '', 
        'Copypaste_fun', 
        'copypaste', 
        'section_id'
    );

    add_settings_field(
        'devmode', 
        '', 
        'Devmode_fun', 
        'devmode', 
        'section_id'
    );

    add_settings_field(
        'selection', 
        '', 
        'Selection_fun', 
        'selection', 
        'section_id'
    );

    add_settings_field(
        'print', 
        '', 
        'Print_fun', 
        'print', 
        'section_id'
    );

    add_settings_field(
        'savepage', 
        '', 
        'Save_fun', 
        'savepage', 
        'section_id'
    );

    add_settings_field(
        'slcall', 
        '', 
        'Slcall_fun', 
        'slcall', 
        'section_id'
    );

    add_settings_field(
        'psource', 
        '', 
        'Psource_fun', 
        'psource', 
        'section_id'
    );


    register_setting('section_id', 'rightclick');
    register_setting('section_id', 'dragcontent');
    register_setting('section_id', 'copypaste');
    register_setting('section_id', 'devmode');
    register_setting('section_id', 'selection');
    register_setting('section_id', 'print');
    register_setting('section_id', 'savepage');
    register_setting('section_id', 'slcall');
    register_setting('section_id', 'psource');
}
add_action('admin_init', 'Setting_function');

/**
 * Callback function of rightclick.
 * 
 * @return void
 */
function Rightclick_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="rightclick" <?php if (get_option('rightclick') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Drag Content.
 * 
 * @return void
 */
function Dragcont_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="dragcontent" <?php if (get_option('dragcontent') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Copy Paste.
 * 
 * @return void
 */
function Copypaste_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="copypaste" <?php if (get_option('copypaste') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Developer Tools.
 * 
 * @return void
 */
function Devmode_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="devmode" <?php if (get_option('devmode') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Selection Text.
 * 
 * @return void
 */
function Selection_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="selection" <?php if (get_option('selection') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Print Page.
 * 
 * @return void
 */
function Print_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="print" <?php if (get_option('print') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Save Page.
 * 
 * @return void
 */
function Save_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="savepage" <?php if (get_option('savepage') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Select All.
 * 
 * @return void
 */
function Slcall_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="slcall" <?php if (get_option('slcall') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

/**
 * Callback function of Page Source.
 * 
 * @return void
 */
function Psource_fun()
{
    ?>
    <div class="custom-control custom-checkbox float-end">
    <input type="checkbox" class="custom-control-input" value="1" name="psource" <?php if (get_option('psource') == "1") echo "Checked"; else echo "false";?>>
    </div>
    <?php
}

add_action('wp_head', 'WCP_script');

/**
 * WCP_script function started here
 * 
 * @return void
 */
function WCP_script()
{
    // Right Click
    $right = get_option('rightclick');
    if ($right == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery("body").bind("contextmenu", function( e ) {  
                e.preventDefault();	
                return false; 
            });
            jQuery("body").on("contextmenu", function( e ) {
                alert("Context Menu is blocked");
            });
        });
        </script>
        <?php
    } elseif ($right == "0") {
        return false;
    }
    
    // Drag Content
    $dragcon = get_option('dragcontent');
    if ($dragcon == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery("body").bind("dragstart", function( e ) {
                e.preventDefault();	
                return false; 
            });
            jQuery("body").on("dragstart", function( e ) {
                alert("Drag Image is blocked");
            });
        });
        </script>
        <?php
    } elseif ($dragcon == "0") {
        return false;
    }
    
    // Copy Paste
    $copy = get_option('copypaste');
    if ($copy == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery("body").bind("cut copy paste taphold", function( e ) {
                e.preventDefault();	
                return false; 
            });
        });
        </script>
        <?php
    } elseif ($copy == "0") {
        return false;
    }
    
    // Developer Mode
    $developer = get_option('devmode');
    if ($developer == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery("body").bind("contextmenu", function( e ) {
                    e.preventDefault();	
                    return false; 
                });
            jQuery(window).on('keydown', function( event ) {
                // Disabled F12
                if(event.keyCode==123)
                {
                    return false;
                }
                // Disabled ctrl+shift+i
                else if(event.ctrlKey && event.shiftKey && event.keyCode==73)
                {
                    return false;
                }
            });
        });
        </script>
        <?php
    } elseif ($developer == "0") {
        return false;
    }
    
    // Selection
    $select = get_option('selection');
    if ($select == "1") {
        ?>
        <style>
        * {
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
        }
        </style>
        <?php
    } elseif ($select == "0") {
        return false;
    }
    
    // Print Page
    $printpage = get_option('print');
    if ($printpage == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery(window).on('keydown', function( event ) {
                if(event.ctrlKey &&  event.keyCode==80)
                {
                    return false;
                }
            });
        });
        </script>
        <?php
    } elseif ($printpage == "0") {
        return false;
    }
    
    // Save Page
    $savep = get_option('savepage');
    if ($savep == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery(window).on('keydown', function( s ) {
                if(s.ctrlKey && s.keyCode==83)
                {
                    return false;
                }
            });
        });
        </script>
        <?php
    } elseif ($savep == "0") {
        return false;
    }
    
    // Select All
    $selectall = get_option('slcall');
    if ($selectall == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery(window).on('keydown', function( s ) {
                if(event.ctrlKey && event.keyCode==65)
                {
                    return false;
                }
            });
        });
        </script>
        <?php
    } elseif ($selectall == "0") {
        return false;
    }

    // Select All
    $pagesource = get_option('psource');
    if ($pagesource == "1") {
        ?>
        <script>
        jQuery(document).ready( function() {
            jQuery(window).on('keydown', function( s ) {
                // Disabled ctrl+u
                if(event.ctrlKey && event.keyCode==85)
                {
                    return false;
                }
            });
        });
        </script>
        <?php
    } elseif ($pagesource == "0") {
        return false;
    }

}
?>