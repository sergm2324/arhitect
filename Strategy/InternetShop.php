<?php


class InternetShop
{
public function pay (IPay $pay, array $kindofpay) : array {
    return $pay->sell($kindofpay);
}

}