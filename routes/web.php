<?php
$this->get('/', 'Site\SiteController@index')->name('home');

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function ()
{
    $this->get('transfer', 'BalanceController@transfer')->name('balance.transfer');
    $this->post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');

    $this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    $this->get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');
    
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('balance', 'BalanceController@index')->name('admin.balance');
    $this->get('/', 'AdminController@index')->name('admin.home');
});

Auth::routes();


