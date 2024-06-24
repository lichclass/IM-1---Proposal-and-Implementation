<?php

require '../models/ResidentsModel.php';

class ResidentsController{

    public static function total_current_residents(){
        return ResidentsModel::residents_counter();
    }

    public static function create_new_tenant($new_tenant) {
        return ResidentsModel::add_new_tenant($new_tenant);
    }

    public static function residents_table_data(){
        return ResidentsModel::residents_data();
    }
}

?>