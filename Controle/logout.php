<?php
session_start();

if((isset($_SESSION['FuncionarioLogado'])) || (isset($_SESSION['ClienteLogado']))){
    session_unset();
    session_destroy();
    header("Location:../index.php?PAGINA=principal");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

