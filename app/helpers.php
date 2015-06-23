<?php

function role(){
    if(Entrust::hasRole('admin')){
        return 'admin';
    }elseif(Entrust::hasRole('super')) {
        return 'super';
    }elseif(Entrust::hasRole('receptionist')) {
        return 'receptionist';
    }elseif(Entrust::hasRole('pharmaceutical')) {
        return 'pharmaceutical';
    }
}