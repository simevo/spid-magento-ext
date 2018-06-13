<?php
class Spid_SSO_Adminhtml_SsobackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('sso/ssobackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Demo Backend"));
	   $this->renderLayout();
    }
}