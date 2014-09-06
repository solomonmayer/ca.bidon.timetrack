<?php

class CRM_Timetrack_PseudoConstant extends CRM_Core_PseudoConstant {
  /**
   * Returns a list of statuses for punch invoices.
   * TODO: should be option values.
   */
  static function getInvoiceStatuses() {
    return array(
      0 => ts('New'), // FIXME : this is weird! (kproject had 'new')
      1 => ts('In progress', array('domain' => 'ca.bidon.timetrack')),
      2 => ts('Ordered', array('domain' => 'ca.bidon.timetrack')),
      3 => ts('Invoiced', array('domain' => 'ca.bidon.timetrack')),
      4 => ts('Paid', array('domain' => 'ca.bidon.timetrack')),
      5 => ts('Lost', array('domain' => 'ca.bidon.timetrack')),
      6 => ts('Legacy', array('domain' => 'ca.bidon.timetrack')),
    );
  }
}
