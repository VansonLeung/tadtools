<?php
/**
 * TadTools module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL (http://www.gnu.org/licenses/gpl-2.0.html/)
 * @package             TadTools
 * @since               2.5.0
 * @author              Tad
 **/

// defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

$path = dirname(dirname(dirname(__DIR__)));
include_once $path . '/mainfile.php';

$dirname         = basename(dirname(__DIR__));
$module_handler  = xoops_getHandler('module');
$module          = $module_handler->getByDirname($dirname);
$pathIcon32      = $module->getInfo('icons32');
$pathModuleAdmin = $module->getInfo('dirmoduleadmin');
$pathLanguage    = $path . $pathModuleAdmin;

if (!file_exists($fileinc = $pathLanguage . '/language/' . $GLOBALS['xoopsConfig']['language'] . '/' . 'main.php')) {
    $fileinc = $pathLanguage . '/language/english/main.php';
}

include_once $fileinc;

$adminmenu = array();

$i                      = 1;
$adminmenu[$i]['title'] = _MI_TAD_ADMIN_HOME;
$adminmenu[$i]['link']  = 'admin/index.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/home.png';

++$i;
$adminmenu[$i]['title'] = _MI_TADTOOLS_ADMENU1;
$adminmenu[$i]['link']  = "admin/main.php";
$adminmenu[$i]['icon']  = $pathIcon32 . '/folder_txt.png';

++$i;
$adminmenu[$i]['title'] = _MI_TAD_ADMIN_ABOUT;
$adminmenu[$i]['link']  = 'admin/about.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/about.png';
