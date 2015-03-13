<?php

Class Admin
{
    public static function addVendors()
    {        
        VendorTools::addVendor("Amazon", "http://www.amazon.com");
        VendorTools::addVendor("Barnes & Noble", "http://www.barnesandnoble.com");
    }
    
    
}
