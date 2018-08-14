<?php
   
class DOITERP_MyPaymentTerms_Model_MyPaymentTerms extends Mage_Payment_Model_Method_Cc {
    
    protected $_code = 'mypaymentterms';
     
    protected $_isGateway = true;
 
    protected $_canAuthorize = true;
 
    protected $_canCapture = true;

    protected $_canCapturePartial = false;
 
    protected $_canRefund = false;
 
    protected $_canVoid = true;
 
    protected $_canUseInternal = true;
 
    protected $_canUseCheckout = true;
 
    protected $_canUseForMultishipping  = true;
 
    protected $_canSaveCc = false;
 
 }

