<?php
/**
 * osCommerce Online Merchant
 * 
 * @copyright Copyright (c) 2011 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  use OSC\Core\HTML;
  use OSC\Core\ObjectInfo;
  use OSC\Core\OSCOM;
  use OSC\Core\Site\Admin\Application\PaymentModules\PaymentModules;

  $OSCOM_ObjectInfo = new ObjectInfo(PaymentModules::get($_GET['code']));
?>

<h1><?php echo $OSCOM_Template->getIcon(32) . HTML::link(OSCOM::getLink(), $OSCOM_Template->getPageTitle()); ?></h1>

<?php
  if ( $OSCOM_MessageStack->exists() ) {
    echo $OSCOM_MessageStack->get();
  }
?>

<div class="infoBox">
  <h3><?php echo HTML::icon('uninstall.png') . ' ' . $OSCOM_ObjectInfo->getProtected('title'); ?></h3>

  <form name="mUninstall" class="dataForm" action="<?php echo OSCOM::getLink(null, null, 'Uninstall&Process&code=' . $OSCOM_ObjectInfo->get('code')); ?>" method="post">

  <p><?php echo OSCOM::getDef('introduction_uninstall_payment_module'); ?></p>

  <p><?php echo '<b>' . $OSCOM_ObjectInfo->getProtected('title') . '</b>'; ?></p>

  <p><?php echo HTML::button(array('priority' => 'primary', 'icon' => 'trash', 'title' => OSCOM::getDef('button_uninstall'))) . ' ' . HTML::button(array('href' => OSCOM::getLink(), 'priority' => 'secondary', 'icon' => 'close', 'title' => OSCOM::getDef('button_cancel'))); ?></p>

  </form>
</div>
