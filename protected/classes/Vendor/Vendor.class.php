<?php
Class Vendor{

    public static function loadVendors()
    {
        global $db;
        $sql = "SELECT v.name FROM vendors AS v
                INNER JOIN vendor_country AS vc
                    ON v.id = vc.vendor_id
                INNER JOIN countries AS c
                    ON vc.country_id = c.id
               WHERE c.code_3 = ?
               AND v.active = 1";
        try {
            $stmt = $db->prepare($sql);
            $stmt->execute(array(Session::get('country')->code_3));
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }
}
