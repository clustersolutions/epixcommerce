<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace OSC\Core\Site\Admin\Module\Template\Value\apps_links;

  use OSC\Core\Access;
  use OSC\Core\OSCOM;
  use OSC\Core\Registry;

  class Controller extends \OSC\Core\Template\ValueAbstract {
    static public function execute() {
      $OSCOM_Template = Registry::get('Template');

      $apps_links = '';

      if ( isset($_SESSION[OSCOM::getSite()]['id']) ) {
        $apps_links .= '<ul>';

        foreach ( Access::getLevels() as $group => $links ) {
          $application = current($links);

          $apps_links .= '  <li><a href="' . OSCOM::getLink(null, $application['module']) . '"><span style="float: right;">&#9656;</span>' . Access::getGroupTitle($group) . '</a>' .
                         '    <ul>';

          foreach ( $links as $link ) {
            $apps_links .= '      <li><a href="' . OSCOM::getLink(null, $link['module']) . '">' . $OSCOM_Template->getIcon(16, $link['icon']) . '&nbsp;' . $link['title'] . '</a></li>';
          }

          $apps_links .= '    </ul>' .
                         '  </li>';
        }

        $apps_links .= '</ul>';
      }

      return $apps_links;
    }
  }
?>
